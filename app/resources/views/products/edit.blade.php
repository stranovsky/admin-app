<h1>'POOB'</h1>
<!--for some unknowable reason POST to index page refused to insert data into database-->
<form method="POST" action="./edit">
    @csrf
    @method('PUT')
    <label for="productName" class="inline-block">
        productName
    </label>
    <input type="text" name="productName" value="{{$product->productName}}">
    @error('productName')
        <p>{{$message}}</p>
    @enderror
    <label for="description" class="inline-block">
        description
    </label>
    <textarea name="description">
        {{$product->description}}
    </textarea>
    @error('description')
        <p>{{$message}}</p>
    @enderror
    <label for="price" class="inline-block">
        price
    </label>
    <input type="number" step="0.01" min="0" name="price"  value="{{$product->price}}"/>
    @error('price')
        <p>{{$message}}</p>
    @enderror
    <label for="idCategory" class="inline-block">
        categoryID
    </label>
    <input type="text" name="idCategory"  value="{{$product->idCategory}}"/>
    @error('idCategory')
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