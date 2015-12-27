<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

     <title>Bali Resto | MANAJER | Lihat Pegawai</title>

    <link rel="shortcut icon" href="<?=base_url();?>assets/admin/img/ABC.png"/>

    <!-- Bootstrap core CSS -->
    <link href="<?=base_url();?>assets/admin/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="<?=base_url();?>assets/admin/font-awesome/css/font-awesome.css" rel="stylesheet" />
    
    <!-- Custom styles for this template -->
    <link href="<?=base_url();?>assets/admin/css/style.css" rel="stylesheet">
    <link href="<?=base_url();?>assets/admin/css/style-responsive.css" rel="stylesheet">
    <link rel="stylesheet" href="<?=base_url();?>assets/admin/css/to-do.css">

   <script type="text/javascript">

      function ConfirmDelete()
      {
        var x = confirm("Apakah kamu yakin menghapus user ini  ?");
        if (x)
            return true;
        else
          return false;
      }
      
</script>
<style >
h2{
  color: gold;
  margin-bottom: -10px;
  margin-top: 5px;
}
kiri{
  text-decoration: bold;
}
</style>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  <section id="container" >

      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
            <section id="main-content">
          <section class="wrapper">
            <h3><i class="fa fa-angle-right"></i>  <?php echo $condition; ?></h3>
                

            <?php  
            foreach ($query as $key) {
            ?>
            <div class="row mt">
                  <div class="col-md-12">
                      <section class="task-panel tasks-widget">
                    <div class="panel-heading">
                        <div class="col-md-1">
                          <div class="pull-left"><h5><img src="<?php echo base_url('image/foto').'/'.$key->ID.".jpg"?>" width="200"></h5></div>
                        </div>
                        <div class="col-md-10 " style="padding-top:0px; padding-left:154px">
                            <div class="col-md-2" style="padding-top:9px;">
                              <b>Nama:</b> 
                            <br>
                            </div>
                            <div class="col-md-7" style="padding-top:9px;">
                              <?php echo $key->NAMA; ?>
                            <br>
                            </div>
                            <br><br>
                            <div class="col-md-2" style="padding-top:9px;">
                              <b>Id Pegawai:</b> 
                            <br>
                            </div>
                            <div class="col-md-7" style="padding-top:9px;">
                              <?php echo $key->ID_PEGAWAI; ?>
                            <br>
                            </div>
                            <br><br>
                            <div class="col-md-2" style="padding-top:9px;">
                              <b>Pekerjaan:</b> 
                            <br>
                            </div>
                            <div class="col-md-7" style="padding-top:9px;">
                              <?php echo $key->PEKERJAAN; ?>
                            <br>
                            </div>
                            <br><br>
                            <div class="col-md-2" style="padding-top:9px;">
                              <b>E-Mail:</b> 
                            <br>
                            </div>
                            <div class="col-md-7" style="padding-top:9px;">
                              <?php echo $key->EMAIL; ?>
                            <br>
                            </div>
                            <br><br>
                            <div class="col-md-2" style="padding-top:9px;">
                              <b>No Telp:</b> 
                            <br>
                            </div>
                            <div class="col-md-7" style="padding-top:9px;">
                              <?php echo $key->NO_TELP; ?>
                            <br>
                            </div>
                            <br><br>
                            <div class="col-md-2" style="padding-top:9px;">
                              <b>Gaji:</b> 
                            <br>
                            </div>
                            <div class="col-md-7" style="padding-top:9px;">
                              <?php echo $key->GAJI; ?>
                            <br>
                            </div>
                            <br><br>
                            <a href="<?php echo site_url().'manajer_controller/editDataPegawai/'.$key->ID_PEGAWAI;?>"><button class="btn btn-primary btn-xs btn-sm pull-left" style="margin-left:13px;width:50px;height:25px" ><i class="fa fa-pencil" style="margin-right:3px;"></i>Edit</button></a> 

                        </div>
                    </div>
                          <div class="panel-body">
                              
                          </div>
                      </section>
                  </div><!-- /col-md-12-->
              </div><!-- /row -->

            <?php 
            }

            ?>
            <!-- COMPLEX TO DO LIST -->     
              

              <!-- COMPLEX TO DO LIST -->     
              
      
      
      
    </section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->
      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer" style="margin-top:60px;">
          <div class="text-center">
              Copyright &copy; 2015 by Yuda-Pungky-Dayat.
              <a href="todo_list.html#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="<?=base_url();?>assets/admin/js/jquery.js"></script>
    <script src="<?=base_url();?>assets/admin/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="<?=base_url();?>assets/admin/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="<?=base_url();?>assets/admin/js/jquery.scrollTo.min.js"></script>
    <script src="<?=base_url();?>assets/admin/js/jquery.nicescroll.js" type="text/javascript"></script>


    <!--common script for all pages-->
    <script src="<?=base_url();?>assets/admin/js/common-scripts.js"></script>

    <!--script for this page-->
  <script src="<?=base_url();?>assets/admin/js/jquery-ui.js"></script>    
    <script src="<?=base_url();?>assets/admin/js/tasks.js" type="text/javascript"></script>

    <script>
      jQuery(document).ready(function() {
          TaskList.initTaskWidget();
      });

      $(function() {
          $( "#sortable" ).sortable();
          $( "#sortable" ).disableSelection();
      });

    </script>
    
    
  <script>
      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });

  </script>


  </body>
</html>
