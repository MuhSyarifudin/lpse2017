<!DOCTYPE html>
<html><head>
    <title>Bootstrap Admin Theme v3</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="http://localhost/lpseCI/assets/css/bootstrap.min.css " rel="stylesheet">
    <!-- styles -->
    <link href="http://localhost/lpseCI/assets/css/styles.css" rel="stylesheet">
	
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  	<div class="header">
	     <div class="container-fluid">
	        <div class="row">
	           <div class="col-md-5">
	              <!-- Logo -->
	              <div class="logo">
	                 <h1><a href="index.html">Bootstrap Admin Theme</a></h1>
	              </div>
	           </div>
	           <div class="col-md-5">
	              <div class="row">
	                <div class="col-lg-12"></div>
	              </div>
	           </div>
	           <div class="col-md-2 pull-right">
              <div class="pull-right">
	              <div class="navbar navbar-inverse" role="banner">
	                  <nav class="pull-right">
	                    <ul class="nav navbar-nav" style="width: 300px;">
                      <li style="color: white;"" > 
                      <a href="?page=verif"style="color: white;">Permintaan

                      <b style="color: white;background-color: red;padding: 3px"><?php echo $this->db->count_all('member'); ?>
                                </b>
                      </a></li>
                        <li class="dropdown">
	                        <a href="<?php echo base_url().'index.php/admin/index'?>"> <b class="glyphicon glyphicon-user"></b> <?php echo $this->session->userdata('nama');?> </a> 
	                      </li>
	                    </ul>
	                  </nav>
	              </div>
              </div>
	           </div>
	        </div>
	     </div>
	</div>		
		  	<div class="row">
		  		<div class="col-md-12 panel-warning">
		  			<div class="content-box-header panel-heading">
	  					<div class="panel-title ">Panel</div>
						
						<div class="panel-options">
							<a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
						</div>
		  			</div>
		  			<div class="content-box-large box-with-header">
			  			
	<!--<div class="menu">
    <ul>
      <li><a href="?page=home">HOME</a></li>
      <li><a href="?page=tentang">TENTANG</a></li>
      <li><a href="?page=tutorial">TUTORIAL</a></li>
    </ul>
  </div>-->
 
  <div class="container-fluid">
 
 


<?php foreach($berita as $b){ ?>
	<form class="form-horizontal container" method="post" action="<?php echo base_url().'index.php/admin/updateb'?>" enctype="multipart/form-data">
      <?php echo validation_errors(); ?>
      <?php ini_set('date.timezone', 'Asia/Jakarta'); ?>
      <div class="form-group"><label> </label></div>
   <div class="form-group">
   	<input type="hidden" value="<?php echo $b['id']?>" name="id">
   </div>
   <div class="form-group">
   <label class="control-label col-sm-2">Tanggal</label>
   <label class="col-sm-1">:</label>
   <input class="form-control input-sm" style="width: 200px" type="disable" value="<?php echo $b['auditupdate']?>" onkeydown="disableField()" name="date" id="date">
   </div>
     <div class="form-group">
     <label for="judul" class="control-label col-sm-2">Judul Berita</label>
     <label class="col-sm-1">:</label>
     <input class="form-control input-sm" style="width: 200px" type="text" id="judul" name="judul" value="<?php echo $b['brt_judul']?>">
     </div>
     <div class="form-group">
       <label for="isi" class="control-label col-sm-2">Isi Berita</label>
     <label class="col-sm-1">: </label>
     </div>
     <div class="col-lg-10 table-responsive">
	 <textarea style="opacity:0"></textarea>
     <textarea name="isi" class="ckeditor" id="isi" cols="40" rows="5"><?php echo $b['brt_isi']?></textarea>
     </div>
     <br><br><div style="height:100px;"></div>
     <div class="form-group row col-md-5" style="margin:50px"><input type="submit" class="btn-success btn-sm"><input type="reset" class="btn-danger btn-sm" style="margin-left: 10px;">
     </form>
	<?php } ?>

						<br><br>
					</div>
		  		</div>
		  	</div>

		  	
		  </div>
		</div>
    </div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url().'assets/js/jquery-2.1.3.min.js'; ?>"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url().'assets/js/bootstrap.min.js'; ?>"></script>
    <script src="<?php echo base_url().'assets/js/custom.js'?>"></script>
   <script src="<?php echo base_url().'assets/cke/ckeditor.js'?>"></script>
  
</body></html>