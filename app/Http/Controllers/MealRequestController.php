<?php

namespace App\Http\Controllers;

use App\Models\Meal;
use App\Http\Controllers\Controller;
use App\Models\MealRequest;

class MealRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mealRequests = MealRequest::all();
        return view('meal-requests' , compact('mealRequests'));
    } 
}
