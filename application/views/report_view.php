<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>MONITORING DAN REPORTING LPSE KKP</title>
<link rel="shortcut icon" href="<?php echo base_url().'assets/img/favicon.ico' ?>"/>
<link rel="stylesheet" href="<?php echo base_url().'assets/css/bootstrap.css' ?>" type="text/css" media="screen, projector, tv" />
<script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.js' ?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery-2.1.3.min.js' ?>"></script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">

      // Load the Visualization API and the corechart package.
      google.charts.load('current', {'packages':['corechart']});

      // Set a callback to run when the Google Visualization API is loaded.
      google.charts.setOnLoadCallback(drawChart);

      // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it.
      function drawChart() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Slices');
        data.addRows([
          ['Paket Selesai', <?php          foreach($paket as $r){
       echo $r["totpktsls"];
      }
      ?>],
          ['Paket Blm Selesai', <?php          foreach($paket as $r){
       echo ($r["totpkt"] - $r["totpktsls"]);
      }
      ?>],
        ]);

        // Set chart options
        var options = {'title':'Grafik Paket Selesai',
             'width':600,
                       'height':300};

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>


 <script type="text/javascript">
    google.charts.load("current", {packages:['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ['', 'Jumlah', { role: 'style' } ],
        ['Pagu', <?php         
       foreach($paket as $r){
       echo $r["pagu"]/1000000000;
       
      }
      ?>, 'color: #4285F4'],
    ['Pagu Selesai', <?php         
       foreach($paket as $r){
       echo $r["pagusls"]/1000000000;
       
      }
      ?>, 'color: #4285F4'],
    ['Hasil Lelang', <?php         
       foreach($paket as $r){
       echo $r["totwar"]/1000000000;
       
      }
      ?>, 'color: #4285F4'],
    ['Efisiensi', <?php         
       foreach($paket as $r){
       echo $r["selisih"]/1000000000;
       
      }
      ?>, 'color: #4285F4']
      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
        title: "Grafik Pengadaan SPSE (dalam Milyar)",
        width: 550,
        height: 300,
        bar: {groupWidth: "78%"},
        legend: { position: "none" },
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("chart"));
      chart.draw(view, options);

  }
 </script>
 
 
<!-- Grafik Pengadaan -->
 <script type="text/javascript">
google.charts.load("current", {packages:['corechart']});
google.charts.load("current", {packages:['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
          ['', 'Jenis Pengadaan', { role: 'style' } ],
        <?php foreach($adaan as $r){
    echo "['".$r['kategori']."',".$r['pkt_sls'].",'color: #4285F4'],";
    }?>
      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
        width: 900,
        height: 350,
        bar: {groupWidth: "78%"},
        legend: { position: "none" },
      };
      var chart_ada = new google.visualization.ColumnChart(document.getElementById("chart_ada"));
      chart_ada.draw(view, options);

  }

 </script>

<!--GRAFIK GAGAL TAHUN -->
<script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Tahun', 'Jumlah Paket', 'Jumlah Lelang Gagal'],
      <?php foreach($tender as $r){  
     $pkt = $r["totpkt"] - $r["totpktsls"]; 
     ?>
          ['<?php echo $r['tahun']?>', <?php echo $r["totpkt"]?>, <?php echo $pkt; ?>],
      <?php } ?>
        ]);

        var options = {
         width : 1100,
     height : 400,
     bars: 'vertical' // Required for Material Bar Charts.
        };

        var chartgagal = new google.charts.Bar(document.getElementById('chart_gagal'));

        chartgagal.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>

 
<link href="../../assets/css/bootstrap.css" rel="stylesheet" type="text/css" />
</head>

