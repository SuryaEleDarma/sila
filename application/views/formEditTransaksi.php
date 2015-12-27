<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Buat Transaksi | SILA</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?=base_url();?>assets/css/bootstrap.css" rel="stylesheet" type="text/css">

    <!-- MetisMenu CSS -->
     <link href="<?=base_url();?>assets/metisMenu/dist/metisMenu.min.css" rel="stylesheet" type="text/css">

    <!-- Custom CSS -->
    <link href="<?=base_url();?>assets/css/sb-admin-2.css" rel="stylesheet" type="text/css">

    <!-- Custom Fonts -->
    <link href="<?=base_url();?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">


</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo base_url().'admin/dashboard'; ?>">Dashboard SILA </a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li>
                    <div class="">
                        <a onclick="return confirm('Anda yakin ingin keluar dari SILA?');" class="fa fa-sign-out fa-lg btn btn-danger" href="<?php echo base_url().'admin/logOut'; ?>"style="margin:5px;">Log Out</a>
                    </div>
                </li>
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="<?php echo base_url().'admin/dashboard'; ?>"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-edit fa-fw"></i> Transaksi<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo base_url().'admin/formBuatTransaksi'; ?>">Buat Transaksi</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url().'transaksi/lihattransaksi'; ?>">Lihat Transaksi</a>
                                </li>                                
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="<?php echo base_url().'admin/tarif'; ?>"><i class="fa fa-money fa-fw"></i> Tarif</a>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Edit Transaksi</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <?php foreach ($result as $key) {
                               
                             ?>
                        <form method="post" action="<?php echo site_url().'transaksi/updatetransaksi?nopelanggan='.$key -> NoPelanggan.'&notransaksi='.$key -> IdTransaksi; ?>" >                           
                           <label for="name">Nama : </label>
                            <input required type="text" class="form-control custom-text-form" name="nama" value="<?php echo $key -> Nama; ?>" onClick="this.select();"><br>
                            <label for="alamat">Alamat : </label>
                            <input required type="text" class="form-control custom-text-form" name="alamat" value="<?php echo $key -> Alamat; ?>" onClick="this.select();"><br>
                            <label for="noTelp">No Telp : </label>
                            <input required type="text" class="form-control custom-text-form" name="noTelp" value="<?php echo $key -> NoTelp; ?>" onClick="this.select();"><br>
                            <label for="jenisTransaksi">Jenis Transaksi : </label>
                            <select class="form-control custom-text-form" id="optionJasa" name="optionJasa">
                                <option disabled="disabled">Pilih jasa laundry</option>
                                <option <?php if ($key -> IdJenis == 1) {
                                                            echo 'selected="true"';
                                                    }?> value="1">Cuci Kering</option>
                                <option <?php if ($key -> IdJenis == 2) {
                                                            echo 'selected="true"';
                                                    }?> value="2">Cuci Kering Antar</option>
                                <option <?php if ($key -> IdJenis == 3) {
                                                            echo 'selected="true"';
                                                    } ?> value="3">Cuci Kering Setrika</option>
                                <option <?php if ($key -> IdJenis == 4) {
                                                            echo 'selected="true"';
                                                    } ?> value="4">Cuci Kering Setrika Antar</option>
                            </select><br>
                            <label for="jenisTransaksi">Proses : </label>
                            <select class="form-control custom-text-form" id="optionJasa" name="proses">
                                <option disabled="disabled">Pilih jasa laundry</option>
                                <option <?php if ($key -> NoProses == 1) {
                                                            echo 'selected="true"';
                                                    }?> value="1">Baru Masuk</option>
                                <option <?php if ($key -> NoProses == 2) {
                                                            echo 'selected="true"';
                                                    }?> value="2">Cuci</option>
                                <option <?php if ($key -> NoProses == 3) {
                                                            echo 'selected="true"';
                                                    } ?> value="3">Kering</option>
                                <option <?php if ($key -> NoProses == 4) {
                                                            echo 'selected="true"';
                                                    } ?> value="4">Setrika</option>
                                <option <?php if ($key -> NoProses == 5) {
                                                            echo 'selected="true"';
                                                    } ?> value="5">Antar</option>
                                <option <?php if ($key -> NoProses == 6) {
                                                            echo 'selected="true"';
                                                    } ?> value="6">Selesai</option>
                            </select><br>
                            <label for="berat">Berat : </label>
                            <input type="number" class="form-control custom-text-form" name="berat" value="<?php echo $key -> Berat; ?>" onClick="this.select();"><br>
                            <div class="col-md-4" style="padding-left:0px;">
                                <input type="text" class="form-control custom-text-form" name="kodeKunci" value="<?php echo $key -> IdKodeKunci; ?>" disabled="disabled" onClick="this.select();">
                            </div>
                            <div class="col-md-1">
                                <a href="<?php echo base_url().'admin/formBuatTransaksi';?>" class="btn btn-primary">Ubah</a>
                            </div>
                            <div class="col-md-7">
                                <p class="text-danger"> *mengubah kode kunci akan mengosongkan seluruh text field di halaman ini</p>
                            </div><br><br><br>
                            <div class="col-md-2" style="padding-left:0px;">
                                <label for="name">Kemeja : </label>
                                <input type="number" class="form-control custom-text-form" value="<?php echo $key -> Kemeja; ?>" name="kemeja" onClick="this.select();">
                            </div>
                            <div class="col-md-2" style="padding-left:0px;">
                                <label for="name">Celana : </label>
                                <input type="number" class="form-control custom-text-form" name="celana" value="<?php echo $key -> Celana; ?>" onClick="this.select();">
                            </div>
                            <div class="col-md-2" style="padding-left:0px;">
                                <label for="name">Baju Kaos : </label>
                                <input type="number" class="form-control custom-text-form" name="bajuKaos" value="<?php echo $key -> BajuKaos; ?>" onClick="this.select();">
                            </div>
                            <div class="col-md-2" style="padding-left:0px;">
                                <label for="name">Handuk : </label>
                                <input type="number" class="form-control custom-text-form" name="handuk" value="<?php echo $key -> Handuk; ?>" onClick="this.select();">
                            </div>
                            <div class="col-md-2" style="padding-left:0px;">
                                <label for="name">Pakaian Dalam : </label>
                                <input type="number" class="form-control custom-text-form" name="pakaianDalam" value="<?php echo $key -> PakaianDalam; ?>" onClick="this.select();">
                            </div>
                            <div class="col-md-2" style="padding-left:0px;">
                                <label for="name">Kaos Kaki : </label>
                                <input type="number" class="form-control custom-text-form" name="kaosKaki" value="<?php echo $key -> KaosKaki; ?>" onClick="this.select();">
                            </div><br><br><br><br>
                            <button onclick="return confirm('Anda yakin ingin mengubah transaksi ini?');" type="submit" class="btn btn-primary">Kirim Transaksi</button>
                            <?php } ?>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="<?=base_url();?>assets/bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?=base_url();?>assets/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?=base_url();?>assets/bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?=base_url();?>assets/dist/js/sb-admin-2.js"></script>

</body>

</html>
