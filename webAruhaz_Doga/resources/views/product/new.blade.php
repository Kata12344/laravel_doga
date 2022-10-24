<form action="/api/products" method="post">
{{csrf_field()}}

<select name="item_id" placeholder="Item Id">
@foreach ($products as $product) 
<option value="{{$product->item_id}}">{{$product->item_id}}</option>
 @endforeach
</select>

<input type="date" name="date" placeholder="End_date">

<select name="type_id" placeholder="Type id">
@foreach ($product_types as $product_type) 
<option value="{{$product_type->type_id}}">{{$product_type->type_id}}</option>
 @endforeach
</select>

<input type="submit" value="ok">
</form>
