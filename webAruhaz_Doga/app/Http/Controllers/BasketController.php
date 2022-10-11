<?php

namespace App\Http\Controllers;

use App\Models\Basket;
use App\Models\User;
use App\Models\Product;
use App\Models\Product_type;
use Illuminate\Http\Request;

class BasketController extends Controller
{
    /*GET:*/
public function index()
{
$baskets = response()->json (Basket::all()); response()->json(Basket::all()); return $baskets;
} public function show($id)
{
$baskets = response()->json (Basket::find($id)); return $baskets;
}

/*DELETE, POST és PUT:*/
public function destroy($id)
{
Basket::find($id) ->delete();
//return redirect('/task/list');
} public function store (Request $request)
{
$basket= new Basket();
$basket->item_id = $request->item_id;
$basket->user_id = $request->user_id;
$basket->save();
}
public function update (Request $request, $id)
{
$basket= Basket::find($id);
$basket->item_id = $request->item_id;
$basket->user_id = $request->user_id; 
$basket->save();
}

public function newView()
{
    //új rekord rögzítése
    $users = User::all();
    $baskets = Basket::all();
    return view('product.new', ['users' => $users, 'products' => $baskets]);
}
public function editView($id)
{
    $users = User::all();
    $baskets = Basket::all();
    $product = Product::find($id);
    return view('product.edit', ['users' => $users, 'products' => $baskets, 'basket' => $product]);
}
public function listView()
{
    $baskets = Basket::all();
    return view('product.list', ['products' => $baskets]);
}

}
