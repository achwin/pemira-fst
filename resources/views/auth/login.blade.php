<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PEMIRA FST 2017</title>
    <link rel="stylesheet" href="assets/lib/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/tether.min.css">
    <link rel="stylesheet" href="assets/lib/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="base-url" content="{{ url('') }}" />
    
    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="assets/js/tether.js"></script>
    <script src="assets/js/app.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.0.5/sweetalert2.all.js"></script>
    <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.0.5/sweetalert2.min.css"> -->
     <script src="assets/sweet-alert/sweetalert2.all.js"></script>
    <link rel="stylesheet"  href="assets/sweet-alert/sweetalert2.min.css">
    <style>
    #linestrike {
        margin-top: 10px;
        line-height: 0.1em;
        margin-bottom: 10px;
        width: 100%;
        color: #C7C7C7;
        text-align: center;
        border-bottom: 1px solid #C7C7C7;
        margin: 10px 0 20px;
    }

    #linestrike span {
        background:#fff;
        padding:0 10px;
    }
    </style>
</head>

<nav class="navbar navbar-dark bg-info navbar-fixed-top">
    <div class="container">
        <ul class="nav navbar-nav">
            <li class="nav-item active">
              <a class="nav-link"><i class="fa fa-id-card"></i></a>
          </li>
      </ul>
  </div>
</nav>

<section style="margin-bottom: 50px" >
    <div class="container">
        <div class="row">
            
            <div class="col-lg-4" style="padding: 10px 30px">
                <br>

                <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <header class="page-header" style="padding-top: 100px;">
                        <h2>
                            Login Pemira FST Tahun 2017
                        </h2>
                        <br>
                    </header>

                    @if(Session()->has('sudah_voting'))

                    <script>

                   

                   $( document ).ready(function() {
                          swal(
                        'Terima Kasih!',
                         'Anda telah berpartisipasi dalam PEMIRA FST 2017!',
                        'success'
                    )
                     
                    });
                     
                       
                    </script>

                    @endif

                    <div class="alert alert-success">
                        <p>Silahkan login menggunakan NIM dan password yang telah diberikan panitia.</p>
                    </div>
                    <div class="flash-message">
                        @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                        @if(Session::has('alert-' . $msg))
                        <p class="alert alert-{{ $msg }}" style="border-radius: 0">{{ Session::get('alert-' . $msg) }}</p>
                        {!!Session::forget('alert-' . $msg)!!}
                        @endif
                        @endforeach
                    </div>
                    @if ($errors->has('email'))
                    <div class="alert alert-danger">
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    </div>
                    @endif

                    <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                        <input type="text" class="form-control form-control-lg" id="nim_user" name="nim_user" placeholder="NIM" required>
                    </div>

                    <div class="form-group">
                        <input type="password" class="form-control form-control-lg" id="password_user" name="password_user" placeholder="password" required>
                    </div>

                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-info-outline btn-lg btn-block">
                            Login
                        </button>
                    </div>
                </form>
            </div>

            <div class="col-lg-7">
                <img src="{{asset('assets/images/cover.jpg')}}" alt="" style="margin-top:120px; height: 500px; width: 800px;">
            </div>
        </div>
    </div>
</section>

<div id="button-contact-person" style="position: fixed; bottom: 0; right: 50px; padding: 10px; text-align: center;background-color: #5bc0de;">
   <a href="#" onclick="slideContact();" style="color: #ffffff;"><i class="fa fa-phone" aria-hidden="true"></i> Hubungi Kami</a>
</div>

<div id="contact-person" style="z-index: 1000; display:none; position: fixed; bottom: 0; right: 50px; padding: 10px; text-align: center;background-color: #5bc0de;">
   <label style="color: #ffffff;">Hilmi (WA : 083830557123 / Line : falachudin)</label><a onclick="slideContact();" style="margin-left:10px; color:#ffffff;" href="#"><i class="fa fa-times-circle" aria-hidden="true"></i></a>
</div>

<script type="text/javascript">


   function slideContact() {
       $('#button-contact-person').slideToggle();
       $('#contact-person').slideToggle();
   }
</script>

<!-- Modal -->
  <div class="modal fade" id="sudah_voting" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Pemira FST 2017</h4>
        </div>
        <div class="modal-body">
          <p>Terima Kasih Sudah Berpartisipasi Dalam Pemira FST 2017</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <script>
       
  </script>

</body>
</html>