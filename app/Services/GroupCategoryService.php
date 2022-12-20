<?php

namespace App\Services;

use App\Models\Categories;
use App\Models\Subcategories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GroupCategoryService
{
    /**
     * Исполнение
     *
     * @param Request $request Реквест с данными из формы
     */
    public function create(Request $request,$fieldsQuantity)
    {
        $categoryId = $this->createCategory($request);
        $this->createSubCategory($request,$categoryId,$fieldsQuantity);
    }


    /**
     * @param Request $request Реквест с данными из формы
     * @param int     $categoryId Id категории для саб категории
     */
    private function createSubCategory(Request $request, int $categoryId,int $fieldsQuantity)
    {
        $order = 1;
        //создание под категорий
        for ($i=1; $i<=$fieldsQuantity; $i++){

            $previewForSubCategory = $request->file('sub-category-file-'.$i);
            $pathOfPreviewForSubCategory = $previewForSubCategory->store('img_src/'.$request->get('categoryName'),'customPublic');

            $subCategory = new Subcategories();
            $subCategory->path = $pathOfPreviewForSubCategory;
            $subCategory->name = $request->request->get('sub-category-'.$i);
            $subCategory->order = $order;
            $subCategory->categories_id = $categoryId;
            $subCategory->save();


            Storage::disk('customPublic')->makeDirectory('img_src/'.$request->request->get('categoryName').'/'.$request->request->get('sub-category-'.$i));
            $order++;



        }







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

        $category = new Categories();

        $category->path = $pathOfPreviewForCategory;
        $category->name = $request->request->get('categoryName');
        $category->order = $lastCategory->order + 1;
        $category->save();

        Storage::disk('customPublic')->makeDirectory('img_src/'.$request->request->get('categoryName'));



        return $category->id;

    }

}
