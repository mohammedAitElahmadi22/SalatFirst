<?php
date_default_timezone_set('africa/casablanca');
function salat($time){
    $courent_date = new DateTime();
    $adan = new DateTime("$time");

    $msg=$courent_date->diff($adan);
    if($courent_date>$adan){
        return 'مرة بحوالي : '. $msg->h .'ساعة : '.$msg->i.' دقيقة ' ;
    }else{
        return 'لا زال : '. $msg->h .' ساعة : '.$msg->i.' دقيقة ';
    }
}




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="content">
            <audio  >

                <source src="adan.mp3" type="audio/mpeg">
                <source src="adan.mp3" type="audio/ogg">
            </audio>
            <h2 class="time"></h2>
            <div class="salawat">
                <div class="sobh salat">
                    <h5>الفجر</h5>
                    <p class="Time">05:21:00</p>
                    <p class="color">
                      <?php echo salat('05:21:00') ;?>
                    </p>
                </div>
                <div class="dohr salat">
                    <h5>الظهر</h5>
                    <p class="Time">13:30:00</p>
                    <p class="color"><?php echo salat('13:30:00');?></p>
                </div>
                <div class="asr salat">
                    <h5> العصر</h5>
                    <p class="Time">17:03:00</p>
                    <p class="color"><?php echo salat('17:03:00');?></p>
                </div>
                <div class="maarib salat">
                    <h5> المغرب </h5>
                    <p class="Time">20:04:00</p>
                    <p class="color"><?php echo salat('20:04:00');?></p>
                </div>
                <div class="achaa salat">
                    <h5>العشاء</h5>
                    <p class="Time">21:18:00</p>
                    <p class="color">
                        <?php echo salat('21:18:00');?></p>
                </div>
            </div>

        </div>
    </div>

    <script src="script.js" >
        
    </script>
</body>
</html>
