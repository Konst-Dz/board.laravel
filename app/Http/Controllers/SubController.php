<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Http\Request;

class SubController extends Controller
{

    public function listings(Category $category)
    {
        $category->load('subcategory');
        $sub = $category->subcategory()->withCount('ad')->get()->load('category');
        $ads = $category->ad()->with(['subcategory','subcategory.category'])->get();
        return view('sub',['subcategories'=>$sub,'category' => $category,'ads' => $ads]);
    }

    public function show(Category $category,Subcategory $subcategory)
    {
        $ads = $subcategory->ad;
        return view('subcategory',['category'=>$category,'subcategory'=>$subcategory,'ads'=>$ads]);
    }
}
