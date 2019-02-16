<div class="container-fluid">
    <div class='navbar navbar-dark'>
        <a class='nav-item nav-brand' href='/'>Home</a>
        <a class='nav-item nav-brand' href='/genres'>Genres</a>
        <a class='nav-item nav-brand' href='/tracks'>Tracks</a>
        @if (Auth::check())
        <a href='/profile' class='nav-link'>Profile</a>
        <a class="nav-item nav-brand" href="/invoices">Invoices</a>
        <a href="/logout" class="nav-link">Logout</a>
        @else
        <a href="/login" class="nav-link">Login</a>
        <a href="/signup">Sign Up</a>
        @endif
    </div>
</div>