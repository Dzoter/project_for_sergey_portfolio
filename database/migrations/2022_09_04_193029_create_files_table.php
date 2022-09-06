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
        Schema::create('files', function (Blueprint $table) {
            $table->id();
            $table->string('path', '64');
            $table->bigInteger('categories_id')->unsigned();
            $table->timestamps();
        });
        Schema::table('files', function (Blueprint $table) {
            $table->foreign('categories_id', 'files_to_categories_id')->references('id')->on('categories');
        });

        $basepath = public_path('img_src');

        $filelist = scandir($basepath);
        $category = 1;
        foreach ($filelist as $filename) {
            if ($filename !== '.' && $filename !== '..') {

                $dirElem = scandir($basepath.'/'.$filename);
                foreach ($dirElem as $elem) {
                    if ($elem !== '.' && $elem !== '..') {
                        DB::table('files')->insert([
                            ['path' => 'img_src/'.$filename.'/'.$elem, 'categories_id'=>$category],
                        ]);
                    }
                }
                ++$category;
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
