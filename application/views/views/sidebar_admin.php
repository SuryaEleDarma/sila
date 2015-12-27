
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
              	  <p class="centered"><a href="profile.html"><img src="<?php echo base_url('image/foto').'/'.$aiid.".jpg"?>" class="pp" style="border-radius:20% 20% 20% 20%;" width="60"></a></p>
              	  <h5 style="font-family:Raleway medium;" class="centered"><?php echo $nama."<br>".$id ?></h5>

              	  	
                  <li class="mt">
                      <a  class="<?php if ($acc=='dashboard') {
                        echo "active";
                      } ?>" href="<?php echo site_url().'manajer_controller'; ?>">
                          <i class="glyphicon glyphicon-th-list"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a class="<?php if ($acc=='Pegawai') {
                        echo "active";
                      } ?>" href="<?php echo site_url().'manajer_controller/Pegawai';?>" >
                          <i class="glyphicon glyphicon-user"></i>
                          <span>Pegawai</span>
                      </a>
                  </li>
                  
                  <li class="sub-menu">
                      <a class="<?php if ($acc=='Statistik') {
                        echo "active";
                      } ?>" href="<?php echo site_url().'manajer_controller/formStatistik/'; ?>" >
                          <i class="glyphicon glyphicon-stats"></i>
                          <span>Statistik</span>
                      </a>
                  </li>


              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>