<?php

namespace App\Http\Controllers;

use Inertia\Inertia;

class ProductController extends Controller
{
    public function index()
    {
        return Inertia::render('Events/Index');
    }
    public function create()
    {
        return Inertia::render('Events/Create', [
            'title' => "Create new Events",
        ]);
    }
    



    // method for external website
    public function ext_productA_details()
    { 
        return Inertia::render('ProductADetail',['product_color' => '#296fb6']);
    }
    public function ext_productB_details()
    {
        return Inertia::render('ProductBDetail',['product_color' => '#00993f']);
    }
    public function ext_productC_details()
    {
        return Inertia::render('ProductCDetail',['product_color' => '#ea5618']);
    }
}
