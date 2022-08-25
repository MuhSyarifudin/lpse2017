<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Registrasi</title>
<link rel="shortcut icon" href="<?php echo base_url().'assets/img/favicon.ico' ?>"/>
<link rel="stylesheet" href="<?php echo base_url().'assets/css/bootstrap.css' ?>" type="text/css" media="screen, projector, tv" />
<link rel="stylesheet" href="<?php echo base_url().'assets/css/bootstrap.min.css' ?>" type="text/css" media="screen, projector, tv" />
<link rel="stylesheet" href="<?php echo base_url().'assets/css/bootstrap-theme.css' ?>" type="text/css" media="screen, projector, tv" />
<link rel="stylesheet" href="<?php echo base_url().'assets/css/animate.css' ?>" type="text/css" media="screen, projector, tv" />

<script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.js' ?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery-2.1.3.min.js' ?>"></script>
<script src="<?php echo base_url().'https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js' ?>"></script>
<script src="<?php echo base_url().'js/bootstrap.min.js' ?>"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<link href="../../assets/css/bootstrap.css" rel="stylesheet" type="text/css" />
</head>
<body>

<nav class="navbar navbar-default nav-custom" style="background-color:#E4F7FA;box-shadow: 0px 5px 5px #888888;margin-bottom:0px;border:0px;"> 
    <div class="container">
    <div style="background-color:#06C:"></div>
    <div class="container">
	<div class="header row">
    	<div class="col-md-3 col-xs-4">
        <img src="<?php echo base_url().'assets/img/logobwi.png' ?>" alt="Logo LPSE" class="img-responsive" />
        </div>
        
        <div class="col-md-6 col-xs-4">
    	<!-- Kosong -->
        </div>
   		
        <div class="col-md-3 col-xs-4">
        <img src="<?php echo base_url().'assets/img/logolpsei.png' ?>" alt="Logo LPSE" class="img-responsive" />
        </div>
    </div>
    </div>
    </div>
    <!-- navbar -->
    <div class="container-fluid" style="background-color:#1F3A93;">
	<div class="navbar-header">
		<a class="navbar-brand"></a>
	</div>
	<ul class="nav navbar-nav">
        <li class="active"><a href="<?php echo base_url().'index.php/report/lpse/' ?>" style="color:white">Home</a></li>
        <li class="btn-red"><a href="<?php echo base_url().'index.php/report/Profil'?>" style="color:white">Profil</a></li>
        <li class="btn-green"><a href="<?php echo base_url().'index.php/report/detail'?>"  style="color:white">Tentang Kami</a></li> 
        <li  class="btn-yellow"> <a href="<?php echo base_url().'index.php/report/contact' ?>" style="color:white">Kontak</a></li> 
        <li class="btn-purple"><a href="<?php echo base_url().'index.php/news/'?>"  style="color:white">Berita</a></li> 
        <li class="btn-red"><a href="<?php echo base_url().'index.php/report'?>" style="color:white">Report</a></li>
  </ul>
		
	</ul>
	<ul class="nav navbar-nav navbar-right" style="color:white">
	<li><a href="<?php echo base_url().'index.php/report/register'; ?>" style="color:white"><span class="glyphicon glyphicon-user"></span> Daftar</a></li>
	<li class="clr4 dropdown">
    <a class="dropdown-toggle" id="Login" data-toggle="dropdown" style="color:white;">Login<span class="caret"></span></a>
 <ul class="dropdown-menu" style="padding: 20px 10px 5px 10px; width:300px;">
 <li>
        <form method="post" action="<?php echo base_url().'index.php/login'?>">
   <div class="form-group">
    <input type="text" class="form-control" id="username" name="username" placeholder="User ID">
   </div>
   <div class="form-group">
                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
   </div>
   
   <button type="submit" class="btn btn-primary" >Login</button>
    
        </form>
 </li>
 </ul>
</li>
 <li style="width:50px;"></li>
	</ul>
</nav>

<div class="container">
	<div style="height:50px;"></div>
    
    <?php echo validation_errors(); ?>
	<form class="form-horizontal" method="POST" action="<?php echo base_url().'index.php/regist/do_upload'; ?>" enctype="multipart/form-data">
<fieldset class="container-fluid">

<!-- Form Name -->
<div class="panel panel-body" style="box-shadow: 0px 0px 2px #888888;border-radius:1px;padding:2px;background-color:#FBFBFB">
<legend style="padding:5px;padding-left:9px;">Pendaftaran</legend>
<!-- Text input-->
<div class="container-fluid">

