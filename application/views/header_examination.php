         <meta http-equiv="x-ua-compatible" content="IE=edge" />
        <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-touch-fullscreen" content="yes">
        
        <link href="<?php echo base_url(); ?>css/snap.css" type="text/css" rel="stylesheet"/> 
        <link href="<?php echo base_url(); ?>css/demo.css" type="text/css" rel="stylesheet"/> 
        <link href="<?php echo base_url(); ?>css/jquery.datepick.css" type="text/css" rel="stylesheet"/> 

  
   <link href="<?php echo base_url(); ?>css/bootstrap.css" type="text/css" rel="stylesheet"/> 
        <link href="<?php echo base_url(); ?>css/bootstrap_fonts.css" type="text/css" rel="stylesheet"/> 

<link rel="shortcut icon" href="<?php echo base_url('images/title.png'); ?>" type="image/png">
<script src="<?php echo base_url(). "js/jquery-1.9.1.min.js" ?>"></script>
<script src="<?php echo base_url(). "js/jquery.heavyTable.js" ?>"></script>
<script src="<?php echo base_url(). "js/ajax.js" ?>"></script>
<script src="<?php echo base_url(). "js/jquery.plugin.min.js" ?>"></script>
<script src="<?php echo base_url(). "js/jquery.datepick.js" ?>"></script>
<script src="<?php echo base_url(). "js/ajax2.js" ?>"></script>
<script src="<?php echo base_url(). "js/submit.js" ?>"></script>
        
              
<script>
$(function() {
	$('#popupDatepicker').datepick();
	$('#inlineDatepicker').datepick({onSelect: showDate});
});

function showDate(date) {
	alert('The date chosen is ' + date);
}
</script>