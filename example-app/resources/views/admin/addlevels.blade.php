<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>VEGLECTHERAPY</title>
        <!-- Favicon -->
        <link href="{{ asset('argon') }}/img/icons/favicon.png" rel="icon" type="image/png">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
        <!-- Extra details for Live View on GitHub Pages -->

        <!-- Icons -->
        <link href="{{ asset('argon') }}/vendor/nucleo/css/nucleo.css" rel="stylesheet">
        <link href="{{ asset('argon') }}/vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
        <!-- Argon CSS -->
        <link type="text/css" href="{{ asset('argon') }}/css/argon.css?v=1.0.0" rel="stylesheet">
        <style type="text/css">
            
            input[type="file"] {
    display: none;
}
.custom-file-upload {
    border: 1px solid #ccc;
    display: inline-block;
    padding: 6px 12px;
    cursor: pointer;
}
        </style>
    </head>
    <body class="{{ $class ?? '' }}">
        @auth()
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
<nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main" >
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <ul class="nav align-items-center d-md-none">
        <li class="nav-item dropdown">
            <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="media align-items-center">
                    <span class="avatar avatar-sm rounded-circle">
                    <img alt="Image placeholder" src="{{ asset('argon') }}/img/icons/favicon.png">
                    </span>
                </div>
            </a>
            <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
                <div class=" dropdown-header noti-title">
                    <h6 class="text-overflow m-0">Welcome!</h6>
                </div>
                <a href="{{ route('admin.editprofile') }}" class="dropdown-item">
                    <i class="ni ni-single-02"></i>
                    <span>My profile</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                    <i class="ni ni-user-run"></i>
                    <span>Logout</span>
                </a>
            </div>
        </li>
    </ul>  
    <div class="container-fluid">
        <!-- Brand -->

        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
            <!-- Collapse header -->
            <div class="navbar-collapse-header d-md-none">
                <div class="row">
                    <div class="col-6 collapse-brand">
                    </div>
                    <div class="col-6 collapse-close">
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Navigation -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('welcome') }}">
                        <i class="ni ni-world text-primary"></i> {{ __('Website') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.dashboard') }}">
                        <i class="ni ni-tv-2 text-primary"></i> {{ __('Dashboard') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.editprofile') }}">
                       <i class="ni ni-single-02 text-blue"></i> {{ __('User profile') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.reports') }}">
                       <i class="ni ni-chat-round text-blue"></i> {{ __('Reports') }}
                    </a>
                </li> 
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.addlevels') }}">
                       <i class="ni ni-album-2 text-blue"></i> {{ __('Add level') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.contacts') }}">
                        <i class="ni ni-archive-2 text-blue"></i> {{ __('Contacts') }}
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

        @endauth
        
        <div class="main-content">
            @include('admin.nav')
    <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
    <div class="container-fluid">
        <div class="header-body">
            <!-- Card stats -->
            <div class="row">
                
               
            </div>
        </div>
    </div>
    </div>
    <div class="container-fluid mt--7">
        <div class="row">

            <div class="col-xl-4">
               
            </div>
        </div>
        <div class="row mt-5">
         
          
        </div>
<div class="container-fluid mt--7">
    <div class="row">
        <div class="col">
            <div class="card shadow">
                <div class="card-header border-0">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h3 class="mb-0">Add a level</h3>
                        </div>
                        
                    </div>
                </div>
                
                <div class="col-12">
                                        
                </div>

                <div class="card-body">
                    <form method="post" enctype="multipart/form-data" action="{{ route('admin.updatelevels') }}" autocomplete="off">
                            @csrf              
                            @if (session('successMsg'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('successMsg') }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif
                            <div class="pl-lg-4">
                                <div class="form-group{{ $errors->has('level') ? ' has-danger' : '' }}">
                                <label class="form-control-label" for="input-name">{{ __('Choose level') }}</label><br>
                                <input type="radio" name="level" value="1" class="form-control-alternative" style="margin-right:0.1em" checked><label style="margin-right:0.5em">1</label>
                                <input type="radio" name="level" value="2" class="form-control-alternative" style="margin-right:0.1em"><label style="margin-right:0.5em">2</label>
                                <input type="radio" name="level" value="3" class="form-control-alternative" style="margin-right:0.1em"><label style="margin-right:0.5em">3</label>
                                <input type="radio" name="level" value="4" class="form-control-alternative" style="margin-right:0.1em"><label style="margin-right:0.5em">4</label>
                                <input type="radio" name="level" value="5" class="form-control-alternative" style="margin-right:0.1em"><label >5</label><br>
                                </div>
                                <label for="file1" class="custom-file-upload btn btn-primary mt-4"><i class="ni ni-image"></i> 1st picture
                                </label><input type="file" name="file1" id="file1" ><br>
                                @if (session('pic1'))
                                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    {{ session('pic1') }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div><br>
                                    @endif 
                                <label for="file2" class="custom-file-upload btn btn-primary mt-4"><i class="ni ni-image"></i> 2nd picture
                                </label><input type="file" name="file2" id="file2" ><br>
                                @if (session('pic2'))
                                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    {{ session('pic2') }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div><br>
                                    @endif 
                                <label for="file3" class="custom-file-upload btn btn-primary mt-4"><i class="ni ni-image"></i> 3rd picture
                                </label><input type="file" name="file3" id="file3" ><br>
                                @if (session('pic3'))
                                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    {{ session('pic3') }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div><br>
                                    @endif 
                                <div class="text-center">
                                    <button type="submit" class="btn btn-success mt-4">{{ __('Save') }}</button>
                                </div>
                            </div>
                        </form>
                    
                </div>
                <div class="card-footer py-4">
                    <nav class="d-flex justify-content-end" aria-label="...">
                        
                    </nav>
                </div>
            </div>
        </div>
    </div>
    </div>
        </div>
        <script src="{{ asset('argon') }}/vendor/jquery/dist/jquery.min.js"></script>
        <script src="{{ asset('argon') }}/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
        
        @stack('js')
        
        <!-- Argon JS -->
        <script src="{{ asset('argon') }}/js/argon.js?v=1.0.0"></script>
    </body>
</html>