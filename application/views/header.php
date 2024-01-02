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
<script src="<?php echo base_url(). "js/cascadingselect.js" ?>"></script>
        
                <style>
input[type=text], select {
    width: 100%;
    padding: 7px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=button] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 7px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}
input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 7px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}
textarea[type=submit] {
    width: 50%;
    background-color: #4CAF50;
    color: white;
    padding: 7px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}
input[type=submit]:hover {
    background-color: #45a049;
}

#form {
    width: 90%;
    height: auto;
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
    margin:0 auto;
}
</style>
<script>
$(function() {
	$('#popupDatepicker').datepick();
	$('#inlineDatepicker').datepick({onSelect: showDate});
});

function showDate(date) {
	alert('The date chosen is ' + date);
}
</script>