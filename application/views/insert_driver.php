<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Add Driver</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link href="<?php echo base_url(); ?>bower_components/bootstrap/dist/css/bootstrap.min.css" type="text/css" rel="stylesheet"/> 
<style> 

input[type=text]:focus {
    background-color: yellow;
    
   
}
</style>
  
 <link rel="shortcut icon" href="<?php echo base_url('images/title.png'); ?>" type="image/png">
  
  <!-- Font Awesome -->
   <link href="<?php echo base_url(); ?>bower_components/font-awesome/css/font-awesome.min.css" type="text/css" rel="stylesheet"/> 


  <!-- Ionicons -->
   <link href="<?php echo base_url(); ?>bower_components/Ionicons/css/ionicons.min.css" type="text/css" rel="stylesheet"/> 

  
  <!-- Theme style -->
  <link href="<?php echo base_url(); ?>dist/css/AdminLTE.min.css" type="text/css" rel="stylesheet"/> 

 
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
    <link href="<?php echo base_url(); ?>dist/css/skins/_all-skins.min.css" type="text/css" rel="stylesheet"/> 
 

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini" style="font-family: calibri;">
    <div class="wrapper">

  <?php include 'top1.php'; ?>
   <aside class="main-sidebar">
  
    <section class="sidebar">
     
      
      
   
     <?php include 'menu1.php'; ?>
    </section>
  
  </aside>


  <div class="content-wrapper">

    <section class="content-header">
        <div class="col-md-3" style="margin-left: -15px;">
          <div class="small-box bg-blue-gradient">
            <div class="inner">
              <h2>Add Driver</h2>
            </div>
          </div>
 </div>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Add Driver</a></li>
        
      </ol>
    </section>
      <div class="col-md-12"></div>

    
    <section class="content" style="color: #0000ff;">
           
    <?php echo form_open_multipart('Add_Driver/savedata'); ?>
        <div class="row">
        
          
            <div class="col-md-12">
         
          <div class="box box-primary">
            <div class="box-header with-border" style="background-color: #ECF0F5;">
          
            </div>
            
         
              <div class="box-body" style="background-color: #ECF0F5;">
              
            
                 <div class="form-group">
                  <label for="fname"><b>Driver Name</b>
            <font color="red"><p style="font-size: 8px;"><b>
             <?php echo form_error('driver_name'); ?></b></p></font>
            </label>
                     <input onfocus="var temp_value=this.value; this.value=''; this.value=temp_value" type="text" value="<?php echo set_value('driver_name'); ?>" class="form-control" name="driver_name" required autofocus="">
                </div>
   
  
                  <div class="form-group">
                  <label for="fname"><b>Driver NIC#</b>
            <font color="red"><p style="font-size: 8px;"><b>
             <?php echo form_error('driver_nic_no'); ?></b></p></font>
            </label>
                     <input onfocus="var temp_value=this.value; this.value=''; this.value=temp_value" type="number" value="<?php echo set_value('driver_nic_no'); ?>" class="form-control" name="driver_nic_no" required>
                </div>
                  
                  
                  <div class="form-group">
                  <label for="fname"><b>Driver Contact#</b>
            <font color="red"><p style="font-size: 8px;"><b>
             <?php echo form_error('driver_contact_no'); ?></b></p></font>
            </label>
                     <input onfocus="var temp_value=this.value; this.value=''; this.value=temp_value" type="number" value="<?php echo set_value('driver_contact_no'); ?>" class="form-control" name="driver_contact_no" required>
                </div>
                  
                  
                  <div class="form-group">
                  <label for="fname"><b>Driver Contact#2</b>
            <font color="red"><p style="font-size: 8px;"><b>
             <?php echo form_error('driver_contact_no2'); ?></b></p></font>
            </label>
                     <input onfocus="var temp_value=this.value; this.value=''; this.value=temp_value" type="number" value="<?php echo set_value('driver_contact_no2'); ?>" class="form-control" name="driver_contact_no2">
                </div>
                  
                  
                  <div class="form-group">
                  <label for="fname"><b>Driver Address</b>
            <font color="red"><p style="font-size: 8px;"><b>
             <?php echo form_error('driver_address'); ?></b></p></font>
            </label>
                     <input onfocus="var temp_value=this.value; this.value=''; this.value=temp_value" type="text" value="<?php echo set_value('driver_address'); ?>" class="form-control" name="driver_address" required>
                </div>
                  
                  
                   
                  <div class="form-group">
                  <label for="fname"><b>Driver Salary Per Month</b>
            <font color="red"><p style="font-size: 8px;"><b>
             <?php echo form_error('driver_salary_per_month'); ?></b></p></font>
            </label>
                     <input onfocus="var temp_value=this.value; this.value=''; this.value=temp_value" type="number" value="<?php echo set_value('driver_salary_per_month'); ?>" class="form-control" name="driver_salary_per_month" required>
                </div>
                  
                  
            <input type="hidden" value="<?php echo ($this->session->userdata['logged_in']['persons_id']); ?>" class="form-control" name="by" required>
              
                   
              
                
                
                
              </div>
            
              <div class="box-footer" style="background-color: #ECF0F5;">
         
     <button type="submit" style="width: 20%;float: left;" class="btn btn-success">Add Driver</button>
     <a href="<?php echo base_url() . "Add_Driver/show_driver" ?>">
         <button type="button" style="width: 20%;float: left;margin-left: 5%;" class="btn btn-primary">Cancel</button></a>
              </div>
              </div>
       
          </div>
          
        </div>
       
            </form>
    </section>
  
  </div>

 <?php include 'footer.php'; ?>

  
  
<script src="<?php echo base_url(). "bower_components/jquery/dist/jquery.min.js" ?>"></script>


<script src="<?php echo base_url(). "bower_components/bootstrap/dist/js/bootstrap.min.js" ?>"></script>



<script src="<?php echo base_url(). "dist/js/adminlte.min.js" ?>"></script>

<script src="<?php echo base_url(). "dist/js/demo.js" ?>"></script>
        </div>
</body>
</html>
