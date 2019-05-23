<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sample Form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="{{URL::asset('css/bootstrap.min.css')}}">
  <script  type="text/javascript" src="{{URL::asset('js/jquery.min.js')}}"></script>
  <script  type="text/javascript" src="{{URL::asset('js/popper.min.js')}}"></script>
  <script  type="text/javascript" src="{{URL::asset('js/bootstrap.min.js')}}"></script>
  
</head>
<body>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <a class="navbar-brand" href="#">Demo</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="/sample">Sample</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/testmail">Test_Mail</a>
      </li>
      <!-- <li class="nav-item">
        <a class="nav-link" href="/report">Report</a>
      </li> -->
    </ul>
    <ul class="navbar-nav ml-auto">
     <li class="nav-item dropdown">
        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            {{ Auth::user()->name }} <span class="caret"></span>
        </a>

        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
    </li>
    </ul>
  </div>  
</nav>
  @yield('content')

