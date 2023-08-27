@extends('layouts/layout')

@section('content')
<h1>{{$heading}}</h1>
<p><a href = './'>go back</a>
<h2>
    {{$product->productName}}
</h2>
<p>
    {{$product->price}}
</p>
<p>
    {{$product->description}}
</p>
<div>
    <a href = './{{$product->id}}/edit' class="inline-block">edit</a>
    <form method="POST" action="./{{$product->id}}">
        @csrf
        @method('DELETE')
        <button>
            <i class="fa-solid fa-trash"></i>
            Delete
        </button>
</div>
@endsection