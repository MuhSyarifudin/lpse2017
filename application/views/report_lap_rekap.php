
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
<p align="center" style="color:#3366CC; margin-right: 40px;">Rekapitulasi Data Lelang Per SKPD Kab. Banyuwangi </p>
 <p align="center" style="color:#3366CC; margin-right: 40px;">Tanggal Rekapitulasi 
<?php
ini_set('date.timezone', 'Asia/Jakarta'); 
echo date("d-m-Y");

 ?>
</p><br />

<div class="col-md-7 col-xs-12">
<table class="table table-bordered table-stripped" style="background-color:#fff; font-size:12px;">
    <tbody>
      <tr style="background-color:#F1F1F1; font-weight:bold;">
          <td align="center" width="40">No.</td>
          <td align="center" width="430">Satuan Kerja</td>
            <td align="center" width="150">Jumlah Paket Selesai</td>
            <td align="center" width="250">Total Pagu</td>
            <td align="center" width="250">Total Penawaran</td>
        </tr>
         <?php 
     $no = 1;
     foreach($skpd as $r){ 
      echo "
      <tr>
      <td align='center'>".$no++."</td>
      <td align='left'>".$r["stk_nama"]."</td>
      <td align='center'><b>".$r["pkt_sls"]."</b>  paket</td>
      <td align='right'>Rp. ".number_format($r['pkt_pagu'],0)."</td>
      <td align='right'><b>Rp. ".number_format($r['totpen'],0)." </b></td>
      
      </tr>";
      }
     ?>
   </tbody>
</table>

</div>
<!--END-->
</body>
</html>
