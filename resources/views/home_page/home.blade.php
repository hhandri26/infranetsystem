@extends('home_page.index')
@section('content')
<section class="slider-revolution-wrapper mt-xs-46">
    <div class="tp-banner-container">
        <div class="tp-banner">
            <ul><!-- SLIDE  -->
              @foreach ($slideshow['slider'] as $row )
                <li data-transition="fade" data-slotamount="7" data-masterspeed="500"  data-saveperformance="off" >
                    <!-- MAIN IMAGE -->
                    <img src="{{asset('/storage/app/file/slideshow/'.$row->img)}}"  alt="" data-lazyload="{{asset('/storage/app/file/slideshow/'.$row->img)}}" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat">
                    <!-- LAYERS -->                
                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption rev-heading-intro sfb dark-text text-medium"
                        data-x="30"
                        data-y="200" 
                        data-speed="600"
                        data-start="1000"
                        data-easing="Power3.easeInOut"
                        data-elementdelay="0.1"
                        data-endelementdelay="0.1"
                        data-endspeed="300"
                        style="z-index: 10;">{{$row->title}}
                    </div>

                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption rev-heading sfb dark-text text-extrabold"
                        data-x="30"
                        data-y="250" 
                        data-speed="600"
                        data-start="1200"
                        data-easing="Power3.easeInOut"
                        data-elementdelay="0.1"
                        data-endelementdelay="0.1"
                        data-endspeed="300"
                        style="z-index: 10;">{{$row->description}}
                    </div>
                </li>
              @endforeach

            </ul>
            <div class="tp-bannertimer"></div>
        </div>
    </div>
</section>

<section class="section-padding">
    <div class="container">

      <div class="text-center mb-80">
          <h2 class="section-title text-uppercase">{{$section1['sect1'][0]->title}}</h2>
          <p class="section-sub">{{$section1['sect1'][0]->h_description}}</p>
      </div>

      <div class="seo-featured-carousel brand-dot">
        @foreach ($section1['sect1'] as $row2)
          <div class="featured-item seo-service">
              <div class="icon">
                  <img class="img-responsive" src="{{asset('/storage/app/file/service/'.$row2->img)}}" alt="">
              </div>
              <div class="desc">
                  <h2>{{$row2->d_title}}</h2>
                  <p>{{$row2->d_description}}</p>
                  <div class="bg-overlay"></div>
                  <p><a class="learn-more" href="#">Learn More <i class="fa fa-long-arrow-right"></i></a></p>
              </div>
          </div><!-- /.featured-item -->
        @endforeach
      </div><!-- /.seo-featured -->
    </div><!-- /.container -->
</section>
@foreach ($section1['sect2'] as $row3)
<section class="section-padding dark-bg lighten-4">
    <div class="container">
      <div class="row">
        <div class="col-md-7 light-grey-text">
        	<h2 class="font-40 mb-30 white-text">{{$row3->d_title}}</h2>
        	<p>{{$row3->d_description}}</p>

        	<a href="#contact" class="btn btn-lg text-capitalize waves-effect waves-light">Contact Us</a>

        </div><!-- /.col-md-7 -->

        <div class="col-md-5 mt-sm-30">
			         <img src="{{asset('/storage/app/file/service/'.$row3->img)}}" alt="" class="img-responsive">
        </div><!-- /.col-md-5 -->
      </div><!-- /.row -->
    </div><!-- /.container -->
</section>
@endforeach

<section class="section-padding">
    <div class="container">

      <div class="text-center mb-80">
          <h2 class="section-title text-uppercase">{{$section1['sect3'][0]->title}}</h2>
          <p class="section-sub">{{$section1['sect3'][0]->h_description}}</p>
      </div>


        <div class="row">
          @foreach ($section1['sect3'] as $row4)
            <div class="col-md-4 mb-50">
                <div class="featured-item feature-icon icon-hover icon-hover-brand icon-outline">
                    <div class="icon">
                        <i class="material-icons colored brand-icon">{{$row4->icon}}</i>
                    </div>
                    <div class="desc">
                        <h2>{{$row4->d_title}}</h2>
                        <p>{{$row4->d_description}}</p>
                    </div>
                </div><!-- /.featured-item -->
            </div><!-- /.col-md-4 -->
          @endforeach
      </div><!-- /.row -->
      @foreach ($section1['sect4'] as $row5)
        <div class="promo-box gray-bg border-box mt-100">
            <div class="promo-info">
                <h2 class="text-extrabold text-uppercase font-25">{{$row5->d_title}}</h2>
                <p>{{$row5->d_description}}</p>
            </div>
            <div class="promo-btn">
                <a href="#contact" class="btn btn-lg text-capitalize waves-effect waves-light">Get it now</a>
            </div>
        </div>
      @endforeach

    </div><!-- /.container -->
</section>

<section class="section-padding gray-bg">
  <div class="container">
    <div class="text-center mb-50">
        <h2 class="section-title text-uppercase">Portofolio</h2>
    </div>


    <div class="portfolio-container text-center">
        <div class="portfolio col-4 mtb-50">
            <!-- add "gutter" class for add spacing -->
            @foreach ($section1['gallery'] as $row6)
            <div class="portfolio-item">
                <div class="portfolio-wrapper">
                  <div class="thumb">
                      <div class="bg-overlay"></div>
                      <img src="{{asset('/storage/app/file/gallery/'.$row6->img)}}" alt="">
                      <div class="portfolio-intro">
                        <div class="action-btn">
                          <a href="#"> <i class="fa fa-link"></i> </a>
                        </div>
                        <h2><a href="#">{{$row6->title}}</a></h2>
                        <p><a href="#">{{$row6->desc}}</a></p>
                      </div>
                  </div><!-- thumb -->
                </div><!-- /.portfolio-wrapper -->
            </div><!-- /.portfolio-item -->
            @endforeach


        </div><!-- /.portfolio -->

    </div><!-- portfolio-container -->
  </div>
</section>
@endsection