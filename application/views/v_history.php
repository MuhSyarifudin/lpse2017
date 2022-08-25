<!DOCTYPEhtml>
<html>
	<head>
		<title>
			
		</title>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.min.css'?>">
	</head>
	<body>
		<div class="container">
			<table class="table-condensed table-bordered table-responsive col-md-12">
            <tr><th colspan="10"><p style="text-align: center">Riwayat Pendaftaran</p></th></tr>
            <tr>
                <th>No.</th>
                <th colspan="2">Nama</th>
                <th colspan="2">NIP</th>
                <th colspan="4" style="text-align: center;">Mendaftar</th>
                <th>status</th>
            </tr>
            <?php $No=1; foreach ($ditolak as $d) {?>
            <tr>
                <td><?php echo $No++ ?></td>
                <td colspan="2"><?php echo $d['username'] ?></td>
                <td colspan="2"><?php echo $d['NIP']?></td>
                <td colspan="4" style="text-align: center;"><?php echo $d['userregist'] ?></td>
                <td width="20px"><center><span class="glyphicon glyphicon-remove" style="color: red" title="Ditolak"></span></center></td>
            </tr>
            <?php }?>
        </table>
        <a href="<?php echo base_url().'index.php/admin?page=verif' ?>">Kembail</a>
		</div>
	</body>
</html>