<div class="form-group" style="border-bottom:1px solid #F8F8F8;padding-bottom:2px;">
  <label class="col-md-2 control-label" for="Nama" style="text-align:left">Nama</label>
  <label class="col-sm-1">:</label>
  <div class="col-md-6"> 
  <input title="" id="Nama" type="text" placeholder="Enter Nama" class="form-control input-md" name="username">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group" style="border-bottom:1px solid #F8F8F8;padding-bottom:2px;">
  <label class="col-md-2 control-label" for="NIP"  style="text-align:left">NIP</label>
  <label class="col-sm-1">:</label>  
  <div class="col-md-6">
  <input id="NIP" type="text" placeholder="Enter NIP" class="form-control" name="nip">
    
  </div>
</div>

<!-- Password input-->
<div class="form-group" style="border-bottom:1px solid #F8F8F8;padding-bottom:2px;">
  <label class="col-md-2 control-label" for="password"  style="text-align:left">Password</label>
  <label class="col-sm-1">:</label>
  <div class="col-md-6">
    <input id="password" name="password" type="password" placeholder="******" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group" style="border-bottom:1px solid #F8F8F8;padding-bottom:2px;">
  <label class="col-md-2 control-label" for="SK"  style="text-align:left">No.SK	</label>
  <label class="col-sm-1">:</label>  
  <div class="col-md-6">
  <input id="SK" type="text" placeholder="Enter SK" class="form-control input-md" name="sknum">   
  </div>
</div>
<!-- File Upload -->

<div class="form-group" style="border-bottom:1px solid #F8F8F8;padding-bottom:2px;">
<label class="col-md-2 control-label" for="file" style="text-align:left">File </label>
<label class="col-md-1">:</label>
<div class="col-md-6">
<input id="file" type="file" name="skfile" value="" accept="application/pdf">
</div>
</div>

<div class="container-fluid form-group"></div>
<!-- Select Basic -->
<div class="form-group" style="border-bottom:1px solid #F8F8F8;padding-bottom:2px;">
  <label class="col-md-2 control-label" for="User_type"  style="text-align:left">Tipe User</label>
  <label class="col-sm-1">:</label>
  <div class="col-md-6">
    <select id="User_type" name="User_type" class="form-control">
      <option value="">-</option>
      <option value="PPK">PPK</option>
      <option value="PPBJ">PPBJ</option>
      <option value="Panitia">Panitia</option>
    </select>
  </div>
</div>

<!-- Text input-->
<div class="form-group" style="border-bottom:1px solid #F8F8F8;padding-bottom:2px;">
  <label class="col-md-2"> Pangkat</label>
  <label class="col-sm-1">:</label>
  <div class="col-md-6">
  <select class="form-control" name="pangkat">
    <option value="">-</option>
    <option value="Ia">Ia</option>
    <option value="Ib">Ib</option>
    <option value="Ic">Ic</option>
    <option value="Id">Id</option>
    <option value="IIa">IIa</option>
    <option value="IIb">IIb</option>
    <option value="IIc">IIc</option>
    <option value="IId">IId</option>
    <option value="IIIa">IIIa</option>
    <option value="IIIb">IIIb</option>
    <option value="IIIc">IIIc</option>
    <option value="IIId">IIId</option>
  </select>  
  </div>
</div>

<!-- Text input-->
<div class="form-group" style="border-bottom:1px solid #F8F8F8;padding-bottom:2px;">
  <label class="col-md-2 control-label" for="Email"  style="text-align:left">E-mail</label>
  <label class="col-sm-1">:</label>  
  <div class="col-md-6">
  <input id="Email" name="Email" type="text" placeholder="Enter E-mail" class="form-control input-md">
  <span class="help-block">Ex: example1@mail.com</span>  
  </div>
</div>
<!--Notifikasi-->
<div class="form-group" style="opacity: 0">
<input type="text" name="tanggal" value="<?php echo date('Y-m-d H:i:s');; ?>">

</div>
<!-- Button (Double) -->
<div class="form-group">
  <div class="col-md-4 btn-group-sm" style="float:right">
  
    <button type="submit" class="btn btn-success btn-lg btn3d"><span class="glyphicon glyphicon-ok"></span> Submit</button>
    <button type="reset" id="Reset" name="Reset" class="btn btn-danger">Reset</button>
  </div>
</div>
<?php
ini_set('date.timezone', 'Asia/Jakarta'); 

 ?>

</div>
</div>
</fieldset>
</form>

</div>
</body>
</html>