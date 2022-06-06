<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Product;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mobil = Product::latest(3);
        return view('home', compact('mobil'));
    }
}
