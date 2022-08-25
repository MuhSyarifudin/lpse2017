<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

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
		<li class="active"><a href="#">Home</a></li>
		<li class="btn-red"><a href="#" style="color:white">Profil</a></li>
		<li class="btn-yellow" style="cursor:text"><a href="#"  style="color:white;">Tentang Kami</a></li> 
		<li  class="btn-green"> <a href="<?php echo base_url().'index.php/report/contact' ?>" style="color:white">Kontak</a></li> 
        <li class="btn-purple"><a href="<?php echo base_url().'index.php/report/Newset' ?>" style="color:white">Berita</a></li>
	</ul>
		
	</ul>
	<ul class="nav navbar-nav navbar-right" style="color:white">
	<li><a href="<?php echo base_url().'index.php/report/register'; ?>" style="color:white"><span class="glyphicon glyphicon-user"></span> Daftar</a></li>
	<li class="clr4 dropdown">
    <a class="dropdown-toggle" id="Login" data-toggle="dropdown" style="color:white;">Login<span class="caret"></span></a>
 <ul class="dropdown-menu" style="padding: 20px 10px 5px 10px; width:300px;">
 <li>
        <form action="" method="post">
   <div class="form-group">
    <input type="text" class="form-control" id="inptusername" placeholder="User ID">
   </div>
   <div class="form-group">
                <input type="password" class="form-control" id="inptpass" placeholder="Password">
   </div>
   <button type="submit" class="btn btn-primary" >Login</button>
        </form>
 </li>
 </ul>
</li>
 <li style="width:50px;"></li>
	</ul>
</nav>
<form>
<div class="form-group">
<input type="file" accept="image/jpeg"/>
</div>
<div class="form-group">
<label class="control-label col-md-2">Judul :</label>
<input class="input-sm" name="brt_judul"/>
</div>
<div class="form-group">
<label class="control-label col-md-2">Isi :</label>
<textarea cols="4" rows="4"  name="brt_isi"></textarea>
</div>
</form>
</body>
</html>