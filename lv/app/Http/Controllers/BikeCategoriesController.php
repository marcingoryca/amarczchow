<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\BikeCategory;

class BikeCategoriesController extends Controller
{
    //
    public function index(): View
    {
        $bike_categories = BikeCategory::all();
        return view('rowery', compact('bike_categories'));
    }
}
