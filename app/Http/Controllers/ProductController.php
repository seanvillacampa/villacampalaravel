<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;



class ProductController extends Controller
{
    //Display all products
    public function index()
    {

$products = Product::all();
$categories = Category::all();

return view('products.index', [
    'items' => $products,
    'cats' => $categories 
]);

    }



    public function store(Request $request)
    {
        Product::create([
            'name' => $request->n_name,
            'price' => $request->n_price,
            'category_id' => $request->category_id
        ]);
        return redirect('/products');
    }

    public function edit($id)
    {

    $product = Product::findOrFail($id);
    $category = Category::all();

    return view('products.edit', [ 
    'item' => $product,
    'cat' => $category
]);
    }

    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        $product ->update ([
        'name' => $request->n_name,
        'price' => $request->n_price,
        'category_id' => $request->category_id 
        

        ]);


        return redirect('/products');
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);

        $product ->delete();

       return redirect('/products');
    }



}
