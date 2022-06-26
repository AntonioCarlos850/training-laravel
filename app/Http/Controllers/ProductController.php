<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('product.index',[
            "products"=>Product::take(12)->orderByDesc('created_at')->get()
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('product.show',['product'=>$product]);
    }

    public function search(){
        return view('product.search',[
            "products"=>Product::latest()->filter(request(['category','q']))->paginate(15)
        ]);
    }
}
