<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Subcategories;
use App\Models\User;
use App\Services\AddImgToSubCategoryService;
use App\Services\AddSubCategoryService;
use App\Services\ChangeCategoryOrderService;
use App\Services\ChangeSubCategoriesOrderService;
use App\Services\DeleteCategoryService;
use App\Services\DeleteSubCategoryService;
use App\Services\GroupCategoryService;
use App\Services\SoloCategoryService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AdminController
{
    private $soloCategoryService;
    private $groupCategoryService;
    private $addImgToSubCategoryService;
    private $addSubCategoryService;
    private $deleteSubCategoryService;
    private $deleteCategoryService;
    private $changeCategoryOrderService;
    private $changeSubCategoryOrderService;

    public function __construct(
        SoloCategoryService $soloCategoryService,
        GroupCategoryService $groupCategoryService,
        AddImgToSubCategoryService $addImgToSubCategoryService,
        AddSubCategoryService $addSubCategoryService,
        DeleteSubCategoryService $deleteSubCategoryService,
        DeleteCategoryService $deleteCategoryService,
        ChangeCategoryOrderService $changeCategoryOrderService,
        ChangeSubCategoriesOrderService $changeSubCategoryOrderService
    ) {
        $this->soloCategoryService = $soloCategoryService;
        $this->groupCategoryService = $groupCategoryService;
        $this->addImgToSubCategoryService = $addImgToSubCategoryService;
        $this->addSubCategoryService = $addSubCategoryService;
        $this->deleteSubCategoryService = $deleteSubCategoryService;
        $this->deleteCategoryService = $deleteCategoryService;
        $this->changeCategoryOrderService = $changeCategoryOrderService;
        $this->changeSubCategoryOrderService = $changeSubCategoryOrderService;
    }

    public function index()
    {
        $subCategories = Subcategories::all();
        $categories = Categories::all();

        return view('mainContent.admin', ['subcategories' => $subCategories, 'categories' => $categories]);
    }

    public function login(Request $request)
    {
        $loginForm = $request->only('login', 'password');
        if (Auth::attempt(['login' => $loginForm['login'], 'password' => $loginForm['password']])) {
            $request->session()->regenerate();
            return redirect()->route('admin');
        }

        return redirect()->route('login');
    }

    public function logout()
    {
        Auth::logout();

        return redirect('login');
    }


    public function addCategory(Request $request)
    {
        $countFields = count($request->file()) - 1;

        if ($countFields) {
            $this->groupCategoryService->create($request, $countFields);
        } else {
            $this->soloCategoryService->create($request);
        }


        return redirect()->route('admin');
    }

    public function addImg(Request $request)
    {
        $this->addImgToSubCategoryService->create($request);


        return redirect()->route('admin');
    }

    public function addSubcategory(Request $request)
    {
        $this->addSubCategoryService->create($request);

        return redirect()->route('admin');
    }

    public function deleteSubCategory(Request $request)
    {
        $this->deleteSubCategoryService->delete($request);

        return redirect()->route('admin');
    }

    public function deleteCategory(Request $request)
    {
        $this->deleteCategoryService->delete($request);

        return redirect()->route('admin');
    }

    public function changeCategoryOrder(Request $request)
    {
        $this->changeCategoryOrderService->edit($request);

        return redirect()->route('admin');
    }

    public function changeSubCategoryOrder(Request $request)
    {
        $this->changeSubCategoryOrderService->edit($request);

        return redirect()->route('admin');
    }
}
