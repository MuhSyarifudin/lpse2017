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
<link rel="stylesheet" href="<?php echo base_url().'assets/css/animate.css' ?>" type="text/css" media="screen, projector, tv" />

<script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.js' ?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery-2.1.3.min.js' ?>"></script>
<script src="<?php echo base_url().'https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js' ?>"></script>
<script src="<?php echo base_url().'js/bootstrap.min.js' ?>"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  
    <?php 
	ini_set('date.timezone', 'Asia/Jakarta'); 
	 ?>
<style>.carousel-inner > .item > img,.carousel-inner > .item > a > img { width: 80%; margin: auto;}</style>
<link href="../../assets/css/bootstrap.css" rel="stylesheet" type="text/css" />
<link href="../../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="assets/css/animate.css" type="text/css" media="screen, projector, tv" />

<link href="../../assets/css/animate.css" rel="stylesheet" type="text/css" />
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
		<li class="btn-red"><a href="<?php echo base_url().'index.php/report/profil' ?>" style="color:white">Profil</a></li>
		<li class="btn-yellow"><a href="<?php echo base_url().'index.php/report/detail'?>"  style="color:white;">Tentang Kami</a></li> 
		<li  class="btn-green"> <a href="<?php echo base_url().'index.php/report/contact' ?>" style="color:white">Kontak</a></li> 
        <li class="btn-purple"><a href="<?php echo base_url().'index.php/news/' ?>" style="color:white">Berita</a></li>
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

<!--carousell--->
    <div class="container-fluid" style="border:0px;padding:0px;">
  <div id="Slider" class="carousel slide" data-ride="carousel" style="width:100%;">
    
    <ol class="carousel-indicators">
      <li data-target="#Slider" data-slide-to="0" class="active" style="border:none;"></li>
      <li data-target="#Slider" data-slide-to="1" style="border:none;"></li>
      <li data-target="#Slider" data-slide-to="2" style="border:none;"></li>
      <li data-target="#Slider" data-slide-to="3" style="border:none;"></li>
    </ol>

    <!-- Wrapper untuk slides -->
    <div class="carousel-inner" role="listbox" style="width:100%">

      <div class="item active"  style="width:100;height:345px">
        <img class="img-responsive"  style="margin-left:0px;margin-right:0px;width:inherit" src="<?php echo base_url().'assets/img/slide1.jpg';?>" alt="Eror">
        <div class="carousel-caption">
 
        <h1 class="animated bounceInLeft" style="text-align:left">Selamat Datang di LPSE</h1>
        </div>
      </div>

      <div class="item"  style="width:100%;height:345px;">
        <img style="margin-left:0px;margin-right:0px;width:inherit" src="<?php echo base_url().'assets/img/slide1.jpg';?>" alt="Eror" class="img-responsive">
      </div>
 
      <div class="item"  style="width:100%;height:345px;">
        <img style="margin-left:0px;margin-right:0px;width:inherit" src="<?php echo base_url().'assets/img/slide1.jpg';?>" alt="Eror" class="img-responsive">
      </div>

      <div class="item" style="width:100%;height:345px;">
       <img style="margin-left:0px;margin-right:0px;width:inherit" src="<?php echo base_url().'assets/img/slide1.jpg';?>" alt="Eror" class="img-responsive">			      </div>

    </div>
</div>
  </div>

<div class="container-fluid" style="margin-top:10px;padding-top:10px;;background-color:none">
<div class="row">

<?php
 foreach($cth_berita as $r){
?>    <div class="">
  <div class="col-md-3 col-md-3" style="height: 330px">
    <div class="thumbnail"  style="height: 330px">
    <div style="height:200px;width:225px" class="container">
      
      <img src="<?php echo base_url('uploads/image/'.$r['img_src'])?>" alt="..." style="width:100%;height:100%"> 
   	  
    </div>
      <div class="caption">
        <h5><b>
       <?php  echo anchor('artikel/index/'.$r['id'],$r['brt_judul']); ?></b></h5>
        <?php $lagu=$r['brt_isi'];$lagu=character_limiter($lagu,100);?>
        <p style="text-align:justify"><?php echo $lagu;?></p>
      </div>
    </div>
  </div>
</div>
<?php }?>

</div>
</div>

<div class="container">



</div>

<div style="height:10px;"></div>


<div class="container-fluid">

</div>

</div>

</div>
</div>

</div>



  
      <footer>
         <div class="container">
         
            <div class="copy text-center">
               Copyright 2014 <a href='#'>Website</a>
            </div>
            
         </div>
      </footer>
      
</body>
</html>