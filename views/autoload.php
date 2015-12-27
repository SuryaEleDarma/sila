<?php  
           foreach ($query as $key) {
            ?>
            <div class="row mt">
                  <div class="col-md-12">
                      <section class="task-panel tasks-widget">
                    <div class="panel-heading">
                        <div class="col-md-8">
                          <div class="pull-left"><h5>
                            <!-- <img src="<?php echo base_url('image/foto').'/'.$key->ID.".jpg"?>" width="60"></h5></div> -->
                        </div>
                        <div class="col-md-5" style="padding-top:0px;">
                            <?php 
                            echo "<h2>MEJA ".$key->ID_MEJA."</h2><br>";
                                  
                                  echo "<b>Menu :</b>".$key->NAMA_MENU."<br>";
                                  // ECHO "<b>Besar Tagihan:</b>".$harga;
                          ; ?>
                          <br>
                        </div>
                    </div>
                          <div class="panel-body">
                              <div class="task-content">

                                  
                              </div>
                              
                              <a class="btn btn-danger btn-sm pull-right" href="<?php echo site_url().'chef_controller/updateSiap/'.$key->ID_MEJA; ?>" style="margin-top:-36px;width:130px;height:100px;padding-top:40px;"><?php echo $key->STATUS;?></a>
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

            dasdasdas