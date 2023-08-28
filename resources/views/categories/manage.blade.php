<x-layout>
@foreach ($categories as $category)
    <h2>
        <a href = "./category/api/{{$category->id}}">
        {{$category->categoryName}}
        </a>
    </h2>
    <p>
        {{$category->description}}
    </p>
    <div>
        <a href = './{{$category->id}}/edit' class="inline">edit</a>
        <form method="POST" action="./api/{{$category->id}}">
            @csrf
            @method('DELETE')
            <button>
                <i class="fa-solid fa-trash"></i>
                Delete
            </button>
    </div>
@endforeach

<div>{{$category->links()}}</div>
</x-layout>