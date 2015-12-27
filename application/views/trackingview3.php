<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
<meta htt-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Tracking |SILA</title>

<!-- bootstrap -->
<link href="<?=base_url();?>assets/css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="<?=base_url();?>assets/css/custom.css" rel="stylesheet" type="text/css">
<link href="<?=base_url();?>assets/css/customtracking.css" rel="stylesheet" type="text/css">
<link href="<?=base_url();?>assets/metisMenu/dist/metisMenu.min.css" rel="stylesheet" type="text/css">
<link href="<?=base_url();?>assets/css/sb-admin-2.css" rel="stylesheet" type="text/css">
<link href="<?=base_url();?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>


<body>
  <div class="container">
    <div class="header-top">
     <div class="row">
       <div class="col-sm-4"></div>
       <div class="col-sm-4 logo"><a href="<?php echo base_url(); ?>">
        <img class="center-image" src="<?=base_url();?>assets/image/logo.png"></a><br>
       	<p class="akronim">Sistem Informasi Laundry Online</p>
       </div>
       <div class="col-sm-4"></div>       
     </div>
   </div>
  </div>

  <div class="container isi">
    <?php foreach ($query as $key) {
      ?>
  	<div class="row header">
  		<p>Tracking</p>
  	</div>
    <div class="row" style="margin:15px;">
                <div class="col-lg-4 col-md-6">
                    <div class="panel <?php if ($key -> NoProses >= 2) {
                                                if ($key -> NoProses == 2) {
                                                    echo "panel-yellow";
                                                }
                                                else
                                                    echo "panel-green";
                                        }
                                            else
                                                echo "panel-grey";
                    ?>">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <img src="<?=base_url();?>assets/image/cuci.png">
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">Cuci</div>
                                    <div>
                                        <?php if ($key -> NoProses >= 2) {
                                                if ($key -> NoProses == 2) {
                                                    echo "Proses...";
                                                }
                                                else
                                                    echo "Selesai.";
                                        }
                                            else
                                                echo "Belum.";
                                         ?>   
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="panel <?php if ($key -> NoProses >= 3) {
                                                if ($key -> NoProses == 3) {
                                                    echo "panel-yellow";
                                                }
                                                else
                                                    echo "panel-green";
                                        }
                                            else
                                                echo "panel-grey";
                    ?>">                        
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <img src="<?=base_url();?>assets/image/kering.png">
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">Kering</div>
                                    <div>
                                        <?php if ($key -> NoProses >= 3) {
                                                if ($key -> NoProses == 3) {
                                                    echo "Proses...";
                                                }
                                                else
                                                    echo "Selesai.";
                                        }
                                            else
                                                echo "Belum.";
                                         ?> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="panel <?php if ($key -> NoProses >= 4) {
                                                if ($key -> NoProses == 4) {
                                                    echo "panel-yellow";
                                                }
                                                else
                                                    echo "panel-green";
                                        }
                                            else
                                                echo "panel-grey";
                    ?>">   
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <img src="<?=base_url();?>assets/image/setrika.png">
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">Setrika</div>
                                    <div>
                                        <?php if ($key -> NoProses >= 4) {
                                                if ($key -> NoProses == 4) {
                                                    echo "Proses...";
                                                }
                                                else
                                                    echo "Selesai.";
                                        }
                                            else
                                                echo "Belum.";
                                         ?> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
              <div class="text-center">
                 <div class="container">
                   <table class="table">
                                <tr>
                                    <td>Nama Pelanggan</td>
                                    <td><?php echo $key -> Nama; ?></td>
                                </tr>
                                <tr>
                                    <td>Alamat</td>
                                    <td><?php echo $key -> Alamat; ?></td>
                                </tr>
                                <tr>
                                    <td>No Telp</td>
                                    <td><?php echo $key -> NoTelp; ?></td>
                                </tr>
                                <tr>
                                    <td>Kode Kunci</td>
                                    <td><?php echo $key -> IdKodeKunci; ?></td>
                                </tr>
                                <tr>
                                    <td>Jenis Transaksi</td>
                                    <td><?php echo $key -> JenisTarif; ?></td>
                                </tr>
                                <tr>
                                    <td>Berat</td>
                                    <td><?php echo $key -> Berat." kg"; ?></td>
                                </tr>
                                <tr>
                                    <td>Kemeja</td>
                                    <td><?php echo $key -> Kemeja." buah"; ?></td>
                                </tr>
                                <tr>
                                    <td>Celana</td>
                                    <td><?php echo $key -> Celana." buah"; ?></td>
                                </tr>
                                <tr>
                                    <td>Baju Kaos</td>
                                    <td><?php echo $key -> BajuKaos." buah"; ?></td>
                                </tr>
                                <tr>
                                    <td>Handuk</td>
                                    <td><?php echo $key -> Handuk." buah"; ?></td>
                                </tr>
                                <tr>
                                    <td>Pakaian Dalam</td>
                                    <td><?php echo $key -> PakaianDalam." buah"; ?></td>
                                </tr>
                                <tr>
                                    <td>Kaos Kaki</td>
                                    <td><?php echo $key -> KaosKaki." pasang"; ?></td>
                                </tr>
                                <tr>
                                    <td>Harga</td>
                                    <td><?php 
                                    $Berat = $key -> Berat;
                                    $Tarif = $key -> Tarif;
                                    echo "Rp ".$Berat * $Tarif;
                                     ?></td>
                                </tr>                                
                          </table>
                 </div>
              </div>
            </div>

      <?php 
    } ?>

  </div>


</body>
<script type="text/javascript" src="<?=base_url();?>assets/js/bootstrap.js"></script>
</html>