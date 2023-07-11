@auth
<h1>Woddap {{auth()->user()->username}}</h1>
@else
<h1>{{$heading}}</h1>
@endauth

@foreach ($products as $product)
    <h2>
        <a href = "./products/{{$product->id}}">
        {{$product->productName}}
        </a>
    </h2>
    <p>
        {{$product->price}}
    </p>
    <p>
        {{$product->description}}
    </p>
@endforeach

<div>{{$products->links()}}</div>