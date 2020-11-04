@extends('layouts.app')

	
<!--Header-->
<header>
  <nav class="navbar navbar-default navbar-fixed white no-background bootsnav" >
    <div class="container"> 
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
          <i class="fa fa-bars"></i>
        </button>
        <a class="navbar-brand" href="{{URL::to('/')}}">Share2Learn</a>
      </div>
      <div class="collapse navbar-collapse" id="navbar-menu">
        <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOut">
		 <li class="dropdown">
            <a href="{{URL::to('/')}}"  data-toggle="dropdown" >Home</a>
  
          </li>		  
          @if (Auth::guest())
          <li><a href="{{ url('/register') }}">Register</a></li>
          @endif
          
        </ul>
      </div>
    </div>   
  </nav>
</header>


<!--Slider-->
<section class="rev_slider_wrapper text-center" style="height:100%!important"> 			
<!-- START REVOLUTION SLIDER 5.0 auto mode -->

  <div id="rev_slider" class="rev_slider"  data-version="5.0" style="height:100%!important">
    <ul>	
    <!-- SLIDE  -->
      <li data-transition="fade">
        <!-- MAIN IMAGE -->
        <img src="img/banner1.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgparallax="10" class="rev-slidebg">							
        <!-- LAYER NR. 1 -->
        <div class="tp-caption tp-resizeme" 							
        data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
        data-y="['346','170','270','150']" data-voffset="['0','0','0','0']"						
        data-responsive_offset="on"
        data-visibility="['on','on','on','on']"
        data-transform_idle="o:1;"
        data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:200;e:Power3.easeInOut;" 
        data-transform_out="y:[100%];s:200;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
        data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"							 
        data-start="800"><h1>Best Online Learning</h1>
        </div>
        <div class="tp-caption tp-resizeme" 							
        data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
        data-y="['400','240','300','350']" data-voffset="['0','0','0','0']"
        data-responsive_offset="on"
        data-visibility="['on','on','off','off']"
        data-transform_idle="o:1;"
        data-transform_in="opacity:0;s:1000;e:Power2.easeInOut;" 
        data-transform_out="opacity:0;s:1000;s:1000;"
        data-start="1500"><p>Your chance to be a trending expert in IT industries and make a successful <br/> career after completion of our courses.</p>
        </div>
        <div class="tp-caption  tp-resizeme" 							
        data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
        data-y="['470','290','350','250']" data-voffset="['0','0','0','0']"							
        data-responsive_offset="on"
        data-visibility="['on','on','on','on']"
        data-transform_idle="o:1;"
        data-transform_in="y:[-200%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
        data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" 
        data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
        data-mask_out="x:0;y:0;s:inherit;e:inherit;" 							 
        data-start="2000">
		<a href="#share2learn-registeras" class="border_radius btn_common blue">Get Start</a>
		 
		
      </li>

      <li data-transition="fade">
        <img src="img/banner2.jpg"  alt="" data-bgposition="center center" data-bgfit="cover" data-bgparallax="10" class="rev-slidebg">							
        <div class="tp-caption tp-resizeme" 							
        data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
        data-y="['326','270','270','150']" data-voffset="['0','0','0','0']"						
        data-responsive_offset="on"
        data-visibility="['on','on','on','on']"
        data-transform_idle="o:1;"
        data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;" 
        data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
        data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"							 
        data-start="800"><h1>Kita Membawa Sistem Belajar Online</h1>
        </div>
        <div class="tp-caption tp-resizeme" 							
        data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
        data-y="['380','340','300','350']" data-voffset="['0','0','0','0']"
        data-responsive_offset="on"
        data-visibility="['on','on','off','off']"
        data-transform_idle="o:1;"
        data-transform_in="opacity:0;s:1000;e:Power2.easeInOut;" 
        data-transform_out="opacity:0;s:1000;s:1000;" 
        data-start="1500"><p>Your chance to be a trending expert in IT industries and make a successful <br/> career after completion of our courses.</p>
        </div>
        <div class="tp-caption  tp-resizeme" 							
        data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
        data-y="['450','390','350','250']" data-voffset="['0','0','0','0']"							
        data-responsive_offset="on"
        data-visibility="['on','on','on','on']"
        data-transform_idle="o:1;"
        data-transform_in="y:[-200%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
        data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" 
        data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
        data-mask_out="x:0;y:0;s:inherit;e:inherit;" 							 
        data-start="2000">
        <a href="#." class="border_radius btn_common blue">Get a quote</a>
        </div>
      </li>
    </ul>				
  </div><!-- END REVOLUTION SLIDER -->
  </div>
</section>	

<section class="share2learn-registeras share2learn_registermhs top45 bottom45" id="share2learn-registeras">
	<div class="container">
		<div class="row number-counters ">
			<div class="col-md-12 text-center fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">
				<h2 class="heading">Masuk Sebagai<span class="divider-center"></span></h2>
				<p class="heading_space margin10">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
			</div>
			
			<div class="col-md-3 fadeInLeft animated"> 
				<div class="register_content">
					<span><img src="img/studentico.png" /></span>
					<h3>Login Sebagai Siswa</h3>
					<p>World Largest books and library center is here where you can study the latest trends of the education.</p>
     
					<a href="{{ URL::to('/login') }}" class="border_radius btn_common blue">Login Siswa</a>
      
				</div>
			</div>
			<div class="col-md-3 fadeInLeft animated">
				<div class="register_figure">
					<figure>
						<img src="img/mahasiswa.png" alt="">
					</figure>
				</div>
			</div>
			
			
			<div class="col-md-3 fadeInRight animated"> <!-- dosen -->
				<div class="register_figure">
					<figure>
						<img src="img/teacher.png" alt="">
					</figure>
				</div>
			</div>
			<div class="col-md-3 fadeInRight animated"> 
				<div class="register_content">
					<span><img src="img/teacherico.png" /></span>
					<h3>Login Sebagai Guru</h3>
					<p>World Largest books and library center is here where you can study the latest trends of the education.</p>
					<a href="{{url('/login')}}" class="border_radius btn_common green">Login Guru</a>
				</div>
			</div>
			
		</div>
	</div>
</section>





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