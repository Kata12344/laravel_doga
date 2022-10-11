@foreach ($tasks as $task)
<form action="/api/products/{{$product->item_id}}" method="post">
[{csrf_field()}}
[[method_field('GET')}}
<div class="form-group">
<input type="submit" value="{$product->item_id}]}">
</div>
</form>
@endforeach
