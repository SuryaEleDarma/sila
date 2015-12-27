
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
              	  <p class="centered"><a href=""><img src="<?php echo base_url('image/foto').'/'.$aiid.".jpg"?>" class="pp" style="border-radius:20% 20% 20% 20%;" width="60"></a></p>
              	  <h5 style="font-family:Raleway medium;" class="centered"><?php echo $nama."<br>".$id ?></h5>

              	  	
                  <li class="mt">
                      <a  class="<?php if ($acc=='Dashboard') {
                        echo "active";
                      } ?>" href="<?php echo site_url().'chef_controller'; ?>">
                          <i class="glyphicon glyphicon-th-list"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>

             </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>