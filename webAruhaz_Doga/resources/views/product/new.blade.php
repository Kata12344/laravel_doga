<form action="/api/products" method="post">
[[csrf_field()}]
<input type="text" name="item_id" placeholder="Item Id">
<input type="text" name="description" placeholder="Description">
<select name="item_id" placeholder="Item Id">
@foreach ($products as $product) 
<option value="{$product->item_id}}">{{$product->name}}</option>
 @endforeach
</select>
<input type="date" name="end_date" placeholder="End_date">
<select name="status" placeholder="Status">
<option value=1>Open</option>
<option value=0>closed</option>
</select>
<input type="submit" value="ok">
</form>