<body style="background-color:#E5E5E5">
<div class="container-fluid" style="padding:0px;">
	<nav class="navbar navbar-default nav-custom" style="background-color:transparent;box-shadow: 0px 5px 5px #888888;margin-bottom:0px;border:0px;"> 
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
		<li class="btn-purple"><a href="<?php echo base_url().'index.php/report/lpse'?>">Home</a></li>
		<li class="btn-red"><a href="#" style="color:white">Profil</a></li>
		<li class="btn-yellow" style="cursor:text"><a href="#"  style="color:white;">Tentang Kami</a></li> 
		<li  class="btn-green"> <a href="<?php echo base_url().'index.php/report/contact' ?>" style="color:white">Kontak</a></li> 
        <li class="btn-purple"><a href="<?php echo base_url().'index.php/report/News' ?>" style="color:white">Berita</a></li>
        <li class="active"><a href="#">Report</a></li>
	</ul>
		
	</ul>
	<ul class="nav navbar-nav navbar-right" style="color:white">
	<li><a href="<?php echo base_url().'index.php/regist/'; ?>" style="color:white"><span class="glyphicon glyphicon-user"></span> Daftar</a></li>
	<li class="clr4 dropdown">
    <a class="dropdown-toggle" id="Login" data-toggle="dropdown" style="color:white">Login<span class="caret"></span></a>
 <ul class="dropdown-menu" style="padding: 20px 10px 5px 10px; width:300px;">
 <li>
        <form>
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
</div>

<div class="container-fluid" style="height:20px;"></div>

<div class="container panel panel-body">
<p align="center" style="color:#3366CC;">Rekapitulasi Pengadaan SPSE </p> <p align="center" style="color:#3366CC;">Tanggal Rekapitulasi 
<?php
ini_set('date.timezone', 'Asia/Jakarta'); 
echo date("d-m-Y");

 ?>
</p><br />
    
    <form class="form-horizontal" name="frmthn" 
    <?php if(isset($_POST['tahun'])) {
		echo "action=?tahun=".$_GET['tahun'];
    } ?>
     method="GET">
        <div class="form-group">
	<label class="col-sm-5 col-xs-12 control-label">Tahun :</label>
    <div class="col-sm-2 col-xs-12">       
      <select name="tahun" class="btn-group form-control"  onchange="this.form.submit();" id="tahun">
        <option value="">&nbsp;semua</option>
         <option value="2011" <?php 
    if(isset($_GET['tahun'])){
      if($_GET['tahun']=='2011')echo "selected";
    }
    ?>>&nbsp;2011</option>
        <option value="2012" <?php 
		if(isset($_GET['tahun'])){
			if($_GET['tahun']=='2012')echo "selected";
		}
		?>>&nbsp;2012</option>
        <option value="2013" <?php 
		if(isset($_GET['tahun'])){
			if($_GET['tahun']=='2013')echo "selected";
		}
		?>>&nbsp;2013</option>
        <option value="2014" <?php 
		if(isset($_GET['tahun'])){
			if($_GET['tahun']=='2014')echo "selected";
		}
		?>>&nbsp;2014</option>
        <option value="2015" <?php 
		if(isset($_GET['tahun'])){
			if($_GET['tahun']=='2015')echo "selected";
		}
		?>>&nbsp;2015</option>
        <option value="2016" <?php 
		if(isset($_GET['tahun'])){
			if($_GET['tahun']=='2016')echo "selected";
		}
		?>>&nbsp;2016</option>
        <option value="2017" <?php 
		if(isset($_GET['tahun'])){
			if($_GET['tahun']=='2017')echo "selected";
		}
		?>>&nbsp;2017</option>
        
        
        

      </select>
    </div>
        </div>
    </form>



<div class="panel panel-body">
<div class="col-md-1 col-xs-12">
</div>

<div class="col-md-4 col-xs-12">
<div class="panel-group">
	<div class="panel panel-default">
      <div id="collapse1" style="padding:3px;" class="panel-collapse collapse in">
      	<div class="panel-body" style="word-spacing:3px;">
      		<p><a target="_blank" href="<?php echo base_url().'index.php/report/kota'; ?>">Grafik Kota Asal Perusahaan Pemenang</a></p>
      		<p><a target="_blank" href="<?php echo base_url().'index.php/report/skpd'; ?>">Rekapitulasi Data Lelang Per SKPD</a></p>
      		<p><a target="_blank" href="<?php echo base_url().'index.php/report/grafikskpd'; ?>">Grafik Jumlah Paket Status Selesai Per SKPD</a></p> 
                
      </div>
    </div>
   </div>
</div>	

