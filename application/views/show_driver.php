<?php
error_reporting(0);
?>

<?php 

$role = $this->session->userdata['logged_in']['role']; 
$user_id = $this->session->userdata['logged_in']['user_id']; 
$persons = $this->session->userdata['logged_in']['persons_id'];
?> 
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>All Drivers</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link href="<?php echo base_url(); ?>bower_components/bootstrap/dist/css/bootstrap.min.css" type="text/css" rel="stylesheet"/> 

  <link href="<?php echo base_url(); ?>bower_components/font-awesome/css/font-awesome.min.css" type="text/css" rel="stylesheet"/> 
  
  <link href="<?php echo base_url(); ?>bower_components/Ionicons/css/ionicons.min.css" type="text/css" rel="stylesheet"/> 
  
  
   <link href="<?php echo base_url(); ?>bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css" type="text/css" rel="stylesheet"/> 
  
  <link rel="shortcut icon" href="<?php echo base_url('images/title.png'); ?>" type="image/png">
  <link href="<?php echo base_url(); ?>dist/css/AdminLTE.min.css" type="text/css" rel="stylesheet"/> 
  
  
  <link href="<?php echo base_url(); ?>dist/css/skins/_all-skins.min.css" type="text/css" rel="stylesheet"/> 

  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
 
  <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
        <script>
        //When the page has loaded.
        $( document ).ready(function(){
            $('#message').fadeIn('slow', function(){
               $('#message').delay(5000).fadeOut(); 
            });
        });
        </script>
</head>
<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

  <?php include 'top1.php'; ?>
   <aside class="main-sidebar">
  
    <section class="sidebar">
     
      
      
   
     <?php include 'menu1.php'; ?>
    </section>
  
  </aside>


  <div class="content-wrapper">

    <section class="content-header">
       
      <ol class="breadcrumb">
         <?php if($role == 1){?>
        <li><a href="<?php echo base_url() . "Add_Driver" ?>">
        <button class="btn btn-warning">Add New Driver</button></a></li>
          <?php } ?>
        
      </ol>
    </section>
 <div class="col-md-3">
          <div class="small-box bg-blue-gradient">
            <div class="inner">
              <h2>All Drivers</h2>
            </div>
          </div>
 </div>
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
                <table id="example1" class="table table-condensed table-hover table-responsive" style="font-size: 11.5px;">
       
        <thead>
                
                     <tr style="color: #215D9B;">
                         <th style="text-align: center;background-color: #E2E2E2;">Sr#</th>
       <th style="background-color: #E2E2E2;">Driver Name</th>
       <th style="background-color: #E2E2E2;">Driver Nic#</th>
       <th style="background-color: #E2E2E2;">Driver Contact#</th>
       <th style="background-color: #E2E2E2;">Driver Contact#2</th>
       <th style="background-color: #E2E2E2;">Driver Salary</th>
       <th style="background-color: #E2E2E2;">Driver Address</th>
       <th style="background-color: #E2E2E2;">Documents</th>
       <th style="background-color: #E2E2E2;">Advance</th>
      <?php if($role == 1){?>
       <th style="text-align: center;background-color: #E2E2E2;">Update</th>
       <?php } ?>
       <?php if($role == 1){?>
       <th style="text-align: center;background-color: #E2E2E2;">Delete</th>
       <?php } ?>
       
                </tr>
              
                    </thead>
                    <tbody>
        <?php
        $row_count = 1;
             foreach ($driver as $row) {
                $drivers_id = $row['drivers_id'];
                $driver_name = $row['driver_name'];
                $driver_nic_no = $row['driver_nic_no'];
                $driver_contact_no = $row['driver_contact_no'];
                $driver_contact_no2 = $row['driver_contact_no2'];
                $driver_salary_per_month = $row['driver_salary_per_month'];
                $driver_address = $row['driver_address'];
                $date = $row['datetime'];
                
           ?>
           
       <tr style="<?php if($_POST["last_work"] == $drivers_id){ echo 'background-color: #EBF8A4;';}?>">
            
        <td style="text-align: center;border: 1px solid #F4F4F4;"><?php echo $row_count;?></td>
        <td style="border: 1px solid #F4F4F4;"><?php echo $driver_name; ?></td>
        <td style="border: 1px solid #F4F4F4;"><?php echo $driver_nic_no; ?></td>
        <td style="border: 1px solid #F4F4F4;"><?php echo $driver_contact_no; ?></td>
        <td style="border: 1px solid #F4F4F4;"><?php echo $driver_contact_no2; ?></td>
        <td style="border: 1px solid #F4F4F4;"><?php echo $driver_salary_per_month; ?></td>
        <td style="border: 1px solid #F4F4F4;"><?php echo $driver_address; ?></td>
       
     <td align="center" style="border: 1px solid #F4F4F4;"><a href="<?php echo base_url() . "Add_Driver/show_driver_id_for_documents/" . $drivers_id; ?>"><i class="fa fa-external-link-square" style="font-size:35px;color:blue"></i></a>
          </td>
       
        <td align="center" style="border: 1px solid #F4F4F4;"><a href="<?php echo base_url() . "Add_Driver/show_driver_id_for_advance/" . $drivers_id; ?>"><i class="fa fa-money" style="font-size:35px;"></i></a>
          </td>
          
         <?php if($role == 1){?>
          <td style="border: 1px solid #F4F4F4;" align="center"><a href="<?php echo base_url() . "Add_Driver/show_driver_id/" . $drivers_id; ?>"><i class="fa fa-pencil" style="color: blue;font-size: 18px;"></i></a>
          </td>
          <?php } ?>
         <?php if($role == 1){?>
          <td style="border: 1px solid #F4F4F4;" align="center"><a href="<?php echo base_url() . "Add_Driver/delete_driver/" . $drivers_id; ?>" onclick="return confirm('Are you sure?')"><i class="fa fa-remove" style="color: red;font-size: 18px;"></i></a>
          </td>
             <?php } ?> 
        </tr>
       <?php $row_count++; } ?>
                </tbody>
                
              </table>
            </div>
         
          </div>
          
        </div>
        
      </div>
     
    </section>
 
  </div>
 
 

 <?php include 'footer.php'; ?>

  
  

        </div>
    <script src="<?php echo base_url(). "bower_components/jquery/dist/jquery.min.js" ?>"></script>

<script src="<?php echo base_url(). "bower_components/bootstrap/dist/js/bootstrap.min.js" ?>"></script>

<script src="<?php echo base_url(). "bower_components/datatables.net/js/jquery.dataTables.min.js" ?>"></script>

<script src="<?php echo base_url(). "bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js" ?>"></script>

<script src="<?php echo base_url(). "bower_components/jquery-slimscroll/jquery.slimscroll.min.js" ?>"></script>


<script src="<?php echo base_url(). "bower_components/fastclick/lib/fastclick.js" ?>"></script>

<script src="<?php echo base_url(). "dist/js/adminlte.min.js" ?>"></script>

<script src="<?php echo base_url(). "dist/js/demo.js" ?>"></script>
<!-- page script -->
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
</body>
</html>
