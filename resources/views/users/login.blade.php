<h1>'BOOP'</h1>
<!--for some unknowable reason POST to index page refused to insert data into database-->
<form method="POST" action="./users/authenticate">
    @csrf
    <label for="email" class="inline-block">
        email
    </label>
    <input type="text" name="email" value="{{old('email')}}">
    @error('email')
        <p>{{$message}}</p>
    @enderror
    <label for="password" class="inline-block">
        password
    </label>
    <input type="password" name="password"  value="{{old('password')}}"/>
    @error('password')
        <p>{{$message}}</p>
    @enderror
    <button>sign in</button>
</form>