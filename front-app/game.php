<!DOCTYPE html>
<html lang="es">

<?php
#Author: Samuele Bagalà, Septiember 2021
#Email: samuele@box2box.es
#Github @bagalasamuele


if (isset($_SERVER['HTTP_REFERER']) != '/event/app') {
 header("refresh:1;url='/'");
  die('No puedes aceder directamente a este url');
} 

?>


<head>

  <meta charset="utf-8" />
  <title>The WEEL - box2box</title>
  <meta name="keywords" content="HTML5,CSS3,Template" />
  <meta name="format-detection" content="telephone=no">
  <meta name="theme-color" content="#488253d6">
  <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0" />
  <meta property="og:title" content="Alquiler de Trasteros en Barcelona - box2box">
  <meta property="og:description" content="✅Alquiler de Trasteros y Trasteros a Domicilio en Barcelona. ✅Recogemos tus cosas Gratis, las Guardamos y te las devolvemos donde y cuando las necesites.">
  <meta property="og:locale" content="es_ES">
  <meta property="og:site_name" content="box2box">
  <meta property="og:type" content="website">
  <meta property="og:url" content="http://box2box.es">

  <link rel="apple-touch-icon-precomposed" href="/imgs/icon.png">
  <link rel="icon" type="image/png" href="/imgs/icon.png" sizes="16x16">

  <!-- CORE CSS -->
  <link href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />


  <!-- CSS CLASSES-->
  <link rel="stylesheet" type="text/css" href="../event/style/styles.css" /> 


</head>



<body >




  <div class="container" style="text-align:center;">

  <div class="row" style="margin-top: 60px !important;">&nbsp;</div>
    <div class="row" class="enable-animation" style="padding-top: 0px !important;">
      <div id="app" > 
          <img class="marker" src="../event/images/arrow.png" />
          <img class="wheel" src="../event/images/rueda.png" />
        <div>
          <button class="button" style="margin-top: 10px !important;">Try to win!</button>
        </div>
    </div>

    <script src="../event/scripts/script.js"></script>

    </div>
  </div>
  

  




  <!-- JAVASCRIPT FILES -->
  <script type="text/javascript">
    var plugin_path = '../../assets/plugins/';
  </script>
  <script type="text/javascript" src="../../assets/plugins/jquery/jquery-2.2.3.min.js"></script>

  <script type="text/javascript" src="../../assets/js/scripts.js"></script>
</body>





</html>



