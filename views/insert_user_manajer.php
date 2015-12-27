<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

     <title>Bali Resto | MANAJER | Tambah Pegawai</title>

    <link rel="shortcut icon" href="<?=base_url();?>assets/admin/img/ABC.png"/>

    <!-- Bootstrap core CSS -->
    <link href="<?=base_url();?>assets/admin/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="<?=base_url();?>assets/admin/font-awesome/css/font-awesome.css" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="<?=base_url();?>assets/admin/css/style.css" rel="stylesheet">
    <link href="<?=base_url();?>assets/admin/css/style-responsive.css" rel="stylesheet">
    <link rel="stylesheet" href="<?=base_url();?>assets/admin/css/to-do.css">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
     <?php
include 'header_admin.php';
?>
      <!--header end-->

      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <?php
include 'sidebar_admin.php';
?>
      <!--sidebar end-->

      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
            <h3><i class="fa fa-angle-right"></i> Edit Pegawai </h3>
 



            <!-- BASIC FORM ELELEMNTS -->
            <div class="row mt">
              <div class="col-lg-12">
                  <div class="form-panel">

                      <form class="form-horizontal style-form" enctype="multipart/form-data" method="post" action="<?php echo base_url() . 'manajer_controller/insertPegawai';?>">
                        <!-- <input type="text" name="idid" value="<?php echo $key->ID ?>"hidden > -->
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Nama</label>
                              <div class="col-sm-10">
                                  <input type="text" name="nama" class="form-control">
                              </div>
                          </div>

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Password</label>
                              <div class="col-sm-10">
                                  <input type="password" name="password" class="form-control">
                              </div>
                          </div>
                          
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Pekerjaan</label>
                              <div class="col-sm-10">
                                  <select class="form-control" id="sel1" name="pekerjaan">
                                    
                                    <?php foreach ($pekerjaan as $key2) { ?>
                                                                                                                     
                                        <option value="<?php echo $key2->IDP;?>"><?php echo $key2->PEKERJAAN;?></option>

                                    <?php   
                                    } ?>
                                   </select>
                              </div>
                          </div> 

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Email</label>
                              <div class="col-sm-10">
                                  <input type="email;" name="email" class="form-control">
                              </div>
                          </div>  

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">No Telp</label>
                              <div class="col-sm-10">
                                  <input type="text;" name="telp" class="form-control">
                              </div>
                          </div>                     

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">File Foto</label>
                              <div class="col-sm-10">
                                  <input type="file" name="foto">

                              </div>
                          </div>
                           <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label"></label>
                              <div class="col-sm-10">
                                  <button type="submit" class="btn btn-primary">Submit</button>
                              </div>
                          </div>


                      </form>
                  </div>
              </div><!-- col-lg-12-->
            </div><!-- /row -->
           

    </section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->
       <script src="<?=base_url();?>assets/admin/js/jquery.js"></script>
    <script src="<?=base_url();?>assets/admin/js/jquery-1.8.3.min.js"></script>
    <script src="<?=base_url();?>assets/admin/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="<?=base_url();?>assets/admin/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="<?=base_url();?>assets/admin/js/jquery.scrollTo.min.js"></script>
    <script src="<?=base_url();?>assets/admin/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="<?=base_url();?>assets/admin/js/jquery.sparkline.js"></script>
      <footer class="site-footer" style="margin-top:60px;">

         <script src="<?=base_url();?>assets/admin/js/common-scripts.js"></script>
   
    
    <script type="text/javascript" src="<?=base_url();?>assets/admin/js/gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="<?=base_url();?>assets/admin/js/gritter-conf.js"></script>

      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer" style="margin-top:10px;">
          <div class="text-center">
              Copyright &copy; tim #KantongAjaib
              <a href="todo_list.html#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->


  </body>
</html>
