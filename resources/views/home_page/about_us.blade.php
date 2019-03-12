@extends('home_page.index')
@section('content')
<!--page title start-->
<section class="page-title ptb-50">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Tentang Kami</h2>
                <ol class="breadcrumb">
                    <li><a href="{{route('home_page')}}">Home</a></li>
                    <li class="active">Tentang Kami</li>
                </ol>
            </div>
        </div>
    </div>
</section>
<!--page title end-->


<section class="section-padding">
    <div class="container">

      <h2 class="font-30 text-medium mb-30">Tentang Infranetsystem</h2>
      <div class="row">
        <div class="col-md-7">
          
          <p>Duis senectus mus condimentum nunc ac habitasse duis consectetur a arcu a accumsan cras et metus ultricies justo cum a bibendum. <strong><a href="#">Egestas vestibulum blandit sem vestibulum curabitur</a></strong> a vel aliquet gravida ullamcorper amet dictumst vestibulum a elementum proin id volutpat magna parturient. Id ac dui libero a ullamcorper euismod himenaeos a nam condimentum a adipiscing dapibus lobortis iaculis morbi.</p>

          <p>Himenaeos a vestibulum morbi. <strong><a href="#">Ullamcorper cras scelerisque</a></strong> taciti lorem metus feugiat est lacinia facilisis id nam leo condimentum praesent id diam. Vestibulum amet porta odio elementum convallis parturient tempor tortor tempus a mi ad parturient ad nulla mus amet in penatibus nascetur at vulputate euismod a est tristique scelerisque. Aliquet facilisis nisl vel vestibulum dignissim gravida ullamcorper.</p>
        </div><!-- /.col-md-7 -->

        <div class="col-md-5">
          <div class="gallery-thumb">
            <ul class="slides">
              <li data-thumb="{{asset('img/logo-pt.jpg')}}">
                <img src="{{asset('img/company.jpg')}}" alt="image">
              </li>
            </ul>
          </div><!-- /.gallery-thumb -->
        </div><!-- /.col-md-5 -->
      </div><!-- /.row -->
    </div><!-- /.container -->
</section>
@endsection