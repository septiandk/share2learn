<!--Page Header-->


<section class="page_header padding-top">
  <div class="container">
  
    <div class="row">
      <div class="col-md-12 page-content">
        <h1>Ambil Kelas</h1>
        <p>Ditempat Ini Guru Dapat memilih Kelas</p>
        <div class="page_nav">
      <span>You are here:</span> <a href="index.html">Home</a> <span><i class="fa fa-angle-double-right"></i>Kelas</span>
	  <span><i class="fa fa-angle-double-right"></i>Ambil Kelas</span>
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
      <div class="col-sm-8 course_detail wow fadeIn" data-wow-delay="400ms">
        <div class="detail_course">
          <div class="info_label">
            <span class="icony"><i class="icon-users3"></i></span>
            <p>Category</p>
            <h5>Ambil Kelas</h5>
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
		
		<div class="col-sm-12 take_course">
	
		@if( $user->jmlhcourse < 2) 
		<form  class="ambilcourse" action="{{ route('messages.ambilcourse') }}" id="form" method="post" name="form">
		 {{csrf_field()}}
		<div class="top30 bot15">Pilihlah Mata Pelajaran anda, Anda Sebagai Guru dengan username {{ Auth::user()->name }}</div>
		<label>Select Pelajaran</label>
		<select name="Courses">
		@foreach($threads as $thread)
		  <option value="{{$thread->id}}">{{$thread->subject}}</option>
		@endforeach
		</select>
		<input class="btn-primary border_radius bottom5" type="submit"  value="Submit"/>
		</form> 
		@else 
			<div class="row30">Anda Tidak Bisa Menggambil Mata Kuliah Lebih dari 2</div>
		@endif
		
		
		<div class="row number-counters row30">
			<div class="col-md-6 row30 fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">
				<h2>Kelas Anda</h2>
				<p class="heading_space margin10">Kelas Kelas Yang Anda Pilih</p>
			</div>

			 @foreach($pilih as $courses)
			<div class="col-md-3 text-center fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">
				<div class="courses courses1" style="background-color:{{ $courses->color_scheme }}">
					<div class="icon"> <img src="img/coursesicon/{{$courses->icon_path}}" alt=""></div>
					<a class="name-category" href="{{ route('messages.show', $courses->id) }}" title="{{ $courses->subject }}">{{ $courses->subject }}</a>
				</div>
			</div>	
			@endforeach
			
		</div>
		
		</div>
		</div>
		
        
      <aside class="col-sm-4 wow fadeIn" data-wow-delay="400ms">
        
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
	  

    </div>
  </div>
</section>
<!-- Courses -->