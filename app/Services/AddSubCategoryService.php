<?php

namespace App\Services;

use App\Models\Categories;
use App\Models\Subcategories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AddSubCategoryService
{
    /**
     * Исполнение
     *
     * @param Request $request Реквест с данными из формы
     */
    public function create(Request $request)
    {
        $category = Categories::all()->find($request->get('category-id'));

        $subCategoriesLast = Subcategories::where('categories_id', $category->id)->orderBy('order')->get()->last();

        if (is_null($subCategoriesLast)) {
            $order = 1;
        } else{
            $order = $subCategoriesLast->order + 1;
        }


        $previewPath = $request->file('files')->store('img_src/'.$category->name, 'customPublic');

        Storage::disk('customPublic')->makeDirectory(
            'img_src/'.$category->name.'/'.$request->request->get('sub-category-name')
        );

        $subCategory = new Subcategories();
        $subCategory->path = $previewPath;
        $subCategory->name = $request->request->get('sub-category-name');
        $subCategory->order = $order;
        $subCategory->categories_id = $category->id;
        $subCategory->save();
    }
}
