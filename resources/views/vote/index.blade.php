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
 <form id="example-basic" method="post" class="form-horizontal" action="{{ url('/vote') }}" >       
    <input type="hidden" name="_token" value="{!! csrf_token() !!}">
    @if($user->prodi_user != 6 && $user->prodi_user != 2)
    <h3>{{$user->prodi->hima->nama_himpunan}}</h3>
    <section>
        <h3 style="margin-bottom: 50px;">Silahkan Pilih Ketua 
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
                            <img src="{{asset($himatika[0]->calon_hima_foto)}}" width="200" style="margin-left: 15px;">
                            <b><p style="font-size: 20px; margin-left: 10px;">{{$himatika[0]->nama_calon_hima}}</p></b>
                            <input id="radioBtn" type="radio" name="id_pemilihan" value="{{$himatika[0]->id_pemilihan}}" style="margin-left: 105px;">
                            <p style="margin-left: 95px; font-size: 20px;">Pilih</p>
                        </label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="col-md-6">
                        <b><p style="margin-left: 95px;">Nomor 2</p></b>
                        <label>
                            <img src="{{asset($himatika[1]->calon_hima_foto)}}" width="200" style="margin-left: 30px;">
                            <b><p style="font-size: 20px;">{{$himatika[1]->nama_calon_hima}}</p></b>
                            <input id="radioBtn" type="radio" name="id_pemilihan" value="{{$himatika[1]->id_pemilihan}}" style="margin-left: 115px;">
                            <p style="margin-left: 105px; font-size: 20px;">Pilih</p>
                        </label>
                    </div>
                </div>
                @elseif($user->prodi_user == 3)
                <div class="col-md-6">
                    <div class="col-md-3">
                        <b><p style="margin-left: 30px;">Nomor 1</p></b>
                        <label>
                            <img src="{{asset($himaki[0]->calon_hima_foto)}}" width="125">
                            <b><p>{{$himaki[0]->nama_calon_hima}}</p></b>
                            <input id="radioBtn" type="radio"  name="id_pemilihan" value="{{$himaki[0]->id_pemilihan}}" style="margin-left: 50px; margin-top: 5px;">
                            <p style="margin-left: 40px;">Pilih</p>
                        </label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="col-md-6">
                        <b><p style="margin-left: 20px;">Nomor 2</p></b>
                        <label>
                            <img src="{{asset($himaki[1]->calon_hima_foto)}}" width="125">
                            <b><p>{{$himaki[1]->nama_calon_hima}}</p></b>
                            <input id="radioBtn" type="radio" name="id_pemilihan" value="{{$himaki[1]->id_pemilihan}}" style="margin-left: 50px; margin-top: -3px;">
                            <p style="margin-left: 40px;">Pilih</p>
                        </label>
                    </div>
                </div>
                @elseif($user->prodi_user == 4)
                <div class="col-md-6">
                    <div class="col-md-6">
                        <b><p style="margin-left: 55px;">Nomor 1</p></b>
                        <label>
                            <img src="{{asset($himafi[0]->calon_hima_foto)}}" width="145" style="margin-left: 15px;">
                            <b><p>{{$himafi[0]->nama_calon_hima}}</p></b>
                            <input id="radioBtn" type="radio" name="id_pemilihan" value="{{$himafi[0]->id_pemilihan}}" style="margin-left: 80px; margin-top: 5px;">
                            <p style="margin-left: 70px;">Pilih</p>
                        </label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="col-md-6">
                        <b><p style="margin-left: 55px;">Nomor 2</p></b>
                        <label>
                            <img src="{{asset($himafi[1]->calon_hima_foto)}}" width="125" style="margin-left: 30px;">
                            <b><p>{{$himafi[1]->nama_calon_hima}}</p></b>
                            <input id="radioBtn" type="radio" name="id_pemilihan" value="{{$himafi[1]->id_pemilihan}}" style="margin-left: 80px; margin-top: 5px;">
                            <p style="margin-left: 70px;">Pilih</p>
                        </label>
                    </div>
                </div>
                @elseif($user->prodi_user == 5)
                <div class="col-md-6">
                    <div class="col-md-6">
                        <b><p style="margin-left: 55px;">Nomor 1</p></b>
                        <label>
                            <img src="{{asset($himbio[0]->calon_hima_foto)}}" width="125" style="margin-left: 20px;">
                            <b><p>{{$himbio[0]->nama_calon_hima}}</p></b>
                            <input id="radioBtn" type="radio" name="id_pemilihan" value="{{$himbio[0]->id_pemilihan}}" style="margin-left: 70px; margin-top: 5px;">
                            <p style="margin-left: 60px;">Pilih</p>
                        </label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="col-md-6">
                        <label>
                            <b><p style="margin-left: 55px;">Nomor 2</p></b>
                            <img src="{{asset($himbio[1]->calon_hima_foto)}}" width="135" style="margin-left: 15px;">
                            <b><p>{{$himbio[1]->nama_calon_hima}}</p></b>
                            <input id="radioBtn" type="radio" name="id_pemilihan" value="{{$himbio[1]->id_pemilihan}}" style="margin-left: 75px; margin-top: 5px;">
                            <p style="margin-left: 65px;">Pilih</p>
                        </label>
                    </div>
                </div>
                @elseif($user->prodi_user == 7)
                <div class="col-md-6">
                    <div class="col-md-6">
                        <b><p style="margin-left: 70px;">Nomor 1</p></b>
                        <label>
                            <img src="{{asset($himasta[0]->calon_hima_foto)}}" width="200">
                            <b><p style="margin-left: 15px;">{{$himasta[0]->nama_calon_hima}}</p></b>
                            <input id="radioBtn" type="radio" name="id_pemilihan" value="{{$himasta[0]->id_pemilihan}}" style="margin-left: 90px; margin-top: 5px;">
                            <p style="margin-left: 80px;">Pilih</p>
                        </label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="col-md-6">
                        <b><p style="margin-left: 70px;">Nomor 2</p></b>
                        <label>
                            <img src="{{asset($himasta[1]->calon_hima_foto)}}" width="200">
                            <b><p style="margin-left: 35px;">{{$himasta[1]->nama_calon_hima}}</p></b>
                            <input id="radioBtn" type="radio" name="id_pemilihan" value="{{$himasta[1]->id_pemilihan}}" style="margin-left: 90px; margin-top: 5px;">
                            <p style="margin-left: 80px;">Pilih</p>
                        </label>
                    </div>
                </div>
                @elseif($user->prodi_user == 8)
                <div class="col-md-6">
                    <div class="col-md-6">
                        <b><p>Nomor 1</p></b>
                        <label>
                            <img src="{{asset($hmtb[0]->calon_hima_foto)}}" width="200">
                            <p>{{$hmtb[0]->nama_calon_hima}}</p>
                            <input id="radioBtn" type="radio" name="id_pemilihan" value="{{$hmtb[0]->id_pemilihan}}" style="margin-left: 50px; margin-top: 5px;">
                            <p style="margin-left: 40px;">Pilih</p>
                        </label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="col-md-6">
                        <b><p>Nomor 2</p></b>
                        <label>
                            <img src="{{asset($hmtb[1]->calon_hima_foto)}}" width="200">
                            <p>{{$hmtb[1]->nama_calon_hima}}</p>
                            <input id="radioBtn" type="radio" name="id_pemilihan" value="{{$hmtb[1]->id_pemilihan}}" style="margin-left: 50px; margin-top: 5px;">
                            <p style="margin-left: 40px;">Pilih</p>
                        </label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="col-md-6">
                        <b><p>Nomor 3</p></b>
                        <label>
                            <img src="{{asset($hmtb[2]->calon_hima_foto)}}" width="200">
                            <p>{{$hmtb[2]->nama_calon_hima}}</p>
                            <input id="radioBtn" type="radio" name="id_pemilihan" value="{{$hmtb[2]->id_pemilihan}}" style="margin-left: 50px; margin-top: 5px;">
                            <p style="margin-left: 40px;">Pilih</p>
                        </label>
                    </div>
                </div>
                @endif
            </fieldset>
        </div>
    </section>
    @endif
    <h3>BEM</h3>
    <section>
        <fieldset>
        <h3 style="margin-bottom: 50px;">Silahkan Pilih Ketua dan Wakil BEM </h3>
                <div class="col-md-6">
                    <div class="col-md-6">
                        <b><p style="margin-left: 70px;">Nomor 1</p></b>
                        <label>
                            <img src="{{asset($bem[0]->paslon_bem_foto)}}" width="200">
                            <b><p style="margin-left: 15px; font-size: 15px;">{{$bem[0]->nama_paslon_bem}}</p></b>
                            <input id="radioBtn" type="radio" name="id_pemilihan_bem" value="{{$bem[0]->id_pemilihan_bem}}" style="margin-left: 90px; margin-top: 5px;">
                            <p style="margin-left: 80px;">Pilih</p>
                        </label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="col-md-6">
                        <b><p style="margin-left: 70px;">Nomor 2</p></b>
                        <label>
                            <img src="{{asset($bem[1]->paslon_bem_foto)}}" width="220"  height="300">
                            <b><p style="font-size: 15px;">{{$bem[1]->nama_paslon_bem}}</p></b>
                            <input id="radioBtn" type="radio" name="id_pemilihan_bem" value="{{$bem[1]->id_pemilihan_bem}}" style="margin-left: 90px; margin-top: 5px;">
                            <p style="margin-left: 80px;">Pilih</p>
                        </label>
                    </div>
                </div>
            </fieldset>
    </section>
    <h3>DLM</h3>
    <section>
        <fieldset>
        <h3 style="margin-bottom: 50px;">Silahkan Pilih DLM </h3>
                <div class="col-md-6">
                    <div class="col-md-6">
                        <b><p style="margin-left: 70px;">Nomor 1</p></b>
                        <label>
                            <img src="{{asset($dlm[0]->calon_dlm_foto)}}" width="200">
                            <b><p>{{$dlm[0]->nama_paslon_dlm}}</p></b>
                            <input id="radioBtn" type="radio" name="id_pemilihan_dlm" value="{{$dlm[0]->id_pemilihan_dlm}}" style="margin-left: 90px; margin-top: 5px;">
                            <p style="margin-left: 80px;">Pilih</p>
                        </label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="col-md-6">
                        <b><p style="margin-left: 70px;">Nomor 2</p></b>
                        <label>
                            <img src="{{asset($dlm[1]->calon_dlm_foto)}}" width="200" height="310">
                            <b><p>{{$dlm[1]->nama_paslon_dlm}}</p></b>
                            <input id="radioBtn" type="radio" name="id_pemilihan_dlm" value="{{$dlm[1]->id_pemilihan_dlm}}" style="margin-left: 90px; margin-top: 5px;">
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

           //  $test = $('#radioBtn.himaki').val();

           // //$test = $('input[#radioBtn.himaki]:checked', '#example-basic');
           //  //$test = $("input[id=radioBtn].himaki:checked").val();
           //  console.log($test);

           var form = $(this);

            // // Submit form input

            form.submit();
        }

    });
</script>
</html>