<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">   
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PPDB MTs. NU Berbek 2018</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('dist/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <!-- <link href="{{ asset('dist/css/simple-sidebar.css') }}" rel="stylesheet"> -->
    <link href="{{ asset('dist/css/all.min.css') }}" rel="stylesheet">
    <style type="text/css">
        .list-group .aktif {
            background-color: #e0e0e0;
        }
        .footer {
            position: absolute;
            margin-top: 3%;
            width: 100%;
            height: 60px;
            line-height: 60px;
            background-color: #f5f5f5;
        }
    </style>

</head>

<body style="background-color: #f5f5f5;">
    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="border-bottom: 1px groove grey">
        <div class="container">
            <a class="navbar-brand" href="#">{{ ucwords(Auth::User()->role) }}</a>
            <ul class="navbar-nav pull-right mr-sm-2">
                <li class="nav-item dropdown">
                    <a class="nav-link p-0" href="#">{{ Auth::User()->email }}</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container" style="padding-top: 3%;">
        <div class="row">
            <div class="col-sm-3">
                <div class="list-group">
                    <a class="list-group-item list-group-item-action list-group-item-success">
                        Admin
                    </a>
                    <?php 
                    $dashboard = '';
                    $daftaruser = '';
                    $adduser = '';
                    $daftarcasis = '';
                    $register = '';
                        if(Request::segment(1) == 'home' && Request::segment(2) == ''){
                            $dashboard = 'aktif';
                        }elseif((Request::segment(1) == 'user') && (Request::segment(2) == '')){
                            $daftaruser = 'aktif';
                        }elseif((Request::segment(2) == 'create') && (Request::segment(1) == 'user')){
                            $adduser = 'aktif';
                        }elseif((Request::segment(1) == 'casis') && (Request::segment(2) == '')){
                            $daftarcasis = 'aktif';
                        }elseif((Request::segment(1) == 'casis') && (Request::segment(2) == 'create')){
                            $register = 'aktif';
                        }elseif((Request::segment(1) == 'user') && (Request::segment(3) == 'edit')){
                            $adduser = 'aktif';                            
                        }elseif((Request::segment(1) == 'casis') && (Request::segment(3) == 'edit')){
                            $register = 'aktif';
                        }
                    ?>

                    <a href="{{ url('home') }}" class="list-group-item list-group-item-action pt-2 {{ $dashboard }}">
                        <i class="fas fa-tachometer-alt"></i> &nbsp Dashboard
                    </a>
                    @if(Auth::User()->role == 'admin')
                        <a href="{{ url('user') }}" class="list-group-item list-group-item-action pt-2 {{ $daftaruser }}">
                            <i class="fas fa-users"></i> &nbsp Daftar User
                        </a>
                        <a href="{{ url('user/create') }}" class="list-group-item list-group-item-action pt-2 {{ $adduser }}">
                            <i class="fas fa-user-plus"></i> &nbsp Tambah User
                        </a>
                    @endif
                </div>
                <div class="list-group" style="padding-top: 15px;">
                    <a class="list-group-item list-group-item-action list-group-item-success">
                        Calon Siswa
                    </a>
                    <a href="{{ url('casis') }}" class="list-group-item list-group-item-action pt-2 {{ $daftarcasis }}"><i class="fas fa-list"></i> &nbsp Daftar Calon Siswa</a>
                    <a href="{{ url('casis/create') }}" class="list-group-item list-group-item-action pt-2 {{ $register }}"><i class="fas fa-plus"></i> &nbsp Register Calon Siswa</a>
                </div>
                <div class="list-group" style="padding-top: 15px;">
                    <a href="{{ route('logout') }}" class="list-group-item list-group-item-action" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();"><i class="fas fa-sign-out-alt"></i> &nbsp Logout
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </div>
            <div class="col-sm-9">
                @yield('main')
            </div>
        </div>
        <!-- <div class="btn-group-vertical" style="width: 200px;">
            <button type="button" class="btn btn-secondary py-2" style="border-bottom: 2px solid grey">Dashboard</button>
            <button type="button" class="btn btn-secondary py-2" style="border-bottom: 2px solid grey">Daftar Siswa</button>
        </div> -->

    </div>

    <footer class="footer"  style="border-top: 1px ridge grey">
        <div class="container">
            <center><b class="copyright">@ Admin PPDB MTs. NU Berbek </b></center>
        </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('dist/js/jquery-1.12.4.js') }}"></script>
    <script src="{{ asset('dist/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('dist/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('dist/js/bootstrap.js') }}"></script>
    <script src="{{ asset('dist/js/bootstrap.bundle.min.js') }}"></script>

    <script type="text/javascript">

        $(document).ready(function() {

            $('#table').DataTable();

        } );

    </script>

</body>

</html>
