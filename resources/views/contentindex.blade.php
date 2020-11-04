

@if(Auth::user()->level == 'guru')
<!-- courses -->
<section class="bg-courses padding">
	<div class="container pelajaran">
		<div class="row number-counters ">
			<div class="col-md-12 text-center fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">
				<h2>Kelas Anda</h2>
				<p class="heading_space margin10">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
			</div>




			 @foreach($pilih as $courses)
			 
			<div class="col-md-2 text-center fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">
				<div class="courses courses1" style="background-color:{{ $courses->color_scheme }}">
					<div class="icon"> <img src="img/coursesicon/{{$courses->icon_path}}" alt=""></div>
					<a class="name-category" href="{{ route('messages.show', $courses->id) }}" title="{{ $courses->subject }}">{{ $courses->subject }}</a>
				</div>
			</div>	
			
			@endforeach
			
		</div>
	</div>
	
	
</section>
@endif

@if(Auth::user()->level == '')
<!-- courses -->
<section class="bg-courses padding">
	<div class="container pelajaran">
		<div class="row number-counters ">
			<div class="col-md-12 text-center fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">
				<h2>Macam Macam Pelajaran</h2>
				<p class="heading_space margin10">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
			</div>




			 @foreach($part_threads as $courses)
			 
			<div class="col-md-2 text-center fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">
				<div class="courses courses1" style="background-color:{{ $courses->color_scheme }}">
					<div class="icon"> <img src="img/coursesicon/{{$courses->icon_path}}" alt=""></div>
					<a class="name-category" href="{{ route('messages.show', $courses->id) }}" title="{{ $courses->subject }}">{{ $courses->subject }}</a>
				</div>
			</div>	
			@endforeach
			
		</div>
	</div>
	
	
</section>
@endif



@if(Auth::user()->level == '')
<!-- Guru -->
<section id="guru" class="padding guru">
	<div class="container ">
    <div class="row ">
      <div class="col-md-12 text-center fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">
				<h2>Guru Guru Kita</h2>
				<p class="heading_space margin10">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
		</div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="slider_wrapper">
          <div id="course_slider" class="owl-carousel">
		  @foreach($guru as $gurus)
            <div class="item">
              <div class="image bottom20">
                <img src="img/guru/{{$gurus->guruimg_path}}" class="img-square">
              </div>
              <h3 class="bottom5"><a href="#">{{ $gurus->name }}</a></h3>
			  <h6 class="bottom15">{{ $gurus->status }}</h6>
              <p class="bottom15">{{ $gurus->description }}</p>
			  
              <a href="{{ route('messages.show', $gurus->id) }}" class="btn_common blue border_radius">Masuk Kelas</a>
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Guru -->
@endif

<!--Fun Facts-->
<section id="counter" class="parallax padding">
  <div class="container">
    <h2 class="hidden">hidden</h2>
    <div class="row number-counters">
      <div class="col-md-3 col-sm-6 col-xs-6 counters-item text-center wow fadeInUp" data-wow-delay="300ms">
        <i class="fa fa-thumbs-o-up"></i>
        <strong data-to="1235">0</strong>
        <p>Siswa Mengerti</p>
      </div>
      <div class="col-md-3 col-sm-6 col-xs-6 counters-item text-center wow fadeInUp" data-wow-delay="400ms">
        <i class="fa fa-television"></i>
        <strong data-to="78">0</strong>
        <p>Guru Mudah Menyampaikan</p>
      </div>
      <div class="col-md-3 col-sm-6 col-xs-6 counters-item text-center wow fadeInUp" data-wow-delay="500ms">
        <i class="fa fa-sign-language"></i>
        <strong data-to="186">0</strong>
        <p>Tugas selesai / Minggu</p>
      </div>
      <div class="col-md-3 col-sm-6 col-xs-6 counters-item text-center wow fadeInUp" data-wow-delay="600ms">
        <i class="fa fa-users"></i>
        <strong data-to="89">0</strong>
        <p>Jumlah Member</p>
      </div>
    </div>
  </div>
</section>
<!--Fun Facts-->



<!-- Gallery -->
<section id="gallery" class="padding">
  <div class="container">
    <div class="row">
      <div class="col-sm-5">
        <h2 class="heading heading_space">Share2Learn Gallery<span class="divider-left"></span></h2>
      </div>
      <div class="col-sm-7">
        <div id="project-filter" class="cbp-l-filters-alignRight">
          <div data-filter="*" class="cbp-filter-item-active cbp-filter-item">ALL IMAGES</div>
		   <?php $no=1; ?>
 			@foreach($courses_sort as $crudgallery)
         	 <div data-filter=".{{$crudgallery->courses}}" class="cbp-filter-item">{{$crudgallery->courses}}</div>
		  	@endforeach
        </div>
      </div>
    </div>
	
    <div id="projects" class="cbp">
	    <?php $no=1; ?>
 		@foreach($cruds as $crudgallery)
      <div class="cbp-item course {{$crudgallery->courses}}">
        <img src="gallery/{{$crudgallery->picture_path}}" alt="">
        <div class="overlay">
          <div class="centered text-center">
		   <form method="POST" action="{{ route('crudgallery.destroy', $crudgallery->id) }}" acceptcharset="UTF-8">
		    <input name="_method" type="hidden" value="DELETE">
			 <input name="_token" type="hidden" value="{{ csrf_token() }}">
            <a href="gallery/{{$crudgallery->picture_path}}" class="cbp-lightbox opens"> <i class="fa fa-search"></i></a>
			</form>
          </div>
        </div>
      </div>
	  	@endforeach
      
    </div>
  </div>
</section>
<!-- Gallery -->