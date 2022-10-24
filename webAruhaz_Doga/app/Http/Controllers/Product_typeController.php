<?php

namespace App\Http\Controllers;

use App\Models\Product_type;
use App\Models\User;
use Illuminate\Http\Request;

class Product_typeController extends Controller
{
    public function index()
    {
        $product_types = response()->json(Product_type::all());
        return $product_types;
    }
    public function show($id)
    {
        $product_type = response()->json(Product_type::find($id));
        return $product_type;
    }
    public function destroy($id)
    {
        Product_type::find($id)->delete();
        //return redirect('/copy/list'); //átírányít a törlés után vissza a listázó oldalra
    }
    public function store(Request $request)
    {
        $product_type = new Product_type();
        $product_type->type_id = $request->type_id;
        $product_type->name = $request->name;
        $product_type->description = $request->description;
        $product_type->cost = $request->cost;
        $product_type->save();
        //return redirect('/copy/list'); //átírányít a hozzáadás után vissza a listázó oldalra
    }
    public function update(Request $request, $id)
    {
        $product_type = Product_type::find($id);
        $product_type->type_id = $request->type_id;
        $product_type->name = $request->name;
        $product_type->description = $request->description;
        $product_type->cost = $request->cost;
        $product_type->save();
        //return redirect('/copy/list'); //átírányít a módosítás után vissza a listázó oldalra
    }

    //views
    public function newView()
    {
        //új rekord rögzítése
        $users = User::all();
        $product_types = Product_type::all();
        return view('Product_type.new', ['users' => $users, 'product_types' => $product_types]);
    }

    // public function editView($id)
    // {
    //     $users = User::all();
    //     $product_types = Product_type::all();
    //     $basket = Basket::find($id);
    //     return view('Product_type.edit', ['users' => $users, 'products' => $product_types, 'basket' => $basket]);
    // }

    public function listView()
    {
        $product_types = Product_type::all();
        return view('Product_type.list', ['product_types' => $product_types]);
    }
}
