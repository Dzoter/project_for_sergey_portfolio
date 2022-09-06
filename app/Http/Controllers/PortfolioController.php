<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Files;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class PortfolioController extends Controller
{

    public function showCategories($category)
    {

        $categoryObj = Categories::where('categories',$category)->first();

        if (!is_null($categoryObj)){

            $files = Files::where('categories_id',$categoryObj->id)->get();


            return view('mainContent.products',['files'=>$files,'categoryObj'=>$categoryObj]);
        }

        return view('mainContent.index');
    }
}
