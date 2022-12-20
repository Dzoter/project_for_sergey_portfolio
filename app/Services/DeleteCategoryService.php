<?php

namespace App\Services;

use App\Models\Categories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DeleteCategoryService
{
    public function delete(Request $request)
    {
        $categories = Categories::all()->find($request->get('category-id'));

        Storage::disk('customPublic')->delete($categories->path);

        Storage::disk('customPublic')->deleteDirectory('img_src/'.$categories->name.'/');

        $categories->delete();
    }
}
