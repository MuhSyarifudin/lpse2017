								
								<form style="opacity:0"><textarea></textarea></form>
                                <form class="form-horizontal container" method="post" action="http://localhost/lpseCI/index.php/admin/ukontak">
                                <textarea cols="9" rows="2" style="opacity:0"></textarea>  
                                <div class="input-group-sm">
                                <div class="col-md-4">
                                <label><i class="glyphicon glyphicon-earphone"></i>  Update Kontak</label>
                                </div>
                                <div class="col-md-10">
                                 <?php foreach($kontak as $k){?>
                                <textarea name="isi" id="isi" class="ckeditor" value="<?php echo $k['isi'];?>"></textarea>
                                 <?php } ?>
                                </div>
                                <div class="col-md-4" style="margin-top: 20px;">
                                <button type="submit" class="btn-success btn-sm" style="font-family: arial;" ><i class="glyphicon glyphicon-ok"></i> Submit</button>
                                </div>
                                
                                </div>                   
                                </form>
								
                                <hr>
				<form class="form-horizontal container" method="post" action="http://localhost/lpseCI/index.php/admin/uprofil">
                                <textarea cols="9" rows="2" style="opacity:0"></textarea>  
                                <div class="input-group-sm">
                                <div class="col-md-4">
                                <label><i class="glyphicon glyphicon-user"></i>  Update Profil</label>
                                </div>
                                <div class="col-md-10">
                                <?php foreach ($profil as $p) {?>
                                <textarea name="isi" id="isi" class="ckeditor" value="<?php $p['isi']?>"></textarea>
                                <?php }?>
                                </div>
                                <div class="col-md-4" style="margin-top:20px">
                                <button type="submit" class="btn-success btn-sm" style="font-family: arial;"><i class="glyphicon glyphicon-ok"></i> Submit</button>
                                </div>
                                </div>                   
                                </form>
                                <hr>
								
                                <form class="form-horizontal container" method="post" action="http://localhost/lpseCI/index.php/admin/uttgkami">
                                
                                <textarea cols="9" rows="2" style="opacity:0"></textarea>  
                                <div class="input-group-sm">
                                <div class="col-md-4">
                                <label><i class="glyphicon glyphicon-info-sign"></i>  Update Tentang kami</label>
                                </div>
                                <div class="col-md-10">
                                <?php foreach ($detail as $d){?>
                                <textarea name="isi" id="isi" class="ckeditor" value="<?php echo $d['isi']?>"></textarea>
                                <?php } ?>
                                </div>
                                <div class="col-md-4" style="margin-top:20px">
                                <button type="submit" class="btn-success btn-sm" style="font-family: arial;"><i class="glyphicon glyphicon-ok"></i> Submit</button>
                                </div>
                                </div>                   
                                </form>
                                <div style="height: 30px"></div>