<x-layout>
<h1>'POOB'</h1>
<!--for some unknowable reason POST to index page refused to insert data into database-->
<form method="POST" action="./api/edit">
    @csrf
    @method('PUT')
    <label for="categoryName" class="inline-block">
    categoryName
    </label>
    <input type="text" name="categoryName" value="{{$cateogry->categoryName}}">
    @error('categoryName')
        <p>{{$message}}</p>
    @enderror
    <label for="description" class="inline-block">
        description
    </label>
    <textarea name="description">
        {{$cateogry->description}}
    </textarea>
    @error('description')
        <p>{{$message}}</p>
    @enderror
    <label for="idUser" class="inline-block">
        userId
    </label>
    <input type="text" name="idUser"  value="{{$product->idUser}}"/>
    @error('idUser')
        <p>{{$message}}</p>
    @enderror
    <button>update product</button>
</form>
</x-layout>