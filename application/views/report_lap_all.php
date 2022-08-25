
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
 
<br>
<p align="center" style="color:#3366CC; margin-right: 40px;">Rekapitulasi Keseluruhan Pengadaan SPSE Kab. Banyuwangi </p>
 <p align="center" style="color:#3366CC; margin-right: 40px;">Tanggal Rekapitulasi 
<?php 
ini_set('date.timezone', 'Asia/Jakarta'); 
echo date("d-m-Y");
 ?>
</p><br />

<div class="col-md-7 col-xs-12">
<table class="table table-bordered table-stripped" border="1" style="background-color:#fff; margin-left: 250px;">
    <tbody>
	    <tr style="background-color:#F1F1F1;">
        	<td width="200">Total Paket</td>
        	<td width="260" align="right"><span style="color: #369200;"><?php          foreach($paket as $r){
		 	 echo $r["totpkt"];;
		  }
		  ?></span> paket</td>
        </tr>
         <tr>
        	<td width="140">Total Paket Selesai</td>
        	<td align="right"><span style="color: #369200;"><?php          foreach($paket as $r){
		 	 echo $r["totpktsls"];;
		  }
		  ?></span> paket</td>
        </tr>
         <tr>
        	<td width="140">Pagu</td>
        	<td align="right">Rp. <span><?php         
			 foreach($paket as $r){
		 	 echo number_format($r["pagu"],0);
		  }
		  ?></span></td>
        </tr>
         <tr>
        	<td width="140">Pagu Selesai</td>
        	<td align="right">Rp. <span><?php     
			     foreach($paket as $r){
		 		 echo number_format($r["pagusls"],0);
			  }
		  ?></span></td>
        </tr>
         <tr>
        	<td width="140">Penawaran</td>
        	<td align="right">Rp. <span><?php    
			 foreach($paket as $r){
		 	 echo number_format($r["totwar"],0);
		  }
		  ?></span></td>
        </tr>
         <tr>
        	<td width="140">Efisiensi</td>
        	<td align="right">Rp. <span>
            <?php          foreach($paket as $r){
		 	 echo number_format($r["selisih"],0);
		  }
		  ?>
            </span> <b>(<span style="color: #369200;"><?php      
			    foreach($paket as $r){
		 	$persen = ($r["selisih"]/$r["pagusls"])*100;
			echo round($persen,2);
		  }
		  ?> %</span>)</b></td>
        </tr>
    </tbody>
</table>
</div>


<div id="selesai" class="col-md-7 col-xs-12" style="margin-left: 250px; margin-top: 70px;">    	
      		  <img src="<?php echo base_url().'assets/img/graf/pie_semua.png' ?>" />    
</div>

<div id="milyar" class="col-md-7" style="margin-left: 250px;">  
	 <img src="<?php echo base_url().'assets/img/graf/kolom_semua.png' ?>" />     
</div>

<div class="col-md-12">
	<h5  id="tender" class="page-header">Status Transaksi e - Tendering LPSE </h5>
    <table class="table table-bordered table-stripped table-responsive" border="1" style="background-color:#fff; font-size:12px;">
    <tbody>
	    <tr style="background-color:#F1F1F1; font-weight:bold;">
        	<td align="center" >No.</td>
        	<td align="center">Deskripsi</td>
           <?php 
		   foreach($tender as $r){
			   echo "<td align='center'>".$r["tahun"]."</td>";
		   }
            ?>
		</tr>
            
         <tr>
        	<td align="center" >1</td>
        	<td align="left" >Jumlah Lelang</td>
            <?php        
			    foreach($tender as $r){
            echo "<td align='right'>".$r["totpkt"]."</td>";
		  }
		  ?>            
        </tr>
        
         <tr>
        	<td align="center" >2</td>
        	<td align="left" >Nilai Pagu</td>
            <?php 
			foreach($tender as $r){
             echo "<td align='right'>Rp.".number_format($r["pagu"],0)."</td>";
		  }
		  ?>
        </tr>
        
        <tr>
        	<td align="center" >3</td>
        	<td align="left">Jumlah Lelang Selesai</td>
            <?php foreach($tender as $r){
             echo "<td align='right'>".$r["totpktsls"]."</td>";
		  }
		  ?>
     	</tr>
        
        <tr>
        	<td align="center" >4</td>
        	<td align="left" >Nilai Pagu Selesai</td>
            <?php     
			     foreach($tender as $r){ 
            echo "<td align='right'>Rp.".number_format($r["pagusls"],0)."</td>";
			  }
		  ?>
		</tr>
        
        <tr>
        	<td align="center" >5</td>
        	<td align="left">Nilai Hasil Lelang</td>
             <?php    
			 foreach($tender as $r){
			echo "<td align='right'>".number_format($r["totwar"],0)."</td>";
		  }
		  ?>
        </tr>
        
        <tr>
        	<td align="center" >6</td>
        	<td align="left">Selisih Nilai Pagu dan Hasil Lelang</td>
             <?php      
			    foreach($tender as $r){
			echo "<td align='right'>Rp.".number_format($r["selisih"],0)."</td>";
		  }
		  ?>
        </tr>
        
        <tr>
        	<td align="center" >7</td>
        	<td align="left">Selisih Nilai Pagu dan Hasil Lelang (%)</td>
            <?php      
			    foreach($tender as $r){
					$persen = ($r["selisih"]/$r["pagusls"])*100;
            echo "<td align='right'>".round($persen,2)." %</td>";
			  }
		  ?>
        </tr>   
   </tbody>
