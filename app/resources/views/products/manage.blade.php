@auth
<h1>Woddap {{auth()->user()->username}}</h1>
<form class="inline" method="POST" action="./logout">
    @csrf
    <button type="submit">
        <i class="fa-solid fa-door-closed">"logout"</i>
    </button>
</form>
@else
<h1>{{$heading}}<a href="./login">log in</a></h1>
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