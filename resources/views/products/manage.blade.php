@extends('layouts/layout')

@section('content')

@foreach ($products as $product)
    <h2>
        <a href = "./products/{{$product->id}}">
        {{$product->productName}}
        </a>
    </h2>
    <p>
        {{$product->price}}
    </p>
    <div>
        <a href = './{{$product->id}}/edit' class="inline">edit</a>
        <form method="POST" action="./{{$product->id}}">
            @csrf
            @method('DELETE')
            <button>
                <i class="fa-solid fa-trash"></i>
                Delete
            </button>
    </div>
@endforeach

<div>{{$products->links()}}</div>
@endsection