</table>

<br><br><br><br><br><br>
<h5 class="page-header">Grafik Jumlah Paket, Nilai Paket, dan Nilai Efisiensi Status Lelang Selesai </h5>

<?php foreach($tender as $r){ ?>
  <img src="<?php echo base_url().'assets/img/x.png' ?>" width="<?php echo $r['totpktsls'] ?>" height="25"/><font color="#000" style="text-transform:capitalize;">&nbsp;Jumlah Paket : <b><font color="#FF0000"><?php echo $r['totpktsls'] ?></font> (Tahun : <?php echo $r['tahun'] ?>) </b></font><br>
    <img src="<?php echo base_url().'assets/img/NP.png' ?>" width="<?php echo round($r['pagusls']/1000000000)+100; ?>" style="margin-top:1px;" height="25"/><font color="#000" style="text-transform:capitalize;">&nbsp;Nilai Paket : <b><font color="#FF0000">Rp. <?php echo number_format($r['pagusls'],0); ?></font></b></font><br>
    <img style="margin-top:1px;" src="<?php echo base_url().'assets/img/STS.png' ?>" width="<?php echo round($r['selisih']/1000000000)+10;  ?>" height="25"/><font color="#000" style="text-transform:capitalize;">&nbsp;Nilai Efisiensi : <b><font color="#FF0000">Rp. <?php echo number_format($r['selisih'],0) ?></font></b></font>
    <br><br>
<?php } ?>
  



<div class="col-md-12">
<h5 class="page-header">Grafik Jumlah Paket Status Selesai Berdasarkan Jenis Pengadaan</h5>
   <div class="col-md-6">	 <img src="<?php echo base_url().'assets/img/graf/graf_sls_semua.png' ?>" />    
   </div>
</div>

 
<div class="col-md-12" style="margin-top: 120px;">
<h5 class="page-header">Grafik Jumlah Paket, Nilai Paket, Dan Nilai Efisiensi Status Selesai</h5>
<?php foreach($paket as $r) { ?>
<img src="<?php echo base_url().'assets/img/x.png' ?>" width="<?php echo $r['totpktsls']/100 ?>" height="25"/><font color="#000" style="text-transform:capitalize;">&nbsp;Jumlah Paket : <b><font color="#FF0000"><?php echo number_format($r['totpktsls'],0) ?></font></b></font><br>
    <img src="<?php echo base_url().'assets/img/NP.png' ?>" width="<?php echo round($r['pagusls']/5000000000); ?>" style="margin-top:1px;" height="25"/><font color="#000" style="text-transform:capitalize;">&nbsp;Nilai Paket : <b><font color="#FF0000">Rp. <?php echo number_format($r['pagusls'],0); ?></font></b></font><br>
    <img src="<?php echo base_url().'assets/img/STS.png' ?>" width="<?php echo round($r['selisih']/1000000000);  ?>" style="margin-top:1px;" height="25"/><font color="#000" style="text-transform:capitalize;">&nbsp;Nilai Efisiensi : <b><font color="#FF0000">Rp. <?php echo number_format($r['selisih'],0) ?></font></b></font><br>
<?php } ?>
</div>

<h5 class="page-header">Rekapitulasi Paket Lelang Status Lelang Gagal</h5>
    <table class="table table-bordered table-stripped"  border="1" style="background-color:#fff; font-size:14px; width: 100%;">
    <tbody>
	    <tr style="background-color:#F1F1F1; font-weight:bold;">
        	<td align="center" width="40">No.</td>
        	<td align="center" width="100">Tahun</td>
            <td align="center">Jumlah Paket Gagal</td>
            <td align="center">Total Pagu</td>
        </tr>
         <?php 
		 $no = 1;
		 foreach($gagal as $r){ 
			echo "
			<tr>
			<td align='center'>".$no++."</td>
			<td align='center'>".$r["tahun"]."</td>
			<td align='center' width='150'>".$r["jumlah"]." paket</td>
			<td align='right'><b>Rp. ".number_format($r["pagu"],0)." </b></td>
			
			</tr>";
			}
		 ?>
   </tbody>
</table>

<div class="col-md-12" style="margin-top: 270px;">
<h5 class="page-header">Grafik Jumlah Paket Yang Gagal Pertahun</h5>
 <div class="col-md-6">
	 <img src="<?php echo base_url().'assets/img/graf/gagal_prtahun_smua.png' ?>" />    
</div>




<!--END-->
</body>
</html>
