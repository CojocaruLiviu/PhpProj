<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use function Laravel\Prompts\alert;

class ProductController extends Controller
{
    public function index()
    {
        $product = Product::all();
        return view('index',['product' => $product])->with('success', 'Added successful');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'age' => 'required',
            'about' => 'required'
        ]);

        $review = new Product();
        $review->name = $request->input('name');
        $review->age = $request->input('age');
        $review->about = $request->input('about');

        $review -> save();
//        Product::create($data);

        return redirect(route('product.index'))->with('success', 'Added successful');

    }

//    public function edit(Product $product)
//    {
////        dd($product);
//        return view('products.edit',['product' => $product]);
//    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'name' => 'required',
            'age' => 'required',
            'about' => 'required'
        ]);

        $product = Product::findOrFail($id);
        $product->update($data);

        return redirect()->back()->with('success', 'Product updated successfully');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect(route('product.index'))->with('success','Deleted succeful');
    }

}
