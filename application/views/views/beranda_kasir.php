<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

     <title>Bali Resto | PELAYAN</title>

    <link rel="shortcut icon" href="<?=base_url();?>assets/admin/img/ABC.png"/>

    <!-- Bootstrap core CSS -->
    <link href="<?=base_url();?>assets/admin/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="<?=base_url();?>assets/admin/font-awesome/css/font-awesome.css" rel="stylesheet" />
    
    <!-- Custom styles for this template -->
    <link href="<?=base_url();?>assets/admin/css/style.css" rel="stylesheet">
    <link href="<?=base_url();?>assets/admin/css/style-responsive.css" rel="stylesheet">
    <link rel="stylesheet" href="<?=base_url();?>assets/admin/css/to-do.css">

//    <script type="text/javascript">

//       function ConfirmDelete(user)
//       {
//         var x = confirm("Apakah kamu yakin menghapus "+user+" ini  ?");
//         if (x)
//             return true;
//         else
//           return false;
//       }
      
// </script>
<style >

.tinggi{
  height: 450px;
}

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

  <section id="container" >

      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
            <section id="main-content">
          <section class="wrapper">
            <h3><i class="fa fa-angle-right"></i>  <?php echo $acc; ?></h3>
             
                

            <?php  
            //foreach ($query as $key) {
            ?>
            
            <div class="row mt">
                  <div class="col-md-12">
                      <section class="task-panel tasks-widget">
                    <div class="panel-heading tinggi" >
                      <form method="post" action="kasir_controller/getPembayaran">
                      <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label" style="margin-top:11px;"><b>Meja</b></label>
                              <div class="col-sm-10">
                                  <input type="text" name="asd" class="form-control" placeholder="Masukkan No Meja">
                              </div>

                          </div>
                          <input type="submit" class="btn btn-primary btn-sm pull-right" style="margin-right:16px;margin-top:16px;">
                          <!-- <button class="btn btn-primary btn-sm pull-right" style="margin-right:16px;margin-top:16px;">Submit</button> -->
                        


                          </div>
                           </form>
                      </section>
                  </div><!-- /col-md-12-->
              </div><!-- /row -->
           

            <?php 
           // }

            ?>
            <!-- COMPLEX TO DO LIST -->     
              

              <!-- COMPLEX TO DO LIST -->     
              
      
      
      
    </section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->
      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer" style="margin-top:50px;height:60px;">
          <div class="text-center">
              Copyright &copy; Tim #KantongAjaib.
          </div>
      </footer>
       <script src="<?=base_url();?>assets/admin/js/jquery.js"></script>
    <script src="<?=base_url();?>assets/admin/js/jquery-1.8.3.min.js"></script>
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
