<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $products = [];
        for ($i = 1; $i <= 1000; $i++) {
            array_push($products, [
                'sku' => Str::random(8),
                'name' => "Article $i",
                'description' => "Cet article $i de qualité supérieure vous offrira un confort exceptionnel lors de vos séances d'aquaponey 🦄",
                'price' => rand(1, 1000),
                'rate' => rand(1, 5),
                'stock' => rand(0, 100)
            ]);
        }

        Product::insert($products);
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}