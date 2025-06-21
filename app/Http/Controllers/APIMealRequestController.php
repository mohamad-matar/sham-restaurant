<?php

namespace App\Http\Controllers;

use App\Models\Meal;
use App\Http\Controllers\Controller;
use App\Models\MealRequest;
use Illuminate\Http\Request;

class APIMealRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $meals = Meal::all();
        return $meals;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        MealRequest::create([$request]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Meal $meal)
    {
        //
    }
    
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Meal $meal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Meal $meal)
    {
        //
    }
}
