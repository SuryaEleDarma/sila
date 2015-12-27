<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<title>BaliResto | LOGIN</title>
	<!-- <link rel="shortcut icon" href="<?=base_url();?>image/logo/ABC.png"/> -->
	<link href="<?=base_url();?>assets/csss/styleADMIN.css" rel="stylesheet" />
	<link href="<?=base_url();?>assets/csss/bootstrapp.css" rel="stylesheet" />

	<script src="<?=base_url();?>assets/js/jquery.min.js"></script>
	<script src="<?=base_url();?>assets/js/bootstrap.min.js"></script>

</head>
<body>
<?php
    include 'header.php';
?>



	<div class="container">

        <div class="col-sm-4 col-sm-push-4 col-md-4 col-md-push-4 login">
           <center>
                <h2>LOGIN</h2>
            </center>
            

            <form class="form-horizontal" action="<?php echo base_url().'AB_controller/login'; ?>" method="post" role="form">
                <div class="form-group">
                    <div class="col-sm-12 col-sm-offset-1">
                        <input type="text" class="form-control" id="id" placeholder="ID PEGAWAI" name="id">
                    </div>
                </div>
                
                <div class="form-group">
                  <div class="col-sm-12 col-sm-offset-1">          
                        <input type="password" class="form-control" id="pwd" placeholder="PASSWORD" name="password">
                  </div>
                </div>
                
                <div class="form-group">        
                    <div class="col-sm-6 col-sm-offset-2 hilang">
                        <div class="checkbox">
                            <label><input type="checkbox"> Ingatkan saya</label>
                        </div>
                    </div>
                </div>
                
                <div class="form-group">        
                    <div class="col-sm-6 col-sm-offset-3">
                        <button class="btn btn-primary btn-default pull-left" type="submit" >Login</button>
                    </div>
                </div>
              </form>
        </div>
    </div>













    <?php  
    	include 'footer.php';
    ?>


</body>
</html>