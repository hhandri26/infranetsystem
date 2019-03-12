@extends('home_page.index')
@section('content')
<section class="page-title ptb-50">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Pelatihan</h2>
                <ol class="breadcrumb">
                    <li><a href="{{route('home_page')}}">Home</a></li>
                    <li class="active">Pelatihan</li>
                </ol>
            </div>
        </div>
    </div>
</section>
<section class="section-padding">
	<div class="container">

		<div class="text-center mb-50">
		  <h2 class="section-title">Pelatihan Yang Kita Ajarkan</h2>
		 
		</div>

		<div class="portfolio-container text-center">
			<ul class="portfolio-filter brand-filter">
			  <li class="active waves-effect waves-light" data-group="all">All</li>
			  <li class=" waves-effect waves-light" data-group="websites">Websites</li>
			  <li class=" waves-effect waves-light" data-group="branding">Mobile Programming</li>
			  <li class=" waves-effect waves-light" data-group="branding">Design</li>
			  <li class=" waves-effect waves-light" data-group="branding">Autocad</li>
			  <li class=" waves-effect waves-light" data-group="marketing">Costum</li>
			</ul>

			<div class="portfolio portfolio-with-title col-3 gutter mtb-50">
				<!-- loop -->
			  	<div class="portfolio-item" data-groups='["all", "branding", "photography"]'>
					<div class="portfolio-wrapper">
					<div class="thumb">
						<div class="bg-overlay brand-overlay"></div>
						<img src="{{asset('img/icon-kursus/php.png')}}" alt="">

						<div class="portfolio-intro">
							<div class="action-btn">
								<a href="{{asset('img/icon-kursus/php.png')}}" class="tt-lightbox" title="iOS Game Design"> 
									<i class="fa fa-search"></i>
								</a>
							</div>
						</div>
					</div>
					<div class="portfolio-title">
						<h2><a href="#">Programmer Junior</a></h2>
						<p><a href="{{route('detial-pelatihan')}}" class="btn btn-info">Detail</a> </p>
					</div>

					</div>
			  	</div>
			  	<!-- end loop -->

			  

			</div>

		</div>
	</div>
</section>

@endsection