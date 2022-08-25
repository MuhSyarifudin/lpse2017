<div class="content-box-large">

    <form class="form-horizontal container" method="post" action="http://localhost/lpseCI/index.php/admin/do_upload" enctype="multipart/form-data">
      <?php echo validation_errors(); ?>
      <?php ini_set('date.timezone', 'Asia/Jakarta'); ?>
      <div class="form-group"><label> </label></div>
   <div class="form-group">
     <label class="control-label col-sm-2">Thumbnail</label>
     <label class="col-sm-1">:</label>
     <div class="col-md-3" style="padding: 0px">
     <input type="file" id="gambar" name="thumbnail" accept="">
     </div>
   </div>
   <div class="form-group">
   <label class="control-label col-sm-2">Tanggal</label>
   <label class="col-sm-1">:</label>
   <input type="disable" value="<?php echo date('Y-m-d H:i:s');?>" onkeydown="disableField()" name="date" id="date">
   </div>
     <div class="form-group">
     <label for="judul" class="control-label col-sm-2">Judul Berita</label>
     <label class="col-sm-1">:</label>
     <input type="text" id="judul" name="judul" placeholder="Type tittle here...">
     </div>
     <div class="form-group">
         <label for="isi" class="control-label col-sm-2">Isi Berita</label>
     <label class="col-sm-1">: </label>
     </div>
     <div class="col-lg-10 table-responsive">
	 <textarea style="opacity:0"></textarea>
     <textarea name="isi" class="ckeditor" id="isi" cols="40" rows="5" placeholder="Type content here..."></textarea>
     </div>
     <br><br><div style="height:100px;"></div>
     <div class="form-group row col-md-5" style="margin:50px"><input type="submit" class="btn-success btn-sm"><input type="reset" class="btn-danger btn-sm" style="margin-left: 10px;">
     </form>

		  	</div>