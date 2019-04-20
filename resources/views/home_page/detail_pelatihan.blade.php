@extends('home_page.index')
@section('content')
<!--page title start-->
<section class="page-title ptb-50">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Detail Pelatihan</h2>
                <ol class="breadcrumb">
                    <li><a href="{{route('home_page')}}">Home</a></li>
                    <li class="active">Detail Pelatihan</li>
                </ol>
            </div>
        </div>
    </div>
</section>
 
<section class="section-padding">
    <div class="container">
       <div class="ptb-50">
          <div class="container">
              <div class="promo-box white-bg border-box">
                  <div class="promo-info">
                      <i class="fa fa-book promo-icon circle"></i>
                      <h2 class="text-extrabold text-uppercase">Materi {{$get[0]->catagories}} </h2>
                      <p>Biaya {{'Rp. '.number_format($get[0]->price,0)}}</p>
                  </div>
                  <div class="promo-btn">
                      <a href="{{route('daftar')}}" class="btn btn-lg waves-effect waves-light">Daftar Sekarang</a>
                  </div>
              </div>
          </div>
      </div>

      <div class="row mb-80">
        <div class="col-md-8 col-md-offset-2">
         @foreach($get as $row)
          <div class="panel-group feature-accordion brand-accordion icon angle-icon" id="basic">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h3 class="panel-title">
                  <a data-toggle="collapse" data-parent="#basic" href="{{'#basic'.$row->sort}}">
                    {{$row->sort.' '.$row->header_materi}}
                  </a>
                </h3>
              </div>
              <div id="{{'basic'.$row->sort}}" class="panel-collapse collapse">
                <div class="panel-body">
                  {{$row->sub_materi}}
                </div>
              </div>
            </div>        
          </div>
          @endforeach
                 
        </div><!-- /.col-md-8 -->
      </div><!-- /.row -->
      <div class="text-center mb-80">
          <h2 class="section-title text-capitalize">Jadwal {{$jadwal[0]->schedule}}</h2>
      </div>      
            <table id="datatable" class="table table-striped table-bordered">
                  <thead>
                  <tr>
                      <th width="50px">No</th>
                      <th>Pertemuan</th>
                      <th>Tanggal</th>
                      <th>Jam</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php $no = 1;?>
                      @foreach($jadwal as $row1)                  
                    <tr>                      
                        <td><?php echo $no++?></td>
                        <td>{{$row1->desc}}</td>
                        <td>{{$row1->date}}</td>
                        <td>{{$row1->time}}</td>                      
                    </tr> 
                    @endforeach                
                  </tbody>
              </table>
          </table> 
    </div><!-- /.container -->
    <div class="text-center mt-80">
      <h2 class="mb-30 text-uppercase">Daftar</h2>
      <a href="{{route('daftar')}}" class="btn btn-lg waves-effect waves-light">Daftar Sekarang</a>
  </div>
</section>

@endsection