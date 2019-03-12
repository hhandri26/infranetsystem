@extends('home_page.index')
@section('content')
<section class="rev_slider_wrapper mt-xs-45">
     <div class="rev_slider materialize-slider" >
      <ul>

        <!-- slide 1 start --> 
        <li data-transition="fade" data-slotamount="default" data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000" data-thumb="{{asset('img/slider-bg-1.jpg')}}"  data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off"  data-title="materialize Material" data-description="">

            <!-- MAIN IMAGE -->
            <img src="{{asset('img/slider-bg-1.jpg')}}"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>


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
                style="z-index: 5; color: #373a3d; white-space: nowrap;">Optimize Your Site
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
                style="z-index: 6; color: #666; white-space: nowrap;">Materialize is an interactive agency. Which develops websites <br> and premium mobile applications.
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
                <a href="#" class="btn btn-lg  waves-effect waves-light">Explore More</a>
            </div>
        </li>
        <!-- slide 1 end -->    
      </ul>             
     </div><!-- end revolution slider -->
</section><!-- end of slider wrapper -->

<section class="section-padding">
    <div class="container">

      <div class="text-center mb-80">
          <h2 class="section-title text-uppercase">What We Do</h2>
          <p class="section-sub">Quisque non erat mi. Etiam congue et augue sed tempus. Aenean sed ipsum luctus, scelerisque ipsum nec, iaculis justo. Sed at vestibulum purus, sit amet viverra diam nulla ac nisi rhoncus.</p>
      </div>

      <div class="seo-featured-carousel brand-dot">
          <div class="featured-item seo-service">
              <div class="icon">
                  <img class="img-responsive" src="{{asset('img/service-1.jpg')}}" alt="">
              </div>
              <div class="desc">
                  <h2>Web Optimize</h2>
                  <p>Porttitor communicate pandemic data rather than enabled niche pandemic data rather markets</p>
                  <div class="bg-overlay"></div>
                  <p><a class="learn-more" href="#">Learn More <i class="fa fa-long-arrow-right"></i></a></p>
              </div>
          </div><!-- /.featured-item -->


          <div class="featured-item seo-service">
              <div class="icon">
                  <img class="img-responsive" src="{{asset('img/service-2.jpg')}}" alt="">
              </div>
              <div class="desc">
                  <h2>Data Analysis</h2>
                  <p>Porttitor communicate pandemic data rather than enabled niche pandemic data rather markets</p>
                  <div class="bg-overlay"></div>
                  <p><a class="learn-more" href="#">Learn More <i class="fa fa-long-arrow-right"></i></a></p>
              </div>
          </div><!-- /.featured-item -->


          <div class="featured-item seo-service">
              <div class="icon">
                  <img class="img-responsive" src="{{asset('img/service-3.jpg')}}" alt="">
              </div>
              <div class="desc">
                  <h2>Concept Development</h2>
                  <p>Porttitor communicate pandemic data rather than enabled niche pandemic data rather markets</p>
                  <div class="bg-overlay"></div>
                  <p><a class="learn-more" href="#">Learn More <i class="fa fa-long-arrow-right"></i></a></p>
              </div>
          </div><!-- /.featured-item -->


          <div class="featured-item seo-service">
              <div class="icon">
                  <img class="img-responsive" src="{{asset('img/service-4.jpg')}}" alt="">
              </div>
              <div class="desc">
                  <h2>Content Marketing</h2>
                  <p>Porttitor communicate pandemic data rather than enabled niche pandemic data rather markets</p>
                  <div class="bg-overlay"></div>
                  <p><a class="learn-more" href="#">Learn More <i class="fa fa-long-arrow-right"></i></a></p>
              </div>
          </div><!-- /.featured-item -->


          <div class="featured-item seo-service">
              <div class="icon">
                  <img class="img-responsive" src="{{asset('img/service-5.jpg')}}" alt="">
              </div>
              <div class="desc">
                  <h2>Big Data</h2>
                  <p>Porttitor communicate pandemic data rather than enabled niche pandemic data rather markets</p>
                  <div class="bg-overlay"></div>
                  <p><a class="learn-more" href="#">Learn More <i class="fa fa-long-arrow-right"></i></a></p>
              </div>
          </div><!-- /.featured-item -->


          <div class="featured-item seo-service">
              <div class="icon">
                  <img class="img-responsive" src="{{asset('img/service-6.jpg')}}" alt="">
              </div>
              <div class="desc">
                  <h2>Mobile Marketing</h2>
                  <p>Porttitor communicate pandemic data rather than enabled niche pandemic data rather markets</p>
                  <div class="bg-overlay"></div>
                  <p><a class="learn-more" href="#">Learn More <i class="fa fa-long-arrow-right"></i></a></p>
              </div>
          </div><!-- /.featured-item -->


          <div class="featured-item seo-service">
              <div class="icon">
                  <img class="img-responsive" src="{{asset('img/service-7.jpg')}}" alt="">
              </div>
              <div class="desc">
                  <h2>Data Organize</h2>
                  <p>Porttitor communicate pandemic data rather than enabled niche pandemic data rather markets</p>
                  <div class="bg-overlay"></div>
                  <p><a class="learn-more" href="#">Learn More <i class="fa fa-long-arrow-right"></i></a></p>
              </div>
          </div><!-- /.featured-item -->


          <div class="featured-item seo-service">
              <div class="icon">
                  <img class="img-responsive" src="{{asset('img/service-8.jpg')}}" alt="">
              </div>
              <div class="desc">
                  <h2>Pay Per Click</h2>
                  <p>Porttitor communicate pandemic data rather than enabled niche pandemic data rather markets</p>
                  <div class="bg-overlay"></div>
                  <p><a class="learn-more" href="#">Learn More <i class="fa fa-long-arrow-right"></i></a></p>
              </div>
          </div><!-- /.featured-item -->
      </div><!-- /.seo-featured -->

    </div><!-- /.container -->
