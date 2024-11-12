<nav class="navbar navbar-expand-lg p-3 gap-2">  
    <img src="{{asset('images/eng.icon.png')}}" alt="" width="24px" height="24px" class="ms-4">
    <a href="{{route('homepage')}}" class="navbar-brand me-5 text-dark">Homepage</a>
    <div class="collapse navbar-collapse me-4">
        <ul class="navbar-nav ms-auto fw-bold">
            <li class="nav-item mt-2">
                <a href="{{route('login')}}" class="nav-link">Login</a>
            </li>
            <li class="nav-item mt-2">
                <a href="#" class="nav-link">About</a>
            </li>
        </ul>
    </div>
</nav>