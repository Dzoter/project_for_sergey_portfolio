<?php

namespace App\Services;

use App\Models\Categories;
use App\Models\Subcategories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SoloCategoryService
{
    /**
     * Исполнение
     *
     * @param Request $request Реквест с данными из формы
     */
    public function create(Request $request)
    {
        $categoryId = $this->createCategory($request);
        $this->createSubCategory($request,$categoryId);
    }

    /**
     * Создание саб категории
     * @param Request $request Реквест с данными из формы
     * @param int     $categoryId Id категории для саб категории
     */
    private function createSubCategory(Request $request, int $categoryId)
    {
        //создание под категории

        $previewForSubCategory = $request->file('filename');
        $pathOfPreviewForSubCategory = $previewForSubCategory->store('img_src/'.$request->get('categoryName'),'customPublic');

        $subCategory = new Subcategories();
        $subCategory->path = $pathOfPreviewForSubCategory;
        $subCategory->name = $request->request->get('categoryName');
        $subCategory->order = 1;
        $subCategory->categories_id = $categoryId;
        $subCategory->save();


    }


    /**
     * Создание категории
     * @param Request $request Реквест с данными из формы
     *
     * @return mixed id категории в бд
     */
    private function createCategory(Request $request)
    {

        //создания новой категории

        $previewForCategory = $request->file('filename');

        $pathOfPreviewForCategory = $previewForCategory->store('preview','customPublic');

        $lastCategory = Categories::all()->last();
        if (is_null($lastCategory)){
            $order = 1;
        } else{
            $order = $lastCategory->order + 1;
        }
        $category = new Categories();

        $category->path = $pathOfPreviewForCategory;
        $category->name = $request->request->get('categoryName');
        $category->order = $order;
        $category->save();

        Storage::disk('customPublic')->makeDirectory('img_src/'.$request->request->get('categoryName'));

        Storage::disk('customPublic')->makeDirectory('img_src/'.$request->request->get('categoryName').'/'.$request->request->get('categoryName'));

        return $category->id;

    }
}
