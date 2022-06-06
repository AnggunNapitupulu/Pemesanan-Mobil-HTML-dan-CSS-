<?php
  
namespace App\Http\Controllers;
  
use App\Models\Product;
use Illuminate\Http\Request;

class MobilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mobil = Product::latest()->paginate(6);

        return view('daftarmobil', compact('mobil'));
    }
}
