<h1>{{$heading}}</h1>

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