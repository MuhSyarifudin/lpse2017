<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>MONITORING DAN REPORTING LPSE KKP</title>
<link rel="shortcut icon" href="<?php echo base_url().'assets/img/favicon.ico' ?>"/>
<link rel="stylesheet" href="<?php echo base_url().'assets/css/bootstrap.css' ?>" type="text/css" media="screen, projector, tv" />
<script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.js' ?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery-2.1.3.min.js' ?>"></script>
</head>

<body>
<div class="container">
	<div class="header row">
    	<div class="col-md-3 col-xs-4">
        <img src="<?php echo base_url().'assets/img/logo-bwi.png' ?>" alt="Logo LPSE" class="img-responsive logobwi" />
        </div>
        
        <div class="col-md-6 col-xs-4">
    	<!-- Kosong -->
        </div>
   		
        <div class="col-md-3 col-xs-4">
        <img src="<?php echo base_url().'assets/img/logo-lpse.jpg' ?>" alt="Logo LPSE" class="img-responsive logo" />
        </div>
    </div>
</div>
 
<nav class="navbar navbar-inverse navbar-static-top" role="navigation">
  	<div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
             <span class="sr-only">Toggle navigation</span>
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
       </button>
       </div>
       	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
       
        <ul class="nav navbar-nav">
        <li class="active"><a href="<?php echo base_url().'index.php/report'; ?>"><span class="glyphicon glyphicon-home"></span>&nbsp; Beranda</a></li>
        </ul>
       
         <ul class="nav navbar-nav navbar-right">
     	 <li><a href="#"><span class="glyphicon glyphicon-log-in"></span>&nbsp; Login</a></li>
    	</ul>
       
       </div>
    </div>
</nav>

<div class="container">
<p align="center" style="color:#3366CC;">Grafik Kota Asal Perusahaan Pemenang Lelang<br />
</p><br />
<div class="container">
  <div class="col-md-12">
 
     <?php $no = 1; foreach($getkota as $r){
	?>

    <div class="col-md-5">
<img src="<?php echo base_url().'assets/img/x.png' ?>" width="<?php 
	if(($r['hitung']>=100) && ($r['hitung']<=1000)) echo ($r['hitung']/3)+10;
	else if(($r['hitung']>=10) && ($r['hitung']<=100)) echo ($r['hitung']/2)+5;  
	else if(($r['hitung']>=1000) && ($r['hitung']<=10000)) echo ($r['hitung']/9)+2; 
	else if($r['hitung']>10000) echo ($r['hitung']/60);  
	else if($r['hitung']>3) echo ($r['hitung']-2);
	else echo $r['hitung']; ?>" height="15" /><font color="#000" size="-1" style="text-transform:capitalize;">&nbsp;<?php echo $r['kbp_nama']."&nbsp;<b>".number_format($r['hitung'],0)."</b>"?></font><br />
   
    </div><?php 
$no++; } ?>

</div>
</div>

<!--END-->
</body>
</html>
