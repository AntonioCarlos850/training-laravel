<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use Illuminate\Support\Str;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.index',[
            "products" => Product::latest()->paginate(10),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create',[
            "categories" => Category::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductRequest $request)
    {
        $attributes = $request->validated();
        $path = $request->file("image")->store("/products","public");

        Product::create([
            "name" => $attributes["name"],
            "value" => $attributes["value"],
            "description" => $attributes["description"],
            "category_id" => $attributes["category"],
            "slug" => Str::slug($attributes["name"]),
            "image" => "/storage/".$path,
        ]);

        return back()->withSuccess("Produto criado com sucesso");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(int $id)
    {
        return view("admin.edit", [
            "product" => Product::find($id),
            "categories" => Category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductRequest $request, $id)
    {
        $attributes = $request->validated();        

        $produto = Product::find($id);
        $produto->update([
            "name" => $attributes["name"],
            "value" => $attributes["value"],
            "description" => $attributes["description"],
            "category_id" => $attributes["category"],
            "slug" => Str::slug($attributes["name"]),
        ]);

        if($request->file("image")){
            Storage::disk("public")->delete(Str::remove("/storage",$produto->image));
            $produto->image = "/storage/".$request->file("image")->store("/products","public");
            $produto->save();
        }

        return back()->withSuccess("Produto editado com sucesso");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
