<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    function showCategory(){
        return view('category');
    }

    function showFoodBeverage(){
        return view('category.food_beverage');
    }

    function showBeautyHealth(){
        return view('category.beauty_health');
    }

    function showHomeCare(){
        return view('category.home_care');
    }

    function showBabyKid(){
        return view('category.baby_kid');
    }
}
