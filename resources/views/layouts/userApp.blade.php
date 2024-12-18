<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>PLAYHiVE</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
        <link href="{{ asset('css/home.css') }}" rel="stylesheet">

        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed global_background_color">
        @include('components.user.nav')

        <div id="layoutSidenav">

            @include('components.user.sideBar')

            <div id="layoutSidenav_content">

                <main>
                    @yield('content')
                </main>

                @include('components.user.footer')

            </div>

        </div>
        {{-- <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha384-o+QDVs+0O+ybRU6ZJmFn6f3vPoNvZw5NxXBU22Vj5yPOx7fEQShZAKvFpm2WaqC5" crossorigin="anonymous"></script> --}}
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="{{ asset('js/scripts.js') }}"></script>
        {{-- <script src="{{ asset('assets/demo/chart-area-demo.js') }}"></script>
        <script src="{{ asset('assets/demo/chart-bar-demo.js') }}"></script> --}}
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        {{-- <script src="{{ asset('assets/demo/datatables-demo.js') }}"></script> --}}
    </body>
</html>
