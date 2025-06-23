<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\ServiceRequest;
use Illuminate\Http\Request;

class APIController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function services()
    {
        $services = Service::select('id' , 'name_ar' , 'name_en' , 'price')->get();
        return $services;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function request(Request $request)
    {
        ServiceRequest::create($request->all());       
        return 1;
    }
}
