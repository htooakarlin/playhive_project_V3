<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark side_nav_bar global_background_color" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">ADMIN INTERFACE</div>
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseAdmin" aria-expanded="false" aria-controls="collapseAdmin">
                    <div class="sb-nav-link-icon"><i class="fa-fw fa-solid fa-user-shield"></i></div>
                    Admins
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseAdmin" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link drop_items" href="{{ route('admin.adminView') }}">
                            <i class="fa-fw fa-solid fa-eye drop_items_icon"></i>
                            View
                        </a>
                        <a class="nav-link" href="{{ route('admin.adminCreate') }}">
                            <i class="fa-fw fa-solid fa-circle-plus drop_items_icon"></i>
                            Create
                        </a>
                    </nav>
                </div>

                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseUser" aria-expanded="false" aria-controls="collapseUser">
                    <div class="sb-nav-link-icon"><i class="fa-fw fa-solid fa-user"></i></div>
                    Users
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseUser" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link drop_items" href="#">
                            <i class="fa-fw fa-solid fa-eye drop_items_icon"></i>
                            View
                        </a>
                    </nav>
                </div>

                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseCategory" aria-expanded="false" aria-controls="collapseCategory">
                    <div class="sb-nav-link-icon"><i class="fa-fw fa-solid fa-layer-group"></i></div>
                    Categories
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseCategory" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link drop_items" href="#">
                            <i class="fa-fw fa-solid fa-eye drop_items_icon"></i>
                            View
                        </a>
                        <a class="nav-link" href="#">
                            <i class="fa-fw fa-solid fa-circle-plus drop_items_icon"></i>
                            Create
                        </a>
                    </nav>
                </div>

                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePackage" aria-expanded="false" aria-controls="collapsePackage">
                    <div class="sb-nav-link-icon"><i class="fa-fw fa-solid fa-gift"></i></div>
                    Packages
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapsePackage" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link drop_items" href="#">
                            <i class="fa-fw fa-solid fa-eye drop_items_icon"></i>
                            View
                        </a>
                        <a class="nav-link" href="#">
                            <i class="fa-fw fa-solid fa-circle-plus drop_items_icon"></i>
                            Create
                        </a>
                        <a class="nav-link" href="#">
                            {{-- <i class="fa-fw fa-solid fa-check drop_items_icon"></i> --}}
                            <i class="fa-fw fa-solid fa-check-double drop_items_icon"></i>
                            Approve
                        </a>
                    </nav>
                </div>

                <div class="sb-sidenav-menu-heading">USER INTERFACE</div>

                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseMovie" aria-expanded="false" aria-controls="collapseMovie">
                    <div class="sb-nav-link-icon"><i class="fa-fw fa-solid fa-clapperboard"></i></div>
                    Movies
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseMovie" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link drop_items" href="#">
                            <i class="fa-fw fa-solid fa-eye drop_items_icon"></i>
                            View
                        </a>
                        <a class="nav-link" href="#">
                            <i class="fa-fw fa-solid fa-circle-plus drop_items_icon"></i>
                            Create
                        </a>
                    </nav>
                </div>

                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseSeries" aria-expanded="false" aria-controls="collapseSeries">
                    <div class="sb-nav-link-icon"><i class="fa-fw fa-solid fa-tv"></i></div>
                    Series
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseSeries" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link drop_items" href="#">
                            <i class="fa-fw fa-solid fa-eye drop_items_icon"></i>
                            View
                        </a>
                        <a class="nav-link" href="#">
                            <i class="fa-fw fa-solid fa-circle-plus drop_items_icon"></i>
                            Create
                        </a>
                    </nav>
                </div>

            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
            Start Bootstrap
        </div>
    </nav>
</div>
