<?php

namespace App\Services;
use App\Models\Subcategories;
use Illuminate\Http\Request;
class ChangeSubCategoriesOrderService
{
    public function edit(Request $request)
    {
        $subCategories = Subcategories::all();
        foreach ($subCategories as $subCategory){
            $newSubCategoryOrder = $request->get($subCategory->id);
            $subCategory->order = $newSubCategoryOrder;
            $subCategory->save();
        }

    }
}
