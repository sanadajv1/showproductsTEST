<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Product;
use App\Models\Cart;

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
        return view ('YearnArt.Home');
    }

    public function Products()
    {
    //pag hindi naka login yung user
        $products=Product::all();
        return view('YearnArt.Products',compact('products'));


    //PAg naka login yung users
        $usertype=Auth::user()->usertype;
        $products=Product::all();
        return view('YearnArt.Products',compact('products'));


    }
    public function product_details($id)
    {
    //pag hindi naka login yung user
    $products=product::find($id);
    return view('YearnArt.Product_Details', compact('products'));


    // PAg naka login yung users
        $usertype=Auth::user()->usertype;
        $products=Product::all();
        return view('YearnArt.Products',compact('products'));
    }

    public function add_cart(Request $request, $id) {

        if(Auth::id()){
            $user=Auth::user();

            $products=product::find($id);

            $cart=new cart;

            $cart->name=$user->name;
            $cart->email=$user->email;
            $cart->phone=$user->phone;
            $cart->address=$user->address;
            $cart->user_id=$user->id;
            $cart->user_id=$user->id;
            $cart->product_name=$products->product_name;
            $cart->price=$products->price;
            $cart->processing_time=$products->processing_time;
            $cart->image=$products->image;
            $cart->product_id=$products->id;
            $cart->quantity=$request->quantity;
            $cart->primaryclr=$request->colorOption;
            $cart->secondaryclr=$request->secondaryColor;
            $cart->size=$request->sizeOption;

            $cart->save();

            return redirect()->back()->with('message', 'Added to Cart');






        }
        else{
            return redirect('login');
        }

    }



}
