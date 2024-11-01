<div class="container animasi-cuy">
    <nav>
        <div class="brand">
            <h1>Hasy Store</h1>
        </div>
        <div class="bars" id="hamburger-menu">
            <i class="fa-solid fa-bars"></i>
        </div>
    </nav>
    <div class="sidebar animasi-cuy">
        @guest     
        <span><a href="/Sign-In">Login</a></span>
        @endguest
        @auth    
        <span><a href="/logout">Logout</a></span>
        @endauth
        @foreach ($kategori as $item)
        <span><a href="">{{ $item }}</a></span>
        @endforeach
    </div>
</div>
