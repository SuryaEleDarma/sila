<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Bali Resto | MANAJER</title>

    <link rel="shortcut icon" href="<?=base_url();?>assets/admin/img/ABC.png"/>
    <!-- Bootstrap core CSS -->
    <link href="<?=base_url();?>assets/admin/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="<?=base_url();?>assets/admin/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/admin/css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/admin/js/gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/admin/lineicons/style.css">    
    
    <!-- Custom styles for this template -->
    <link href="<?=base_url();?>assets/admin/css/style.css" rel="stylesheet">
    <link href="<?=base_url();?>assets/admin/css/style-responsive.css" rel="stylesheet">

    <script src="<?=base_url();?>assets/admin/js/chart-master/Chart.js"></script>
    
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

      <!--header end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->


      <!--sidebar end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">

            <div class="row">
              <div class="col-md-12">
                <div class="col-md-8">
                  <div class=" mb ds">
                          <h3>PEGAWAI HADIR</h3>
                            <?php  
                        
                            $a=0;
                            foreach ($data as $key) {
                            
                              
                            ?>

                      <!-- First Action -->
                            <div class="container" style="border-botom:10px solid red;">
                              <div class="col-md-8">
                              
                                <div class="col-md-1">
                                  <img width="105" height="150" style="border-radius:20% 20% 20% 20%;padding-top:10px;padding-bottom:10px;margin-left:-30px" src="<?php echo base_url('image/foto').'/'.$key->PICT ?>">
                                </div>
                              
                                <div class="col-md-7" style="padding-top:10px;margin-left:31px;">

                                  <?php 

                                    echo "<h2>".$key->NAMA."</h2><br>";
                                    echo $key->ID_PEGAWAI;

                                     ?>
                                </div>
                              </div>
                            </div>
                      
                      <?php    
                      }
                      ?>
                          
                        
                        
                    </div>
                </div>

                <div class="col-md-4">
                 <div id="calendar" class="mb">
                            <div class="panel green-panel no-margin">
                                <div class="panel-body">
                                    <div id="date-popover" class="popover top" style="cursor: pointer; disadding: block; margin-left: 33%; margin-top: -50px; width: 175px;">
                                        <div class="arrow"></div>
                                        <h3 class="popover-title" style="disadding: none;"></h3>
                                        <div id="date-popover-content" class="popover-content"></div>
                                    </div>
                                    <div id="my-calendar"></div>
                                </div>
                            </div>
                        </div><!-- / calendar -->
                </div>
              </div>
            </div>

                        
                      
                  <!-- </div>/col-lg-9 -->
 -->
                   
                    
                    				
					
					
	
                  
                  
      <!-- **********************************************************************************************************************************************************
      RIGHT SIDEBAR CONTENT
      *********************************************************************************************************************************************************** -->                  
                  
                  
              </div><! --/row -->
          </section>
      </section>

      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer" style="margin-top:180px;">
          <div class="text-center">
              Copyright &copy; tim #KantongAjaib.
              <a href="index.html#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="<?=base_url();?>assets/admin/js/jquery.js"></script>
    <script src="<?=base_url();?>assets/admin/js/jquery-1.8.3.min.js"></script>
    <script src="<?=base_url();?>assets/admin/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="<?=base_url();?>assets/admin/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="<?=base_url();?>assets/admin/js/jquery.scrollTo.min.js"></script>
    <script src="<?=base_url();?>assets/admin/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="<?=base_url();?>assets/admin/js/jquery.sparkline.js"></script>


<!--common script for all pages-->
    <script src="<?=base_url();?>assets/admin/js/common-scripts.js"></script>
   
    
    <script type="text/javascript" src="<?=base_url();?>assets/admin/js/gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="<?=base_url();?>assets/admin/js/gritter-conf.js"></script>

    <!--script for this page-->
    <script src="<?=base_url();?>assets/admin/js/sparkline-chart.js"></script>    
	<script src="<?=base_url();?>assets/admin/js/zabuto_calendar.js"></script>	
	
	
	
	<script type="application/javascript">
        $(document).ready(function () {
            $("#date-popover").popover({html: true, trigger: "manual"});
            $("#date-popover").hide();
            $("#date-popover").click(function (e) {
                $(this).hide();
            });
        
            $("#my-calendar").zabuto_calendar({
                action: function () {
                    return myDateFunction(this.id, false);
                },
                action_nav: function () {
                    return myNavFunction(this.id);
                },
                ajax: {
                    url: "show_data.php?action=1",
                    modal: true
                },
                legend: [
                    {type: "text", label: "Special event", badge: "00"},
                    {type: "block", label: "Regular event", }
                ]
            });
        });
        
        
        function myNavFunction(id) {
            $("#date-popover").hide();
            var nav = $("#" + id).data("navigation");
            var to = $("#" + id).data("to");
            console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
        }
    </script>
  

  </body>
</html>
