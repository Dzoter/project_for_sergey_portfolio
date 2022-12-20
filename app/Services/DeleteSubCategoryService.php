<?php

namespace App\Services;

use App\Models\Categories;
use App\Models\Files;
use App\Models\Subcategories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DeleteSubCategoryService
{
    public function delete(Request $request)
    {
        $subcategories = Subcategories::all()->find($request->get('subcategory-id'));
        $categories = Categories::all()->find($subcategories->categories_id);



        $filesExist = Files::where('subcategories_id', $subcategories->id)->exists();
        if ($filesExist){
            $files = Files::all()->where('subcategories_id', $subcategories->id);
            foreach ($files as $file) {
                Storage::disk('customPublic')->delete($file->path);
                $file->delete();
            }

        }


        Storage::disk('customPublic')->delete($subcategories->path);

        Storage::disk('customPublic')->deleteDirectory('img_src/'.$categories->name.'/'.$subcategories->name.'/');
        $subcategories->delete();

    }
}
