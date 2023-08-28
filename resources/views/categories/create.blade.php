<x-layout>
<h1>'BOOP'</h1>
<!--for some unknowable reason POST to index page refused to insert data into database-->
<form method="POST" action="/api/categories/create">
    @csrf
    <label for="categoryName" class="inline-block">
        categoryName
    </label>
    <input type="text" name="categoryName" value="{{old('categoryName')}}">
    @error('categoryName')
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
    <button>create category</button>
</form>
</x-layout>