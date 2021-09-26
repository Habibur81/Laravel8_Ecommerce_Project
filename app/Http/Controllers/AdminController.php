<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function product(){
        if(Auth::id()){

            if(Auth::user()->usertype == '1'){
              return view('admin.product');
            }
            else{
                return redirect()->back();
            }

        }
        else{
            return redirect('login');
        }
    }

    public function pro_insert( Request $request ){

        $p_insert = new Product;

        $p_insert->title = $request->title;

        $p_insert->price = $request->price;

        $p_insert->description = $request->des;

        $p_insert->quentity = $request->quentity;

        $image = $request->file;

        $imagename = time().'.'.$image->getClientOriginalExtension();
        $request->file->move('ProductImage', $imagename);
        $p_insert->image = $imagename;

        $p_insert->save();

        return redirect()->back()->with('message','Insert Successfully');

    }

    public function showproduct(){

        $data = Product::all();

        return view('admin.showproduct', compact('data'));
    }

    public function deleteproduct($id){

        $deletepro = Product::find($id);

        $deletepro->delete();

        return redirect()->back()->with('message','Product delete successfully');

    }

    public function update($id){

        $update = Product::find($id);

        return view('admin.productupdate', compact('update'));

    }

    public function product_upload( Request $request, $id ){

                $update = Product::find($id);

                $update->title = $request->title;

                $update->price = $request->price;

                $update->description = $request->des;

                $update->quentity = $request->quentity;

                $image = $request->file;
                if($image){
                    $imagename = time().'.'.$image->getClientOriginalExtension();
                    $request->file->move('ProductImage', $imagename);
                    $update->image = $imagename;
                }


                $update->save();

                return redirect()->back()->with('message', 'update successfully');

    }


    public function showorder(){

        $showorder = Order::all();

        return view('admin.showorder', compact('showorder'));

    }

    public function updatestatus($id){

        $orderstatus = Order::find($id);

        $orderstatus->status ='Delivered';

        $orderstatus->save();

        return redirect()->back();


    }




}
