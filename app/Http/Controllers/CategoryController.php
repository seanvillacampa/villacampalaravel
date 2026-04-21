<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;


class CategoryController extends Controller
{
    //Display all products
    public function catindex()
    {

$categories = Category::all();

return view('category.catindex', [
    'cats' => $categories
]);

    }
    


    public function catstore(Request $request)
    {
        Category::create([
            'category_name' => $request->c_category_name
        ]);
        return redirect('/category');
    }

    public function catedit($id)
    {

    $category = Category::findOrFail($id);

    return view('category.catedit', [ 
    'cat' => $category
]);
    }

    public function catupdate(Request $request, $id)
    {
        $category = Category::findOrFail($id);

        $category ->update ([
        'category_name' => $request->c_category_name,
        
        

        ]);


        return redirect('/category');
    }

    public function catdestroy($id)
    {
        $category = Category::findOrFail($id);

        $category ->delete();

       return redirect('/category');
    }



}

