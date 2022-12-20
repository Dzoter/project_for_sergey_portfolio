<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('path', '256');
            $table->string('name');
            $table->integer('order');
            $table->timestamps();

        });

        Schema::create('subcategories', function (Blueprint $table) {
            $table->id();
            $table->string('path', '256');
            $table->string('name');
            $table->integer('order');
            $table->bigInteger('categories_id')->unsigned();
            $table->timestamps();
        });

        Schema::create('files', function (Blueprint $table) {
            $table->id();
            $table->string('path', '256');
            $table->bigInteger('subcategories_id')->unsigned();
            $table->timestamps();
        });




        Schema::table('files', function (Blueprint $table) {
            $table->foreign('subcategories_id', 'files_to_subcategories_id')->references('id')->on('subcategories');
        });

        Schema::table('subcategories', function (Blueprint $table) {
            $table->foreign('categories_id', 'files_to_category_id')->references('id')->on('categories');
        });




        $basepath = public_path('img_src');

        $dirList= scandir($basepath);


        $categoriesId = 1;
        $subCategoriesId = 1;

        foreach ($dirList as $dirName) {
            if ($dirName !== '.' && $dirName !== '..') {

                $dirElem = scandir($basepath.'/'.$dirName);

                DB::table('categories')->insert([
                    ['path' => 'preview/'.$dirName.'.jpg', 'name'=>$dirName,'order'=>$categoriesId],
                ]);

                $order = 1;
                foreach ($dirElem as $category){
                    if ($category !== '.' && $category !== '..') {
                        if (is_dir($basepath.'/'.$dirName.'/'.$category)){

                            DB::table('subcategories')->insert([
                                ['path' => 'img_src/'.$dirName.'/'.$category.'.jpg', 'name'=>$category,
                                 'categories_id'=>$categoriesId,'order'=>$order],
                            ]);

                            $dirFiles = scandir($basepath.'/'.$dirName.'/'.$category);


                            foreach ($dirFiles as $file){
                                if ($file !== '.' && $file !== '..') {
                                    DB::table('files')->insert([
                                        ['path' => 'img_src/'.$dirName.'/'.$category.'/'.$file,
                                         'subcategories_id'=>$subCategoriesId],
                                    ]);
                                }

                            }
                            $subCategoriesId++;
                            $order++;
                        }

                    }


                }

                $categoriesId++;

            }

        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('files');
    }
}
