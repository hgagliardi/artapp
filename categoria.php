<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>MB Fotografía - Categoría</title>

    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,700" rel="stylesheet">

    <style media="screen">
      .grid .main-album{
        height: 100vh;
        width: 100%;
        display: flex;
        align-items: center;
        flex-direction: column;
        justify-content: center;
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        background: linear-gradient(to bottom, rgba(0, 0, 0, .6) 0%, rgba(0, 0, 0, .75) 100%), url(fotos/foto1.jpg);
      }
      .grid .main-album h1,
      .grid .main-album h3{
        font-family: 'Raleway', sans-serif;
        color: #FFF;
        text-align: center;
        margin: 0;
        font-weight: 900;
        line-height: 1;
      }
      .grid .main-album h1{
        font-size: 60px;
        margin-bottom: 10px;
      }
      .grid .main-album h3{
        font-weight: 500;
        font-size: 24px;
      }
      .grid .main-album span{
        text-align: center;
        bottom: 50px;
        position: absolute;
        width: 100%;
        font-size: 32px;
        color: #FFF;
      }
    </style>
  </head>
  <body>
    <div class="grid">

      <?php include_once("includes/menu.php"); ?>

      <!--
      <div class="main-album expanded row">
        <h1>Ostará Bistró</h1>
        <h3>Descripción de Ostará Bistró</h3>
        <span><i class="fa fa-arrow-down" aria-hidden="true"></i></span>
      </div>
       FIN CABECERA ALBUM -->

      <div class="container row">

        

      </div>



    </div>

    <script src="bower_components/jquery/dist/jquery.js"></script>
    <script src="bower_components/what-input/dist/what-input.js"></script>
    <script src="bower_components/foundation-sites/dist/js/foundation.js"></script>
    <script src="js/app.js"></script>
  </body>
</html>
