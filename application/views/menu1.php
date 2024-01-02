<?php 
 
$role = $this->session->userdata['logged_in']['role']; 
$user_id = $this->session->userdata['logged_in']['user_id']; 
$persons = $this->session->userdata['logged_in']['persons_id'];
?> 


<div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url('dist/img/admin.png'); ?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo ($this->session->userdata['logged_in']['username']); ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
<ul class="sidebar-menu" data-widget="tree">
     
        <li class="active treeview">
         <li><a href="<?php echo base_url() . "Hamd" ?>"><i class="fa fa-circle-o text-yellow"></i> <span>Hamd</span></a></li>
         
      
          
         <li class="treeview">
          <a href="#">
            <i class="fa fa-folder"></i> <span>System Essentials</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
              
              
                <li><a href="<?php echo base_url() . "Add_Driver/show_driver" ?>"><i class="fa fa-circle-o text-aqua"></i> 1) Drivers</a></li>
                
      
          </ul>
        </li>
       
        
      
        
        
         <li class="treeview">
          <a href="#">
            <i class="fa fa-folder"></i> <span>Users</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
              
            <li><a href="<?php echo base_url() . "Add_user/show_user" ?>"><i class="fa fa-circle-o text-aqua"></i> 1) Users</a></li>
              
       
          </ul>
        </li>
    
         <li class="treeview">
          <a href="#">
            <i class="fa fa-folder"></i> <span>Settings</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
              

            <li><a href="<?php echo base_url() . "Add_User/show_user_id/" . $user_id; ?>"><i class="fa fa-circle-o text-aqua"></i> 2) Change Password</a></li>
          </ul>
        </li>
        
      </ul>


