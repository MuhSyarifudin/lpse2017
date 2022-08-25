 <div class="content-box-large row">
				<div class="col-md-12">
    <div class="panel panel-default">
        <div class="panel-heading"><div class="panel-tittle"><b>Riwayat</b></div></div>
        <div class="panel-body">
        
         <table class="table-condensed table-bordered table-responsive col-md-12">
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
          <div><a style="font-size: 10pt;margin-top: 10px" href="<?php echo base_url().'index.php/admin/lihat';?>">Lihat Semua...</a></div> 
    </div>
        
    
    </div>

    <div class="panel panel-default">
        <div class="panel-heading"><div class="panel-tittle"><b></b></div></div>
        <div class="panel-body">
	<?php if(!empty($verif)){?>
                <table class="table-condensed table-bordered" border="1">
                <tr>
                	<th>No.</th>
                    <th>Nama</th>
                    <th>NIP</th>
                    <th>No sk</th>
                    <th>Tipe User</th>
                    <th>Golongan</th>
                    <th>Mendaftar</th>
                    <th colspan="2" style="text-align:center">OPSI</th>
                </tr>
    <?php

     
		$no = 1;
		foreach($verif as $m){ 
		?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $m['username'] ?></td>
			<td><?php echo $m['NIP'] ?></td>
			<td><?php echo $m['No_sk'] ?></td>
            <td><?php echo $m['tipe_user']?></td>
            <td><?php echo $m['golongan']?></td>
            <td><?php echo $m['userregist']?></td>
			<td class="col-sm-1">
				<button class="btn-success"><?php echo anchor('crud/tambah/'.$m['NIP'],'Konfirmasi','style="color:white"'); ?></button>
			</td>
			<td class="col-sm-1">
				<button class="btn-danger"><?php echo anchor('crud/hapus/'.$m['NIP'],'Tolak','style="color:white"'); ?></button>		
			</td>
		</tr>
		<?php } }
    else{
        echo "Tidak ada permintaan konfirmasi";
            }
        ?>
				</table>
        </div>
    </div>
                
                <!--<form enctype="multipart/form-data" action="<?php echo base_url().'index.php/crud/tambah'?>" method="post" >
				<h4>Konfirmasi dan kirim E-mail ke <?php foreach($confirm as $v){ echo $v['Nama']; } ?></h4>
                <div style="opacity:1">
				<?php foreach($confirm as $v) {?>
                <input value="<?php echo $v['Nama'] ?>" type="text" name="nama">
                <input value="<?php echo $v['password']?>" type="text" name="password">
                <?php }?>
                </div>
                <input type="submit" class="btn-success" value="Send" style="margin-top:10px;">
                </form>-->
                </div>
		  	</div>