</section>

<section class="section-padding dark-bg lighten-4">
    <div class="container">
      <div class="row">
        <div class="col-md-7 light-grey-text">
        	<h2 class="font-40 mb-30 white-text">We Offer a Full Range of Digital Marketing Services!</h2>
        	<p>Quisque non erat mi. Etiam congue et augue sed tempus. Aenean sed ipsum luctus, scelerisque ipsum nec, iaculis justo. Sed at vestibulum purus, sit amet viverra diam. </p>

        	<ul class="list-icon mb-30">
        		<li><i class="material-icons">&#xE876;</i> We deliver Top Rankings.</li>
        		<li><i class="material-icons">&#xE876;</i> High customer retention rate.</li>
        		<li><i class="material-icons">&#xE876;</i> We always return e-mails and calls within one business day.</li>
        	</ul>

        	<a href="#." class="btn btn-lg text-capitalize waves-effect waves-light">Contact Us</a>

        </div><!-- /.col-md-7 -->

        <div class="col-md-5 mt-sm-30">
			         <img src="{{asset('img/seo-info-light.png')}}" alt="" class="img-responsive">
        </div><!-- /.col-md-5 -->
      </div><!-- /.row -->
    </div><!-- /.container -->
</section>

<section class="section-padding">
    <div class="container">

      <div class="text-center mb-80">
          <h2 class="section-title text-uppercase">Why Choose Us</h2>
          <p class="section-sub">Quisque non erat mi. Etiam congue et augue sed tempus. Aenean sed ipsum luctus, scelerisque ipsum nec, iaculis justo. Sed at vestibulum purus, sit amet viverra diam nulla ac nisi rhoncus.</p>
      </div>


        <div class="row">
            <div class="col-md-4 mb-50">
                <div class="featured-item feature-icon icon-hover icon-hover-brand icon-outline">
                    <div class="icon">
                        <i class="material-icons colored brand-icon">&#xE02F;</i>
                    </div>
                    <div class="desc">
                        <h2>Content</h2>
                        <p>Porttitor communicate pandemic data rather than enabled niche markets neque pulvinar vitae.</p>
                    </div>
                </div><!-- /.featured-item -->
            </div><!-- /.col-md-4 -->
          
            <div class="col-md-4 mb-50">
                <div class="featured-item feature-icon icon-hover icon-hover-brand icon-outline">
                    <div class="icon">
                        <i class="material-icons colored brand-icon">&#xE01D;</i>
                    </div>
                    <div class="desc">
                        <h2>Strategy</h2>
                        <p>Porttitor communicate pandemic data rather than enabled niche markets neque pulvinar vitae.</p>
                    </div>
                </div><!-- /.featured-item -->
            </div><!-- /.col-md-4 -->
          
            <div class="col-md-4 mb-50">
                <div class="featured-item feature-icon icon-hover icon-hover-brand icon-outline">
                    <div class="icon">
                        <i class="material-icons colored brand-icon">&#xE80D;</i>
                    </div>
                    <div class="desc">
                        <h2>Social Media</h2>
                        <p>Porttitor communicate pandemic data rather than enabled niche markets neque pulvinar vitae.</p>
                    </div>
                </div><!-- /.featured-item -->
            </div><!-- /.col-md-4 -->

            <div class="col-md-4 mb-50">
                <div class="featured-item feature-icon icon-hover icon-hover-brand icon-outline">
                    <div class="icon">
                        <i class="material-icons colored brand-icon">&#xE869;</i>
                    </div>
                    <div class="desc">
                        <h2>Optimize</h2>
                        <p>Porttitor communicate pandemic data rather than enabled niche markets neque pulvinar vitae.</p>
                    </div>
                </div><!-- /.featured-item -->
            </div><!-- /.col-md-4 -->
          
            <div class="col-md-4 mb-50">
                <div class="featured-item feature-icon icon-hover icon-hover-brand icon-outline">
                    <div class="icon">
                        <i class="material-icons colored brand-icon">&#xE8FA;</i>
                    </div>
                    <div class="desc">
                        <h2>Keyword Research</h2>
                        <p>Porttitor communicate pandemic data rather than enabled niche markets neque pulvinar vitae.</p>
                    </div>
                </div><!-- /.featured-item -->
            </div><!-- /.col-md-4 -->
          
            <div class="col-md-4 mb-50">
                <div class="featured-item feature-icon icon-hover icon-hover-brand icon-outline">
                    <div class="icon">
                        <i class="material-icons colored brand-icon">&#xE7FD;</i>
                    </div>
                    <div class="desc">
                        <h2>Trafic</h2>
                        <p>Porttitor communicate pandemic data rather than enabled niche markets neque pulvinar vitae.</p>
                    </div>
                </div><!-- /.featured-item -->
            </div><!-- /.col-md-4 -->
      </div><!-- /.row -->

      <div class="promo-box gray-bg border-box mt-100">
          <div class="promo-info">
              <h2 class="text-extrabold text-uppercase font-25">Get awesome marketing services</h2>
              <p>Asunt in anim uis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore.</p>
          </div>
          <div class="promo-btn">
              <a href="#." class="btn btn-lg text-capitalize waves-effect waves-light">Get it now</a>
          </div>
      </div>

    </div><!-- /.container -->
