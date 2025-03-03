<?php

namespace App\Http\Controllers;

use Inertia\Inertia;

class ServiceController extends Controller
{
    public function index()
    {
        
    }
    public function create()
    {
         
    }
    



    // method for external website
    public function service_app_details()
    { 
        return Inertia::render('ServiceAppDetails');
    }
    public function service_web_details()
    { 
        return Inertia::render('ServiceWebDetails');
    }
     
}
