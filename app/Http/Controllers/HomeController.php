<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Product;

class HomeController extends Controller
{
    public function home()
    {
        $usertype=Auth::user()->usertype;

        if($usertype=='1')
        {
            return view('admin.home');
        }
        else
        {
            return view('home.userpage');
        }
    }

    public function index()
    {   
        $products=Product::all();
        return view('YearnArt.Products',compact('products'));
    }
}