</section>

<section class="section-padding gray-bg">
  <div class="container">
    <div class="text-center mb-50">
        <h2 class="section-title text-uppercase">Portofolio</h2>
    </div>


    <div class="portfolio-container text-center">
        <ul class="portfolio-filter brand-filter">
            <li class="active waves-effect waves-light" data-group="all">All</li>
            <li class="waves-effect waves-light" data-group="websites">Websites</li>
            <li class="waves-effect waves-light" data-group="branding">Branding</li>
            <li class="waves-effect waves-light" data-group="marketing">Marketing</li>
            <li class="waves-effect waves-light" data-group="analysis">Analysis</li>
        </ul>


        <div class="portfolio col-4 mtb-50">
            <!-- add "gutter" class for add spacing -->

            <div class="portfolio-item" data-groups='["all", "branding", "analysis"]'>
                <div class="portfolio-wrapper">

                  <div class="thumb">
                      <div class="bg-overlay"></div>

                      <img src="{{asset('img/portofolio/indokom.jpg')}}" alt="">

                      <div class="portfolio-intro">
                        <div class="action-btn">
                          <a href="#"> <i class="fa fa-link"></i> </a>
                        </div>
                        <h2><a href="#">Portfolio Title</a></h2>
                        <p><a href="#">Branding</a></p>
                      </div>

                  </div><!-- thumb -->

                </div><!-- /.portfolio-wrapper -->
            </div><!-- /.portfolio-item -->

           

           

        </div><!-- /.portfolio -->

    </div><!-- portfolio-container -->
  </div>
</section>
@endsection