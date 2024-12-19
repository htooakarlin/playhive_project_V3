<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark side_nav_bar global_background_color" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <a class="nav-link" href="{{ route('home') }}">
                    <div class="sb-nav-link-icon"><i class="fa-fw fa-solid fa-house"></i></div>
                    Home
                </a>
                <a class="nav-link" href="{{ route('user.movies') }}">
                    <div class="sb-nav-link-icon"><i class="fa-fw fa-solid fa-clapperboard"></i></div>
                    Movies
                </a>
                <a class="nav-link" href="{{ route('user.series') }}">
                    <div class="sb-nav-link-icon"><i class="fa-fw fa-solid fa-tv"></i></div>
                    Series
                </a>

                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fa-fw fa-solid fa-fire"></i></div>
                    Popular
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="#">Most Popular</a>
                        <a class="nav-link" href="#">Most Views</a>
                        <a class="nav-link" href="#">Most Likes</a>
                    </nav>
                </div>

                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                    <div class="sb-nav-link-icon"><i class="fa-fw fa-solid fa-bolt"></i></div>
                    Genere
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="#">Comedy</a>
                        <a class="nav-link" href="#">Action</a>
                        <a class="nav-link" href="#">Drama</a>
                        <a class="nav-link" href="#">Comedy</a>
                        <a class="nav-link" href="#">Action</a>
                        <a class="nav-link" href="#">Drama</a>
                        <a class="nav-link" href="#">Comedy</a>
                        <a class="nav-link" href="#">Action</a>
                        <a class="nav-link" href="#">Drama</a>
                    </nav>
                </div>

                <div class="sb-sidenav-menu-heading">User Account</div>
                <a class="nav-link" href="#">
                    <div class="sb-nav-link-icon"><i class="fa-fw fa-solid fa-gem"></i></div>
                    Premium
                </a>
                <a class="nav-link" href="#">
                    <div class="sb-nav-link-icon"><i class="fa-fw fa-solid fa-bookmark"></i></div>
                    WatchLaters
                </a>
                <a class="nav-link" href="#">
                    <div class="sb-nav-link-icon"><i class="fa-fw fa-solid fa-user-gear"></i></div>
                    Profile
                </a>
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
            Start Bootstrap
        </div>
    </nav>
</div>
