<x-layout>
    
<!--@include('partials._login')-->
<x-topbar/>
    <x-sidebar/>
    <x-main-content header="Products">
        @foreach ($products as $product)
            <x-card :product="$product"/>
        @endforeach
    </x-main-content>
    <div>{{$products->links()}}</div>
</x-layout>
<!--
    <h2>
            <a href = "./{{$product->id}}">
            {{$product->productName}}
            </a>
        </h2>
        <p>
            {{$product->price}}
        </p>
        <p>
            {{$product->description}}
        </p>
-->