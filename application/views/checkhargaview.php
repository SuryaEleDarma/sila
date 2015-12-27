<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
<meta htt-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Sila | Home</title>

<!-- bootstrap -->
<link href="<?=base_url();?>assets/css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="<?=base_url();?>assets/css/custom.css" rel="stylesheet" type="text/css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

<style type="text/css">
.harga{
  font-size: 24px;
}
</style>

<body>
  <div class="container">
    <div class="header-top">
     <div class="row">
       <div class="col-sm-4"></div>
       <div class="col-sm-4 logo"><a href="<?php echo base_url(); ?>"><img class="center-image" src="<?=base_url();?>assets/image/logo.png"></a><br>
       	<p class="akronim">Sistem Informasi Laundry Online</p>
       </div>
       <div class="col-sm-4"></div>       
     </div>
   </div>
  </div>

  <div class="container isi">
  	<div class="row header">
  		<p>Check Harga</p>
  	</div>
  	<p class="text-center">Silahkan masukkan berat cucian anda dan pilih layanan laundry yang diinginkan : </p>
    <div class="porm row">
      <div class="center">
        <p class="text-center harga">Harga : Rp <b id="harga"><?php if (isset($harga)) {
      echo $harga;
    }
    else
      echo 'XXX'; ?></b></p>
        <form id="frm1" method="get" action="<?php echo base_url().'user/checkharga' ?>">
          <div class="form-group">
            <input min="0" type="number" class="form-control custom-text-form" name="berat" placeholder="Berat (dalam Kg)" required><br>
          <select class="form-control custom-text-form" name="option" required>
            <option selected="true" disabled="disabled">Pilih jasa laundry</option>
            <option value="1">Cuci Kering</option>
            <option value="2">Cuci Kering Setrika</option>
            <option value="3">Cuci Kering Antar</option>
            <option value="4">Cuci Kering Setrika Antar</option>
          </select><br>
          <button id="tombolHitung" class="btn btn-primary">Hitung</button>
          </div>
        </form>
      </div>
    </div>
  </div>


</body>
<script type="text/javascript" src="<?=base_url();?>assets/js/bootstrap.js"></script>
</html>