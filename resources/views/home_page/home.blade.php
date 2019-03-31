@extends('home_page.index')
@section('content')
<section class="rev_slider_wrapper mt-xs-45">
     <div class="rev_slider materialize-slider" >
      <ul>

        <!-- slide 1 start -->
        @foreach ($slideshow['slider'] as $row )
        <li data-transition="fade" data-slotamount="default" data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000" data-thumb="{{asset('public/img/slideshow/'.$row->img)}}"  data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off"  data-title="materialize Material" data-description="">

            <!-- MAIN IMAGE -->
            <img src="{{asset('public/img/slideshow/'.$row->img)}}"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>


            <!-- LAYER NR. 1 -->
            <div class="tp-caption NotGeneric-Title tp-resizeme"
                data-x="['left','left','center','center']" data-hoffset="['20','20','0','0']" 
                data-y="['center','center','top','top']" data-voffset="['-100','-100','50','50']"
                data-fontsize="['70','60','50','45']"
                data-lineheight="['70','60','40','40']"
                data-width="none"
                data-height="none"
                data-whitespace="nowrap"
                data-transform_idle="o:1;"
                data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:600;e:Power4.easeInOut;" 
                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
                data-start="800" 
                data-splitin="none" 
                data-splitout="none" 
                data-responsive_offset="on"
                style="z-index: 5; color: #373a3d; white-space: nowrap;">{{$row->title}}
            </div>

            <!-- LAYER NR. 2 -->
            <div class="tp-caption tp-resizeme rev-subheading"
                data-x="['left','left','center','center']" data-hoffset="['20','20','0','0']" 
                data-y="['center','center','top','top']" data-voffset="['0','0','140','140']"
                data-whitespace="nowrap"
                data-transform_idle="o:1;"
     
                data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:600;e:Power4.easeInOut;" 
                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
                data-start="1000" 
                data-splitin="none" 
                data-splitout="none" 
                data-responsive_offset="on"
                style="z-index: 6; color: #666; white-space: nowrap;">{{$row->description}}
            </div>

            <!-- LAYER NR. 3 -->
            <div class="tp-caption tp-resizeme"
                data-x="['left','left','center','center']" data-hoffset="['20','20','0','0']" 
                data-y="['middle','middle','top','top']" data-voffset="['100','100','220','220']"
                data-width="none"
                data-height="none"
                data-whitespace="nowrap"
                data-transform_idle="o:1;"
                data-style_hover="cursor:default;"
                data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:600;e:Power4.easeInOut;" 
                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
                data-start="1200" 
                data-splitin="none" 
                data-splitout="none" 
                data-responsive_offset="on"
                style="z-index: 7; white-space: nowrap;">
                <a href="#contact" class="btn btn-lg  waves-effect waves-light">Contact</a>
            </div>
        </li>
        @endforeach


        <!-- slide 1 end -->    
      </ul>             
     </div><!-- end revolution slider -->
</section><!-- end of slider wrapper -->

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
                  <img class="img-responsive" src="{{asset('public/img/'.$row2->img)}}" alt="">
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
			         <img src="{{asset('public/img/'.$row3->img)}}" alt="" class="img-responsive">
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
                      <img src="{{asset('public/img/portofolio/'.$row6->img)}}" alt="">
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