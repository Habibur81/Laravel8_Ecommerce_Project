<?php

namespace App\Http\Controllers;
use App\Models\Order;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\User;


class HomeController extends Controller
{
    public function redirect(){

        $user = Auth::user()->usertype;

        if( $user == '1'){

            return view('admin.home');

        }
        else{

            $data = Product::paginate(6);

            $user = auth()->user();

            $count = Cart::where('phone', $user->phone )->count();

            return view('user.home', compact('data', 'count'));
        }

    }

    public function index(){

        if(Auth::id()){

            return redirect('redirect'); //here return (function)redirect( route'redirect');
            //ekhane mulot redirect function modhe redirect route call kara hoyecha.
        }
        else{

            $data = Product::paginate(6);

            return view('user.home', compact('data'));

        }



    }

    public function search( Request $request ){

        $search = $request->search;

        if($search==''){
            $user = auth()->user();

            $count = Cart::where('phone', $user->phone )->count();

            $data = Product::paginate(6);

            return view('user.home', compact('data', 'count'));

        }
        elseif($search==''){

            $data = Product::paginate(6);

            return view('user.home', compact('data', 'count'));

        }
        elseif(Auth::id()){

            $data = Product::paginate(6);

            $user = auth()->user();

            $count = Cart::where('phone', $user->phone )->count();

            $data = Product::where('title','Like','%'.$search.'%')->get();

            return view('user.home', compact('data', 'count'));
        }
        else{

            $data = Product::paginate(6);

            $data = Product::where('title','Like','%'.$search.'%')->get();

            return view('user.home', compact('data'));
        }


    }

    public function ourproduct(){

        if(Auth::id()){

            $user = auth()->user();

            $count = Cart::where('phone', $user->phone )->count();

            $data = Product::paginate(6);

            return view('user.ourproduct', compact('data', 'count'));

        }

        else{

            $data = Product::paginate(6);

            return view('user.ourproduct', compact('data'));
        }

    }

    public function addcart( Request $request, $id){

            if( Auth::id() ){

                $user = Auth()->user();

                $product = Product::find($id);

                   $price = $product->price;
                   $quentity = $request->quentity;
                   $totalprice = ($price * $quentity);

                $cart = new Cart;

                $cart->name = $user->name;

                $cart->phone = $user->phone;

                $cart->address = $user->address;

                $cart->product_title = $product->title;

                $cart->price = $totalprice;

                $cart->quentity = $quentity;

                $cart->save();


                return redirect()->back()->with('message', 'Successfuly Add You Cart');

            }
            else{

                return redirect('login');

            }

    }


    public function showcart(){

            $user = auth()->user();

            $count = Cart::where('phone', $user->phone )->count();

            $cart = Cart::where('phone', $user->phone)->get();

            return view('user.showcart', compact('count', 'cart') );

    }

    public function deletecart($id){

            $decart = Cart::find($id);

            $decart->delete();

            return redirect()->back()->with('message', 'Delete Successfully');

    }

    public function confirmorder( Request $request ){

        $user = auth()->user();

       $name = $user->name;

       $phone = $user->phone;

       $address = $user->address;

       foreach( $request->productname as $key=>$productname ){

        $order = new Order;

        $order->product_title = $request->productname[$key];

        $order->quentity = $request->quentity[$key];

        $order->price = $request->price[$key];

        $order->name = $name;

        $order->phone = $phone;

        $order->address = $address;

        $order->status = " Not Delivered ";

        $order->save();

       }

       DB::table('carts')->where('phone', $phone)->delete();


       return redirect()->back()->with('message', ' Product Ordered Successfuly');;


    }




}
