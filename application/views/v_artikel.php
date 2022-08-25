<!DOCTYPE html>
<html>
  <head>
    <title>Bootstrap Admin Theme v3</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="<?php echo base_url().'assets/css/bootstrap.min.css' ?>" rel="stylesheet">
    <!-- styles -->
    <link href="<?php echo base_url().'assets/css/bootstrap.css' ?>" rel="stylesheet">

    <link href="<?php echo base_url().'assets/css/styles.css'?>" rel="stylesheet">
    <link href="<?php echo base_url().'assets/css/'?>">
   <script src="<?php echo base_url().'assets/ckeditor/ckeditor.js'?>"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  <link href="../../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  </head>
  <body>
  	<div class="container-fluid" style="background-color:#1F3A93">
	<div class="navbar-header">
		<a class="navbar-brand"></a>
	</div>
	<ul class="nav navbar-nav">
        <li class="btn-green"><a href="<?php echo base_url().'index.php/report/lpse/' ?>" style="color:white">Home</a></li>
        <li class="active"><a href="<?php echo base_url().'index.php/report/Profil'?>" style="color:white">Profil</a></li>
        <li class="btn-yellow"><a href="<?php echo base_url().'index.php/report/detail'?>"  style="color:white">Tentang Kami</a></li> 
        <li  class="btn-red"> <a href="<?php echo base_url().'index.php/report/contact' ?>" style="color:white">Kontak</a></li> 
        <li class="btn-purple"><a href="<?php echo base_url().'index.php/news/'?>"  style="color:white">Berita</a></li> 
        <li class="btn-red"><a href="<?php echo base_url().'index.php/report/' ?>" style="color:white">Report</a></li>
	</ul>
		
	</ul>
	<ul class="nav navbar-nav navbar-right" style="color:white">
    <li><a href="<?php echo base_url().'index.php/regist/'; ?>" style="color:white"><span class="glyphicon glyphicon-user"></span>
    Daftar
    </a></li>
    <li class="clr4 dropdown">
    <a class="dropdown-toggle" id="Login" data-toggle="dropdown" style="color:white;">Login<span class="caret"></span></a>
 <ul class="dropdown-menu" style="padding: 20px 10px 5px 10px; width:300px;">
 <li>
        <form action="<?php echo base_url('index.php/Login/'); ?>" method="post">
   <div class="form-group">
    <input type="text" class="form-control" name="username" id="username" placeholder="User ID">
   </div>
   <div class="form-group">
                <input type="password" class="form-control" name="password" id="password" placeholder="Password">
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

		<div class="container-fluid">
    <div class="row">
        <?php foreach($cth_berita as $b){?>
		<div class="container-fluid tab-content">
			<div role="tabpanel" class="tab-pane fade in active" id="seite1">
				<article class="panel panel-default">
					<header class="panel-heading">
						
					</header>
						<div class="panel-body container-fluid">
						
						   <div class="pull-left col-sm-3">
                           
                           <img class="img-responsive img-rounded" alt="image" src="<?php echo base_url().'uploads/image/'.$b['img_src']?>" style="width: 225;height: 150px;"/>
							
                            
                               
							</div> 
              <figcaption class="text-center"><strong><?php echo $b['brt_judul']?></strong></figcaption>
								<p><?php echo $b['brt_isi']?></p>
						</div>
                        </div><?php }?>
                        <a href="<?php echo base_url().'index.php/report/lakukan_download/'.$b['img_src'] ?>">download</a>
    </div>
			</article>
		</div>
	</div>
</div>
    

  </body>
</html>