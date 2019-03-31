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

      <h2 class="font-30 text-medium mb-30">{{$about['title']}}</h2>
      <div class="row">
        <div class="col-md-7">
          
          <p><?php echo $about['description']?></p>
        </div><!-- /.col-md-7 -->

        <div class="col-md-5">
          <div class="gallery-thumb">
            <ul class="slides">
              <li data-thumb="{{asset('img/logo-pt.jpg')}}">
                <img src="{{asset('public/img/'.$about['img'])}}" alt="image">
              </li>
            </ul>
          </div><!-- /.gallery-thumb -->
        </div><!-- /.col-md-5 -->
      </div><!-- /.row -->
    </div><!-- /.container -->
</section>
@endsection