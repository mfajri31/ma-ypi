<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="<?= base_url('assets/frontend/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/frontend/css/mystyle.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/frontend/css/magnific.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/fontawesome/css/all.min.css'); ?>">

    <link rel="shortcut icon" href="<?= base_url('assets/img/logo.png'); ?>">

    <title>MA YPI <?= @$title == '' ? '' : ' - '.$title; ?></title>
  </head>
  <body>

	<div class="header-topbar">
		<div class="container">
			<div class="row text-white">
				<div class="col-md-12 pt-2 pb-0">
					<marquee direction="left" scrollamount="10"><h4>Selamat Datang di Website MA YPI Martapura Kab. OKUT Sumatera Selatan</h4></marquee>
				</div>
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
		        <a class="nav-link <?= active('') || active('home'); ?>" href="<?= base_url(); ?>">BERANDA</a>
		      </li>
		      <li class="nav-item dropdown">
		        <a class="nav-link dropdown-toggle <?= active('sejarah') || active('visi_misi') || active('struktur_organisasi'); ?>" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		          PROFIL
		        </a>
		        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
		          <a class="dropdown-item" href="<?= base_url('sejarah'); ?>">SEJARAH</a>
		          <a class="dropdown-item" href="<?= base_url('visi_misi'); ?>">VISI DAN MISI</a>
		          <a class="dropdown-item" href="<?= base_url('struktur_organisasi') ?>">STRUKTUR ORGANISASI</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link <?= active('fasilitas'); ?>" href="<?= base_url('fasilitas'); ?>">FASILITAS</a>
		      </li>
		      <li class="nav-item dropdown">
		        <a class="nav-link dropdown-toggle <?= active('prestasi_siswa') || active('ekstrakurikuler') ?>" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		          SISWA
		        </a>
		        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
		          <a class="dropdown-item" href="<?= base_url('prestasi_siswa'); ?>">PRESTASI SISWA</a>
		          <a class="dropdown-item" href="<?= base_url('ekstrakurikuler'); ?>">EKSTRAKURIKULER</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link <?= active('guru') ?>" href="<?= base_url('guru'); ?>"> GURU
		        </a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link <?= active('program_unggulan') ?>" href="<?= base_url('program_unggulan'); ?>"> PROGRAM UNGGULAN
		        </a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link <?= active('pengumuman') ?>" href="<?= base_url('pengumuman'); ?>">PENGUMUMAN</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link <?= active('ppdb') ?>" href="<?= base_url('ppdb'); ?>">PPDB</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link <?= active('galeri') ?>" href="<?= base_url('galeri'); ?>">GALERI</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link <?= active('berita') ?>" href="<?= base_url('berita'); ?>">BERITA</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link <?= active('kontak') ?>" href="<?= base_url('kontak'); ?>">KONTAK</a>
		      </li>
		    </ul>
		  </div>
	  </div>
	</nav>

  
    
