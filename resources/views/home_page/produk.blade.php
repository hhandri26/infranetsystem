
@extends('home_page.index')
@section('content')
<section class="page-title ptb-50">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Produk</h2>
                <ol class="breadcrumb">
                    <li><a href="{{route('home_page')}}">Home</a></li>
                    <li class="active">Produk</li>
                </ol>
            </div>
        </div>
    </div>
</section>
<section class="section-padding">
    <div class="container">

      <div class="text-center mb-80">
        <span class="section-intro font-greatvibes font-40">{{$prd['product'][0]->title}}</span>
        <h2 class="section-title text-uppercase font-roboto text-bold">{{$prd['product'][0]->h_description}}</h2>
      </div>

      <div class="row">
        @foreach ($prd['product'] as $row)
          <div class="col-md-4 col-sm-12 col-xs-12 food-menu-category wow fadeInRight" data-wow-delay=".2s">
            <div class="food-menu-wrapper brand-bg">
              <div class="food-menu-intro text-center brand-bg darken-2">
                <i class="material-icons {{$row->icon}} white-text"></i>
                <h2 class="text-uppercase white-text no-margin">{{$row->d_title}}</h2>
                <h2 class="white-text no-margin">{{'Rp. '.number_format($row->price,2)}}</h2>
              </div>
              <div class="food-menu-list">                
                <div class="food-menu">                  
                    <h3 class="food-menu-title white-text text-bold">
                    <?php echo $row->d_description;?>
                    </h3>                  
                </div>           
              </div><!-- /.menu-list -->
            </div><!-- /.menu-category -->
          </div><!-- /.col-md-4 -->
        @endforeach
      </div><!-- /.row -->

    </div><!-- /.container -->
</section>

@endsection