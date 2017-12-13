<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>MB Fotografía</title>

    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,700" rel="stylesheet">


    <style media="screen">
      .proyecto{
        background-size: cover;
        background-position: center;
        height: 400px;
        position: relative;

        display: flex;
        align-items: center;
        justify-content: center;
      }

      .proyecto.foto1{ background-image: url(fotos/foto1.jpg); }
      .proyecto.foto2{ background-image: url(fotos/foto2.jpg); }
      .proyecto.foto3{ background-image: url(fotos/foto3.jpg); }
      .proyecto.foto4{ background-image: url(fotos/foto4.jpg); }

      .proyecto > .overlay{
        /*position: absolute;*/
        width: 100%;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: .3s ease all;
      }
      .proyecto > .overlay:hover {
        height: 90%;
        width: 90%;
      }
      .proyecto > .overlay-r{
        background-color: rgba(15, 131, 160, 0.5);
      }
      .proyecto > .overlay-g{
        background-color: rgba(1, 150, 144, 0.5);
      }
      .proyecto .texto{
        font-family: 'Raleway', sans-serif;
        color: white;
      }
      .proyecto .texto > h3{
        font-weight: 700;
        font-size: 2.5vw;
        text-align: center;
        line-height: 1;
        margin-bottom: 5px;
      }
      .proyecto .texto > span{
        width: 100%;
        text-align: center;
        float: left;
      }

      .bio{
        height: 100vh;
        display: flex;
        align-items: center;
        flex-direction: column;
        justify-content: center;
        font-family: 'Roboto', sans-serif;
        background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.5) 0%, rgba(4, 4, 4, 0.6) 100%), url(http://www.martinabajour.com/wp-content/uploads/2016/09/27300034.jpg);
        background-size: cover;
        background-position: center;
        color: #FFF;
      }
      .bio h2{
        font-weight: 700!important;
        font-size: 4em;
        line-height: 1;
        margin-bottom: 10px!important;
      }
      .bio h3{
        font-weight: 400;
        font-size: 2em;
      }
    </style>
  </head>
  <body>
    <div class="grid">

      <?php include_once("includes/menu.php"); ?>


      <div class="expanded row" style="padding-top: 60px;">

        <div class="small-12 medium-12 large-3">
          <div class="proyecto foto1">
            <div class="overlay overlay-r">
              <div class="texto">
                <h3>Ostará bistro</h3>
                <span>Categoría: gastronomía</span>
              </div>
            </div>
          </div>
        </div>

        <div class="small-12 medium-12 large-3">
          <div class="proyecto foto2">
            <div class="overlay overlay-g">
              <div class="texto">
                <h3>título</h3>
                <span>Bajada del título</span>
              </div>
            </div>
          </div>
        </div>

        <div class="small-12 medium-12 large-3">
          <div class="proyecto foto3">
            <div class="overlay overlay-r">
              <div class="texto">
                <h3>título</h3>
                <span>Bajada del título</span>
              </div>
            </div>
          </div>
        </div>

        <div class="small-12 medium-12 large-3">
          <div class="proyecto foto4">
            <div class="overlay overlay-g">
              <div class="texto">
                <h3>título</h3>
                <span>Bajada del título</span>
              </div>
            </div>
          </div>
        </div>

        <div class="large-12">
          <div class="bio" id="bio">
            <h2>Fotógrafa freelance.</h2>
            <h3>Escuela de Fotografía Creativa Andy Goldstein.</h3>
            <span>Mención y exposición en el Festival de la Luz. (2014, Centro Cultural Recoleta)</span>
            <span>Mención y exposición en el Festival Municipal de Fotografía de Mercedes. (2017, Centro Cultural Municipal de Mercedes)</span>
          </div>
        </div>


      </div>


    </div>

    <script src="bower_components/jquery/dist/jquery.js"></script>
    <script src="bower_components/what-input/dist/what-input.js"></script>
    <script src="bower_components/foundation-sites/dist/js/foundation.js"></script>
    <script src="js/app.js"></script>
  </body>
</html>
