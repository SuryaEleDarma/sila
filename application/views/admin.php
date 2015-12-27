<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Sila | Admin Login</title>

<!-- bootstrap -->
<link href="<?=base_url();?>assets/css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="<?=base_url();?>assets/css/custom_admin.css" rel="stylesheet" type="text/css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>


<body>
<div class="container">
  <div class="row">
    <div class="col-sm-4"></div>
    <div class="col-sm-4">
      <div class="custom-form">
        <a href="<?php echo base_url().'admin/index'; ?>"><img src="<?php echo base_url()?>/assets/image/logo_grey.png" class="center-image"></a>
        <h3 class="text-center">Login Admin</h3>
        <?php 
                if (isset($pesan)) {
                    if ($pesan == "gagal") 
                {
                   echo '<div class="alert alert-danger fade in">
                          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                          <strong>Maaf!</strong> Username atau password yang anda masukkan salah.
                        </div>';
                }
                }

        ?>
          <form role="form" method="post" action="<?php echo base_url().'admin/login'; ?>">
            <div class="form-group">
              <input type="text" class="form-control custom-text-form" id="username" placeholder="Username" name="username">
            </div>
            <div class="form-group">
              <input type="password" class="form-control custom-text-form" id="pwd" placeholder="Password" name="pwd">
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
          </form>
          <p class="text-center copyrights" style="margin-top:35px;">copyrights©kelompok 6</p>
      </div>

    </div>
    </div>
    <div class="col-sm-4"></div>
  </div>
</div>

</body>

<script type="text/javascript" src="<?=base_url();?>assets/js/bootstrap.js"></script>
</html>