<!DOCTYPE html>
<html>
<head>
    <title>PEMIRA FST 2017</title>
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
   <form id="example-basic" method="post" class="form-horizontal" action="{!!url('')!!}" >       
    <input type="hidden" name="_token" value="{!! csrf_token() !!}">
    <h3>HIMAKI</h3>
    <section>
        <h3>Silahkan Pilih Ketua dan Wakil Ketua Himaki</h3>

        <div class="row">

        <?php

            $dataObs = array();

            foreach ($himaki as $item) {
                # code...
                $isExist = true;

                //print_r($dataObs);

                //echo "<br>";

                if(!in_array($item->nim_paslon,$dataObs)){
                    array_push($dataObs,$item->nim_paslon);
                    //echo $item->nim_paslon." ";
                    //echo "test";
                    $isExist = false;
                }


                if(!$isExist){
                     foreach ($himaki as $item2) {
                    # code...


                    if($item->nim_paslon!=$item2->nim_paslon&&$item->pasangan_nomor==$item2->pasangan_nomor){
                        //echo $item2->nim_paslon."<br>";

                        if(!in_array($item2->nim_paslon,$dataObs)){
                            array_push($dataObs,$item2->nim_paslon);
                        }

                        array_push($dataObs,$item2->nim_paslon);

                        echo '<fieldset>';

                            echo '<div class="col-md-6"';

                                echo "<p> Pasangan Nomor ".$item->pasangan_nomor."</p>";

                                echo '<label>';

                                    echo '<img src="'.$item->url_foto.'" width="125">';
                                    echo '<input id="radioBtn" type="radio" name="optradio1" onclick="test(this)"/ style="margin-left: 45px;">';
                                    echo '<p>Pilih</p>';




                                echo '</label>';

                                  echo '<label>';

                                    echo '<img src="'.$item2->url_foto.'" width="125">';
                                    echo '<input id="radioBtn" type="radio" name="optradio1" onclick="test(this)"/ style="margin-left: 45px;">';
                                    echo '<p>Pilih</p>';

                                echo '</label>';

                            echo '</div>';

                            echo '<div class="col-md-6"';

                                
                            echo '</div>';

                        echo '</fieldset>';

                        break;
                    }
                }
                }
                

               
            }
        ?>

        </div>

    </section>
    <h3>BLM Angkatan 2015</h3>
    <section>
        <h3 style="text-align: center; margin-bottom: 50px;" >Silahkan pilih BLM Angkatan 2015</h3>
        <div class="row">
           <?php

           
             echo '<fieldset>';
            foreach ($blm_2015 as $item) {
                
                # code...
                

                            echo '<div class="col-md-6"';

                                echo '<label>';

                                    echo '<img src="'.$item->url_foto.'" width="125">';
                                    echo '<input id="radioBtn" type="radio" name="optradio1" onclick="test(this)"/ style="margin-left: 45px;">';
                                    echo '<p>Pilih</p>';

                                echo '</label>';

                            echo '</div>';

                           

                        
                
            }
            echo '</fieldset>';

        ?>
        </div>
    </section>
    <h3>BLM Angkatan 2016</h3>
    <section>
       <!--  <fieldset>
            <div class="col-md-6">
                <label>
                    <img src="https://cybercampus.unair.ac.id/foto_mhs/081411631005.JPG">
                    <input id="radioBtn" type="radio" name="optradio1" onclick="test(this)">
                    <p>Pilih</p>
                </label>
            </div>
            <div class="col-md-6">
                <div class="col-md-3">
                    <label>
                        <img src="https://cybercampus.unair.ac.id/foto_mhs/081411631006.JPG" width="125">
                        <input id="radioBtn" type="radio" name="optradio1" onclick="test(this)"/ style="margin-left: 45px;">
                        <p style="margin-left: 35px;">Pilih</p>
                    </label>
                </div>  
                <div class="col-md-3">
                    <p></p>
                </div>
            </div>
        </fieldset> -->
        <div class="row">
           <?php

           
             echo '<fieldset>';
            foreach ($blm_2016 as $item) {
                
                # code...
                

                            echo '<div class="col-md-6"';

                                echo '<label>';

                                    echo '<img src="'.$item->url_foto.'" width="125">';
                                    echo '<input id="radioBtn" type="radio" name="optradio1" onclick="test(this)"/ style="margin-left: 45px;">';
                                    echo '<p>Pilih</p>';

                                echo '</label>';

                            echo '</div>';

                           

                        
                
            }
            echo '</fieldset>';

        ?>
        </div>
    </section>
    <h3>BLM Angkatan 2017</h3>
    <section>
           <div class="row">
           <?php

           
             echo '<fieldset>';
            foreach ($blm_2017 as $item) {
                
                # code...
                

                            echo '<div class="col-md-6"';

                                echo '<label>';

                                    echo '<img src="'.$item->url_foto.'" width="125">';
                                    echo '<input id="radioBtn" type="radio" name="optradio1" onclick="test(this)"/ style="margin-left: 45px;">';
                                    echo '<p>Pilih</p>';

                                echo '</label>';

                            echo '</div>';

                           

                        
                
            }
            echo '</fieldset>';

        ?>
        </div>
    </section>
    <h3>BEM</h3>
    <section>
         <div class="row">

        <?php

            $dataObs = array();

            foreach ($bem as $item) {
                # code...
                $isExist = true;

                //print_r($dataObs);

                //echo "<br>";

                if(!in_array($item->nim_paslon,$dataObs)){
                    array_push($dataObs,$item->nim_paslon);
                    //echo $item->nim_paslon." ";
                    //echo "test";
                    $isExist = false;
                }


                if(!$isExist){
                     foreach ($bem as $item2) {
                    # code...


                    if($item->nim_paslon!=$item2->nim_paslon&&$item->pasangan_nomor==$item2->pasangan_nomor){
                        //echo $item2->nim_paslon."<br>";

                        if(!in_array($item2->nim_paslon,$dataObs)){
                            array_push($dataObs,$item2->nim_paslon);
                        }

                        array_push($dataObs,$item2->nim_paslon);

                        echo '<fieldset>';

                            echo '<div class="col-md-6"';

                                echo "<p> Pasangan Nomor ".$item->pasangan_nomor."</p>";

                                echo '<label>';

                                    echo '<img src="'.$item->url_foto.'" width="125">';
                                    echo '<input id="radioBtn" type="radio" name="optradio1" onclick="test(this)"/ style="margin-left: 45px;">';
                                    echo '<p>Pilih</p>';




                                echo '</label>';

                                  echo '<label>';

                                    echo '<img src="'.$item2->url_foto.'" width="125">';
                                    echo '<input id="radioBtn" type="radio" name="optradio1" onclick="test(this)"/ style="margin-left: 45px;">';
                                    echo '<p>Pilih</p>';

                                echo '</label>';

                            echo '</div>';

                            echo '<div class="col-md-6"';

                                
                            echo '</div>';

                        echo '</fieldset>';

                        break;
                    }
                }
                }
                

               
            }
        ?>


        </div>
    </section>
    <h3>DLM</h3>
    <section>
       <?php 
     echo '<fieldset>';
            foreach ($dlm as $item) {
                
                # code...
                

                            echo '<div class="col-md-6"';

                                echo '<label>';

                                    echo '<img src="'.$item->url_foto.'" width="125">';
                                    echo '<input id="radioBtn" type="radio" name="optradio1" onclick="test(this)"/ style="margin-left: 45px;">';
                                    echo '<p>Pilih</p>';

                                echo '</label>';

                            echo '</div>';

                           

                        
                
            }
            echo '</fieldset>';
       ?>
    </section>
</form>
</div>
<script type="text/javascript">
	$("#example-basic").steps({
        headerTag: "h3",
        bodyTag: "section",
        enableAllSteps: true,
        transitionEffect: "slideLeft",
        autoFocus: true
    });
</script>
<script>

    var radioState = false;
    function test(element){
        if(radioState == false) {
            check();
            radioState = true;
        }else{
            uncheck();
            radioState = false;
        }
    }
    function check() {
        document.getElementById("radioBtn").checked = true;
    }
    function uncheck() {
        document.getElementById("radioBtn").checked = false;
    }
</script>
</html>