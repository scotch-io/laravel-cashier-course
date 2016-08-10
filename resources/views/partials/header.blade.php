<div class="navbar navbar-inverse">
    <div class="container">
        <div class="navbar-header">
            <a href="/" class="navbar-brand">Animalgram</a>
        </div>

        <ul class="nav navbar-nav navbar-right">

            @if ( ! (Auth::user() and Auth::user()->subscribed('main')))
            <li><a href="/subscribe">Subscribe</a></li>   
            @endif

            @if (Auth::user())
                <li><a href="/account">{{ Auth::user()->name }}</a></li>
                <li><a href="/logout">Logout</a></li>
            @else
                <li><a href="/login">Login</a></li>
                <li><a href="/register">Register</a></li>
            @endif
        </ul>
    </div>
</div>