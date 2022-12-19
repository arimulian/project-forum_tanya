<header class="p-3 bg-light bg-gradient text-dark border shadow-sm">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
                    <use xlink:href="#bootstrap" />
                </svg>
            </a>
            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li><a href="#" class="nav-link px-2 text-secondary">About</a></li>
                <li><a href="/forum" class="nav-link px-2 text-secondary">Forum</a></li>
            </ul>
            <div class="text-end">
                @auth
                <img src="https://img.icons8.com/external-creatype-outline-colourcreatype/64/null/external-account-essential-ui-v4-creatype-outline-colourcreatype.png" height="30px" style="margin-right:70px" />

                <div class="dropdown-center">
                    <button class="btn btn-lg dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        welcome,{{ auth()->user()->username }}

                    </button>
                    <ul class="dropdown-menu">

                        <li>
                            <form action="/logout" method="post">
                                @csrf
                                <button type="submit" class="dropdown-item text-dark"><i class="bi bi-box-arrow-left"></i>&nbspLog Out</button>
                            </form>
                        </li>
                        <li><a class="dropdown-item" href="/add-profile"><img src="https://img.icons8.com/sf-regular/48/null/pencil.png" width="20px"/>Buat Profile</a></li>
                        <li><a class="dropdown-item" href="/profile">Profile</a></li>

                    </ul>
                </div>
                @else
                <button type="button" class="btn btn-outline-warning me-2"><a href="/" style="color:black;text-decoration:none;"> Login</a></button>
                <button type="button" class="btn btn-warning"><a href="/register" style="color:black;text-decoration:none;"> Sign-up </a></button>
                @endauth
            </div>
        </div>
    </div>
</header>