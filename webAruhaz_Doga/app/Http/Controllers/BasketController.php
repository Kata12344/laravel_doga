<?php

namespace App\Http\Controllers;

use App\Models\Basket;
use Illuminate\Http\Request;

class BasketController extends Controller
{
    /*GET:*/
public function index()
{
$tasks = response()->json (Basket::all()); response()->json(Basket::all()); return $tasks;
} public function show($id)
{
$tasks = response()->json (Basket::find($id)); return $tasks;
}

/*DELETE, POST és PUT:*/
public function destroy($id)
{
Task::find($id) ->delete();
//return redirect('/task/list');
} public function store (Request $request)
{
$task= new Basket();
$task->title= $request->title;
$task->description = $request->description;
$task->end_date = $request->end_date;
$task->user_id $request->user_id; = $task->status $request->status;

$task->save();
}
public function update (Request $request, $id)
{
$task= Basket::find($id);
$task->title= $request->title;
$task->description = $request->description; $task->end_date $request->end_date; =
$task->user_id $request->user_id; =
$task->status $request->status; =
$task->save();
}


/*public function newView()
{
$users User::all(); return view('task.new', ['users' => $users]);
}
public function editView($id)
{
$users = User::all();
$task= Task::find($id);
return view('task.edit', ['users' => $users, 'task' => $task]);
}
public function listView()
{
$tasks Task::all(); =
return view( 'task.list', ['tasks' => $tasks]);
}*/

}
