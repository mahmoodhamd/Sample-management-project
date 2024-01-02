<?php
error_reporting(0);
?>
<!DOCTYPE html>
<html>
<head>
   
 <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Login</title>
  
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <style>

h1{
  color: #fff;
  text-align: center;
  font-family: Arial;
  font-weight: normal;
  margin: 2em auto 0px;
}
.outer-screen{
  background: #13202c;
  width: 900px;
  height: 540px;
  margin: 50px auto;
  border-radius: 20px;
  -moz-border-radius: 20px;
  -webkit-border-radius: 20px;
  position: relative;
  padding-top: 35px;
}

.outer-screen:before{
  content: "";
  background: #3e4a53;
  border-radius: 50px;
  position: absolute;
  bottom: 20px;
  left: 0px;
  right: 0px;
  margin: auto;
  z-index: 9999;
  width: 50px;
  height: 50px;
}
.outer-screen:after{
  content: "";
  background: #ecf0f1;
  width: 900px;
  height: 88px;
  position: absolute;
  bottom: 0px;
  border-radius: 0px 0px 20px 20px;
  -moz-border-radius: 0px 0px 20px 20px;
  -webkit-border-radius: 0px 0px 20px 20px;
}

.stand{
  position: relative;  
}

.stand:before{
  content: "";
  position: absolute;
  bottom: -150px;
  border-bottom: 150px solid #bdc3c7;
  border-left: 30px solid transparent;
  border-right: 30px solid transparent;
  width: 200px;
  left: 0px;
  right: 0px;
  margin: auto;
}

.stand:after{
  content: "";
  position: absolute;
  width: 260px;
  left: 0px;
  right: 0px;
  margin: auto;
  border-bottom: 30px solid #bdc3c7;
  border-left: 30px solid transparent;
  border-right: 30px solid transparent;
  bottom: -180px;
  box-shadow: 0px 4px 0px #7e7e7e
}

.inner-screen{
  width: 800px;
  height: 340px;
  background: #1abc9d;
  margin: 0px auto;
  padding-top: 80px;
}

.form{
  width: 400px;
  height: 230px;
  background: #edeff1;
  margin: 0px auto;
  padding-top: 20px;
  border-radius: 10px;
  -moz-border-radius: 10px;
  -webkit-border-radius: 10px;
}

input[type="text"]{
  display: block;
  width: 309px;
  height: 35px;
  margin: 15px auto;
  background: #fff;
  border: 0px;
  padding: 5px;
  font-size: 16px;
   border: 2px solid #fff;
  transition: all 0.3s ease;
  border-radius: 5px;
  -moz-border-radius: 5px;
  -webkit-border-radius: 5px;
}

input[type="text"]:focus{
  border: 2px solid #1abc9d
}

input[type="password"]{
  display: block;
  width: 309px;
  height: 35px;
  margin: 15px auto;
  background: #fff;
  border: 0px;
  padding: 5px;
  font-size: 16px;
   border: 2px solid #fff;
  transition: all 0.3s ease;
  border-radius: 5px;
  -moz-border-radius: 5px;
  -webkit-border-radius: 5px;
}

input[type="password"]:focus{
  border: 2px solid #1abc9d
}

input[type="submit"]{
  display: block;
  background: #1abc9d;
  width: 314px;
  padding: 12px;
  cursor: pointer;
  color: #fff;
  border: 0px;
  margin: auto;
  border-radius: 5px;
  -moz-border-radius: 5px;
  -webkit-border-radius: 5px;
  font-size: 17px;
  transition: all 0.3s ease;
}

input[type="submit"]:hover{
  background: #09cca6
}

a{
  text-align: center;
  font-family: Arial;
  color: gray;
  display: block;
  margin: 15px auto;
  text-decoration: none;
  transition: all 0.3s ease;
  font-size: 12px;
}

a:hover{
  color: #1abc9d;
}


::-webkit-input-placeholder {
   color: gray;
}

:-moz-placeholder { /* Firefox 18- */
   color: gray;  
}

::-moz-placeholder {  /* Firefox 19+ */
   color: gray;  
}

:-ms-input-placeholder {  
   color: gray;  
}

  </style>
<!--  <style>
  body{

  background-image: url("<?php echo base_url('images/cms3.jpg') ?>");
  /* Full height */
  height: 100%; 

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  background-color: #C0CACC;
}
</style>-->
</head>

<body style="background-color: #C0CACC;">
<!--    <div style="align: left;" align="left">
        <img src="<?php echo base_url().'/images/iris.png'; ?>" width="150px" style="border-radius: 5px;">
        
    </div>-->
    <div style="align: center;" align="center"><h1 style="background-color: #1B292E;width: 350px;border-radius: 5px;">Sample Project</h1>
        
        <h2 style="font-family: Verdana;"><font color="white"></font></h2>
    </div>
    <div align="center">
      
 <?php echo form_open('Verifylogin'); ?>	
    <div>
        <div class="form" style="margin-top: 3%;width: 335px;">
          <input type="text" onfocus="var temp_value=this.value; this.value=''; this.value=temp_value" name="username" class="zocial-dribbble" placeholder="User Name" value="<?php echo set_value('username'); ?>" autofocus>
        <input type="password" name="password" placeholder="Password" />
         <input type="submit" value="Login" />
         <div style="background-color: red;border-radius: 5px;"><h3><font color="white" style="font-family: calibri;"><b><?php echo validation_errors(); ?></b></font></h3>
                                </div>
      </div> 
    </div> 
      
    </div>
<!--    <div class="pull-left" style="color: #C0C0C0;font-family: calibri;">for any query contact ext: 120,<br>or call +92-301-8453515<br>farrukh@iriscommunications.com.pk<br>
    IT Systems Department
    </div>-->
 
  <script src='js/login.js'></script>

  
</body>
</html>
