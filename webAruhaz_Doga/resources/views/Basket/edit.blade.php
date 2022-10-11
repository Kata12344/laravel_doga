<form action="/api/baskets/{{$basket->id))" method="post">
{{csrf_field()}}
{{method_field('PUT')}}
<input type=" text" name="title" placeholder="Title">
    <input type="text" name="description" placeholder="Description"> <select name="user_id" placeholder="User Id">
        @foreach ($users as $user) <option value="{$user->id}}" {{$user->id $basket->user_id ? 'selected' : "}}>{$user->name}}</option>
        @endforeach
    </select>
</form>    