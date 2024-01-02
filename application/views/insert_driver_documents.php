<?php 

$user_id = $this->session->userdata['logged_in']['user_id']; 

?> 
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Add Driver Documents</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link href="<?php echo base_url(); ?>bower_components/bootstrap/dist/css/bootstrap.min.css" type="text/css" rel="stylesheet"/> 
<style> 

input[type=text]:focus {
    background-color: yellow;
    
   
}
</style>
<style> 

input[type=number]:focus {
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
<script language="JavaScript" type="text/javascript">
function checkDelete(){
    return confirm('Are you sure?');
}
</script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
</head>
<body class="hold-transition skin-blue sidebar-mini" style="font-family: calibri;">
    <div class="wrapper">
<?php foreach ($single_driver as $p): ?>
  <?php include 'top1.php'; ?>
   <aside class="main-sidebar">
  
    <section class="sidebar">
     
     
      <form enctype="multipart/form-data"  accept-charset="utf-8" method="post" action="<?php echo site_url('Add_Driver/savedata_documents'); ?>" >
       
   
     <?php include 'menu1.php'; ?>
    </section>
  
  </aside>


  <div class="content-wrapper">

    <section class="content-header">
        <div class="col-md-4" style="margin-left: -15px;">
          <div class="small-box bg-blue-gradient">
            <div class="inner">
              <h2>[ <?php echo $p->driver_name; ?> ]</h2>
             
            </div>
          </div>
 </div>
        
        
        
            
                  <div class="form-group col-md-3">
                  <label for="fname"><b>Title</b>
            <font color="red"><p style="font-size: 8px;"><b>
             <?php echo form_error('document_title'); ?></b></p></font>
            </label>
                      <input onfocus="var temp_value=this.value; this.value=''; this.value=temp_value" type="text" value="<?php echo set_value('document_title'); ?>" class="form-control" name="document_title" required="">
                </div>
                  
        <input type="hidden" value="<?php echo date('Y-m-d'); ?>" class="form-control" name="date" required="">
 
        
                  
                  
                       
        
        
         <div class="form-group col-md-3">
<label for="fname"><b>Add File Attachment</b>
<font color="red"><p style="font-size: 8px;"><b>
<?php echo form_error('sample_split_file_name'); ?></b></p></font>
<input type="file" name="userfile" class="btn btn-primary" style="float: right;" required="">
</label>
  
</div>
        
          
                 <input type="hidden" value="<?php echo ($this->session->userdata['logged_in']['user_id']); ?>" class="form-control" name="by" required>

                  <input type="hidden" name="drivers_id" value="<?php echo $p->drivers_id; ?>" />
        
        <div class="form-group col-md-1">
                      <button type="submit" style="margin-top: 35px;" class="btn btn-success">&nbsp; Add &nbsp;</button>
                </div>
                  
                   </form>
                   <div class="form-group col-md-1">
                       
                       <form action="<?php echo site_url('Add_Driver/show_driver'); ?>" method="post">
    <input type="hidden" name="last_work" value="<?php echo $p->drivers_id; ?>">
    <input type="submit" value="Cancel" style="margin-top: 35px;" class="btn btn-primary">
</form>
                       
       
         
         
                </div> 
    
    </section>
      
 

      
      
           <section class="content">
      <div class="row">
        <div class="col-xs-12">
         
         

          <div class="box">
            <div class="box-header">
              <h4 class="box-title" align="center"><?php if ($this->session->flashdata('category_success')) { ?>
                  <div id="message" style="color: #EC722E;display:none;" align="center"> <i class="fa fa-check" style="font-size: 15px;color: green;"></i><b> <?= $this->session->flashdata('category_success') ?></b> </div>
    <?php } ?></h4>
               
               </div>
             
            <div class="box-body table-responsive">
                 <table id="example1" class="table table-condensed table-hover table-responsive">
       
        <thead>                
                     <tr style="color: #215D9B;">
       <th style="text-align: center;background-color: #E2E2E2;">Sr#</th>
       <th style="text-align: center;background-color: #E2E2E2;">Title</th>
       <th style="text-align: center;background-color: #E2E2E2;">Attachment</th>
       <th style="text-align: center;background-color: #E2E2E2;">Date</th>
       <th style="text-align: center;background-color: #E2E2E2;">By</th>
       <th style="text-align: center;background-color: #E2E2E2;">Delete</th>
      
   
                </tr>
              
                    </thead>
                    <tbody>
        <?php
        
        $row_count = 1;
             foreach ($driver_documents as $row) {
               
                $driver_documents_id = $row['driver_documents_id'];
                $document_title = $row['document_title'];
                $date = $row['date'];
                $by = $row['by'];
                $sample_split_file_code = $row['sample_split_file_code'];

          
           ?>
           
                  <tr>
            
        <td style="text-align: center;border: 1px solid #F4F4F4;"><?php echo $row_count;?></td>
        <td style="text-align: center;border: 1px solid #F4F4F4;"><?php echo $document_title;?></td>
         <td style="text-align: center;border: 1px solid #F4F4F4;">
            <?php if($sample_split_file_code == NULL){?>
                  <img src="<?php echo base_url('uploads/drivers/default_image.jpg'); ?>" style="width: 50px;height: 50px;"/>

            <?php }else{ ?>
            <a data-fancybox="gallery" href="<?php echo base_url('uploads/drivers/' . $sample_split_file_code); ?>"><img src="<?php echo base_url('uploads/drivers/' . $sample_split_file_code); ?>" onerror="this.onerror=null; this.src='<?php echo base_url('uploads/drivers/default_video.png');?>'" alt="" style="width: 50px;height: 50px;"/></a>
            <?php } ?>
        </td>
         <td style="text-align: center;"><?php 

$get_date1= strtotime($date);
    echo date('d-M-Y', $get_date1);

?></td>
        
        
        
        
        <td style="text-align: center;border: 1px solid #F4F4F4;"><?php
   
            foreach ($user as $row) {
                $user_id = $row['user_id'];
$username = $row['username'];
$u_name = $row['u_name'];

 
           ?>
         
         <?php 
               if($user_id == $by){
                   echo $username; }?><?php } ?></td>
             
           <td align="center" style="border: 1px solid #F4F4F4;"><a href="<?php echo base_url() . "Add_Driver/delete_driver_document/" . $driver_documents_id . "/" . $sample_split_file_code; ?>" onclick="return confirm('Are you sure?')"><i class="fa fa-remove" style="font-size:23px;color:red"></i></a>
          </td>
        
         </tr>
       <?php $row_count++; } ?>
         
         
                </tbody>
                
              </table>
         
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
