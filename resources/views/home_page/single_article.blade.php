@extends('home_page.index')
@section('content')
<section class="blog-section section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
              <div class="posts-content single-post">

                <article class="post-wrapper">

                  <header class="entry-header-wrapper clearfix">

                 
                    
                    <div class="entry-header">
                      <h2 class="entry-title">{{$art->title}}</h2>

                      <div class="entry-meta">
                          <ul class="list-inline">
                              <li>
                                  <i class="fa fa-user"></i><a href="#">{{$art->author}}</a>
                              </li>

                              <li>
                                  <i class="fa fa-clock-o"></i><a href="#">{{$art->date}}</a>
                              </li>

                            
                          </ul>
                      </div><!-- .entry-meta -->
                    </div>

                  </header><!-- /.entry-header-wrapper -->

                  <div class="thumb-wrapper">
                    <img src="{{asset('/storage/app/file/article/'.$art->img)}}" class="img-responsive" alt="" >
                  </div><!-- .post-thumb -->


                  <div class="entry-content">
                   <?php echo $art->decription;?>
                  </div><!-- .entry-content -->


                  <footer class="entry-footer">
                    <div class="post-tags">
                      <span class="tags-links">
                        <i class="fa fa-tags"></i><a href="#">Technology,</a> <a href="#" rel="tag">{{$art->tag}}</a>
                      </span>
                    </div> <!-- .post-tags -->

                    <ul class="list-inline right share-post">
                        <li><a href="#"><i class="fa fa-facebook"></i> <span>Share</span></a>
                        </li>
                        <li><a href="#"><i class="fa fa-twitter"></i> <span>Tweet</span></a>
                        </li>
                        <li><a href="#"><i class="fa fa-google-plus"></i> <span>Plus</span></a>
                        </li>
                    </ul>
                  </footer>

                </article><!-- /.post-wrapper -->             
                <div class="comments-wrapper">         
                  <!-- isi komen -->
                </div><!-- /.comments-wrapper -->
              </div><!-- /.posts-content -->
            </div><!-- /.col-md-12 -->
          </div><!-- /.row -->
    </div><!-- /.container -->
</section>
@endsection