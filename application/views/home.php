<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Home | SILA</title>

<!-- bootstrap -->
<link href="<?=base_url();?>assets/css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="<?=base_url();?>assets/css/custom.css" rel="stylesheet" type="text/css">

<link async href="http://fonts.googleapis.com/css?family=Advent%20Pro" data-generated="http://enjoycss.com" rel="stylesheet" type="text/css"/>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script> -->
<script src="<?=base_url();?>assets/js/jquery.min.js"></script>


<body>
  <div class="container">
    <div class="header-top">
     <div class="row">
       <div class="col-sm-4"></div>
       <div class="col-sm-4 logo"><a href="<?php echo base_url(); ?>"><img class="center-image" src="<?=base_url();?>assets/image/logo.png"></a><br>
       	<p class="akronim">Sistem Informasi Laundry Online</p></div>
       <div class="col-sm-4"></div>
       
     </div>
   </div>
   <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>
 
  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item <?php if (!isset($pesan)) {
      echo 'active';
    } ?>">
    	<div class="tenkonten">
    		<div class="carousel-caption header">
          About
      </div>
      <div class="carousel-caption">
          <p>
          	Selamat datang di SILA, SILA akan membantu anda dalam memudahkan transaksi dan mengecek orderan laundry yang anda miliki <br>
          	Silahkan geser untuk memilih menu yang disediakan.
          </p>     
          <a href="<?php echo site_url().'home/about'; ?>">
          <div class="enjoy-css">See more</div>
          </a> 
      </div>
    	</div>
    </div>
    <div class="item <?php if (isset($pesan)) {
      echo 'active';
    } ?>">
    	<div class="tenkonten">
      
      <div class="carousel-caption header">
          Tracking
      </div>
      <div class="carousel-caption">
        <?php 
                if (isset($pesan)) {
                    if ($pesan == "gagal") 
                {
                   echo '<div class="alert alert-danger fade in">
                          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                          <strong>Maaf!</strong> Transaksi tidak ditemukan.
                        </div>';
                }
                }

        ?>
          <p>
          	Lakukan tracking terhadap transaksi yang anda miliki untuk mengetahui status dari transaksi anda, silahkan masukkan kode 
          	kunci yang anda miliki <br>
          </p>    
      <div class="row">
      <div class="center">
        <form method="post" action="<?php echo site_url().'user/tracking'; ?>">
          <div class="form-group">
            <input required type="text" class="form-control custom-text-form" name="inputKodeKunci" placeholder="Kode Kunci"><br>
            <button class="enjoy-css">Track</button>
          </div>
        </form>
      </div>
    </div> 
      </div>
  </div>
    </div>
    <div class="item">
      <div class="tenkonten">
     <div class="carousel-caption header">
          Check Harga
      </div>
      <div class="carousel-caption">
          <p>
          	Lakukan pengecekan harga untuk mengetahui harga perkiraan dari cucian anda
          </p>   
          <a href="<?php echo site_url().'user/formcheckharga'; ?>">
          <div class="enjoy-css">Check</div>
          </a>
      </div>
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


</body>
<script type="text/javascript">
$(function() {
    $(window).bind('resize', function()
    {
        resizeMe();
        }).trigger('resize');
    });
resizeMe(){
var preferredHeight = 768;
//Base font size for the page
var fontsize = 18;

var displayHeight = $(window).height();
var percentage = displayHeight / preferredHeight;
var newFontSize = Math.floor(fontsize * percentage) - 1;
$("akronim").css("font-size", newFontSize);
}

</script>
<script type="text/javascript" src="<?=base_url();?>assets/js/bootstrap.js"></script>
</html>