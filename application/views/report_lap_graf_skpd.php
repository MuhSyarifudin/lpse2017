<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<div class="container">
<p align="center" style="color:#3366CC;">Grafik Jumlah Paket Status Selesai Berdasarkan SKPD<br />
</p>
<br />
<div class="col-md-12">
<?php $no = 1; foreach($skpd as $r){ 
   ?>
<img src="<?php echo base_url().'assets/img/x.png' ?>" width="<?php
if($r['pkt_sls']>=100) echo ($r['pkt_sls']/4); else echo $r['pkt_sls']; ?>" height="15" /><font color="#000" size="-1" style="text-transform:capitalize;">&nbsp;<?php echo $r['stk_nama']."&nbsp;<b>".$r['pkt_sls']."</b>" ?></font><br />

<?php 
		$no++; } ?>
  
	</div>
</div>
</body>
</html>