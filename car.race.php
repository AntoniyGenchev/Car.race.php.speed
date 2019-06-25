<!DOCTYPE html>
<html>
   <head>
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
       <style type="text/css">
           #road{
               background-color: black;
               height: 24px;
               width: 100%;
               margin-top: 122px;
           }
           #img_race{
               position: absolute;
               width: 140px;
           }
           #img_police{
               margin-top: -170px;
               width: 220px;
               position: absolute;
               display: none;
           }
           #img_ambulance{
               position: absolute;
               width: 220px;
               margin-top: -157px;
               display: none;
           }


       </style>
   </head>
   <body>
       <div><img id="img_race" src="car.png"></div>
       <br/>
       <div id="road"></div>
       <div><img id="img_police" src="Police-Car_grande.png"></div>
       <div><img id="img_ambulance" src="ambulance.jpg"></div>
       <button id="car_race">car_race</button>
       <button id="police_car">police_car</button>
       <button id="ambulance_car">ambulance_car</button>
   <?php

   $speed = [];
   $speed['200'] = 1500;
   $speed['180'] = 2000;
   $speed['160'] = 3000;

   $x = $_GET['x'];

   $new_speed = $speed[$x];
   ?>
         <script type="text/javascript">
             $('#car_race').click(function () {
               $("#img_race").animate({
                   left:"1385"
               },<?php echo $new_speed; ?>);
             });
             $("#police_car").click(function(){
               $('#img_race').hide(function(){
                   $('#img_police').show().animate({
                       left:'1310'
                   },<?php echo $new_speed; ?>);
               });
             });
             $("#ambulance_car").click(function(){
               $('#img_police').hide(function(){
                   $('#img_ambulance').show().animate({
                       left:'1320'
                   },<?php echo $new_speed; ?>);
               });
             });
         </script>
   </body>
</html>