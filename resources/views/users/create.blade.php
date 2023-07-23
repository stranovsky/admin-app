<h1>'BOOP'</h1>
<!--for some unknowable reason POST to index page refused to insert data into database-->
<form method="POST" action="./users">
    @csrf
    <label for="username" class="inline-block">
        username
    </label>
    <input type="text" name="username" value="{{old('username')}}">
    @error('username')
        <p>{{$message}}</p>
    @enderror
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
    <label for="password_confirmation" class="inline-block">
        confirm password
    </label>
    <input type="password" name="password_confirmation"  value="{{old('password_confirmation')}}"/>
    @error('password_confirmation')
        <p>{{$message}}</p>
    @enderror
    <button>create account</button>
</form>