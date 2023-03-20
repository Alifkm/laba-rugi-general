<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  {{-- <title>{{ config('app.name', 'Laravel') }}</title> --}}
  <title>PnL Report</title>



  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">


  {{-- eye icon css --}}
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    

  {{-- jquery bootstrap --}}
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap5.min.css" rel="stylesheet">
  
  {{-- datepicker bootstrap --}}
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.2.0/css/datepicker.min.css" rel="stylesheet">


  {{-- custom css --}}
  {{-- <link href="css/app.css" rel="stylesheet"> --}}
  

  {{-- jquery cdn --}}
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script> 


  {{-- highchart --}}
  <script src="https://code.highcharts.com/highcharts.js"></script>

  {{-- datepicker js --}}
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.2.0/js/bootstrap-datepicker.min.js"></script>

  <style>
    .input-container {
        display: -ms-flexbox; /* IE10 */
        display: flex;
        width: 100%;
        margin-bottom: 15px;
    }

    .icon {
        padding: 10px;
        background: black;
        color: white;
        min-width: 50px;
        text-align: center;
    }

    #log:hover{
        background-color: blue;
    }

    .material-icons {
        font-size: 16px;
    }

    .dropdown-toggle{
        height: 40px;
    }

    .bg-nav {
        background-color: #220646;
    }

    .sticky-sidebar {
        position: fixed;
        z-index: 1;
        top: 0;
        left: 0;
        overflow-x: hidden;
        padding-top: 20px;
        height: 100%;
        width: 200px;
    }

    .margin-main {
        margin-left: 200px;
    }


    /* overlay css */
    #overlay{	
        position: fixed;
        top: 0;
        z-index: 100;
        width: 100%;
        height:100%;
        display: none;
        background: rgba(0,0,0,0.6);
    }

    .cv-spinner {
        height: 100%;
        display: flex;
        justify-content: center;
        align-items: center;  
    }

    .spinner {
        width: 40px;
        height: 40px;
        border: 4px #ddd solid;
        border-top: 4px #2e93e6 solid;
        border-radius: 50%;
        animation: sp-anime 0.8s infinite linear;
    }

    @keyframes sp-anime {
    100% { 
        transform: rotate(360deg); 
    }
    }

    .is-hide{
        display:none;
    }


    /* datatable custom css */
    th.sorting, th.sorting_disabled {
        text-align: center;
    }

    .btn-action {
        width: 75px;
    }


    /* mobile nav */
    .mobile-nav {
        display: none;
    }

    /* auth button */
    .auth-dropdown-mobile {
        display: none;
    }

    .app {
      display: flex;
    }

    .chart-btn-mobile {
      display: none;
    }

    @media screen and (max-width:1024px) {
      .app {
        display: block;
      }
      .mobile-nav {
          display: block;
          margin-bottom: 2em;
          background-color: black;
      }

      .desktop-nav {
        display: none !important;
      }

      .header-desktop, .hr-desktop {
          display: none !important;
          background-color: #220646;
      }

      .margin-main {
          margin-left: 0;
      }
      
      .logo {
        width: 75px;
      }

      .chart-btn-desktop {
        display: none;
      }

      .chart-btn-mobile {
        display: inline;
        text-decoration: none;
        color: black;
      }
    }
    
    @media screen and (max-width:768px) {
      .auth-dropdown-tab {
        display: none;
      }

      .auth-dropdown-mobile {
        display: block;
      }

    }
  </style>
    
