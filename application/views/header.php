<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
<meta htt-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Brazza Ressort | Home</title>

<!-- bootstrap -->
<link href="<?=base_url();?>assets/css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="<?=base_url();?>assets/css/custom_header.css" rel="stylesheet" type="text/css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>


<head>
     <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?=base_url();?>"><b>Brazza</b> Resort</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="pilihan"><a href="#">Beranda</a></li>       
            <li class="pilihan"><a href="#about">Proyek</a></li>
            <!-- <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Harga <b class="caret"></b></a>
              <ul class="dropdown-menu">
              <li class="dropdown-header">Admin & Dashboard</li>
                <li><a href="#">Admin 1</a></li>
                <li><a href="#">Admin 2</a></li>
                <li class="divider"></li>
                <li class="dropdown-header">Portfolio</li>
                <li><a href="#">Portfolio 1</a></li>
                <li><a href="#">Portfolio 2</a></li>
              </ul>
            </li>    -->         
            <li class ="pilihan"><a href="#">Harga</a></li>
            <li class ="pilihan"><a href="#">Syarat & Ketentuan</a></li>
            <li class = "pilihan"><a href="#">Kontak</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>


<div class="">
<div id="carousel-example-generic" class="carousel slide carousel-fade" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
    <li data-target="#carousel-example-generic" data-slide-to="4"></li>
    <li data-target="#carousel-example-generic" data-slide-to="5"></li>
  </ol>
 
  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="<?=base_url();?>assets/image/imgHeader/view.jpg" alt="Brazza view image">
      <div class="carousel-caption">
          Brazza <b>View</b>
      </div>
    </div>
    <div class="item">
      <img src="<?=base_url();?>assets/image/imgHeader/insect.jpg" alt="Brazza insectarium image">
      <div class="carousel-caption">
          Brazza <b>Insectarium</b>
      </div>
    </div>
    <div class="item">
      <img src="<?=base_url();?>assets/image/imgHeader/resort.jpg" alt="Brazza resort image">
      <div class="carousel-caption">
          Brazza <b>Resort</b>
      </div>
    </div>
    <div class="item">
      <img src="<?=base_url();?>assets/image/imgHeader/villa.jpg" alt="Brazza villa image">
      <div class="carousel-caption">
          Brazza <b>Villa</b>
      </div>
    </div>
    <div class="item">
      <img src="<?=base_url();?>assets/image/imgHeader/bungalow.jpg" alt="Brazza bungalow image">
      <div class="carousel-caption">
          Brazza <b>Bungalow</b>
      </div>
    </div>
    <div class="item">
      <img src="<?=base_url();?>assets/image/imgHeader/hotel.jpg" alt="Brazza hotel image">
      <div class="carousel-caption">
          Brazza <b>Hotel</b>
      </div>
    </div>
  </div>
 
  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
</div> <!-- Carousel -->
</div>
</head>
<script type="text/javascript">
$('.carousel').carousel({
  interval: 1500
});
</script>
<script type="text/javascript" src="<?=base_url();?>assets/js/bootstrap.js"></script>
</html>