<html>
	<head>
		<title>e-BILDA</title>
		<link rel="stylesheet" href="https://bootswatch.com/3/flatly/bootstrap.min.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/style.css">
		<script src="http://cdn.ckeditor.com/4.7.3/standard/ckeditor.js"></script>		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  
	
	</head>
	<body id="<?php echo base_url(); ?>" data-spy="scroll" data-target=".navbar" data-offset="50">
<nav class="navbar-inverse" role="navigation">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="<?php echo base_url(); ?>">e-BILDA</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="<?php echo base_url(); ?>home">Halaman Utama</a></li>
				<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="<?php echo base_url(); ?>home">Peta Kebun Kopi<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="<?php echo base_url(); ?>petakebunkopi">Peta Kebun Kopi Versi ArcGIS</a></li>
          <li><a href="<?php echo base_url(); ?>kebunkopimaps">Peta Kebun Kopi Versi Google Maps</a></li>
        </ul>
      </li>
        <li><a href="<?php echo base_url(); ?>posts">Info Kopi</a></li>
		<li><a href="<?php echo base_url(); ?>grafik">Grafik</a></li>
        <li><a href="<?php echo base_url(); ?>tentangkami">Tentang Kami</a></li>
      </ul>

	  <ul class="nav navbar-nav navbar-right">
		<!-- <?php if(!$this->session->userdata('logged_in')) : ?>
		<li><a href="<?php echo base_url(); ?>users/login">Login</a></li>
		<li><a href="<?php echo base_url(); ?>users/register">Register</a></li>
		<?php endif; ?> -->
		<?php if($this->session->userdata('logged_in')) : ?>
		<li><a href="<?php echo base_url(); ?>posts/create">Tambah Informasi</a></li>
		<li><a href="<?php echo base_url(); ?>categories/create">Tambah Kategori</a></li>
		<li><a href="<?php echo base_url(); ?>users/logout">Logout</a></li>
		<?php endif; ?>
		</ul>
    </div>
	</div>
	</div>
</nav>

		<!-- Flash Messages -->
		<?php if($this->session->flashdata('user_registered')) : ?>
			<?php echo '<p class="alert alert-success">' .$this->session->flashdata('user_registered').'</p>';?>
		<?php endif ?>

		<?php if($this->session->flashdata('post_created')) : ?>
			<?php echo '<p class="alert alert-success">' .$this->session->flashdata('post_created').'</p>';?>
		<?php endif ?>

		<?php if($this->session->flashdata('post_updated')) : ?>
			<?php echo '<p class="alert alert-success">' .$this->session->flashdata('post_updated').'</p>';?>
		<?php endif ?>

		<?php if($this->session->flashdata('category_created')) : ?>
			<?php echo '<p class="alert alert-success">' .$this->session->flashdata('category_created').'</p>';?>
		<?php endif ?>

		<?php if($this->session->flashdata('post_deleted')) : ?>
			<?php echo '<p class="alert alert-success">' .$this->session->flashdata('post_deleted').'</p>';?>
		<?php endif ?>

		<?php if($this->session->flashdata('login_failed')) : ?>
			<?php echo '<p class="alert alert-danger">' .$this->session->flashdata('login_failed').'</p>';?>
		<?php endif ?>

		<?php if($this->session->flashdata('user_loggedin')) : ?>
			<?php echo '<p class="alert alert-info">' .$this->session->flashdata('user_loggedin').'</p>';?>
		<?php endif ?>

		<?php if($this->session->flashdata('user_loggedout')) : ?>
			<?php echo '<p class="alert alert-info">' .$this->session->flashdata('user_loggedout').'</p>';?>
		<?php endif ?>

		<?php if($this->session->flashdata('category_deleted')) : ?>
			<?php echo '<p class="alert alert-info">' .$this->session->flashdata('category_deleted').'</p>';?>
		<?php endif ?>