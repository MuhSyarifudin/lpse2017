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
<?php
ini_set('date.timezone', 'Asia/Jakarta'); 

 ?>

<div class="container">
<p align="center" style="color:#3366CC;">Data Lelang Keseluruhan Tahun <?php echo $_GET['tahun'] ?><br />
</p>

<br />
<div class="container">
  <div class="col-md-12">
    <table class="table table-bordered table-stripped" style="background-color:#fff; font-size:12px;" border="1">
    <tbody>
      <tr style="background-color:#F1F1F1; font-weight:bold;">
          <td align="center" width="40">No.</td>
          <td align="center" width="250">Nama Lelang</td>
            <td align="center" width="150">Satuan Kerja</td>
            <td align="center">Pemenang</td>
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
</div>

</div>
<!--END-->
</body>
</html>
