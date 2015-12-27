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

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

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
                        <a class="fa fa-sign-out fa-lg btn btn-danger" href="<?php echo base_url().'admin/logOut'; ?>"style="margin:5px;">Log Out</a>
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
                    <h1 class="page-header">Buat Transaksi</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <form method="post" action="<?php echo site_url().'transaksi/buattransaksi/'.$KodeKunci; ?>" >
                            <input required type="text" class="form-control custom-text-form" name="nama" placeholder="Nama Pelanggan"><br>
                            <input required rtype="text" class="form-control custom-text-form" name="alamat" placeholder="Alamat"><br>
                            <input required type="text" class="form-control custom-text-form" name="noTelp" placeholder="No Telp"><br>
                            <select required class="form-control custom-text-form" id="optionJasa" name="optionJasa">
                                <option selected="true" disabled="disabled">Pilih jasa laundry</option>
                                <option value="1">Cuci Kering</option>
                                <option value="2">Cuci Kering Setrika</option>
                                <option value="3">Cuci Kering Antar</option>
                                <option value="4">Cuci Kering Setrika Antar</option>
                            </select><br>
                            <input required min="0" type="number" class="form-control custom-text-form" name="berat" placeholder="Berat Cucian (dalam Kg)"><br>
                            <div class="col-md-4" style="padding-left:0px;">
                                <input type="text" class="form-control custom-text-form" name="kodeKunci" placeholder="<?php echo $KodeKunci; ?>" disabled="disabled" >
                            </div>
                            <div class="col-md-1">
                                <a onclick="return confirm('Anda yakin ingin mengubah kode kunci?');" href="<?php echo base_url().'admin/formBuatTransaksi';?>" class="btn btn-primary">Ubah</a>
                            </div>
                            <div class="col-md-7">
                                <p class="text-danger"> *mengubah kode kunci akan mengosongkan seluruh text field di halaman ini</p>
                            </div><br><br><br>
                            <div class="col-md-2" style="padding-left:0px;">
                                <input required min="0" type="number" class="form-control custom-text-form" name="kemeja" placeholder="Kemeja" >
                            </div>
                            <div class="col-md-2" style="padding-left:0px;">
                                <input required min="0" type="number" class="form-control custom-text-form" name="celana" placeholder="Celana" >
                            </div>
                            <div class="col-md-2" style="padding-left:0px;">
                                <input required min="0" type="number" class="form-control custom-text-form" name="bajuKaos" placeholder="Baju Kaos" >
                            </div>
                            <div class="col-md-2" style="padding-left:0px;">
                                <input required min="0" type="number" class="form-control custom-text-form" name="handuk" placeholder="Handuk" >
                            </div>
                            <div class="col-md-2" style="padding-left:0px;">
                                <input required min="0" type="number" class="form-control custom-text-form" name="pakaianDalam" placeholder="Pakaian Dalam" >
                            </div>
                            <div class="col-md-2" style="padding-left:0px;">
                                <input required min="0" type="number" class="form-control custom-text-form" name="kaosKaki" placeholder="Kaos Kaki" >
                            </div><br><br><br>
                            <button onclick="return confirm('Apakah data transaksi sudah benar?');" type="submit" class="btn btn-primary">Kirim Transaksi</button>
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
