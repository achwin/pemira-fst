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

                <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <header class="page-header" style="padding-top: 100px;">
                        <h2>
                            Register Pemilih Pemira FST Tahun 2017
                        </h2>
                        <br>
                    </header>

                    <div class="flash-message">
                        @if(session()->has('password_user'))
                        <div class="alert alert-success">
                        Username :  {{ session()->get('nim_user') }} <br>
                        Password :   {{ session()->get('password_user') }}
                       
                        </div>
                        @endif
                    </div>

                     <div class="flash-message">
                        @if(session()->has('register_gagal'))
                        <div class="alert alert-danger">
                       {{session()->get('register_gagal')}}
                       
                        </div>
                        @endif
                    </div>

                    <div class="alert alert-success">
                        <p>Masukan NIM yang akan didaftarkan</p>
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
                        <select class="from-control form-control-lg" id="prodi_user" name="prodi_user">
                            <option disabled selected value>Pilih Prodi Mahasiswa</option>
                             @foreach($program_studi as $item)
                            <option value="{{$item->id_program_studi}}">{{$item->nama_program_studi}}</option>
                            @endforeach
                        </select>  
                    </div>

                     <div class="form-group">
                        <select class="from-control form-control-lg" id="angkatan_user" name="angkatan_user">
                            <option disabled selected value>Pilih Angkatan Mahasiswa </option>
                             @foreach($angkatan as $item)
                            <option value="{{$item->id_angkatan}}">{{$item->tahun_angkatan}}</option>
                            @endforeach
                        </select>  
                    </div>

                  

                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-info-outline btn-lg btn-block">
                            Register
                        </button>
                    </div>
                </form>
            </div>

            <div class="col-lg-7 col-lg-offset-1" style="padding: 10px 30px">
                <img src="https://pbs.twimg.com/profile_images/598864237641924608/XOzEwMj9.png" alt="" style="margin-top:80px; width:30%"; >
            </div>
            <div class="col-lg-7 col-lg-offset-1" style="padding: 10px 30px">
                <img src="https://pbs.twimg.com/profile_images/684905074569560064/S--alEqM.jpg" alt="" style="margin-top:80px; width:30%"; >
            </div>
        </div>
    </div>
</section>

<div id="button-contact-person" style="position: fixed; bottom: 0; right: 50px; padding: 10px; text-align: center;background-color: #5bc0de;">
   <a href="#" onclick="slideContact();" style="color: #ffffff;"><i class="fa fa-phone" aria-hidden="true"></i> Hubungi Kami</a>
</div>

<div id="contact-person" style="z-index: 1000; display:none; position: fixed; bottom: 0; right: 50px; padding: 10px; text-align: center;background-color: #5bc0de;">
   <label style="color: #ffffff;">M.Hilmi Achwin (Line : falachudin)</label><a onclick="slideContact();" style="margin-left:10px; color:#ffffff;" href="#"><i class="fa fa-times-circle" aria-hidden="true"></i></a>
</div>

<script type="text/javascript">
   function slideContact() {
       $('#button-contact-person').slideToggle();
       $('#contact-person').slideToggle();
   }
</script>
</body>
</html>