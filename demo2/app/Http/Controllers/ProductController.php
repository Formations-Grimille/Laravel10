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
        $products = Product::all();

        return $products;
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
        for ($i = 1; $i <= 10; $i++) {
            $product = new Product([
                'sku' => Str::random(8),
                'name' => "Article $i",
                'description' => "Cet article $i de qualité supérieure vous offrira un confort exceptionnel lors de vos séances d'aquaponey 🦄",
                'price' => rand(1, 1000),
                'rate' => rand(1, 5),
                'stock' => rand(0, 100)
            ]);

            $product->save();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = Product::findOrFail($id);
        $category = $product->productCategory;

        $parentCategories = [];

        while ($category) {
            $parentCategories[] = $category->name;
            $category = $category->parent;
        }

        return array_reverse($parentCategories);

        // PC Gamer = PC Dell > Ordinateurs > Informatique // 10
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
        $product = Product::findOrFail($id);
        $product->price = 30000;
        $product->save();

        return $product;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return $product;
    }

    public function search(string $search) {
        $products = Product::where('name', 'LIKE', "%$search%")
            ->orWhere('description', 'LIKE', "%$search%")
            ->get();

        return $products;
    }

    public function specificSearch() {
        $products = Product::where('rate', '>', 6)
            ->orderBy('rate', 'DESC')
            ->paginate(2);

        return $products;
    }
}
