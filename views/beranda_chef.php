<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="refresh" content="5" >
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

     <title>BERANDA | CHEF</title>

    <link rel="shortcut icon" href="<?=base_url();?>assets/admin/img/ABC.png"/>

    <!-- Bootstrap core CSS -->
    <link href="<?=base_url();?>assets/admin/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="<?=base_url();?>assets/admin/font-awesome/css/font-awesome.css" rel="stylesheet" />
    
    <!-- Custom styles for this template -->
    <link href="<?=base_url();?>assets/admin/css/style.css" rel="stylesheet">
    <link href="<?=base_url();?>assets/admin/css/style-responsive.css" rel="stylesheet">
    <link rel="stylesheet" href="<?=base_url();?>assets/admin/css/to-do.css">
    <script src="<?=base_url();?>assets/admin/js/jquery.js"></script>

   

<style >
h2{
  color: gold;
  margin-bottom: -10px;
  margin-top: 5px;
}
</style>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  <section id="container"  >

      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
            <section id="main-content">
          <section class="wrapper">
            <h3><i class="fa fa-angle-right"></i>  <?php echo $acc; ?></h3>
            <div class="dasdas" id="content"></div>
            <?php  
           foreach ($query as $key) {
            ?>
            <div class="row mt">
                  <div class="col-md-12">
                      <section class="task-panel tasks-widget">
                    <div class="panel-heading">
                        <div class="col-md-8">
                          <div class="pull-left"><h5>
                            
                        </div>
                        <div class="col-md-5" style="padding-top:0px;">
                            <?php 
                            echo "<h2>MEJA ".$key->ID_MEJA."</h2><br>";

                                  
                                  echo "<b>Menu :</b>".$key->NAMA_MENU."<br>";
                                   echo "<b>No Pesanan :</b>".$key->ID_PESANAN."<br>";
                                  // ECHO "<b>Besar Tagihan:</b>".$harga;
                          ; ?>
                          <br>
                        </div>
                    </div>
                          <div class="panel-body">
                              <div class="task-content">

                                  
                              </div>
                              
                              <a class="btn btn-danger btn-sm pull-right" href="<?php echo site_url().'chef_controller/updateSiap/'.$key->ID_PESANAN; ?>" style="margin-top:-36px;width:140px;height:100px;padding-top:40px;">UBAH MENJADI SIAP!</a>
                              <div class=" add-task-row">
                                  <!-- <a class="btn btn-default btn-sm pull-right" href="<?php echo site_url().'manajer_controller/lihatDataPegawai/'.$key->ID_PEGAWAI;?>">Lihat Pegawai</a> -->
            
                              </div>
                          </div>
                      </section>
                  </div><!-- /col-md-12-->
              </div><!-- /row -->

            <?php 
           }

            ?>



            


            </div>
            
              

            
            <!-- COMPLEX TO DO LIST -->     
              

              <!-- COMPLEX TO DO LIST -->     
              
      
      
      
    </section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer" style="margin-top:565px;">
          <div class="text-center">
              Copyright &copy; Tim #KantongAjaib.
          </div>
      </footer>

       
    
    <script src="<?=base_url();?>assets/admin/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="<?=base_url();?>assets/admin/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="<?=base_url();?>assets/admin/js/jquery.scrollTo.min.js"></script>
    <script src="<?=base_url();?>assets/admin/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="<?=base_url();?>assets/admin/js/jquery.sparkline.js"></script>
    

         <script src="<?=base_url();?>assets/admin/js/common-scripts.js"></script>
   
    
    <script type="text/javascript" src="<?=base_url();?>assets/admin/js/gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="<?=base_url();?>assets/admin/js/gritter-conf.js"></script>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
 


  </body>
</html>
/