<?php
 // input your data (vaghti 100 behesh midi toolesh be 110 mirese vali)
$dataPoints = array();
    $i=1;
    foreach ($logs as $log) {
         array_push ( $dataPoints ,array("y" => $log->score, "label" => $i) ) ;
         $i++;
    }
?>
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

        <script>
window.onload = function () {
 
var chart = new CanvasJS.Chart("chartContainer", {
    title: {
        text: ""
    },
    axisY: {
        title: "SCORE"
    },
    data: [{
        type: "line",
        dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
    }]
});
chart.render();
 
}
</script>
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
                <a href="{{ route('doctor.editprofile') }}" class="dropdown-item">
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
                    <a class="nav-link" href="{{ route('doctor.dashboard') }}">
                        <i class="ni ni-tv-2 text-primary"></i> {{ __('Dashboard') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('doctor.editprofile') }}">
                       <i class="ni ni-single-02 text-blue"></i> {{ __('User profile') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('doctor.report') }}">
                       <i class="ni ni-chat-round text-blue"></i> {{ __('Reports') }}
                    </a>
                </li>   
            </ul>
        </div>
    </div>
</nav>

        @endauth
        
        <div class="main-content">
            @include('doctor.nav')
@section('content')
    @include('users.partials.header', [
        'title' => '',
    ])

<div class="container-fluid mt--7">
        <div class="row">     
            <div class="col-xl-8 order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <h3 class="mb-0">{{$user->name}} {{$user->familyname}}</h3>
                        </div>
                    </div>
        <div class="row">
            <div class="col-xl-12 mb-12 mb-xl-0">
                <div class="card bg-gradient-default shadow">
                    <div class="card-header bg-transparent">
                        <div class="row align-items-center">
                            <div class="col">
                                <h6 class="text-uppercase text-light ls-1 mb-1">Overview</h6>
                                <h2 class="text-white mb-0">User log</h2>
                            </div>
                            <div id="chartContainer" style="height: 370px; width: 100%;"></div>
                        </div>
                    </div>
                </div>
        <div class="row mt-5">
            <div class="col-xl-12 mb-12 mb-xl-0">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col">
                                <h3 class="mb-0">Last 20 games</h3>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <!-- Projects table -->
                        <?php 
                        $l=[];
                        foreach($logs as $log){
                            $l[]=$log;
                        }
                         $l=array_reverse($l);
                         ?>
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">Date</th>
                                    <th scope="col">Levels</th>
                                    <th scope="col">Score</th>   
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($l as $log)
                                <tr>
                                    <td>
                                        {{$log->created_at}}
                                    </td>
                                    <td>
                                        {{$log->levels}}
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <span class="mr-2">{{$log->score}}%</span>
                                            <div>
                                                <div class="progress">
                                                <div class="progress-bar bg-gradient-primary" role="progressbar" aria-valuenow="{{$log->score}}" aria-valuemin="0" aria-valuemax="100" style="width: {{$log->score}}%;"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach    
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>        
        </div>
    </div>
                    <div class="card-body">
                        <form method="POST" action="{{route('doctor.updatelevels',$user->id)}}" autocomplete="off">
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
                                <div class="form-group{{ $errors->has('levels') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-levels">{{ __('Start and ending levels') }}</label><br>
                                    <input type="checkbox" name="l1" class="form-control-alternative" value="1" style="margin-right:0.1em"><label style="margin-right:0.5em"> 1</label>
                                    <input type="checkbox" name="l2" class="form-control-alternative" value="2" style="margin-right:0.1em"><label style="margin-right:0.5em"> 2</label>
                                    <input type="checkbox" name="l3" class="form-control-alternative" value="3" style="margin-right:0.1em"><label style="margin-right:0.5em"> 3</label>
                                    <input type="checkbox" name="l4" class="form-control-alternative" value="4" style="margin-right:0.1em"><label style="margin-right:0.5em"> 4</label>
                                    <input type="checkbox" name="l5" class="form-control-alternative" value="5" style="margin-right:0.1em"><label > 5</label>
                                    @if (session('errorMsg'))
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    {{ session('errorMsg') }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                     @endif
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-success mt-4">{{ __('Save') }}</button>
                                </div>
                            </div>
                        </form>
                        <br><br>
                        <form method="POST" action="{{route('doctor.updatenotification',$user->id)}}" autocomplete="off">
                            @csrf       
                            @if (session('successMsg2'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('successMsg2') }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif          
                            <div class="pl-lg-4">
                                <div class="form-group{{ $errors->has('text') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-text">{{ __('Leave a message') }}</label>
                                    <textarea name="text" id="input-text" class="form-control form-control-alternative{{ $errors->has('text') ? ' is-invalid' : '' }}" placeholder="{{ __('Text') }}" required ></textarea>

                                    @if ($errors->has('text'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('text') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-success mt-4">{{ __('Save') }}</button>
                                </div>
                            </div>
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>       
    </div>       
        <script type="text/javascript">
        const tx = document.getElementsByTagName('textarea');
        for (let i = 0; i < tx.length; i++) {
            tx[i].setAttribute('style', 'height:' + (tx[i].scrollHeight) + 'px;overflow-y:hidden;');
            tx[i].addEventListener("input", OnInput, false);
        }
        function OnInput() {
            this.style.height = 'auto';
            this.style.height = (this.scrollHeight) + 'px';
        }
    </script>
        <script src="{{ asset('argon') }}/vendor/jquery/dist/jquery.min.js"></script>
        <script src="{{ asset('argon') }}/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>        
        @stack('js')      
        <!-- Argon JS -->
        <script src="{{ asset('argon') }}/js/argon.js?v=1.0.0"></script>
        <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
    </body>
</html>
