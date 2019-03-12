@extends('home_page.index')
@section('content')
<!--page title start-->


<section class="section-padding gray-bg">
    <div class="container">

        <div class="login-wrapper">
            <div class="card-wrapper"></div>
            <div class="card-wrapper">
                <h1 class="title">Daftar</h1>
                <form>
                    <div class="input-container">
                        <input type="text" id="username" />
                        <label for="username">Nama</label>
                        <div class="bar"></div>
                    </div>
                    <div class="input-container">
                        <input type="text" id="password" />
                        <label for="password">No Handphone</label>
                        <div class="bar"></div>
                    </div>
                    
                    <div class="button-container">
                        <a href="#." class="btn btn-lg btn-block waves-effect waves-light">Daftar</a>
                    </div>
                    
                </form>
            </div>
          
        </div>

    </div>
</section>


@endsection