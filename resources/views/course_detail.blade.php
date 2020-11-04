<!--Page Header-->

<section class="page_header padding-top">
  <div class="container">
  
    <div class="row">
      <div class="col-md-12 page-content">
        <h1>{{ $detailthread->subject }} Class</h1>
        <p>We offer the most complete house renovating services in the country</p>
        <div class="page_nav">
      <span>You are here:</span> <a href="index.html">Home</a> <span><i class="fa fa-angle-double-right"></i>Pelajaran</span>
	  <span><i class="fa fa-angle-double-right"></i>{{ $detailthread->subject }}</span>
      </div>
      </div>
    </div>
  </div>
</section>
<!--Page Header-->	



<!-- Courses -->
<section id="course_all" class="padding-bottom-half padding-top ">
  <div class="container">
  
  
  
  
    <div class="row">
	@if(Auth::user()->level == '')
        <div class="slider_wrapper ">
		 <div class="col-md-12 text-center fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">
				<h2>Pilihlah Guru {{ $detailthread->subject }} Anda</h2>
				<p class="heading_space margin10">Pilihlah Guru Anda Berdasarkan Course {{ $detailthread->subject }}</p>
		</div>
          <div id="course_slider" class="owl-carousel course-now bot30">
			
			@foreach($pelajaran as $gurus)
            <div class="item">
              <div class="image bottom20">
                <img src="../img/guru/{{$gurus->guruimg_path}}" class="img-square">
              </div>
              <h3 class="bottom5"><a href="#">{{ $gurus->name }}</a></h3>
			  <h6 class="bottom15">{{ $gurus->status }}</h6>
              <p class="bottom15">{{ $gurus->description }}</p>
			  
              <a href="{{ route('messages.show', $gurus->id) }}" class="btn_common blue border_radius">Masuk Kelas</a>
            </div>
            @endforeach
          </div>
        </div>
	@endif	
	
      <div class="col-sm-8 course_detail wow fadeIn" data-wow-delay="400ms">
        <div class="detail_course">
          <div class="info_label">
            <span class="icony"><i class="fa fa-edit"></i></span>
            <p>Teacher</p>
            <h5>{{ $teacher->name }}</h5>
          </div>
          <div class="info_label">
            <span class="icony"><i class="fa fa-edit"></i></span>
            <p>Category</p>
            <h5>Software Training  /  {{ $detailthread->subject }}</h5>
          </div>
          <div class="info_label hidden-xs"></div>
          <div class="info_label">
            <form class="star_rating bottom5">
              <div class="stars">
                <input type="radio" name="star" class="star-1" id="star-01" />
                <label class="star-1" for="star-01">1</label>
                <input type="radio" name="star" class="star-2" id="star-02" />
                <label class="star-2" for="star-02">2</label>
                <input type="radio" name="star" class="star-3" id="star-03" />
                <label class="star-3" for="star-03">3</label>
                <input type="radio" name="star" class="star-4" id="star-04" checked />
                <label class="star-4" for="star-04">4</label> 
                <input type="radio" name="star" class="star-5"  id="star-05"  />
                <label class="star-5" for="star-05">5</label>
                <span></span>
              </div>
			  
            </form>
            
          </div>
		  
        </div>
		
		
		
		<div class="title-courses clearfix">
        <h3 class="top30 bottom20 left">{{ $detailthread->subject }}</h3>
		@if(Auth::user()->level == 'guru')	
		<button id="popup" onclick="div_show()"><i class="fa fa-video-camera"></i> Live Now</button>
		@endif
		</div>
         <div class="col-md-12 rowmin">
		 <!-- thread->creator()->name  -->
		<div class="youtube-embed">
		<h5 class="bot15">Pelajaran  {{ $detailthread->subject }} Live oleh {{ $teacher->name }}</h5>
		@foreach($embed as $embeds)
			<iframe width="100%" height="315" src="http://www.youtube.com/embed/{{$embeds->youtube_link}}?autoplay=1" frameborder="0" allowfullscreen autoplay></iframe>
		@endforeach
		</div>
		
		@foreach($thread as $threads)
		<div class="media">
		<a class="pull-left" href="#">
		<img src="//www.gravatar.com/avatar/{{ md5($threads->email ) }} ?s=64"
		 alt="{{ $threads->name  }}" class="img-circle">
		</a>
		<div class="media-body">
		<h5 class="media-heading">{{ $threads->name }}</h5>
		<p>{{ $threads->body }}</p>
		
		
		
		<div class="text-muted">
		<small>Posted {{ $threads->created_at }}</small>
		</div>
		</div>
		</div>
		@endforeach
		

        @include('messenger.partials.form-message')
    </div>

	
      </div>
      <aside class="col-sm-4 wow fadeIn" data-wow-delay="400ms">
        <div class="widget heading_space course-widget">
          <h3 class="bottom20">Class Popular</h3>
		  @foreach($ambilthreads as $thread)
          <div class="media">
            <a class="media-left" href="#."><img src="../img/coursesicon/{{$thread->icon_path}}" alt="post"></a>
            <div class="media-body">
              <h5 class="bottom5">Pelajaran {{ $thread->subject }}</h5>
              <a href="{{ route('messages.show', $thread->id) }}" class="btn-primary border_radius bottom5">Masuk </a>
              <span class="name">by {{ $thread->name }}</span>
            </div>
          </div>
		  @endforeach
        </div>
		
        <div class="widget heading_space">
          <h3 class="bottom20">Working Hours</h3>
          <p class="hours"> Monday <span>8:15 am - 5.30 pm</span></p>
          <p class="hours">Tuesday <span>8:15 am - 5.30 pm</span></p>
          <p class="hours">Wednesday <span>8:15 am - 5.30 pm</span></p>
          <p class="hours">Thursday <span>8:15 am - 5.30 pm</span></p>
          <p class="hours">Friday <span>8:15 am - 5.30 pm</span></p>
          <p class="hours">Saturday <span>9:30 am - 4.00 pm</span></p>
          <p class="hours">Sunday <span><a href="#." class="border_radius text-uppercase">closed</a></span></p>
        </div>
        <div class="widget heading_space">
          <h3 class="bottom20">Top Tags</h3>
          <ul class="tags">
            <li><a href="#.">Books</a></li>
            <li><a href="#.">Midterm test </a></li>
            <li><a href="#.">Presentation</a></li>
            <li><a href="#.">Courses</a></li>
            <li><a href="#.">Certifications</a></li>
            <li><a href="#.">Teachers</a></li>
            <li><a href="#.">Student Life</a></li>
            <li><a href="#.">Study</a></li>
            <li><a href="#.">Midterm test </a></li>
            <li><a href="#.">Presentation</a></li>
            <li><a href="#.">Courses</a></li>
          </ul>
        </div>
      </aside>
@if(Auth::user()->level == 'guru')	  
	  	<!-- create embed live-->
<div id="abc">
<!-- Popup Div Starts Here -->
<div id="popupContact">
<!-- Contact Us Form -->

<form  class="embedform" action="{{ route('embed.store') }}" id="form" method="post" name="form">
 {{csrf_field()}}
<i id="close-embed" onclick="div_hide()" class="fa fa-close"></i>
<h2>Input Youtube Embed</h2>
<input type="hidden" name="partid" value="{{ $participant->id }}" readonly=""  />


<textarea id="msg" name="message" placeholder="Youtube Link ID ex : 87gWaABqGYs"></textarea>
<a href="javascript:%20check_empty()" id="submit">Send</a>
</form>
</div>
<!-- Popup Div Ends Here -->
</div>
@endif
    </div>
  </div>
</section>
<!-- Courses -->