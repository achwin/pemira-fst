<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
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
     <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.0.5/sweetalert2.all.js"></script>
    <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.0.5/sweetalert2.min.css">
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
                    <input type="hidden" name="prodi_user" value="{{Auth::user()->prodi_user}}">
                    <header class="page-header" style="padding-top: 100px;">
                        <h2>
                            Register Pemira FST Tahun 2017
                        </h2>
                        <br>
                    </header>

                    <div class="flash-message">
                        @if(session()->has('password_user'))
                        <div class="alert alert-info">
                        NIM       :  {{ session()->get('nim_user') }} <br>
                        Password  :   {{ session()->get('password_user') }}
                       
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
                        <input type="text" class="form-control form-control-lg" id="nim_user" name="nim_user" placeholder="NIM" onkeypress="var key = event.keyCode || event.charCode; return ((key  >= 48 && key  <= 57) || key == 8 || key == 45);" required>
                    </div>
                    
                    <div class="form-group">
                        <input type="text" class="form-control form-control-lg" id="prodi_user" value="{{Auth::user()->prodi->nama_program_studi}}" readonly>
                    </div>

                     <div class="form-group">
                        <select class="from-control form-control-lg" id="angkatan_user" name="angkatan_user" style="width: 320px;" required>
                            <option disabled selected value>Pilih Angkatan</option>
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
                <a href="{{url('logout')}}" class="btn btn-danger-outline btn-lg btn-block">Logout</a>

                <button id="btn-cleardb" class="btn btn-warning-outline btn-lg btn-block" type="button">Clear Database</button>
                <!-- <a href="{{url('clear_db')}}" class="btn btn-warning-outline btn-lg btn-block">Clear Database</a> -->
            </div>

            <div class="col-lg-7" style="margin-top: 130px;margin-left: 20px;">
              <h2 style="margin-bottom: 20px;">List Pemilih</h2>
                <table class="table table-striped table-hover table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10%">No.</th>
                      <th style="width: 70%; text-align: center;">NIM</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($pernah_milih as $i => $pm)
                      <tr>
                        <td>{{$i+1}}</td>
                        <td style="text-align: center;">{{$pm->nim_user}}</td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

<div id="button-contact-person" style="position: fixed; bottom: 0; right: 50px; padding: 10px; text-align: center;background-color: #5bc0de;">
   <a href="#" onclick="slideContact();" style="color: #ffffff;"><i class="fa fa-phone" aria-hidden="true"></i> Hubungi Kami</a>
</div>

<div id="contact-person" style="z-index: 1000; display:none; position: fixed; bottom: 0; right: 50px; padding: 10px; text-align: center;background-color: #5bc0de;">
   <label style="color: #ffffff;">Hilmi (WA : 083830557123 / Line : falachudin)<br>Kenny ( 082339081041/ Line : kennykarnama)</label><a onclick="slideContact();" style="margin-left:10px; color:#ffffff;" href="#"><i class="fa fa-times-circle" aria-hidden="true"></i></a>
</div>

<script type="text/javascript">
   function slideContact() {
       $('#button-contact-person').slideToggle();
       $('#contact-person').slideToggle();
   }



   $('#btn-cleardb').click(function() {
 swal({
  title: 'Apakah Anda yakin ingin membersihkan Database?',
  text: "Ingat!Data akan terhapus selamanya!",
  type: 'warning',
  showCancelButton: true,
  confirmButtonText: 'Submit',
  showLoaderOnConfirm: true,
  preConfirm: function () {
                return new Promise(function (resolve, reject) {
                    $.ajax({
                        type:'GET',
                        url:'/clean_db',
                         success: function(response) {
                              resolve(response)
                         },
                         error: function(a, b, c){
                              reject("error message")
                         }
                    })
                })
              },
  allowOutsideClick: false
}).then((result) => {
  if (result.value) {
    swal({
      type: 'success',
      title: 'Sukses!',
      html: 'Database berhasil dibersihkan'
    })
  }
})
});

</script>
</body>
</html>