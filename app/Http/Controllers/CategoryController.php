<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CategoryProduct;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data_category = CategoryProduct::paginate(5);

        return view('pages.category.show', compact('data_category'));
    }
}