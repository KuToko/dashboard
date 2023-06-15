<nav class="navbar navbar-expand-lg topnav-menu navbar-light zindex-10">
    <div class="container">
        <a class="navbar-brand logo" href="/">
            <img src="./assets/images/logo.png" height="30" class="align-top logo-dark" alt="" />
            <img src="./assets/images/logo-light.png" height="30" class="align-top logo-light" alt="" />
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#topnav-menu-content"
            aria-controls="topnav-menu-content" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="topnav-menu-content">
            <ul class="navbar-nav align-items-lg-center d-flex me-auto">

            </ul>
            <ul class="navbar-nav align-items-lg-center ">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/') }}#features">Features</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/') }}#testimonials">Testimonials</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/contact') }}">Contact</a>
                </li>

                <li class="nav-item ms-2">
                    <a class="btn btn-outline-secondary btn-sm" href="{{ url('/app') }}">Dashboard</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
