<style media="screen">
  .menu{
    height: 60px;
    box-shadow: 0px 0px 15px -5px #141414;
    z-index: 9999;
    position: fixed;
    background-color: #FFF;
    width: 100%;
  }
  .menu-lista,
  .logo{
    display: flex;
    align-items: center;
  }
  .logo > img{
    width: 250px!important;
  }
  .menu-lista > ul{
    list-style: none;
    float: left;
    margin: 0;
  }
  .menu-lista > ul > li{
    float: left;
    padding: 0 10px;
  }
  .menu-lista > ul > li > a{
    font-family: 'Raleway', sans-serif;
    color: #000;
    font-weight: 500;
    transition: .4s ease all;
  }
  .menu-lista > ul > li:not(.icono) > a:hover{
    background-color: #00a1d3;
    color: #FFF;
  }
  .menu-lista > ul > li.icono{
    padding-right: 0!important;
  }
  .menu-lista > ul > li.icono > a{
    padding: 10px 0px;
  }
  .menu-lista > ul > li.icono > a > i.fa-facebook{ color: #3b5998; }
  .menu-lista > ul > li.icono > a > i.fa-instagram{ color: #833ab4; }

</style>

<div class="menu expanded row align-spaced">

  <div class="logo column small-3">
    <img src="img/logo-h.png" alt="Logo Martina Bajour" />
  </div>

  <div class="menu-lista column small-4">

    <ul>
      <li><a onclick="goTo('bio')">Sobre mi</a></li>
      <li><a >Portfolio</a></li>
      <li><a href="#">Contacto</a></li>
      <li class="icono"><a href="#"> <i class="fa fa-facebook" aria-hidden="true"></i></a></li>
      <li class="icono"><a href="#"> <i class="fa fa-instagram" aria-hidden="true"></i></a></li>
    </ul>

  </div>

</div>

<script type="text/javascript">
function goTo(k) {
    $('html, body').animate({
        scrollTop: $("#" + k).offset().top
    }, 1000);
}
</script>
