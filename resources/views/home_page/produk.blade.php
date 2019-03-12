
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
        <span class="section-intro font-greatvibes font-40">Produk Kami</span>
        <h2 class="section-title text-uppercase font-roboto text-bold">Jasa Yang Kami Tawarkan</h2>
      </div>

      <div class="row">
          <div class="col-md-4 col-sm-12 col-xs-12 food-menu-category">
            <div class="food-menu-wrapper brand-bg">

              <div class="food-menu-intro text-center brand-bg darken-2">
                <i class="material-icons fa fa-android white-text"></i>
                <h2 class="text-uppercase white-text no-margin">Aplikasi Android</h2>
              </div>

              <div class="food-menu-list">
                
                <div class="food-menu">
                  <div class="row">
                    <div class="col-md-9 col-sm-8">
                      <h3 class="food-menu-title white-text text-bold">Lemon and Garlic Green Beans</h3>
                      <div class="food-menu-detail white-text">Lemon / Garlic / Beans</div>
                    </div>
                    <div class="col-md-3 col-sm-4 food-menu-price-detail">
                      <h3 class="food-menu-price white-text text-medium">$20.36</h3>
                      <div class="food-menu-label ">New</div>
                    </div>
                  </div>
                </div>

                <div class="food-menu">
                  <div class="row">
                    <div class="col-md-9 col-sm-8">
                      <h3 class="food-menu-title white-text text-bold">Wild Mushroom Bucatini</h3>
                      <div class="food-menu-detail white-text">Mushroom / Veggie / White Sources</div>
                    </div>
                    <div class="col-md-3 col-sm-4 food-menu-price-detail">
                      <h3 class="food-menu-price white-text text-medium">$11.25</h3>
                    </div>
                  </div>
                </div>

                <div class="food-menu">
                  <div class="row">
                    <div class="col-md-9 col-sm-8">
                      <h3 class="food-menu-title white-text text-bold">LambBeef Kofka Skewers</h3>
                      <div class="food-menu-detail white-text">Lamb / Wine / Butter</div>
                    </div>
                    <div class="col-md-3 col-sm-4 food-menu-price-detail">
                      <h3 class="food-menu-price white-text text-medium">$10.25</h3>
                    </div>
                  </div>
                </div>

                <div class="food-menu">
                  <div class="row">
                    <div class="col-md-9 col-sm-8">
                      <h3 class="food-menu-title white-text text-bold">Imported Oysters Grill (5 Pieces)</h3>
                      <div class="food-menu-detail white-text">Oysters / Veggie / Ginger</div>
                    </div>
                    <div class="col-md-3 col-sm-4 food-menu-price-detail">
                      <h3 class="food-menu-price white-text text-medium">$12.25</h3>
                    </div>
                  </div>
                </div>

              </div><!-- /.menu-list -->
            </div><!-- /.menu-category -->
          </div><!-- /.col-md-4 -->

          <div class="col-md-4 col-sm-12 col-xs-12 food-menu-category">
            <div class="food-menu-wrapper brand-bg">

              <div class="food-menu-intro text-center brand-bg darken-2">
                <i class="material-icons fa fa-apple white-text"></i>
                <h2 class="text-uppercase white-text no-margin">Aplikasi IOS</h2>
              </div>

              <div class="food-menu-list">

                <div class="food-menu">
                  <div class="row">
                    <div class="col-md-9 col-sm-8">
                      <h3 class="food-menu-title white-text text-bold">Wild Mushroom Bucatini</h3>
                      <div class="food-menu-detail white-text">Mushroom / Veggie / White Sources</div>
                    </div>
                    <div class="col-md-3 col-sm-4 food-menu-price-detail">
                      <h3 class="food-menu-price white-text text-medium">$11.25</h3>
                    </div>
                  </div>
                </div>

                <div class="food-menu">
                  <div class="row">
                    <div class="col-md-9 col-sm-8">
                      <h3 class="food-menu-title white-text text-bold">Lemon and Garlic Green Beans</h3>
                      <div class="food-menu-detail white-text">Lemon / Garlic / Beans</div>
                    </div>
                    <div class="col-md-3 col-sm-4 food-menu-price-detail">
                      <h3 class="food-menu-price white-text text-medium">$20.36</h3>
                      <div class="food-menu-label">New</div>
                    </div>
                  </div>
                </div>

                <div class="food-menu">
                  <div class="row">
                    <div class="col-md-9 col-sm-8">
                      <h3 class="food-menu-title white-text text-bold">LambBeef Kofka Skewers</h3>
                      <div class="food-menu-detail white-text">Lamb / Wine / Butter</div>
                    </div>
                    <div class="col-md-3 col-sm-4 food-menu-price-detail">
                      <h3 class="food-menu-price white-text text-medium">$10.25</h3>
                    </div>
                  </div>
                </div>

                <div class="food-menu">
                  <div class="row">
                    <div class="col-md-9 col-sm-8">
                      <h3 class="food-menu-title white-text text-bold">Imported Oysters Grill (5 Pieces)</h3>
                      <div class="food-menu-detail white-text">Oysters / Veggie / Ginger</div>
                    </div>
                    <div class="col-md-3 col-sm-4 food-menu-price-detail">
                      <h3 class="food-menu-price white-text text-medium">$12.25</h3>
                    </div>
                  </div>
                </div>

              </div><!-- /.menu-list -->
            </div><!-- /.menu-category -->
          </div><!-- /.col-md-4 -->

          <div class="col-md-4 col-sm-12 col-xs-12 food-menu-category">
            <div class="food-menu-wrapper brand-bg">

              <div class="food-menu-intro text-center brand-bg darken-2">
                <i class="material-icons fa fa-chrome white-text"></i>
                <h2 class="text-uppercase white-text no-margin">Aplikasi Website</h2>
              </div>

              <div class="food-menu-list">
                
                <div class="food-menu">
                  <div class="row">
                    <div class="col-md-9 col-sm-8">
                      <h3 class="food-menu-title white-text text-bold">Wild Mushroom Bucatini</h3>
                      <div class="food-menu-detail white-text">Mushroom / Veggie / White Sources</div>
                    </div>
                    <div class="col-md-3 col-sm-4 food-menu-price-detail">
                      <h3 class="food-menu-price white-text text-medium">$11.25</h3>
                    </div>
                  </div>
                </div>

                <div class="food-menu">
                  <div class="row">
                    <div class="col-md-9 col-sm-8">
                      <h3 class="food-menu-title white-text text-bold">LambBeef Kofka Skewers</h3>
                      <div class="food-menu-detail white-text">Lamb / Wine / Butter</div>
                    </div>
                    <div class="col-md-3 col-sm-4 food-menu-price-detail">
                      <h3 class="food-menu-price white-text text-medium">$10.25</h3>
                    </div>
                  </div>
                </div>

                <div class="food-menu">
                  <div class="row">
                    <div class="col-md-9 col-sm-8">
                      <h3 class="food-menu-title white-text text-bold">Lemon and Garlic Green Beans</h3>
                      <div class="food-menu-detail white-text">Lemon / Garlic / Beans</div>
                    </div>
                    <div class="col-md-3 col-sm-4 food-menu-price-detail">
                      <h3 class="food-menu-price white-text text-medium">$20.36</h3>
                      <div class="food-menu-label">New</div>
                    </div>
                  </div>
                </div>

                <div class="food-menu">
                  <div class="row">
                    <div class="col-md-9 col-sm-8">
                      <h3 class="food-menu-title white-text text-bold">Imported Oysters Grill (5 Pieces)</h3>
                      <div class="food-menu-detail white-text">Oysters / Veggie / Ginger</div>
                    </div>
                    <div class="col-md-3 col-sm-4 food-menu-price-detail">
                      <h3 class="food-menu-price white-text text-medium">$12.25</h3>
                    </div>
                  </div>
                </div>

              </div><!-- /.menu-list -->
            </div><!-- /.menu-category -->
          </div><!-- /.col-md-4 -->
      </div><!-- /.row -->

    </div><!-- /.container -->
</section>

@endsection