<?php

namespace App\Http\Controllers;

use App\Models\Basket;
use App\Models\User;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = response()->json(Product::all());
        return $products;
    }
    public function show($id)
    {
        $Product = response()->json(Product::find($id));
        return $Product;
    }
    public function destroy($id)
    {
        Product::find($id)->delete();
        //return redirect('/copy/list'); //átírányít a törlés után vissza a listázó oldalra
    }
    public function store(Request $request)
    {
        $Product = new Product();
        $Product->item_id = $request->item_id;
        $Product->type_id = $request->type_id;
        $Product->date = $request->date;
        $Product->save();
        //return redirect('/copy/list'); //átírányít a hozzáadás után vissza a listázó oldalra
    }
    public function update(Request $request, $id)
    {
        $Product = Product::find($id);
        $Product->item_id = $request->item_id;
        $Product->type_id = $request->type_id;
        $Product->date = $request->date;
        $Product->save();
        //return redirect('/copy/list'); //átírányít a módosítás után vissza a listázó oldalra
    }

    //views
    public function newView()
    {
        //új rekord rögzítése
        $users = User::all();
        $products = Product::all();
        return view('product.new', ['users' => $users, 'products' => $products]);
    }
    public function editView($id)
    {
        $users = User::all();
        $products = Product::all();
        $basket = Basket::find($id);
        return view('product.edit', ['users' => $users, 'products' => $products, 'basket' => $basket]);
    }
    public function listView()
    {
        $products = Product::all();
        return view('product.list', ['products' => $products]);
    }
}
