@auth
<h1>Woddap {{auth()->user()->username}}</h1>
<form class="inline" method="POST" action="./logout">
    @csrf
    <button type="submit">
        <i class="fa-solid fa-door-closed">"logout"</i>
    </button>
</form>
@else
<h1>{{$heading}}<a href="/login">log in</a></h1>
@endauth