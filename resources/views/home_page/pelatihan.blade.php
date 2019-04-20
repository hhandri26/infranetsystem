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
		  <h2 class="section-title">Pelatihan</h2>
		 
		</div>
		<!-- loop -->
		@foreach($catagories as $row)
		<div class="featured-carousel brand-dot">
			<div class="featured-item border-box radius-4 hover brand-hover">
			  <div class="icon mb-30">
			  	<a href="{{route('detial-pelatihan',$row->id)}}">
			      <img src="{{asset('/storage/app/file/training/'.$row->img)}}" alt="">
			    </a>
			  </div>
			  <div class="desc">
			      <h2>{{$row->title}}</h2>
			      <p>{{$row->desc}}</p>
			  </div>
			</div><!-- /.featured-item -->
      	</div>
      	@endforeach
      	<!-- end loop -->
	</div>
</section>

@endsection