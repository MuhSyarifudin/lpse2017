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

    <div class="page-content">
    	<div class="row">
		  <div class="col-md-2">
		  	<div class="sidebar content-box" style="display: block;">
                <ul class="nav">
                    <!-- Main menu -->
                    <li class="current"><a href="<?php echo base_url().'index.php/admin/';?>"><i class="glyphicon glyphicon-home"></i> Dashboard</a></li>
                    <li><a href="?page=berita"><i class="glyphicon glyphicon-calendar"></i> berita</a></li>
                    <li><a href="?page=info"><i class="glyphicon glyphicon-book"></i> Kontak</a></li>
                    <li><a href="?page=carousel"><i class="glyphicon glyphicon-list"></i> carousel</a></li>
                    <li><a href="?page=verif"><i class="glyphicon glyphicon-ok"></i> Verifikasi</a></li>
                    <li><a href="<?php echo base_url().'index.php/admin/logout' ?>"><b class="glyphicon glyphicon-log-out"></b> Log out</a></li>
                </ul>
             </div>
		  </div>
		  <div class="col-md-10">
		  	<div class="row">
		  		<div class="col-md-6">
		  			
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
 
 
  <?php 
  if(isset($_GET['page'])){
    $page = $_GET['page'];
 
    switch ($page) {
      case 'info':
        include "form_i.php";
        break;
      case 'carousel':
        include "form_s.php";
        break;
      case 'berita':
        include "crud.php";
        break;
      case 'input':
        include "form_b.php";
        break;
      case 'verif':
        include "form_v.php";
        break;      
      default:
        echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
        break;
    }
  }else{  // Produces an integer, like 25
    echo "<div class='panel panel-default'>
            <div class='panel-body'>
            <ul class='list-group'>
              <li class='list-group-item'>Permintaan konfirmasi <span class='badge'>".$what=$this->db->count_all('member')."</span></li>
            </ul>
            </div>
          </div>";
  }
 
   ?>
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