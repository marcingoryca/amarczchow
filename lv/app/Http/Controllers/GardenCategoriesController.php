<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\App\View\View;

class GardenCategoriesController extends Controller
{
    //
    public function index(): View 
    {
        $garden_categories = GardenCategories::all();
        return view('ogrod', compact('garden_categories'));
    }
}
