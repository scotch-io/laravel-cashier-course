<div class="navbar navbar-inverse">
    <div class="container">
        <div class="navbar-header">
            <a href="/" class="navbar-brand">Animalgram</a>
        </div>

        <ul class="nav navbar-nav navbar-right">
            <li><a href="/subscribe">Subscribe</a></li>   

            @if (Auth::user())
                <li><a href="/logout">Logout</a></li>
            @else
                <li><a href="/login">Login</a></li>
                <li><a href="/register">Register</a></li>
            @endif
        </ul>
    </div>
</div>