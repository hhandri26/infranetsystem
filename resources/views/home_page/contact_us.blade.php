@extends('home_page.index')
@section('content')


<section class="section-padding">
  
  <div class="container">

      <div class="text-center mb-80">
          <h2 class="section-title text-uppercase">Hubungi Kami</h2>
      </div>

    <div class="row">
        <div class="col-md-8">
            <form name="contact-form" id="contactForm">

              <div class="row">
                <div class="col-md-6">
                  <div class="input-field">
                    <input type="text" name="name" class="validate" id="name" >
                    <label for="name">Name</label>
                  </div>

                </div><!-- /.col-md-6 -->

                <div class="col-md-6">
                  <div class="input-field">
                    <label class="sr-only" for="email">Email</label>
                    <input id="email" type="email" name="email" class="validate" >
                    <label for="email" data-error="wrong" data-success="right" >Email</label>
                  </div>
                </div><!-- /.col-md-6 -->
              </div><!-- /.row -->

              <div class="row">
                <div class="col-md-6">
                  <div class="input-field">
                    <input id="phone" type="tel" name="phone" class="validate" >
                    <label for="phone">Phone Number</label>
                  </div>
                </div><!-- /.col-md-6 -->

                <div class="col-md-6">
                  <div class="input-field">
                    <input id="subject" type="text" name="subject" class="validate" >
                    <label for="website">Subject</label>
                  </div>
                </div><!-- /.col-md-6 -->
              </div><!-- /.row -->

              <div class="input-field">
                <textarea name="message" id="message" class="materialize-textarea" ></textarea>
                <label for="message">Message</label>
              </div>

              <button class="waves-effect waves-light btn submit-button pink mt-30" onclick="SaveWarning()">Send Message</button>
            </form>
        </div><!-- /.col-md-8 -->

        <div class="col-md-4 contact-info">

            <address>
              <i class="material-icons brand-color">&#xE55F;</i>
              <div class="address">
                {{$info['address']}}

                <hr>

         
              </div>

              <i class="material-icons brand-color">&#xE61C;</i>
              <div class="phone">
                <p>{{$info['phone']}}<br>
              </div>

              <i class="material-icons brand-color">&#xE0E1;</i>
              <div class="mail">
                <p><a href="mailto:{{$info['email']}}">{{$info['email']}}</a><br>
              </div>
            </address>

        </div><!-- /.col-md-4 -->
    </div><!-- /.row -->
  </div>
</section>
<script type="text/javascript">
	 function SaveWarning(){
        var a       = {};
        a.name      = $('#name').val();
        a.email   	= $('#email').val();
        a.phone     = $('#phone').val();
        a.subject   = $('#subject').val();
        a.message   = $('#message').val();      
        var url     = "{{route('send_email') }}?data="+'['+JSON.stringify(a)+']';
        AlertCheck('Kirim Pesan?',url);
    }
</script>

@endsection