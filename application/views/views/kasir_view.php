<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

     <title>Bali Resto | KASIR | Cek</title>

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
             <a class="btn btn-primary btn-sm pull-right" href="<?php echo site_url().'manajer_controller/tambahPegawai';?>" style="margin-top:-38px;">Tambah Pegawai</a>
                

            <?php  
            foreach ($query as $key) {
            ?>
            <div class="row mt">
                  <div class="col-md-12">
                      <section class="task-panel tasks-widget">
                    <div class="panel-heading">
                        <div class="col-md-1">
                          <div class="pull-left"><h5><img src="<?php echo base_url('image/foto').'/'.$key->ID.".jpg"?>" width="60"></h5></div>
                        </div>
                        <div class="col-md-5" style="padding-top:0px;">
                            <?php 
                            echo "<h2>".$key->NAMA."</h2><br>";
                                  echo $key->PEKERJAAN."<br>";
                                  echo $key->EMAIL."<br>";
                          ; ?>
                          <br>
                        </div>
                    </div>
                          <div class="panel-body">
                              <div class="task-content">

                                  <ul class="task-list"> <a href="">
                                    <?php if($key->ID_PEGAWAI!=$id){ ?>
                                    <a onclick="return ConfirmDelete(<?php echo "'$key->NAMA'"; ?>);" href="<?php echo site_url().'manajer_controller/delete/'.$key->ID_PEGAWAI;?>"><button style="margin-left:10px" class="btn btn-danger btn-primary btn-xs btn-sm pull-right" ><i  class="fa fa-trash-o"></i></button></a>
                                    <?php } ?> 
                                   <a href="<?php echo site_url().'manajer_controller/editDataPegawai/'.$key->ID_PEGAWAI;?>"><button class="btn btn-primary btn-xs btn-sm pull-right" ><i class="fa fa-pencil"></i></button></a> 
                                  </ul>
                              </div>

                              <div class=" add-task-row">
                                  <a class="btn btn-default btn-sm pull-right" href="<?php echo site_url().'manajer_controller/lihatDataPegawai/'.$key->ID_PEGAWAI;?>">Lihat Pegawai</a>
            
                              </div>
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
              Copyright &copy; Tim #KantongAjaib.
          </div>
      </footer>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
 


  </body>
</html>