<center>
<?php if(!isset($_GET['tahun'])) {
  echo "<a href=".base_url().'index.php/report_laporan'.">
  <button class='btn btn-success'><span class='glyphicon glyphicon-print'></span> Print Laporan PDF</button>
  </a>";
  }else{
  echo "<a href=".base_url().'index.php/report_laporan/laporan?tahun='.$_GET['tahun'].">
  <button class='btn btn-success'><span class='glyphicon glyphicon-print'></span> Print Laporan PDF</button>
  </a>";
   } ?>
</center>

</div>

<div class="col-md-5 col-xs-12">

<table class="table table-bordered table-stripped" style="background-color:#fff;">
    <tbody>
	    <tr style="background-color:#F1F1F1">
        	<td width="150">Total Paket</td>
        	<td align="right"><span style="color: #369200;"><?php          foreach($paket as $r){
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

<div id="selesai" class="col-md-6">    	
      		<div id="chart_div"></div>     
</div>

<div id="milyar" class="col-md-2">  
	<div id="chart"></div>  
</div>

</div>


<?php if(!isset($_GET['tahun'])){
		 ?>
<div class="col-md-12">

<div class="panel panel-default">
<div class="panel-heading">
	<div class="panel-title"> <h5  id="tender">Status Transaksi e - Tendering LPSE </h5> </div>
</div>
	<div class="panel-body">
    <table class="table table-bordered table-stripped table-responsive" style="background-color:#fff; font-size:12px;">
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
</div>
</div>

<div class="panel panel-default">
<div class="panel-heading">
	<div class="panel-title"><h5>Grafik Jumlah Paket, Nilai Paket, dan Nilai Efisiensi Status Lelang Selesai </h5>
</div>
</div>
<div class="panel-body">
<?php foreach($tender as $r){ ?>
  <img src="<?php echo base_url().'assets/img/x.png' ?>" width="<?php echo $r['totpktsls'] ?>" height="25"/><font color="#000" size="-1" style="text-transform:capitalize;">&nbsp;Jumlah Paket : <b><font color="#FF0000"><?php echo $r['totpktsls'] ?></font> (Tahun : <?php echo $r['tahun'] ?>) </b></font><br>
    <img src="<?php echo base_url().'assets/img/NP.png' ?>" width="<?php echo round($r['pagusls']/1000000000)+100; ?>" style="margin-top:1px;" height="25"/><font color="#000" size="-1" style="text-transform:capitalize;">&nbsp;Nilai Paket : <b><font color="#FF0000">Rp. <?php echo number_format($r['pagusls'],0); ?></font></b></font><br>
    <img style="margin-top:1px;" src="<?php echo base_url().'assets/img/STS.png' ?>" width="<?php echo round($r['selisih']/1000000000)+10;  ?>" height="25"/><font color="#000" size="-1" style="text-transform:capitalize;">&nbsp;Nilai Efisiensi : <b><font color="#FF0000">Rp. <?php echo number_format($r['selisih'],0) ?></font></b></font><br>
  </p >
<?php } ?>
</div>
</div>


<div class="panel panel-default">
<div class="panel-heading">
	<div class="panel-title"><h5>Grafik Jumlah Paket Status Selesai Berdasarkan Jenis Pengadaan</h5></div>
</div>
<div class="panel-body">
   <div class="col-md-6">	<div id="chart_ada"></div>
</div>
</div>
</div>
 
<div class="panel panel-default">
<div class="panel-heading">
	<div class="panel-title"><h5>Grafik Jumlah Paket, Nilai Paket, Dan Nilai Efisiensi Status Selesai</h5></div>
</div>
<div class="panel-body">
<?php foreach($paket as $r) { ?>
<img src="<?php echo base_url().'assets/img/x.png' ?>" width="<?php echo $r['totpktsls']/100 ?>" height="40"/><font color="#000" style="text-transform:capitalize;">&nbsp;Jumlah Paket : <b><font color="#FF0000"><?php echo number_format($r['totpktsls'],0) ?></font></b></font><br>
    <img src="<?php echo base_url().'assets/img/NP.png' ?>" width="<?php echo round($r['pagusls']/5000000000); ?>" style="margin-top:1px;" height="40"/><font color="#000" style="text-transform:capitalize;">&nbsp;Nilai Paket : <b><font color="#FF0000">Rp. <?php echo number_format($r['pagusls'],0); ?></font></b></font><br>
    <img src="<?php echo base_url().'assets/img/STS.png' ?>" width="<?php echo round($r['selisih']/1000000000);  ?>" style="margin-top:1px;" height="40"/><font color="#000" style="text-transform:capitalize;">&nbsp;Nilai Efisiensi : <b><font color="#FF0000">Rp. <?php echo number_format($r['selisih'],0) ?></font></b></font><br>
<?php } ?>
</div>
</div>

<div class="panel panel-default">
<div class="panel-heading">
	<div class="panel-title"><h5>Rekapitulasi Paket Lelang Status Lelang Gagal</h5></div>
</div>
    <table class="table table-bordered table-stripped" style="background-color:#fff; font-size:12px;">
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
</div>

<div class="panel panel-default">
<div class="panel-heading">
	<div class="panel-title"><h5>Grafik Jumlah Paket Yang Gagal Pertahun</h5></div>
</div>
 <div class="panel-body table-responsive">
	<div id="chart_gagal"></div>
</div>
</div>
</div>

<?php } else { 
		if($_GET['tahun']!=""){ ?>
<!-- DISINI BATASNYA PER TAHUN -->

<div class="panel panel-default">
<div class="panel-heading">
	<div class="panel-title"><b><h5>Data Lelang Tahun <?php echo $_GET['tahun'] ?></h5></b></div>
</div>
<div class="panel-body">
    <table class="table table-bordered table-stripped" style="background-color:#fff; font-size:12px;">
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
<div style="height:10px;"></div>
<center><a target="_blank" href="<?php echo base_url().'index.php/report/lelang?tahun='.$_GET['tahun'] ?>"><button class="btn btn-info">Lihat Data Lelang Keseluruhan</button></a></center>
</div>
</div>

<div class="panel panel-default">
<div class="panel-heading">
	<div class="panel-title"><h5>Daftar Paket Lelang Status Lelang <B>Ulang</B> Tahun <?php echo $_GET['tahun'] ?></h5>
</div>
</div>
<div class="panel-body">
<table class="table table-bordered table-stripped" style="background-color:#fff; font-size:12px;">
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
     foreach($lls_ulang as $r){ 
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
<div style="height:10px;"></div>
<center><a target="_blank" href="<?php echo base_url().'index.php/report/lelangulang?tahun='.$_GET['tahun'] ?>"><button class="btn btn-info">Lihat Data Lelang Status Lelang <b>Ulang </b>Keseluruhan</button></a></center>

</div>
</div>

<div class="panel panel-default">
<div class="panel-heading">
	<div class="panel-title"><h5>Daftar Paket Lelang Status Lelang <b>Gagal</b> Tahun <?php echo $_GET['tahun'] ?></h5>
</div>
</div>
<div class="panel-body">
<table class="table table-bordered table-stripped" style="background-color:#fff; font-size:12px;">
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
<center><a target="_blank" href="<?php echo base_url().'index.php/report/lelanggagal?tahun='.$_GET['tahun'] ?>"><button class="btn btn-info">Lihat Data Lelang Status Lelang <b>Gagal </b>Keseluruhan</button></a></center>
</div>
</div>
<br>


<!-- BATASNY -->

<?php }else{ ?>
<div>

<div class="panel panel-default">
<div class="panel-heading">
	<div class="panel-title"><h5  id="tender">Status Transaksi e - Tendering LPSE </h5></div>
</div>
<div class="panel-body">
        <table class="table table-bordered table-stripped table-responsive" style="background-color:#fff; font-size:12px;">
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
</div>
</div>

<div class="panel panel-default">
<div class="panel-heading">
	<div class="panel-title"><h5>Grafik Jumlah Paket, Nilai Paket, dan Nilai Efisiensi Status Lelang Selesai </h5></div>
</div>
<div class="panel-body table-responsive">
<?php foreach($tender as $r){ ?>
  <img src="<?php echo base_url().'assets/img/x.png' ?>" width="<?php echo $r['totpktsls'] ?>" height="25"/><font color="#000" size="-1" style="text-transform:capitalize;">&nbsp;Jumlah Paket : <b><font color="#FF0000"><?php echo $r['totpktsls'] ?></font> (Tahun : <?php echo $r['tahun'] ?>) </b></font><br>
    <img src="<?php echo base_url().'assets/img/NP.png' ?>" width="<?php echo round($r['pagusls']/1000000000)+100; ?>" height="25"/><font color="#000" size="-1" style="text-transform:capitalize;">&nbsp;Nilai Paket : <b><font color="#FF0000">Rp. <?php echo number_format($r['pagusls'],0); ?></font></b></font><br>
    <img src="<?php echo base_url().'assets/img/STS.png' ?>" width="<?php echo round($r['selisih']/1000000000)+10;  ?>" height="25"/><font color="#000" size="-1" style="text-transform:capitalize;">&nbsp;Nilai Efisiensi : <b><font color="#FF0000">Rp. <?php echo number_format($r['selisih'],0) ?></font></b></font><br>
  </p >
<?php } ?>
 </div>
 </div> 
</div>

<div style="position:">
<div class="panel panel-default">
<div class="panel-heading">
	<div class="panel-title"><h5>Grafik Jumlah Paket Status Selesai Berdasarkan Jenis Pengadaan</h5></div>
</div>
   <div class="panel-body">	
   <div id="chart_ada"></div>
   </div>
</div>
</div>

<div style="position:">
<div class="panel panel-default">
<div class="panel-heading">
	<div class="panel-title"><h5>Grafik Jumlah Paket, Nilai Paket, Dan Nilai Efisiensi Status Selesai</h5></div>
</div>
<div class="panel-body">
<?php foreach($paket as $r) { ?>
<img src="<?php echo base_url().'assets/img/x.png' ?>" width="<?php echo $r['totpktsls']/100 ?>" height="80"/><font color="#000" style="text-transform:capitalize;">&nbsp;Jumlah Paket : <b><font color="#FF0000"><?php echo number_format($r['totpktsls'],0) ?></font></b></font><br>
    <img src="<?php echo base_url().'assets/img/NP.png' ?>" width="<?php echo round($r['pagusls']/5000000000); ?>" height="80"/><font color="#000" style="text-transform:capitalize;">&nbsp;Nilai Paket : <b><font color="#FF0000">Rp. <?php echo number_format($r['pagusls'],0); ?></font></b></font><br>
    <img src="<?php echo base_url().'assets/img/STS.png' ?>" width="<?php echo round($r['selisih']/1000000000);  ?>" height="80"/><font color="#000" style="text-transform:capitalize;">&nbsp;Nilai Efisiensi : <b><font color="#FF0000">Rp. <?php echo number_format($r['selisih'],0) ?></font></b></font><br>
<?php } ?>
</div>
</div>
</div>

<div class="panel panel-default">
<div class="panel-heading">
	<div class="panel-title"><h5>Rekapitulasi Paket Lelang Status Lelang Gagal</h5></div>
</div>
<div class="panel-body">
    <table class="table table-bordered table-stripped" style="background-color:#fff; font-size:12px;">
    <tbody>
	    <tr style="background-color:#F1F1F1; font-weight:bold;">
        	<td align="center" width="40">No.</td>
        	<td align="center" width="100">Tahun</td>
            <td align="center">Jumlah Paket Gagal</td>
            <td align="center">Total Pagu</td>
        </tr>
         <?php 
		 $no = 1;
		 foreach($tender as $r){ 
		 $pkt = $r["totpkt"] - $r["totpktsls"]; 
		 $pagu = $r["pagu"] - $r["pagusls"];
			echo "
			<tr>
			<td align='center'>".$no++."</td>
			<td align='center'>".$r["tahun"]."</td>
			<td align='center' width='150'>".$pkt." paket</td>
			<td align='right'><b>Rp. ".number_format($pagu,0)." </b></td>
			
			</tr>";
			}
		 ?>
   </tbody>
</table>
</div>
</div>

<div class="panel panel-default">
<div class="panel-heading">
	<div class="panel-title">
    <h5>Grafik Jumlah Paket Yang Gagal Pertahun</h5>
    </div>
</div>
 <div class="panel-body">
	<div id="chart_gagal"></div>
</div>
</div>


<?php }}?>

</div>

<!--END-->
</body>
</html>
