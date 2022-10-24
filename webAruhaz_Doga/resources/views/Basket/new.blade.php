
<form action="/api/baskets" method="post">
{{csrf_field()}}

<select name="item_id" placeholder="Item ID">
@foreach ($products as $product) <option value="{{$product->item_id}}">{{$product->item_id}}</option>
@endforeach 
</select>

<select name="user_id" placeholder="User Id">
@foreach ($users as $user) <option value="{{$user->id}}">{{$user->name}}</option> 
@endforeach
</select>

<input type="submit" value="ok">
</form>
