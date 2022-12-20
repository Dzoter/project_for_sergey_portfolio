<?php

namespace App\Services;
use App\Models\Categories;
use Illuminate\Http\Request;
class ChangeCategoryOrderService
{
    public function edit(Request $request)
    {

        $categories = Categories::all();

        foreach ($categories as $category){
            $newCategoryOrder = $request->get($category->id);
            $category->order = $newCategoryOrder;
            $category->save();
        }

    }
}
