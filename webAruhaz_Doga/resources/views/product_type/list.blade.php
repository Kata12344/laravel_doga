@foreach ($product_types as $product_type)
<form action="/api/baskets/{{$basket->id}}" method="post">
{{csrf_field()}}
{{method_field('GET')}}
<div class="form-group">
<input type="submit" value="{{$basket->item_id}}">
</div>
</form>
@endforeach