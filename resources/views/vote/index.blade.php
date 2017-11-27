<!DOCTYPE html>
<html>
<head>
    <title>PEMIRA FST 2017</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="assets/lib/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/jquery.steps.css">
    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="assets/js/jquery.steps.js"></script>
    <style type="text/css">
    .wizard .content {
        min-height: 100px;
    }

    .wizard .content > .body {
        width: 100%;
        height: auto;
        padding: 15px;
        position: relative;
    }
    body{
        background-color: #eeeeee;
    }
</style>
</head>
<div class="container" style="margin-top: 20px;">
    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
    @endif
 <form id="example-basic" method="post" class="form-horizontal" action="{{ url('/vote') }}">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    @if($user->prodi_user != 6 && $user->prodi_user != 2)
    <input type="hidden" name="type" value="hima">
    <h3>{{$user->prodi->hima->nama_himpunan}}</h3>
    <section>
        <h3 style="margin-bottom: 30px;">Silahkan Pilih Calon Ketua 
        @if($user->prodi_user == 8)
        dan Wakil Ketua
        @endif
         {{$user->prodi->hima->nama_himpunan}}</h3>
        <div class="row">
            <fieldset>
                @if($user->prodi_user == 1)
                <div class="col-md-6">
                    <div class="col-md-6">
                        <b><p style="margin-left: 85px;">Nomor 1</p></b>
                        <label>
                            <img src="{{asset($himatika[0]->calon_hima_foto)}}" width="200" height="300" style="margin-left: 15px;">
                            <b><p style="font-size: 15px; margin-left: 35px;">{{$himatika[0]->nama_calon_hima}}</p></b>
                            <input  type="radio" name="id_pemilihan" value="{{$himatika[0]->id_pemilihan}}" style="margin-left: 105px;">
                            <p style="margin-left: 95px;">Pilih</p>
                        </label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="col-md-6">
                        <b><p style="margin-left: 95px;">Nomor 2</p></b>
                        <label>
                            <img src="{{asset($himatika[1]->calon_hima_foto)}}" width="200" height="300" style="margin-left: 30px;">
                            <b><p style="font-size: 15px; margin-left: 45px;">{{$himatika[1]->nama_calon_hima}}</p></b>
                            <input  type="radio" name="id_pemilihan" value="{{$himatika[1]->id_pemilihan}}" style="margin-left: 115px;">
                            <p style="margin-left: 105px;">Pilih</p>
                        </label>
                    </div>
                </div>
                @elseif($user->prodi_user == 3)
                <div class="col-md-6">
                    <div class="col-md-6">
                        <b><p style="margin-left: 70px;">Nomor 1</p></b>
                        <label>
                            <img src="{{asset($himaki[0]->calon_hima_foto)}}" width="200" height="300">
                            <b><p style="font-size: 15px; margin-left: 40px;">{{$himaki[0]->nama_calon_hima}}</p></b>
                            <input  type="radio"  name="id_pemilihan" value="{{$himaki[0]->id_pemilihan}}" style="margin-left: 90px; margin-top: 5px;">
                            <p style="margin-left: 80px;">Pilih</p>
                        </label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="col-md-6">
                        <b><p style="margin-left: 70px;">Nomor 2</p></b>
                        <label>
                            <img src="{{asset($himaki[1]->calon_hima_foto)}}" width="200" height="300">
                            <b><p style="font-size: 15px; margin-left: 35px;">{{$himaki[1]->nama_calon_hima}}</p></b>
                            <input  type="radio" name="id_pemilihan" value="{{$himaki[1]->id_pemilihan}}" style="margin-left: 90px; margin-top: -3px;">
                            <p style="margin-left: 80px;">Pilih</p>
                        </label>
                    </div>
                </div>
                @elseif($user->prodi_user == 4)
                <div class="col-md-6">
                    <div class="col-md-6">
                        <b><p style="margin-left: 85px;">Nomor 1</p></b>
                        <label>
                            <img src="{{asset($himafi[0]->calon_hima_foto)}}" width="200" height="300" style="margin-left: 15px;">
                            <b><p style="margin-left: 25px; font-size: 15px;" >{{$himafi[0]->nama_calon_hima}}</p></b>
                            <input  type="radio" name="id_pemilihan" value="{{$himafi[0]->id_pemilihan}}" style="margin-left: 100px; margin-top: 5px;">
                            <p style="margin-left: 90px;">Pilih</p>
                        </label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="col-md-6">
                        <b><p style="margin-left: 95px;">Nomor 2</p></b>
                        <label>
                            <img src="{{asset($himafi[1]->calon_hima_foto)}}" width="200" height="300" style="margin-left: 30px;">
                            <b><p style="margin-left: 40px; font-size: 15px;">{{$himafi[1]->nama_calon_hima}}</p></b>
                            <input  type="radio" name="id_pemilihan" value="{{$himafi[1]->id_pemilihan}}" style="margin-left: 120px; margin-top: 5px;">
                            <p style="margin-left: 110px;">Pilih</p>
                        </label>
                    </div>
                </div>
                @elseif($user->prodi_user == 5)
                <div class="col-md-6">
                    <div class="col-md-6">
                        <b><p style="margin-left: 90px;">Nomor 1</p></b>
                        <label>
                            <img src="{{asset($himbio[0]->calon_hima_foto)}}" width="200" height="300" style="margin-left: 20px;">
                            <b><p style="margin-left: 45px; font-size: 15px;">{{$himbio[0]->nama_calon_hima}}</p></b>
                            <input  type="radio" name="id_pemilihan" value="{{$himbio[0]->id_pemilihan}}" style="margin-left: 110px; margin-top: 5px;">
                            <p style="margin-left: 100px;">Pilih</p>
                        </label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="col-md-6">
                        <label>
                            <b><p style="margin-left: 80px;">Nomor 2</p></b>
                            <img src="{{asset($himbio[1]->calon_hima_foto)}}" width="200" height="300" style="margin-left: 15px;">
                            <b><p style="margin-left: 35px; font-size: 15px;">{{$himbio[1]->nama_calon_hima}}</p></b>
                            <input  type="radio" name="id_pemilihan" value="{{$himbio[1]->id_pemilihan}}" style="margin-left: 100px; margin-top: 5px;">
                            <p style="margin-left: 90px;">Pilih</p>
                        </label>
                    </div>
                </div>
                @elseif($user->prodi_user == 7)
                <div class="col-md-6">
                    <div class="col-md-6">
                        <b><p style="margin-left: 70px;">Nomor 1</p></b>
                        <label>
                            <img src="{{asset($himasta[0]->calon_hima_foto)}}" width="200" height="300">
                            <b><p style="font-size: 15px; margin-left: 15px;">{{$himasta[0]->nama_calon_hima}}</p></b>
                            <input  type="radio" name="id_pemilihan" value="{{$himasta[0]->id_pemilihan}}" style="margin-left: 90px; margin-top: 5px;">
                            <p style="margin-left: 80px;">Pilih</p>
                        </label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="col-md-6">
                        <b><p style="margin-left: 70px;">Nomor 2</p></b>
                        <label>
                            <img src="{{asset($himasta[1]->calon_hima_foto)}}" width="200" height="300">
                            <b><p style="font-size: 15px; margin-left: 35px;">{{$himasta[1]->nama_calon_hima}}</p></b>
                            <input  type="radio" name="id_pemilihan" value="{{$himasta[1]->id_pemilihan}}" style="margin-left: 90px; margin-top: 5px;">
                            <p style="margin-left: 80px;">Pilih</p>
                        </label>
                    </div>
                </div>
                @elseif($user->prodi_user == 8)
                <div class="col-md-4">
                    <div class="col-md-6">
                        <b><p style="margin-left: 70px;">Nomor 1</p></b>
                        <label>
                            <img src="{{asset($hmtb[0]->calon_hima_foto)}}" width="200" height="300 ">
                            <b><p style="margin-left: 5px; font-size: 15px;">{{$hmtb[0]->nama_calon_hima}}</p></b>
                            <input  type="radio" name="id_pemilihan" value="{{$hmtb[0]->id_pemilihan}}" style="margin-left: 80px; margin-top: 5px;">
                            <p style="margin-left: 70px;">Pilih</p>
                        </label>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="col-md-6">
                        <b><p style="margin-left: 70px;">Nomor 2</p></b>
                        <label>
                            <img src="{{asset($hmtb[1]->calon_hima_foto)}}" width="200" height="300">
                            <b><p style="margin-left: 15px; font-size: 15px;">{{$hmtb[1]->nama_calon_hima}}</p></b>
                            <input  type="radio" name="id_pemilihan" value="{{$hmtb[1]->id_pemilihan}}" style="margin-left: 100px; margin-top: 5px;">
                            <p style="margin-left: 90px;">Pilih</p>
                        </label>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="col-md-6">
                        <b><p style="margin-left: 70px;">Nomor 3</p></b>
                        <label>
                            <img src="{{asset($hmtb[2]->calon_hima_foto)}}" width="200" height="300">
                            <b><p style="margin-left: 15px; font-size: 15px;">{{$hmtb[2]->nama_calon_hima}}</p></b>
                            <input  type="radio" name="id_pemilihan" value="{{$hmtb[2]->id_pemilihan}}" style="margin-left: 100px; margin-top: 5px;">
                            <p style="margin-left: 90px;">Pilih</p>
                        </label>
                    </div>
                </div>
                @endif
            </fieldset>
        </div>
    </section>
    @else
    <input type="hidden" name="type" value="no_hima">
    @endif
    <h3>BEM</h3>
    <section>
        <fieldset>
        <h3 style="margin-bottom: 30px;">Silahkan Pilih Calon Ketua dan Wakil Ketua BEM </h3>
                <div class="col-md-6">
                    <div class="col-md-6">
                        <b><p style="margin-left: 70px;">Nomor 1</p></b>
                        <label>
                            <img src="{{asset($bem[0]->paslon_bem_foto)}}" width="220" height="300">
                            <b><p style="margin-left: 15px; font-size: 15px;">{{$bem[0]->nama_paslon_bem}}</p></b>
                            <input  type="radio" name="id_pemilihan_bem" value="{{$bem[0]->id_pemilihan_bem}}" style="margin-left: 90px; margin-top: 5px;" required="required">
                            <p style="margin-left: 80px;">Pilih</p>
                        </label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="col-md-6">
                        <b><p style="margin-left: 70px;">Nomor 2</p></b>
                        <label>
                            <img src="{{asset($bem[1]->paslon_bem_foto)}}" width="220"  height="300">
                            <b><p style="margin-left: 30px; font-size: 15px;">{{$bem[1]->nama_paslon_bem}}</p></b>
                            <input  type="radio" name="id_pemilihan_bem" value="{{$bem[1]->id_pemilihan_bem}}" style="margin-left: 90px; margin-top: 5px;">
                            <p style="margin-left: 80px;">Pilih</p>
                        </label>
                    </div>
                </div>
            </fieldset>
    </section>
    <h3>DLM</h3>
    <section>
        <fieldset>
        <h3 style="margin-bottom: 30px;">Silahkan Pilih Calon DLM </h3>
                <div class="col-md-6">
                    <div class="col-md-6">
                        <b><p style="margin-left: 70px;">Nomor 1</p></b>
                        <label>
                            <img src="{{asset($dlm[0]->calon_dlm_foto)}}" width="200" height="300">
                            <b><p style="margin-left: 10px;">{{$dlm[0]->nama_paslon_dlm}}</p></b>
                            <input type="radio" name="id_pemilihan_dlm" value="{{$dlm[0]->id_pemilihan_dlm}}" style="margin-left: 90px; margin-top: 5px;" required />
                            <p style="margin-left: 80px;">Pilih</p>
                        </label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="col-md-6">
                        <b><p style="margin-left: 70px;">Nomor 2</p></b>
                        <label>
                            <img src="{{asset($dlm[1]->calon_dlm_foto)}}" width="200" height="300">
                            <b><p style="margin-left: 20px;">{{$dlm[1]->nama_paslon_dlm}}</p></b>
                            <input type="radio" name="id_pemilihan_dlm" value="{{$dlm[1]->id_pemilihan_dlm}}" style="margin-left: 90px; margin-top: 5px;" />
                            <p style="margin-left: 80px;">Pilih</p>
                        </label>
                    </div>
                </div>
            </fieldset>
    </section>
</form>
</div>
<script type="text/javascript">
	$("#example-basic").steps({
        headerTag: "h3",
        bodyTag: "section",
        transitionEffect: "slideLeft",
        autoFocus: true,


        onFinished: function (event, currentIndex)
        {

           var form = $(this);
            form.submit();
        }

    });
</script>
</html>