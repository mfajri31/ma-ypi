<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="<?= base_url('assets/frontend/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/frontend/css/mystyle.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/fontawesome/css/all.min.css'); ?>">

    <link rel="shortcut icon" href="<?= base_url('assets/img/logo.png'); ?>">

    <title>MA YPI <?= @$title == '' ? '' : ' - '.$title; ?></title>
  </head>
  <body>

	<div class="header-topbar">
		<div class="container">
			<div class="row text-white">
				<marquee direction="left" scrollamount="10"><h4>Selamat Datang di Website MA YPI Martapura Kab. OKUT Sumatera Selatan</h4></marquee>

				<!-- <div class="col-sm-6 p-2">
					<i class="fa fa-map-marker-alt"></i> Kumpul Mulyo, Martapura, Kab. OKUT Sumatera Selatan
				</div>
				<div class="col-sm-6 p-2 text-md-right">
					<i class="fa fa-envelope"></i> loremipsum@gmail.com
					&nbsp;
					<i class="fa fa-phone"></i> +0735400
				</div> -->
			</div>
		</div>
	</div>

	<nav class="navbar navbar-expand-lg navbar-dark bg-success">
		<div class="container">
		  <a class="navbar-brand" href="<?= base_url(); ?>">
			<img src="<?= base_url('assets/img/logo.png'); ?>" width="50" class="img-fluid">
		  </a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>

		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		    <ul class="navbar-nav mr-auto">
		      <li class="nav-item">
		        <a class="nav-link <?php active(''); ?>" href="<?= base_url(); ?>">BERANDA</a>
		      </li>
		      <li class="nav-item dropdown">
		        <a class="nav-link <?php active('sejarah') || active('visi_misi'); ?> dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		          PROFIL
		        </a>
		        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
		          <a class="dropdown-item" href="<?= base_url('sejarah'); ?>">SEJARAH</a>
		          <a class="dropdown-item" href="<?= base_url('visi_misi'); ?>">VISI DAN MISI</a>
		          <a class="dropdown-item" href="#">SARANA DAN PRASARANA</a>
		          <a class="dropdown-item" href="#">STRUKTUR ORGANISASI</a>
		          <a class="dropdown-item" href="#">TENTANG KAMI</a>
		      </li>
		      <li class="nav-item dropdown">
		        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		          EKSTRAKURIKULER
		        </a>
		        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
		          <a class="dropdown-item" href="#">PALANG MERAH REMAJA</a>
		          <a class="dropdown-item" href="#">PRAMUKA</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#">GURU DAN STAF</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#">PRESTASI SISWA</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#">PENGUMUMAN</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#">GALERI</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#">BERITA</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#">KONTAK</a>
		      </li>
		    </ul>
		  </div>
	  </div>
	</nav>

  
    
