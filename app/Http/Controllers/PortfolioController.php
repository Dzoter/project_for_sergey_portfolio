<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Files;
use App\Models\Subcategories;
use Illuminate\Routing\Controller;

class PortfolioController extends Controller
{

    public function showCategories($category)
    {

        $categoryObj = Categories::where('name','=', $category)->first();
        $subCategoryObj = Subcategories::where('name','=',$category)->first();

        $files = [];
        $subCategories = [];

        if (!is_null($categoryObj)) {
            $subCategories = Subcategories::where('categories_id', $categoryObj->id)->orderBy('order','ASC')->get();


            if (count($subCategories) > 1) {
                return view('mainContent.products', [
                    'files'         => $files,
                    'subCategories' => $subCategories,
                    'categories'    => $categoryObj,
                    'categoriesList'=> Categories::all(),
                ]);
            }

            $sub = $subCategories->first();

            $files = Files::where('subcategories_id', $sub->id)->paginate(12);

            return view('mainContent.products', [
                'files'         => $files,
                'subCategories' => $subCategories,
                'categories'    => $categoryObj,
                'categoriesList'=> Categories::all(),
            ]);
        }

        if (!is_null($subCategoryObj)) {

            $files = Files::where('subcategories_id', $subCategoryObj->id)->paginate(12);


            return view('mainContent.products', [
                'files'         => $files,
                'subCategories' => $subCategories,
                'categories'    => $subCategoryObj,
                'categoriesList'=> Categories::all(),
            ]);
        }

        return view('mainContent.index');
    }



    public function index()
    {
        return view('mainContent.index', ['categoriesList' => Categories::orderBy('order','ASC')->get()]);
    }
}
