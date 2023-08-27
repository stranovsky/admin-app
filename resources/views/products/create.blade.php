@extends('layouts/layout')

@section('content')
<h1>'BOOP'</h1>
<!--for some unknowable reason POST to index page refused to insert data into database-->
<form method="POST" action="./create">
    @csrf
    <label for="productName" class="inline-block">
        productName
    </label>
    <input type="text" name="productName" value="{{old('productName')}}">
    @error('productName')
        <p>{{$message}}</p>
    @enderror
    <label for="description" class="inline-block">
        description
    </label>
    <textarea name="description">
        {{old('description')}}
    </textarea>
    @error('description')
        <p>{{$message}}</p>
    @enderror
    <label for="price" class="inline-block">
        price
    </label>
    <input type="number" step="0.01" min="0" name="price"  value="{{old('price')}}"/>
    @error('price')
        <p>{{$message}}</p>
    @enderror
    <label for="idCategory" class="inline-block">
        categoryID
    </label>
    <input type="text" name="idCategory"  value="{{old('idCategory')}}"/>
    @error('idCategory')
        <p>{{$message}}</p>
    @enderror
    <button>create product</button>
</form>
@endsection