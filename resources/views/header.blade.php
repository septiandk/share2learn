
	
<!--Header-->
<header>
  <nav class="navbar navbar-default navbar-fixed white no-background bootsnav">
    <div class="container"> 
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
          <i class="fa fa-bars"></i>
        </button>
        <a class="navbar-brand" href="{{URL::to('/')}}">Share2Learn</a>
      </div>
	  
      <div class="collapse navbar-collapse" id="navbar-menu">
        <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOut">
          <li >
            <a href="{{URL::to('/home')}}" class="dropdown-toggle" data-toggle="dropdown" >Home</a>
          </li>
		  @if(Auth::user()->level == 'guru')
          <li >
            <a href="{{URL::to('/courses')}}" class="dropdown-toggle" data-toggle="dropdown" >Ambil Kelas</a>
          </li>
		  @endif
		   <li >
            <a href="{{URL::to('/about')}}" class="dropdown-toggle" data-toggle="dropdown" >About</a>
          </li>
          
         
          <li><a href="{{URL::to('/contact')}}">Contact Us</a></li>
          @if (Auth::guest())
          <li><a href="{{ url('/register') }}">Register</a></li>
          @else
          <li class="dropdown">
          <a>
              {{ Auth::user()->name }} <span class="caret"></span>
            </a>

            <ul class="dropdown-menu" role="menu">
              <li><a href="{{ url('/home/profil') }}"><i class="fa fa-btn fa-user"></i>Profil</a></li>
              <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
            </ul>
          </li>
          @endif
        </ul>
      </div>
    </div>   
  </nav>
</header>
