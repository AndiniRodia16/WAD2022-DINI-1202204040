<nav class="navbar navbar-expand-lg navbar-light bg-{{ session()->get('navbar') }}">
    <div class="container">
        <a class="navbar-brand text-white" href="{{ route('home') }}">Home</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    @auth
                        <a class="nav-link text-white" aria-current="page" href="{{ route('my-car') }}">My Car</a>
                    @endauth
                </li>
            </ul>
            @guest
                <a href="{{ route('login') }}" class='btn btn-light me-2 btn-sm'>Login</a>
            @else
                <a href="{{ route('new-car') }}" class="btn btn-light me-2 btn-sm">Add Car</a>
                <div class="dropdown ">
                    <button class="btn btn-light dropdown-toggle btn-sm" type="button" id="dropdownMenuButton1"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        {{ auth()->user()->name }}
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="{{ route('profile') }}">Profile</a></li>
                        <li>
                            <form action="{{ route('logout') }}" method="post">
                                @csrf
                                <button style="color:red" class="dropdown-item " type="submit">Logout</button>
                            </form>
                        </li>
                    </ul>
                </div>
            @endguest

        </div>
    </div>
</nav>
