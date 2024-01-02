<?php
error_reporting(0);
?>
<?php 
 
$role = $this->session->userdata['logged_in']['role']; 
$personid = $this->session->userdata['logged_in']['persons_id']; 
?>

<?php include 'access.php'; ?>



<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Vehicles Health</title>
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

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

</head>
<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

  <?php include 'top1.php'; ?>
   <aside class="main-sidebar">
  
    <section class="sidebar">
     
      
      
   
     <?php include 'menu1.php'; ?>
    </section>
  
  </aside>


    <div class="content-wrapper" style="background-color: #fff;">

<!--    <section class="content-header">
        <h1>
        Dashboard - Vehicles
       
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> VMS</a></li>
        <li><a href="#"></a>Dashboard</li>
        
      </ol>
    </section>-->




    
     <section class="content">
         
         
         
            <?php
        $row_count = 1;
             foreach ($vehicle as $row) {
                $vehicles_id = $row['vehicles_id'];
                $vehicle_name = $row['vehicle_name'];
                $vehicle_make_model = $row['vehicle_make_model'];
                $vehicle_odo = $row['vehicle_odo'];
                $vehicle_odo_date = $row['vehicle_odo_date'];
                $vehicle_purchase_value = $row['vehicle_purchase_value'];
                $engine_oil_limit = $row['engine_oil_limit'];
                $engine_oil_last_date = $row['engine_oil_last_date'];
                $air_filter_limit = $row['air_filter_limit'];
                $air_filter_last_date = $row['air_filter_last_date'];
                $engine_tuning_limit = $row['engine_tuning_limit'];
                $engine_tuning_last_date = $row['engine_tuning_last_date'];
                $periodic_maintenance_limit = $row['periodic_maintenance_limit'];
                $periodic_maintenance_last_date = $row['periodic_maintenance_last_date'];
                $tyres_limit = $row['tyres_limit'];
                $tyres_last_date = $row['tyres_last_date'];
                $battery_power_limit = $row['battery_power_limit'];
                $battery_power_limit_update_date = $row['battery_power_limit_update_date'];
                $tracker_limit = $row['tracker_limit'];
                $tracker_limit_update_date = $row['tracker_limit_update_date'];
                $insurance_cycle_limit = $row['insurance_cycle_limit'];
                $insurance_cycle_limit_update_date = $row['insurance_cycle_limit_update_date'];
                $sample_split_file_code = $row['sample_split_file_code'];
                $by = $row['by'];
                $date = $row['datetime'];
                
           ?>
         
    
      <div class="row"  style="border-bottom: 2px solid #D2D6DE;margin-top: 10px;">
        
        <div class="col-lg-3 col-xs-12">
        
            <div class="small-box">
                  <a href="#" class="small-box-footer" style="background-color: #3C8DBC;color: #fff;font-size: 14px;"><b><?php echo $row_count; ?>. <?php echo $vehicle_make_model; ?> <?php echo $vehicle_name; ?></b> <i class="fa fa-arrow-circle-right"></i></a>
            <div class="inner">
              <img src="<?php echo base_url('images/' . $sample_split_file_code); ?>" />

              <h4 style="background-color: #FCFFFF;text-align: center;"></h4>
            </div>
            
              
          </div>
        </div>
       
    
  
          
     <div class="col-lg-3 col-xs-12">
                 
                  <div class="progress-group" style="border-right: 5px solid #E5E5E5;">
                      <i class="fa fa-filter"></i>
                    <span class="progress-text">Engine Oil</span>
                     <?php
                          
            $this->db->select('engine_oil_limit');
            $this->db->from('vehicles');
            $this->db->where('vehicles_id', $vehicles_id);
            $query = $this->db->get();
 
    foreach ($query->result() as $row) {
    $engine_oil_limit = $row->engine_oil_limit;
     }
                          
                          
              $this->db->select('engine_oil_last_date');
            $this->db->from('vehicles');
            $this->db->where('vehicles_id', $vehicles_id);
            $query = $this->db->get();
 
    foreach ($query->result() as $row) {
    $engine_oil_last_date = $row->engine_oil_last_date;
     }
  
        $this->db->select_sum('daily_odo');
            $this->db->from('vehicle_readings');
            $this->db->where('vehicles_id', $vehicles_id);
            $this->db->where('date >=', $engine_oil_last_date);
            $query = $this->db->get();
 
    foreach ($query->result() as $row) {
    $daily_odo_sum_engine_oil = $row->daily_odo;
    
     }
     
     
     
     
     
      $this->db->select_sum('kilometers');
            $this->db->from('vehicle_reading_adjustments');
            $this->db->where('vehicles_id', $vehicles_id);
            $this->db->where('date >=', $engine_oil_last_date);
            $query = $this->db->get();
 
    foreach ($query->result() as $row) {
    $engine_oil_limit_adjustment_kilometers = $row->kilometers;
     }
     
     $daily_odo_sum_engine_oil_total = $daily_odo_sum_engine_oil+$engine_oil_limit_adjustment_kilometers;
     
     $engine_oil_range = ($daily_odo_sum_engine_oil_total/$engine_oil_limit)*100;
     
   
    ?>


                    <span style="font-size: 11.5px;margin-left: 23px;"><c style="color: blue;"><?php echo number_format($daily_odo_sum_engine_oil_total); ?></c>/<?php echo number_format($engine_oil_limit); ?> KMs</span>
                    <span class="badge bg-<?php
                           if($engine_oil_range < 50){
                           echo 'green';    
                           }elseif($engine_oil_range < 90){
                           echo 'yellow';
                           }else{
                           echo 'red';    
                           }
                           ?>" style="float: right;margin-right: 2%;"><?php echo round($engine_oil_range,0); ?>%</span>

                    <div class="progress sm">
                      
                           <div class="progress-bar progress-bar-<?php
                           if($engine_oil_range < 50){
                           echo 'green';    
                           }elseif($engine_oil_range < 90){
                           echo 'yellow';
                           }else{
                           echo 'red';    
                           }
                           ?>" style="width: <?php echo round($engine_oil_range , 0);?>%"></div>
                    </div>
                    
                  </div>
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
          <div class="progress-group" style="border-right: 5px solid #E5E5E5;">
                      <i class="fa fa-spinner"></i>
                    <span class="progress-text">Air Filter</span>
                    <?php
                          
            $this->db->select('air_filter_limit');
            $this->db->from('vehicles');
            $this->db->where('vehicles_id', $vehicles_id);
            $query = $this->db->get();
 
    foreach ($query->result() as $row) {
    $air_filter_limit = $row->air_filter_limit;
     }
                          
                          
              $this->db->select('air_filter_last_date');
            $this->db->from('vehicles');
            $this->db->where('vehicles_id', $vehicles_id);
            $query = $this->db->get();
 
    foreach ($query->result() as $row) {
    $air_filter_last_date = $row->air_filter_last_date;
     }
  
        $this->db->select_sum('daily_odo');
            $this->db->from('vehicle_readings');
            $this->db->where('vehicles_id', $vehicles_id);
            $this->db->where('date >=', $air_filter_last_date);
            $query = $this->db->get();
 
    foreach ($query->result() as $row) {
    $daily_odo_sum_air_filter = $row->daily_odo;
    
     }
     
     
      $this->db->select_sum('kilometers');
            $this->db->from('vehicle_reading_adjustments');
            $this->db->where('vehicles_id', $vehicles_id);
            $this->db->where('date >=', $air_filter_last_date);
            $query = $this->db->get();
 
    foreach ($query->result() as $row) {
    $air_filter_limit_adjustment_kilometers = $row->kilometers;
     }
     
     
     $daily_odo_sum_air_filter_total = $daily_odo_sum_air_filter+$air_filter_limit_adjustment_kilometers;
     
     
      
     $air_filter_range = ($daily_odo_sum_air_filter_total/$air_filter_limit)*100;
     
   
    ?>
                    <span style="font-size: 11.5px;margin-left: 29px;"><c style="color: blue;"><?php echo number_format($daily_odo_sum_air_filter_total); ?></c>/<?php echo number_format($air_filter_limit); ?> KMs</span>
                    <span class="badge bg-<?php
                           if($air_filter_range < 50){
                           echo 'green';    
                           }elseif($air_filter_range < 90){
                           echo 'yellow';
                           }else{
                           echo 'red';    
                           }
                           ?>" style="float: right;margin-right: 2%;"><?php echo round($air_filter_range,0); ?>%</span>

                    <div class="progress sm">
                      
                           <div class="progress-bar progress-bar-<?php
                           if($air_filter_range < 50){
                           echo 'green';    
                           }elseif($air_filter_range < 90){
                           echo 'yellow';
                           }else{
                           echo 'red';    
                           }
                           ?>" style="width: <?php echo round($air_filter_range , 0);?>%"></div>
                    </div>
                  </div>
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
                  <!-- /.progress-group -->
                  <div class="progress-group" style="border-right: 5px solid #E5E5E5;">
                   <i class="fa fa-cogs"></i>
                      <span class="progress-text">Tuning</span>
                      
                    <?php
                          
                             $this->db->select('engine_tuning_limit');
            $this->db->from('vehicles');
            $this->db->where('vehicles_id', $vehicles_id);
            $query = $this->db->get();
 
    foreach ($query->result() as $row) {
    $engine_tuning_limit = $row->engine_tuning_limit;
     }
                          
                          
              $this->db->select('engine_tuning_last_date');
            $this->db->from('vehicles');
            $this->db->where('vehicles_id', $vehicles_id);
            $query = $this->db->get();
 
    foreach ($query->result() as $row) {
    $engine_tuning_last_date = $row->engine_tuning_last_date;
     }
  
        $this->db->select_sum('daily_odo');
            $this->db->from('vehicle_readings');
            $this->db->where('vehicles_id', $vehicles_id);
            $this->db->where('date >=', $engine_tuning_last_date);
            $query = $this->db->get();
 
    foreach ($query->result() as $row) {
    $daily_odo_sum_engine_tuning = $row->daily_odo;
    
     }
     
     
     $this->db->select_sum('kilometers');
            $this->db->from('vehicle_reading_adjustments');
            $this->db->where('vehicles_id', $vehicles_id);
            $this->db->where('date >=', $engine_tuning_last_date);
            $query = $this->db->get();
 
    foreach ($query->result() as $row) {
    $engine_tuning_limit_adjustment_kilometers = $row->kilometers;
     }
     
     $daily_odo_sum_engine_tuning_total = $daily_odo_sum_engine_tuning+$engine_tuning_limit_adjustment_kilometers;
      
     $engine_tuning_range = ($daily_odo_sum_engine_tuning_total/$engine_tuning_limit)*100;
     
   
    ?>
                      <span style="font-size: 11.5px;margin-left: 36px;"><c style="color: blue;"> <?php echo number_format($daily_odo_sum_engine_tuning_total); ?></c>/<?php echo number_format($engine_tuning_limit); ?> KMs</span>
                    <span class="badge bg-<?php
                           if($engine_tuning_range < 50){
                           echo 'green';    
                           }elseif($engine_tuning_range < 90){
                           echo 'yellow';
                           }else{
                           echo 'red';    
                           }
                           ?>" style="float: right;margin-right: 2%;"><?php echo round($engine_tuning_range,0); ?>%</span>

                    <div class="progress sm">
                      
                           <div class="progress-bar progress-bar-<?php
                           if($engine_tuning_range < 50){
                           echo 'green';    
                           }elseif($engine_tuning_range < 90){
                           echo 'yellow';
                           }else{
                           echo 'red';    
                           }
                           ?>" style="width: <?php echo round($engine_tuning_range , 0);?>%"></div>
                    </div>
                  </div>
         
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                     <div class="progress-group" style="border-right: 5px solid #E5E5E5;">
                   <i class="fa fa-wrench"></i>
                      <span class="progress-text">Periodic MX</span>
                     <?php
                          
                             $this->db->select('periodic_maintenance_limit');
            $this->db->from('vehicles');
            $this->db->where('vehicles_id', $vehicles_id);
            $query = $this->db->get();
 
    foreach ($query->result() as $row) {
    $periodic_maintenance_limit = $row->periodic_maintenance_limit;
     }
                          
                          
              $this->db->select('periodic_maintenance_last_date');
            $this->db->from('vehicles');
            $this->db->where('vehicles_id', $vehicles_id);
            $query = $this->db->get();
 
    foreach ($query->result() as $row) {
    $periodic_maintenance_last_date = $row->periodic_maintenance_last_date;
     }
  
        $this->db->select_sum('daily_odo');
            $this->db->from('vehicle_readings');
            $this->db->where('vehicles_id', $vehicles_id);
            $this->db->where('date >=', $periodic_maintenance_last_date);
            $query = $this->db->get();
 
    foreach ($query->result() as $row) {
    $daily_odo_sum_periodic_maintenance = $row->daily_odo;
    
     }
     
         $this->db->select_sum('kilometers');
            $this->db->from('vehicle_reading_adjustments');
            $this->db->where('vehicles_id', $vehicles_id);
            $this->db->where('date >=', $periodic_maintenance_last_date);
            $query = $this->db->get();
 
    foreach ($query->result() as $row) {
    $engine_tuning_limit_adjustment_kilometers = $row->kilometers;
     }
     
     $daily_odo_sum_periodic_maintenance_total = $daily_odo_sum_periodic_maintenance+$engine_tuning_limit_adjustment_kilometers;
     
      
     $periodic_maintenance_range = ($daily_odo_sum_periodic_maintenance_total/$periodic_maintenance_limit)*100;
     
   
    ?>
                      <span style="font-size: 11.5px;margin-left: 9px;"><c style="color: blue;"><?php echo number_format($daily_odo_sum_periodic_maintenance_total); ?></c>/<?php echo number_format($periodic_maintenance_limit); ?> KMs</span>
                    <span class="badge bg-<?php
                           if($periodic_maintenance_range < 50){
                           echo 'green';    
                           }elseif($periodic_maintenance_range < 90){
                           echo 'yellow';
                           }else{
                           echo 'red';    
                           }
                           ?>" style="float: right;margin-right: 2%;"><?php echo round($periodic_maintenance_range,0); ?>%</span>

                    <div class="progress sm">
                      
                           <div class="progress-bar progress-bar-<?php
                           if($periodic_maintenance_range < 50){
                           echo 'green';    
                           }elseif($periodic_maintenance_range < 90){
                           echo 'yellow';
                           }else{
                           echo 'red';    
                           }
                           ?>" style="width: <?php echo round($periodic_maintenance_range , 0);?>%"></div>
                    </div>
                  </div>
         
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  <!-- /.progress-group -->
                
                  <!-- /.progress-group -->
                 
                  <!-- /.progress-group -->
                </div>
          
        
           
     <div class="col-lg-3 col-xs-12">
           <div class="progress-group" style="border-right: 5px solid #E5E5E5;">
                      <i class="fa fa-chrome"></i> 
                    <span class="progress-text">Tyres</span>
                    <?php
                          
                             $this->db->select('tyres_limit');
            $this->db->from('vehicles');
            $this->db->where('vehicles_id', $vehicles_id);
            $query = $this->db->get();
 
    foreach ($query->result() as $row) {
    $tyres_limit = $row->tyres_limit;
     }
                          
                          
              $this->db->select('tyres_last_date');
            $this->db->from('vehicles');
            $this->db->where('vehicles_id', $vehicles_id);
            $query = $this->db->get();
 
    foreach ($query->result() as $row) {
    $tyres_last_date = $row->tyres_last_date;
     }
  
        $this->db->select_sum('daily_odo');
            $this->db->from('vehicle_readings');
            $this->db->where('vehicles_id', $vehicles_id);
            $this->db->where('date >=', $tyres_last_date);
            $query = $this->db->get();
 
    foreach ($query->result() as $row) {
    $daily_odo_sum_tyres = $row->daily_odo;
    
     }
     
     
        $this->db->select_sum('kilometers');
            $this->db->from('vehicle_reading_adjustments');
            $this->db->where('vehicles_id', $vehicles_id);
            $this->db->where('date >=', $tyres_last_date);
            $query = $this->db->get();
 
    foreach ($query->result() as $row) {
    $tyres_limit_adjustment_kilometers = $row->kilometers;
     }
     
     $daily_odo_sum_tyres_total = $daily_odo_sum_tyres+$tyres_limit_adjustment_kilometers;
     
     
      
     $tyres_range = ($daily_odo_sum_tyres_total/$tyres_limit)*100;
     
   
    ?>
                    <span style="font-size: 11.5px;margin-left: 46px;"><c style="color: blue;"> <?php echo number_format($daily_odo_sum_tyres_total); ?></c>/<?php echo $tyres_limit; ?> KMs</c>
                    <span class="badge bg-<?php
                           if($tyres_range < 50){
                           echo 'green';    
                           }elseif($tyres_range < 90){
                           echo 'yellow';
                           }else{
                           echo 'red';    
                           }
                           ?>" style="float: right;margin-right: 2%;"><?php echo round($tyres_range,0); ?>%</span>

                    <div class="progress sm">
                      
                           <div class="progress-bar progress-bar-<?php
                           if($tyres_range < 50){
                           echo 'green';    
                           }elseif($tyres_range < 90){
                           echo 'yellow';
                           }else{
                           echo 'red';    
                           }
                           ?>" style="width: <?php echo round($tyres_range , 0);?>%"></div>
                    </div>
                  </div>
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
          <div class="progress-group" style="border-right: 5px solid #E5E5E5;">
                     <i class="fa fa-bolt"></i> 
                    <span class="progress-text">Battery Power</span>
                              <?php
                          
                             $this->db->select('battery_power_limit');
            $this->db->from('vehicles');
            $this->db->where('vehicles_id', $vehicles_id);
            $query = $this->db->get();
 
    foreach ($query->result() as $row) {
    $battery_power_limit = $row->battery_power_limit;
     }
                          
         $this->db->select('battery_power_limit_update_date');
            $this->db->from('vehicles');
            $this->db->where('vehicles_id', $vehicles_id);
            $query = $this->db->get();
 
    foreach ($query->result() as $row) {
    $battery_power_last_maintenance = $row->battery_power_limit_update_date;
     }  
     
     
     $date1_battery=date_create("$battery_power_last_maintenance");
$date2_battery=date_create("$battery_power_limit");
$diff_battery=date_diff($date1_battery,$date2_battery);
$battery_power_limit_days_total = $diff_battery->format("%a");

$today_battery = date("Y-m-d");
$date3_battery=date_create("$battery_power_last_maintenance");
$date4_battery=date_create("$today_battery");
$diff1_battery=date_diff($date4_battery,$date3_battery);
$days_used_battery = $diff1_battery->format("%a");


      
$battery_range = round(($days_used_battery/$battery_power_limit_days_total)*100 ,2);
     
   
    ?>
                    <span style="font-size: 11.5px;margin-left: 20px;"><c style="color: blue;"><?php echo number_format($days_used_battery/30); ?>/<?php echo number_format($battery_power_limit_days_total/30); ?></c> Months</span>
                    <span class="badge bg-<?php
                           if($battery_range < 50){
                           echo 'green';    
                           }elseif($battery_range < 90){
                           echo 'yellow';
                           }else{
                           echo 'red';    
                           }
                           ?>" style="float: right;margin-right: 2%;"><?php echo round($battery_range,0); ?>%</span>

                    <div class="progress sm">
                      
                           <div class="progress-bar progress-bar-<?php
                           if($battery_range < 50){
                           echo 'green';    
                           }elseif($battery_range < 90){
                           echo 'yellow';
                           }else{
                           echo 'red';    
                           }
                           ?>" style="width: <?php echo round($battery_range , 0);?>%"></div>
                    </div>
                  </div>
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
                 
                  <div class="progress-group" style="border-right: 5px solid #E5E5E5;">
                      <i class="fa fa-globe"></i>
                    <span class="progress-text">Tracker</span>
                             <?php
                          
                             $this->db->select('tracker_limit');
            $this->db->from('vehicles');
            $this->db->where('vehicles_id', $vehicles_id);
            $query = $this->db->get();
 
    foreach ($query->result() as $row) {
    $tracker_limit = $row->tracker_limit;
     }
                          
         $this->db->select('tracker_limit_update_date');
            $this->db->from('vehicles');
            $this->db->where('vehicles_id', $vehicles_id);
            $query = $this->db->get();
 
    foreach ($query->result() as $row) {
    $tracker_last_maintenance = $row->tracker_limit_update_date;
     }  
     
     
     $date1_tracker=date_create("$tracker_last_maintenance");
$date2_tracker=date_create("$tracker_limit");
$diff_tracker=date_diff($date1_tracker,$date2_tracker);
$tracker_limit_days_total = $diff_tracker->format("%a");

$today_tracker = date("Y-m-d");
$date3_tracker=date_create("$tracker_last_maintenance");
$date4_tracker=date_create("$today_tracker");
$diff1_tracker=date_diff($date4_tracker,$date3_tracker);
$days_used_tracker = $diff1_tracker->format("%a");


      
$tracker_range = round(($days_used_tracker/$tracker_limit_days_total)*100 ,2);
     
   
    ?>
                    <span style="font-size: 11.5px;margin-left: 60px;"><c style="color: blue;"><?php echo number_format($days_used_tracker/30); ?></c>/<?php echo number_format($tracker_limit_days_total/30); ?> Months</span>
                    <span class="badge bg-<?php
                           if($tracker_range < 50){
                           echo 'green';    
                           }elseif($tracker_range < 90){
                           echo 'yellow';
                           }else{
                           echo 'red';    
                           }
                           ?>" style="float: right;margin-right: 2%;"><?php echo round($tracker_range,0); ?>%</span>

                    <div class="progress sm">
                      
                           <div class="progress-bar progress-bar-<?php
                           if($tracker_range < 50){
                           echo 'green';    
                           }elseif($tracker_range < 90){
                           echo 'yellow';
                           }else{
                           echo 'red';    
                           }
                           ?>" style="width: <?php echo round($tracker_range , 0);?>%"></div>
                    </div>
                  </div>
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
                  <!-- /.progress-group -->
               
                  <!-- /.progress-group -->
                  
                  <!-- /.progress-group -->
                  <div class="progress-group" style="border-right: 5px solid #E5E5E5;">
                     <i class="fa fa-medkit"></i> 
                    <span class="progress-text">Insurance</span>
                            <?php
                          
                             $this->db->select('insurance_cycle_limit');
            $this->db->from('vehicles');
            $this->db->where('vehicles_id', $vehicles_id);
            $query = $this->db->get();
 
    foreach ($query->result() as $row) {
    $insurance_cycle_limit = $row->insurance_cycle_limit;
     }
                          
         $this->db->select('insurance_cycle_limit_update_date');
            $this->db->from('vehicles');
            $this->db->where('vehicles_id', $vehicles_id);
            $query = $this->db->get();
 
    foreach ($query->result() as $row) {
    $insurance_cycle_last_maintenance = $row->insurance_cycle_limit_update_date;
     }  
     
     
     $date1_insurance_cycle=date_create("$insurance_cycle_last_maintenance");
$date2_insurance_cycle=date_create("$insurance_cycle_limit");
$diff_insurance_cycle=date_diff($date1_insurance_cycle,$date2_insurance_cycle);
$insurance_cycle_limit_days_total = $diff_insurance_cycle->format("%a");

$today_insurance_cycle = date("Y-m-d");
$date3_insurance_cycle=date_create("$insurance_cycle_last_maintenance");
$date4_insurance_cycle=date_create("$today_insurance_cycle");
$diff1_insurance_cycle=date_diff($date4_insurance_cycle,$date3_insurance_cycle);
$days_used_insurance_cycle = $diff1_insurance_cycle->format("%a");


      
$insurance_cycle_range = round(($days_used_insurance_cycle/$insurance_cycle_limit_days_total)*100 ,2);
     
   
    ?>
                    <span style="font-size: 11.5px;margin-left: 40px;"><c style="color: blue;"> <?php echo number_format($days_used_insurance_cycle/30); ?></c>/<?php echo number_format($insurance_cycle_limit_days_total/30); ?> Months</span>
                    <span class="badge bg-<?php
                           if($insurance_cycle_range < 50){
                           echo 'green';    
                           }elseif($insurance_cycle_range < 90){
                           echo 'yellow';
                           }else{
                           echo 'red';    
                           }
                           ?>" style="float: right;margin-right: 2%;"><?php echo round($insurance_cycle_range,0); ?>%</span>

                    <div class="progress sm">
                      
                           <div class="progress-bar progress-bar-<?php
                           if($insurance_cycle_range < 50){
                           echo 'green';    
                           }elseif($insurance_cycle_range < 90){
                           echo 'yellow';
                           }else{
                           echo 'red';    
                           }
                           ?>" style="width: <?php echo round($insurance_cycle_range , 0);?>%"></div>
                    </div>
                  </div>
                  <!-- /.progress-group -->
                </div>
            
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
        
    <div class="col-lg-3 col-xs-12">
        <div class="info-box" style="background-color: #006FC2;color: #fff;">
            <span class="info-box-icon"><i class="fa fa-road"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Total Mileage</span>
              <span class="info-box-number">
                
                   <?php
              $this->db->select('vehicle_odo');
            $this->db->from('vehicles');
            $this->db->where('vehicles_id', $vehicles_id);
  $query = $this->db->get();
 
    foreach ($query->result() as $row) {
     $vehicle_odo = $row->vehicle_odo;
      }?>
                  
              <?php
              $this->db->select_sum('daily_odo');
            $this->db->from('vehicle_readings');
            $this->db->where('vehicles_id', $vehicles_id);
  $query = $this->db->get();
 
    foreach ($query->result() as $row) {
     $daily_odo = $row->daily_odo;
      }?>
                  
                   <?php
              $this->db->select_sum('kilometers');
            $this->db->from('vehicle_reading_adjustments');
            $this->db->where('vehicles_id', $vehicles_id);
  $query = $this->db->get();
 
    foreach ($query->result() as $row) {
     $kilometers = $row->kilometers;
      }?>
                  
                  
         <?php echo number_format($daily_odo+$vehicle_odo+$kilometers); ?>
                  
              </span>

              
                  <span class="progress-description">
                    Kilometers
                  </span>
            </div>
            <!-- /.info-box-content -->
          </div>
         </div>
        
          
          
          
          
          
        
    <div class="col-lg-3 col-xs-12">
        <div class="info-box" style="background-color: #00A000;color: #fff;">
            <span class="info-box-icon"><i class="fa fa-dollar"></i></span>
            

            <div class="info-box-content">
              <span class="info-box-text">Total Profit</span>
              <span class="info-box-number">
                  
            
                     <?php
            $this->db->select_sum('amount_value');
            $this->db->from('rental_collections');
            $this->db->where('vehicles_id', $vehicles_id);
            $query = $this->db->get();
 
    foreach ($query->result() as $row) {
    $total_amount_received = $row->amount_value;
      }?>
                  
                
            <?php

         
         $sum_driver_salary = 0;

                
            $this->db->select('*');
            $this->db->from('rentals');
            $this->db->where('vehicles_id', $vehicles_id);
            $query = $this->db->get();
 
    foreach ($query->result() as $row) {
    $rental_heads_id = $row->rental_heads_id;
    $drivers_id = $row->drivers_id;
    $clients_id = $row->clients_id;
    $date = $row->date;
                
                
            $this->db->select('*');
            $this->db->from('rental_heads');
            $this->db->where('rental_heads_id', $rental_heads_id);
            $query = $this->db->get();
 
    foreach ($query->result() as $row) {
    $rental_amount = $row->rental_amount;
    $s = $row->start;
    $e = $row->end;
    
    if($drivers_id != '1'){
    $driver_salary = $row->driver_salary;
    }
    else{
       $driver_salary = 0;
    }


     }
    $sum_driver_salary += $driver_salary;
    
 
     }
                
       
            ?>    
                  
                  

              

         

    
             
                      <?php
              $this->db->select_sum('amount');
            $this->db->from('expenses');
            $this->db->where('vehicles_id', $vehicles_id);
            $this->db->where('charged_to', '0');
            $query = $this->db->get();
 
    foreach ($query->result() as $row) {
   $total_expense = $row->amount;
      }?>
             
                  
              
                       <?php
              $this->db->select('vehicle_purchase_value');
            $this->db->from('vehicles');
            $this->db->where('vehicles_id', $vehicles_id);
            $query = $this->db->get();
 
    foreach ($query->result() as $row) {
   $total_vehicle_purchase_value = $row->vehicle_purchase_value;
      }?>
             
            <?php 
            $total_profit_ach096 = $total_amount_received-$total_expense-$sum_driver_salary;
            echo number_format($total_profit_ach096);
            ?>
             <?php
                    $total_percentage_ach096 = ($total_profit_ach096/$total_vehicle_purchase_value*100);
                    
                    ?>
              </span>

              <div class="progress">
                <div class="progress-bar" style="width: <?php echo $total_percentage_ach096; ?>%"></div>
              </div>
                  <span class="progress-description">
                   <?php
                      echo number_format($total_percentage_ach096 , 2);
                      ?>
                     % of Vehicle Value
                  </span>
            </div>
            <!-- /.info-box-content -->
          </div>
    </div>
          
          
          
         </div>    
          <?php $row_count++; } ?>
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
     
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
<script>
function myFunction() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>
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
