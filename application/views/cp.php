<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>MONITORING DAN REPORTING LPSE KKP</title>
<link rel="shortcut icon" href="<?php echo base_url().'assets/img/favicon.ico' ?>"/>
<link rel="stylesheet" href="<?php echo base_url().'assets/css/bootstrap.css' ?>" type="text/css" media="screen, projector, tv" />
<link rel="stylesheet" href="<?php echo base_url().'assets/css/bootstrap.min.css' ?>" type="text/css" media="screen, projector, tv" />
<link rel="stylesheet" href="<?php echo base_url().'assets/css/bootstrap-theme.css' ?>" type="text/css" media="screen, projector, tv" />
<script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.js' ?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery-2.1.3.min.js' ?>"></script>
<script src="<?php echo base_url().'https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js' ?>"></script>
<script src="<?php echo base_url().'js/bootstrap.min.js' ?>"></script>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<style>.carousel-inner > .item > img,.carousel-inner > .item > a > img { width: 80%; margin: auto;}</style>
<link href="../../assets/css/bootstrap.css" rel="stylesheet" type="text/css" />
<link href="../../assets/vendor/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css" />

</head>

<body style="background-color:#EEF7FB">
<nav class="navbar navbar-default navbar-fixed-top" style="background-color:#E4F7FA;box-shadow: 0px 5px 5px #888888;"> 
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
    <div class="container-fluid" style="background-color:#1F3A93">
	<div class="navbar-header">
		<a class="navbar-brand"></a>
	</div>
	<ul class="nav navbar-nav">
		<li class="btn-green"><a href="<?php echo base_url().'index.php/report/lpse/' ?>" style="color:white">Home</a></li>
		<li class="btn-red"><a href="<?php echo base_url().'index.php/report/Profil'?>" style="color:white">Profil</a></li>
		<li class="btn-yellow"><a href="<?php echo base_url().'index.php/report/detail'?>"  style="color:white">Tentang Kami</a></li> 
		<li  class="active"> <a href="<?php echo base_url().'index.php/report/contact' ?>" style="color:white">Kontak</a></li> 
        <li class="btn-purple"><a href="<?php echo base_url().'index.php/news/'?>"  style="color:white">Berita</a></li>
        <li class="btn-red"><a href="<?php echo base_url().'index.php/report'?>" style="color:white">Report</a></li> 
	</ul>
		
	</ul>
	<ul class="nav navbar-nav navbar-right" style="color:white">
    <li><a href="<?php echo base_url().'index.php/regist/'; ?>" style="color:white"><span class="glyphicon glyphicon-user"></span>
    Daftar
    </a></li>
    <li class="clr4 dropdown">
    <a class="dropdown-toggle" id="Login" data-toggle="dropdown" style="color:white;">Login<span class="caret"></span></a>
 <ul class="dropdown-menu" style="padding: 20px 10px 5px 10px; width:300px;">
 <li>
        <form action="<?php echo base_url('index.php/Login/'); ?>" method="post">
   <div class="form-group">
    <input type="text" class="form-control" name="username" id="username" placeholder="User ID">
   </div>
   <div class="form-group">
                <input type="password" class="form-control" name="password" id="password" placeholder="Password">
   </div>
   <button type="submit" class="btn btn-primary" >Login</button>
        </form>
 </li>
 </ul>
</li>
 <li style="width:50px;"></li>
    </ul>
</nav>
<div class="container text-right" style="height:200px"></div>

<div class="container">
	<div class="breadcrumb" style="background-color: #538DEE;color:white">Kontak Kami</div>
    <div class="panel panel-default">
    <div class="panel-body">
    <table class="">
    <tr><th rowspan="8" class="col-md-2"><center><div class="fa fa-fw fa-phone-square fa-5x"></div></center></th><th>LPSE KABUPATEN BANYUWANGI</th></tr>
    <tr><?php if(!empty($kontak)){foreach($kontak as $r){echo '<td>'.$r['isi'].'</td>';}}?></tr>
    </table>
    </div>
    </div>
</div>



</div>

</body>
</html>