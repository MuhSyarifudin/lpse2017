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
<p align="center" style="color:#3366CC;">Daftar Paket Lelang Status Lelang Ulang Keseluruhan Tahun <?php echo $_GET['tahun'] ?><br />
</p>

<br />
<div class="container">
  <div class="col-md-12">
    <table class="table table-bordered table-stripped" style="background-color:#fff; font-size:12px;" border="1" >
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
</div>

</div>
<!--END-->
</body>
</html>
