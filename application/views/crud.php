<div class="container">
	<div class="col-md-10">
		<a href="?page=input"><button style="background-color: skyblue;border: 1px solid skyblue;color: black" class="btn-success">Tambahkan Data</button></a>
	<table class="table table-condensed table-bordered table-responsive" style="margin-top: 10px;border: 1px solid black">
      <tr style="background-color:#61a3f9">
      <th class="col-sm-1">No.</th>
      <th class="col-sm-1">Judul</th>
      <th>Tanggal</th>
      <th style="text-align: center;" colspan="2" class="col-sm-3">Opsi</th>
      </tr>
       <?php 
	   $no = 1;
	  foreach($berita as $b)
	  {?>
	  
      <tr>
      <td align="center" class="col-sm-1"><?php echo $no++ ?></td>

      <td align="left" class="col-md-5"><?php echo $b['brt_judul'] ?></td>
      <td align="center" class="col-sm-2"><?php echo $b["auditupdate"] ?></td>
      <td colspan="2" style="text-align: center;" class="col-sm-3"><a href="<?php echo base_url().'index.php/admin/update/'.$b['id'] ?>"><button class="btn-success"><i class="glyphicon glyphicon-pencil"></i></button></a> <a href="<?php echo base_url().'index.php/admin/hapus/'.$b['id']?>" ><button class="btn-danger"><i class="glyphicon glyphicon-trash"></i></button></a></td>
      </tr>
       <?php }?>
     
      </table>
  </div>
</div>