 <header class="main-header">
   
     <a href="<?php echo base_url() . "VMS" ?>" class="logo">
   
      <span class="logo-mini"><b>Hamd</b></span>
     
      <span class="logo-lg"><b>Hamd</b></span>
    </a>
   
    <nav class="navbar navbar-static-top">
  
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
         
     
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo base_url('dist/img/admin.png'); ?>" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo ($this->session->userdata['logged_in']['username']); ?></span>
            </a>
            <ul class="dropdown-menu">
             
              <li class="user-header">
                <img src="<?php echo base_url('dist/img/admin.png'); ?>" class="img-circle" alt="User Image">

                <p>
                  <?php echo ($this->session->userdata['logged_in']['username']); ?>
                  <small>Member since DATE</small>
                </p>
              </li>
            
            
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="<?php echo base_url() . "Logout" ?>" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
        
        </ul>
      </div>
    </nav>
  </header>
  			
  			