<!-- Navigation Links -->
<a href="{{route('dashboard')}}">Dashboard</a>
                
<div>{{ Auth::user()->name }}</div>


<!-- Authentication -->
<form method="POST" action="{{ route('logout') }}">
    @csrf
<button type="submit">Logout</button>
</form>


