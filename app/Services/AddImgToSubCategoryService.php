<?php

namespace App\Services;

use App\Models\Categories;
use App\Models\Files;
use App\Models\Subcategories;
use Illuminate\Http\Request;

class AddImgToSubCategoryService
{
    public function create(Request $request)
    {
        $subcategory = Subcategories::all()->find($request->get('subcategory-id'));

        $category = Categories::all()->find($subcategory->categories_id);


        foreach ($request->file('files') as $file) {
            $filePath = $file->store('img_src/'.$category->name.'/'.$subcategory->name, 'customPublic');


            $files = new Files();
            $files->path = $filePath;
            $files->subcategories_id = $subcategory->id;
            $files->save();
        }
    }
}
