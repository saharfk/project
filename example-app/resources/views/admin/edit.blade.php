<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>VEGLECTHERAPY</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">

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
                @include('users.partials.header', [
        'title' =>'',
        'class' => 'col-lg-7'
    ])   



    <div class="container-fluid mt--7">
        <div class="row">
            
            <div class="col-xl-8 order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <h3 class="mb-0">{{$user -> name}} {{$user -> familyname}}</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{route('admin.update',$user->id)}}" autocomplete="off">
                            @csrf
                            @if (session('status'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('status') }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif


                            <div class="pl-lg-4">
                                <div class="form-group{{ $errors->has('access') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-name">{{ __('Access') }}</label>
                                    <select name="access" id="input-access" class="form-control form-control-alternative{{ $errors->has('access') ? ' is-invalid' : '' }}" placeholder="{{ __('Access') }}" >
                                            <option value="---">---</option>
                                            <option value="1">doctor</option>
                                            <option value="2">user</option>
                                        </select>
                                    @if ($errors->has('access'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('access') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('doctor_id') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-doctor_id">{{ __('Doctor') }}</label>
                                    <select name="doctor_id" id="input-doctor_id" class="form-control form-control-alternative{{ $errors->has('doctor_id') ? ' is-invalid' : '' }}" placeholder="{{ __('Doctor') }}" >
                                            <option value="---">---</option>
                                            @foreach($doctors as $doctor)
                                            <option value="{{$doctor -> id}}">
                                                {{$doctor -> name}} {{$doctor -> familyname}}
                                            </option>
                                            @endforeach   
                                        </select>
                                    @if ($errors->has('doctor_id'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('doctor_id') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="text-center">
                                    <button type="submit" class="btn btn-success mt-4">{{ __('Save') }}</button>
                                </div>
                            </div>
                        </form>
                        <hr class="my-4" />

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