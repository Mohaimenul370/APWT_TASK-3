<nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <ul class="nav navbar-nav">
        <li><a href="{{ route('home') }}">Home</a></li>
        @if(Session::has('user'))
        <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
        @endif
        <li><a href="{{ route('contact') }}">Contact US</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        @if(Session::has('user'))
        
        <li><a href="#">Welcome {{Session()->get('user')}}</a></li>
        <li><a href="{{route('logout')}}" class="btn btn-danger"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
        @else
        <li><a href="{{route('signup')}}"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="{{route('login')}}"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        @endif
      </ul>
    </div>
  </nav>