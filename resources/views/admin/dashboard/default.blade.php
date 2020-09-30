<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashboard - SB Admin</title>
    <link href="{{asset('css/styles.css')}}" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
    @yield('script')
</head>
<body class="sb-nav-fixed">
@include('admin.dashboard.nav')
<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <div class="sb-sidenav-menu-heading">Core</div>
                    <a class="nav-link" href="{{route('books.index')}}">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Dashboard
                    </a>
                    <div class="sb-sidenav-menu-heading"><i class="fas fa-book-open"></i> Books</div>
                    <a class="nav-link" href="{{route('show_all')}}">
                        <div class="sb-nav-link-icon"></div>
                        Show Books
                    </a>
                    <a class="nav-link" href="{{ route('books.create') }}">
                        <div class="sb-nav-link-icon"></div>
                        Add Book
                    </a>
                    <div class="sb-sidenav-menu-heading">Student</div>
                    <a class="nav-link" href="{{route('show_student')}}">
                        <div class="sb-nav-link-icon"><i class="fas fa-user-cog"></i></div>
                        All Student
                    </a>
                    <div class="sb-sidenav-menu-heading">Rest</div>
                    <a class="nav-link" href="{{ route('resetPassword') }}">
                        <div class="sb-nav-link-icon"></div>
                        Reset Password
                    </a>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Logged in as:</div>
                    Library Management
                </div>
        </nav>
    </div>
    <div id="layoutSidenav_content">
        @yield('content')

        @include('admin.dashboard.footer')
    </div>

</div>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="{{asset('js/scripts.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script src="{{asset('demo/chart-area-demo.js')}}"></script>
<script src="{{asset('demo/chart-bar-demo.js')}}"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
<script src="{{asset('demo/datatables-demo.js')}}"></script>

<!-- Preloader Start -->

</body>
</html>
