<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        // $products = Cache::remember('products', 60, function () {
        //     return Product::with('category')->paginate(12);
        // });

        $products = Cache::rememberForever('products'.request('page', 1), function () {
            return Product::with('category')->paginate(12);
        });

        return view("Home", compact("products"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->authorize("create", Product::class);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->authorize("create", Product::class);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Product::findOrFail($id);
        $this->authorize("update", $product);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $product = Product::findOrFail($id);
        $this->authorize("update", $product);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::findOrFail($id);
        $this->authorize("delete", $product);
    }
}
