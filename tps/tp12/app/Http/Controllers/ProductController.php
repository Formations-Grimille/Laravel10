<?php

namespace App\Http\Controllers;

use App\Http\Requests\RequestCreateProduct;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function averageRate()
    {
        $avg = Product::all()->avg('rate');

        return $avg;
    }
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::with('productCategory')->get();

        return view('products.index', ['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RequestCreateProduct $request)
    {
        $product = new Product($request->all());
        $product->save();

        return redirect()->route("products.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // $product = Product::findOrFail($id); // { name: "PC Asus 46ADZ0392", price: 1200, category_id: 8 } 
        // $parentCategories = []; // [] de catégories

        // $category = $product->productCategory; // PC Gamer

        // // Parent Categories : [ "PC Gamer" , Ordinateurs, Informatique]
        // while ($category) {
        //     $parentCategories[] = $category; // Ajoute dans parentCategories
        //     $category = $category->parent; // Informatique
        // }

        return view('products.show');
    }

    public function search(string $search) {
        $products = Product::where('name', 'LIKE', "%$search%")
            ->orWhere('description', 'LIKE', "%$search%")
            ->get();
        
        return $products;
    }

    public function specificSearch() {
        $products = Product::where('rate', '>', 2)->orderBy('rate', 'DESC')->paginate(2);

        return $products;
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
}
