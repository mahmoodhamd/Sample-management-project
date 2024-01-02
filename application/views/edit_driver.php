<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Update Driver</title>
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
     
      <?php foreach ($single_driver as $p): ?>
      
   
     <?php include 'menu1.php'; ?>
    </section>
  
  </aside>


  <div class="content-wrapper">

    <section class="content-header">
       <div class="col-md-3" style="margin-left: -15px;">
          <div class="small-box bg-blue-gradient">
            <div class="inner">
              <h2><?php echo $p->driver_name; ?></h2>
              <p>Update Driver</p>
             
            </div>
          </div>
 </div>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Update Driver</a></li>
        
      </ol>
    </section>
      <div class="col-md-12"></div>

    
    <section class="content" style="color: #0000ff;">
           
    <?php echo form_open_multipart('Add_Driver/update_driver_id'); ?>
        <div class="row">
        
          
            <div class="col-md-12">
         
          <div class="box box-primary">
            <div class="box-header with-border" style="background-color: #ECF0F5;">
          
            </div>
            
         
              <div class="box-body" style="background-color: #ECF0F5;">
               <input type="hidden" name="id" value="<?php echo $p->drivers_id; ?>">
            
                 <div class="form-group">
                  <label for="fname"><b>Driver Name</b>
            <font color="red"><p style="font-size: 8px;"><b>
             <?php echo form_error('driver_name'); ?></b></p></font>
            </label>
                     <input onfocus="var temp_value=this.value; this.value=''; this.value=temp_value" type="text" value="<?php echo $p->driver_name; ?>" class="form-control" name="driver_name" required autofocus="">
                </div>
   
               
                <div class="form-group">
                  <label for="fname"><b>Driver Nic#</b>
            <font color="red"><p style="font-size: 8px;"><b>
             <?php echo form_error('driver_nic_no'); ?></b></p></font>
            </label>
                     <input onfocus="var temp_value=this.value; this.value=''; this.value=temp_value" type="number" value="<?php echo $p->driver_nic_no; ?>" class="form-control" name="driver_nic_no" required>
                </div>
               
               
                <div class="form-group">
                  <label for="fname"><b>Driver Contact#</b>
            <font color="red"><p style="font-size: 8px;"><b>
             <?php echo form_error('driver_contact_no'); ?></b></p></font>
            </label>
                     <input onfocus="var temp_value=this.value; this.value=''; this.value=temp_value" type="number" value="<?php echo $p->driver_contact_no; ?>" class="form-control" name="driver_contact_no">
                </div>
               
                <div class="form-group">
                  <label for="fname"><b>Driver Contact#2</b>
            <font color="red"><p style="font-size: 8px;"><b>
             <?php echo form_error('driver_contact_no2'); ?></b></p></font>
            </label>
                     <input onfocus="var temp_value=this.value; this.value=''; this.value=temp_value" type="number" value="<?php echo $p->driver_contact_no2; ?>" class="form-control" name="driver_contact_no2">
                </div>
               
                <div class="form-group">
                  <label for="fname"><b>Driver Address</b>
            <font color="red"><p style="font-size: 8px;"><b>
             <?php echo form_error('driver_address'); ?></b></p></font>
            </label>
                     <input onfocus="var temp_value=this.value; this.value=''; this.value=temp_value" type="text" value="<?php echo $p->driver_address; ?>" class="form-control" name="driver_address" required>
                </div>
               
                <div class="form-group">
                  <label for="fname"><b>Driver Salary Per Month</b>
            <font color="red"><p style="font-size: 8px;"><b>
             <?php echo form_error('driver_salary_per_month'); ?></b></p></font>
            </label>
                     <input onfocus="var temp_value=this.value; this.value=''; this.value=temp_value" type="number" value="<?php echo $p->driver_salary_per_month; ?>" class="form-control" name="driver_salary_per_month" required>
                </div>
  
            <input type="hidden" value="<?php echo ($this->session->userdata['logged_in']['persons_id']); ?>" class="form-control" name="by" required>
              
                   
              </div>
            
 
   <div class="box-footer" style="background-color: #ECF0F5;">
<button type="submit" style="width: 20%;float: left;" class="btn btn-success">Update</button>
<input type="hidden" name="last_work" value="<?php echo $p->drivers_id; ?>">
   </form>

   
   <form action="<?php echo site_url('Add_Driver/show_driver'); ?>" method="post">
    <input type="hidden" name="last_work" value="<?php echo $p->drivers_id; ?>">
    <input type="submit" value="Cancel" style="width: 20%;float: left;margin-left: 5%;" class="btn btn-primary">
</form>
   
      
   </div>
           
              </div>
       
          </div>
          
        </div>
       
            
    </section>
  
  </div>

 <?php include 'footer.php'; ?>

  <?php endforeach; ?>
  
<script src="<?php echo base_url(). "bower_components/jquery/dist/jquery.min.js" ?>"></script>


<script src="<?php echo base_url(). "bower_components/bootstrap/dist/js/bootstrap.min.js" ?>"></script>



<script src="<?php echo base_url(). "dist/js/adminlte.min.js" ?>"></script>

<script src="<?php echo base_url(). "dist/js/demo.js" ?>"></script>
        </div>
</body>
</html>
