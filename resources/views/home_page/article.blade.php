@extends('home_page.index')
@section('content')
<section class="page-title ptb-50">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Artikel</h2>
                <ol class="breadcrumb">
                    <li><a href="{{route('home_page')}}">Home</a></li>
                    <li class="active">Artikel</li>
                </ol>
            </div>
        </div>
    </div>
</section>

<section class="section-padding default-blog grid-blog">
    <div class="container">

      <div class="row">
        @foreach ($art as $row)
        <div class="col-md-4">
            <article class="post-wrapper">

              <div class="thumb-wrapper">
                <img src="{{asset('public/img/article/'.$row->img)}}" class="img-responsive" alt="" >

                <div class="entry-header">
                  <span class="posted-in">
                    <a href="#">Tanggal : {{$row->date}}</a>
                  </span>

                  <h2 class="entry-title"><a href="#">{{$row->title}}</a></h2>

                </div><!-- .entry-header -->

               

                <span class="post-comments-number">
                  <i class="fa fa-user"></i><a href="#">{{$row->author}}</a>
                </span>

              </div><!-- .post-thumb -->


              <div class="entry-content">
                <p><?php echo strip_tags(str_limit($row->decription,250))?></p>
                <a href="{{route('artikel-single',$row->id)}}" class="btn btn-info">Read More...</a>
              </div><!-- .entry-content -->

            </article><!-- /.post-wrapper -->
        </div><!-- /.col-md-4 -->
        @endforeach
      

      </div>

      <ul class="pagination post-pagination text-center mt-50">
        {{$art->links()}}
      </ul>


    </div><!-- /.container -->
</section>
@endsection