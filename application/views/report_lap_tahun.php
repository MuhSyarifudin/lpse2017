
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
<p align="center" style="color:#3366CC; margin-right: 40px;">Rekapitulasi Pengadaan SPSE Kab. Banyuwangi Tahun <?php echo $_GET['tahun']; ?> </p>
 <p align="center" style="color:#3366CC; margin-right: 40px;">Tanggal Rekapitulasi 
<?php
ini_set('date.timezone', 'Asia/Jakarta'); 
echo date("d-m-Y");

 ?>
</p><br />

<div class="col-md-7 col-xs-12">
<table class="table table-bordered table-stripped" border="1" style="background-color:#fff; margin-left: 250px;">
    <tbody>
      <tr style="background-color:#F1F1F1">
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

<div id="selesai" class="col-md-6" style="margin-left: 250px; margin-top: 70px;">     
          <img src="<?php echo base_url().'assets/img/graf/'.$_GET['tahun'].'.png' ?>" />   
</div>

<div id="milyar" class="col-md-2" style="margin-left: 250px;">  
  <img src="<?php echo base_url().'assets/img/graf/'.$_GET['tahun'].'_cht.png' ?>" />
</div>
 
<!-- DISINI BATASNYA PER TAHUN -->
<div class="col-md-12">
<h5 class="page-header">Data Lelang Tahun <?php echo $_GET['tahun'] ?></h5>
    <table class="table table-bordered table-stripped" border="1" style="background-color:#fff; font-size:12px;">
    <tbody>
	    <tr style="background-color:#F1F1F1; font-weight:bold;">
        	<td align="center" width="40">No.</td>
        	<td align="center" width="250">Nama Lelang</td>
            <td align="center" width="190">Satuan Kerja</td>
            <td align="center" width="200">Pemenang</td>
            <td align="center" width="150" >Pagu</td>
            <td align="center" width="150">HPS</td>
            <td align="center" width="150">Penawaran Terkoreksi</td>
            <td align="center" width="150">Selisih</td>
            <td align="center" width="60">%</td>
        </tr>
         	   <?php 
     $no = 1;
     foreach($data_lelang as $r){ 
      $hsl =  (($r['pkt_pagu']-$r['pkt_hps'])/$r['pkt_pagu'])*100 ;
      echo "
      <tr >
          <td align='center' width='40'>".$no++."</td>
          <td>".$r['pkt_nama']."</td>
            <td >".$r['stk_nama']."</td>
            <td >";
            if($r['pemenang']==0){ 
              echo "<center> - </center>";
            }
            else{
            echo $r['rkn_nama'];
            }
              echo "</td>
            <td align='right'>Rp. ".number_format($r['pkt_pagu'],0)."</td>
            <td align='right'>Rp. ".number_format($r['pkt_hps'],0)."</td>
            <td align='right'>Rp. ".number_format($r['nev_harga_terkoreksi'],0)."</td>
            <td align='right'>Rp. ".number_format($r['pkt_pagu']-$r['pkt_hps'],0)."</td>
            <td align='right'>".round($hsl)." %</td>            
             </tr>";
      }
    ?>
   </tbody>
</table>
</div>
<div class="col-md-12" >
<h5 class="page-header">Daftar Paket Lelang Status Lelang <B>Ulang</B> Tahun <?php echo $_GET['tahun'] ?></h5>
<table class="table table-bordered table-stripped" border="1" style="background-color:#fff; font-size:12px;">
    <tbody>
	    <tr style="background-color:#F1F1F1; font-weight:bold;">
        	<td align="center" width="40">No.</td>
        	<td align="center" width="90">Kode Lelang</td>
            <td align="center">Nama Paket</td>
            <td align="center" width="140">Pagu</td>
            <td align="center" width="250">Nama Satuan Kerja</td>
        </tr>

        <?php 
     $no = 1;
     foreach($llgulg as $r){ 
      echo "
      <tr>
      <td align='center'>".$no++."</td>
      <td align='center'>".$r['pkt_id']."</td>
      <td>".$r['pkt_nama']."</td>
      <td align='right'>Rp. ".number_format($r['pkt_pagu'],0)."</td>
      <td >".$r['stk_nama']."</td>
      
      </tr>";
      }
     ?>
    </tbody>
</table>
</div>
<div class="col-md-12" style="margin-top: 100px;">
<h5 class="page-header">Daftar Paket Lelang Status Lelang <b>Gagal</b> Tahun <?php echo $_GET['tahun'] ?></h5>
<table class="table table-bordered table-stripped" border="1" style="background-color:#fff; font-size:12px;">
    <tbody>
	    <tr style="background-color:#F1F1F1; font-weight:bold;">
        	<td align="center" width="40">No.</td>
        	<td align="center" width="90">Kode Lelang</td>
            <td align="center">Nama Paket</td>
            <td align="center" width="140">Pagu</td>
            <td align="center" width="250">Nama Satuan Kerja</td>
        </tr>
        <?php 
		 $no = 1;
		 foreach($gagal as $r){ 
			echo "
			<tr>
			<td align='center'>".$no++."</td>
			<td align='center'>".$r['pkt_id']."</td>
			<td>".$r['pkt_nama']."</td>
			<td align='right'>Rp. ".number_format($r['pkt_pagu'],0)."</td>
			<td >".$r['stk_nama']."</td>
			
			</tr>";
			}
		 ?>
 
    </tbody>
</table>
</div>

</div>

<!--END-->
</body>
</html>
