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
    public function service_details()
    { 
        return Inertia::render('ServiceDetails');
    }
     
}
