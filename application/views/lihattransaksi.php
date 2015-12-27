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
<style>
.im-centered { margin: auto; max-width: 300px;}
.im-centered > .row > a,
.im-centered > .row > strong{
    text-decoration: none;
    color: #337ab7;
    text-decoration: none;
    background-color: #fff;
    border: 1px solid #ddd;
    margin-left: -1px;
    line-height: 1.42857143;
    padding: 6px 12px;
}

</style>


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
                                    <a href="<?php echo base_url().'admin/lihattransaksi'; ?>">Lihat Transaksi</a>
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
                    <h1 class="page-header">Lihat Transaksi</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <?php 
                if (isset($pesan)) {
                    if ($pesan == "delete") 
                {
                   echo '<div class="alert alert-danger">
                      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                      <strong>Success!</strong> Transaksi berhasi dihapus.
                    </div>';
                }
                }

                ?>
                <div class="panel panel-default">
                    <div class="panel-body" style="margin-bottom:15px;">
                        <div class="table-responsive">
                        	<table class="table table-striped">
                        		<thead>
                        			<tr>
                        				<th>No</th>
                        				<th>Pelanggan</th>
                        				<th>Alamat</th>
                        				<th>No Telp</th>
                        				<th>Jenis Transaksi</th>
                        				<th>Berat (kg)</th>
                        				<th>Harga</th>
                        				<th>Action</th>
                        			</tr>
                        		</thead>
                        		<tbody>
                        			<?php foreach ($result as $key) {?>
                                        <tr>
                                        <td><?php echo $key -> IdTransaksi;?></td>
                                        <td><?php echo $key -> Nama; ?></td>
                                        <td><?php echo $key -> Alamat; ?></td>
                                        <td><?php echo $key -> NoTelp; ?></td>                                      
                                        <td><?php echo $key -> JenisTarif; ?></td>
                                        <td><?php echo $key -> Berat; ?></td>
                                        <td>
                                            <?php 
                                                $Berat = $key -> Berat;
                                                $Tarif = $key -> Tarif;
                                                echo "Rp ".$Berat * $Tarif;
                                             ?>
                                        </td>
                                        <td>
                                            <a href="<?php echo site_url().'transaksi/detailtransaksi/'.$key -> IdTransaksi; ?>" class="btn btn-default">detail</a>
                                            <a href="<?php echo site_url().'admin/update/'.$key -> IdTransaksi; ?>" class="btn btn-primary">edit</a>
                                            <a onclick="return confirm('Anda yakin ingin menghapus transaksi ini?');" href="<?php echo site_url().'transaksi/deletetransaksi?idtransaksi='.$key -> IdTransaksi.'&nopelanggan='.$key -> NoPelanggan; ?>" class="btn btn-danger">hapus</a>                                         
                                        </td>
                                    </tr> 
                                   <?php } ?>                       			
                        		</tbody>
                        	</table>
                            <div class="im-centered">
                                <div class="row">
                                    <?php echo $links; ?>
                                </div>
                            </div>

                        </div>
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