</head>
<body>
  <div id="app" class="app">
    
    <x-overlay />

    {{-- navbar mobile --}}
    <nav class="navbar sticky-top navbar-expand-md navbar-light bg-white shadow-sm mobile-nav">
      <div class="container-fluid row">
        <a class="navbar-brand col-md-1 col-sm-2 col-4" href="{{ route('report.index') }}">
          <img src="{{url('/img/pnl.png')}}" class="logo" alt="Logo PnL Report" width="90px" height="auto">
        </a>

        <!-- Right Side Of Navbar -->
        <ul class="navbar-nav ms-auto auth-dropdown-mobile col-sm-2 col-3 mx-1">
          <!-- Authentication Links -->
          @guest
            @if (Route::has('login'))
              <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
              </li>
            @endif
          @else
            <li class="nav-item dropdown">
              <a id="navbarDropdown" class="nav-link dropdown-toggle text-center" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }}
              </a>

              <div class="dropdown-menu dropdown-menu-end col-sm-4 mx-auto" aria-labelledby="navbarDropdown">
                <a class="dropdown-item text-center" href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
                </form>
              </div>
            </li>
          @endguest
        </ul>

        <button class="navbar-toggler col-sm-2 col-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse col-md-10" id="navbarSupportedContent">
          <!-- Left Side Of Navbar -->
          @canany(['thisIsAdmin', 'thisIsSuperAdmin'])
          <ul class="navbar-nav me-auto">
            <li class="nav-item">
              <a class="nav-link {{ Request::is('report*') || Request::is('/') || Request::is('chart*') ? 'text-danger' : 'text-dark' }} text-center" href="/report">Report</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ Request::is('admin*') ? 'text-danger' : 'text-dark' }} text-center" href="{{ url('/admin') }} ">Admin</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ Request::is('income*') ? 'text-danger' : 'text-dark' }} text-center" href="{{ url('/income') }} ">Income</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ Request::is('outcome*') ? 'text-danger' : 'text-dark' }} text-center" href="{{ url('/outcome') }} ">Outcome</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ Request::is('transaction-source*') ? 'text-danger' : 'text-dark' }} text-center" href="{{ url('/transaction-source') }} ">Transaction Source</a>
            </li>
            {{-- <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle {{ Request::is('income*') || Request::is('outcome*') ? 'text-danger' : 'text-dark' }} text-center" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                Transaction
              </a>
              <div class="dropdown-menu bg-light col-sm-4 mx-auto">
                <a class="dropdown-item text-dark text-center" href="{{ url('/income') }}">Income</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item text-dark text-center"  href="{{ url('/outcome') }}">Outcome</a>
              </div>
            </li> --}}
              
            @can('thisIsSuperAdmin')            
              <li class="nav-item">
                <a class="nav-link {{ Request::is('approval*') ? 'text-danger' : 'text-dark' }} text-center" href="{{ url('/approval') }} ">Approval&ensp; 
                @php
                    $sizeApproval = sizeof($approvals);
                    if(!$sizeApproval) echo "";
                    else echo "<span class=text-danger> ($sizeApproval) </span>";   
                    @endphp
                </a>
              </li>
            @endcan
      
            <li class="nav-item">
                <a class="nav-link {{ Request::is('change-password*') ? 'text-danger' : 'text-dark' }} text-center" href="{{ url('/change-password') }}">Change password</a>
            </li>
          </ul>
          @endcanany

          <!-- Right Side Of Navbar -->
          <ul class="navbar-nav ms-auto auth-dropdown-tab">
            <!-- Authentication Links -->
            @guest
              @if (Route::has('login'))
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
              @endif
            @else
              <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle text-center" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                  {{ Auth::user()->name }}
                </a>

                <div class="dropdown-menu dropdown-menu-end col-sm-4 mx-auto" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item text-center" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                  </a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                  </form>
                </div>
              </li>
            @endguest
          </ul>
        </div>
      </div>
    </nav>

    {{-- navbar desktop --}}
    @if (Auth::check() === true) 
    <nav class="navbar desktop-nav navbar-expand-md navbar-light bg-nav shadow-sm d-flex justify-content-start align-items-start sticky-sidebar ">
      <div class="container p-4 d-flex flex-column">
        <a class="navbar-brand mb-5 text-white" href="{{ url('/') }}">
          PnL Report
        </a>
            
        <div class="collapse navbar-collapse d-flex flex-column" id="navbarSupportedContent">
          <!-- Left Side Of Navbar -->
          @canany(['thisIsAdmin', 'thisIsSuperAdmin'])
            <ul class="navbar-nav me-auto d-flex flex-column">
              <li class="nav-item">
                <a class="nav-link {{ Request::is('report*') || Request::is('/') || Request::is('chart*') ? 'text-danger' : 'text-light' }}" href="/report">Report</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ Request::is('admin*') ? 'text-danger' : 'text-light' }}" href="{{ url('/admin') }} ">Admin</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ Request::is('income*') ? 'text-danger' : 'text-light' }}" href="{{ url('/income') }} ">Income</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ Request::is('outcome*') ? 'text-danger' : 'text-light' }}" href="{{ url('/outcome') }} ">Outcome</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ Request::is('transaction-source*') ? 'text-danger' : 'text-light' }}" href="{{ url('/transaction-source') }} ">Transaction Source</a>
              </li>

              {{-- <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle {{ Request::is('income*') || Request::is('outcome*') ? 'text-danger' : 'text-light' }}" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                Transaction
                </a>
                <div class="dropdown-menu bg-light">
                <a class="dropdown-item text-dark" href="{{ url('/income') }}">Income</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item text-dark" href="{{ url('/outcome') }}">Outcome</a>
                </div>
              </li> --}}
                
              @can('thisIsSuperAdmin')            
              <li class="nav-item">
                <a class="nav-link {{ Request::is('approval*') ? 'text-danger' : 'text-light' }}" href="{{ url('/approval') }} ">Approval&ensp; 
                @php
                  $sizeApproval = sizeof($approvals);
                  if(!$sizeApproval) echo "";
                  else echo "<span class=text-danger> ($sizeApproval) </span>";   
                  @endphp
                </a>
              </li>
              @endcan
        
              <li class="nav-item">
                <a class="nav-link {{ Request::is('change-password*') ? 'text-danger' : 'text-light' }}" href="{{ url('/change-password') }}">Change password</a>
              </li>
            </ul>
            @endcanany
          </div>
        </div>
        </nav>
    @endif


    {{-- main section --}}
    <main class="vh-100 w-100 d-flex flex-column px-4 {{ Auth::check() === true ? 'margin-main' : "" }}">
      <ul class="container header-desktop navbar-nav mt-2 ms-auto w-100 d-flex align-items-center flex-row justify-content-between">
        <a href="{{ route('report.index') }}"><img src="{{url('/img/pnl.png')}}" alt="Logo PnL Report" width="90px" height="auto"></a>
        <!-- Authentication Links -->
        @guest
            @if (Route::has('login'))
                <li class="nav-item ">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
            @endif
        @else
          <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }}
            </a>

            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
              </form>
            </div>
          </li>
        @endguest
      </ul>
      <hr class="hr-desktop bg-secondary">
    

      <x-flash-message />

      @yield('content')
    </main>
  </div>
    
  {{-- jquery validate --}}
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>


  {{-- datatable jquery js --}}
  <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>


  {{-- bootstrap js --}}
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  

  {{-- datatable bootstrap js --}}
  <script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap5.min.js"></script>
  

    {{-- font awesome --}}
    <script src="https://kit.fontawesome.com/3626f424e9.js" crossorigin="anonymous"></script>


    {{-- alpine js for flash message  --}}
  <script src="//unpkg.com/alpinejs" defer></script>


  {{-- sweetalert --}}
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


  {{-- bootstrap select --}}
  {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.18/dist/js/bootstrap-select.min.js"></script> --}}


  {{-- bootstrap eye icon --}}
  <script src="https://unpkg.com/bootstrap-show-password@1.2.1/dist/bootstrap-show-password.min.js"></script>

</body>
</html>