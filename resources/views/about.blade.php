@extends('layouts.app')
@section('content')
<a href="#" class="scrollToTop"><i class="fa fa-angle-up"></i></a>
<!--Loader-->
<div class="loader">
  <div class="bouncybox">
      <div class="bouncy"></div>
    </div>
</div>

<!--Header-->
<header>
  <nav class="navbar navbar-default  no-background bootsnav">
    <div class="container"> 
       <div class="search_btn btn_common"><i class="fa fa-search"></i></div>
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
		  @if (Auth::user()->level="guru")
          <li >
            <a href="{{URL::to('/courses')}}" class="dropdown-toggle" data-toggle="dropdown" >Ambil Pelajaran</a>
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
<div class="col-md-12 text-center fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">
				<h2>About Share2Learn</h2>
				<p class="col-md-8 mid heading_space margin10">Share To Learn ini berfungsi sebagai sarana untuk menambah wawasan dalam ilmu pengetahuan bagi pelajar yang nantinya pelajar mampu menanyakan materi yang belum di pahami di kelas, dan nanti akan di jawab oleh guru yang berkaitan dengan materi tersebut.</p>
		</div>
<!-- Guru -->
<section id="guru" class="padding guru">
	<div class="container ">
    <div class="row ">
      <div class="col-md-12 text-center fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">
				<h2>Tentang Kita</h2>
				<p class="heading_space margin10">Kita Kuliah Di Universitas Muhammadiyah Malang.</p>
		</div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="slider_wrapper">
          <div id="course_slider" class="owl-carousel">
            <div class="item">
              <div class="image bottom20">
                <img src="img/guru1.jpg" alt="Courses" class="img-responsive border_radius">
              </div>
              <h3 class="bottom5"><a href="#">Dhian Jois</a></h3>
			  <h6 class="bottom15">Mahasiswa</h6>
              <p class="bottom15">Seorang Web Developer Frontend yang mampu Menguasai Berbagai Bahasa Pemgrograman</p>
			  <p class="bottom15">Email : <a href="mailto:dhianjois@gmail.com">dhianjois@gmail.com</a></p>
            </div>
            <div class="item">
              <div class="image bottom20">
                <img src="img/guru2.jpg" alt="Courses" class="img-responsive border_radius">
              </div>
              <h3 class="bottom5"><a href="#">Septian Dwi Kurnia</a></h3>
			  <h6 class="bottom15">Mahasiswa</h6>
              <p class="bottom15">Seorang Cupu Player yang kerjaannya hanya tidur dan ngorok</p>
              <p class="bottom15">Email : <a href="mailto:septiandk15@gmail.com">septiandk15@gmail.com</a></p>
            </div>
            <div class="item">
              <div class="image bottom20">
                <img src="img/guru3.jpg" alt="Courses" class="img-responsive border_radius">
              </div>
			  <h3 class="bottom5"><a href="#">Aulia Sakinah</a></h3>
			  <h6 class="bottom15">Mahasiswa</h6>
              <p class="bottom15">Seorang Cewek yang katanya IPK 3,9 tapi gabisa ngmong R</p>
              <p class="bottom15">Email : <a href="mailto:AulyaSakinah@gmail.com">AulyaSakinah@gmail.com</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Guru -->


<!-- Footer -->
	<footer class="padding">
	<div class="container footertop bottom45">
		<a class="navbar-brand" href="index.html">Share2Learn</a>
		<p>Share2Learn adalah website yang digunakan untuk media sharing antara guru dan murid di mata kuliah tertentu</p>
		<ul class="social-icons padding25">
			<li><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
			<li><a href="https://twitter.com/login"><i class="fa fa-twitter"></i></a></li>
			<li><a href="https://plus.google.com"><i class="fa fa-google-plus"></i></a></li>
			<li><a href="https://www.linkedin.com/uas/login"><i class="fa fa-linkedin"></i></a></li>
			<li><a href="https://login.skype.com/login"><i class="fa fa-skype"></i></a></li>
		</ul>
	</div>
  <div class="container footermid">
    <div class="row">
      <div class="col-md-4 col-sm-4 footer_panel bottom25">
        <h3 class="heading bottom25" id="about-us">About Us<span class="divider-left"></span></h3>
        <a href="index3.html" class="footer_logo bottom25"></a>
        <p>Share To Learn ini berfungsi sebagai sarana untuk menambah wawasan dalam ilmu pengetahuan bagi pelajar yang nantinya pelajar mampu menanyakan materi yang belum di pahami di kelas, dan nanti akan di jawab oleh guru yang berkaitan dengan materi tersebut dan mahasiswa juga mampu membaca file-file materi yang di upload oleh guru.</p>
        
      </div>
      <div class="col-md-4 col-sm-4 footer_panel bottom25">
        <h3 class="heading bottom25" id="Quick">Quick Links<span class="divider-left"></span></h3>
        <ul class="links">
          <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
          <li><a href="#."><i class="fa fa-bank (alias)"></i> Company</a></li>
          <li><a href="#."><i class="fa fa-group (alias)"></i> Our Team</a></li>
          <li><a href="#."><i class="fa fa-history"></i> Company History</a></li>
          <li><a href="http://nostheme.com/ceritaku/"><i class="fa  fa-wordpress"></i> Blog</a></li>
          <li><a href="#guru"><i class="fa  fa-phone"></i> Contact Us</a></li>
        </ul>
      </div>
      <div class="col-md-4 col-sm-4 footer_panel bottom25">
        <h3 class="heading bottom25">Contact Us <span class="divider-left"></span></h3>
        <p class=" address"><i class="fa fa-automobile (alias)"></i> Jalan Landungsari Residence, Dau, Malang-Jawa Timur</p>
        <p class=" address"><i class="fa fa-whatsapp"></i> (654) 332-112-222</p>
        <p class=" address"><i class="icon-mail"></i><a href="mailto:dhianjois@gmail.com">dhianjois@gmail.com</a></p>
        <img src="images/footer-map.png" alt="we are here" class="img-responsive">
      </div>
    </div>
  </div>
   <div class="container footerbottom copyrights ">
    <div class="row">
      <div class="col-md-12 text-center">
        <p>Copyright &copy; 2016 <a href="#.">Edua</a>. all rights reserved.</p>
      </div>
    </div>
  </div>
</footer>
<!-- Footer -->
@extends('header')
@endsection