<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Administrator <?= @$title == '' ? '' : ' - '.$title; ?></title>

  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <link rel="stylesheet" href="<?= base_url('assets/backend/'); ?>css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= base_url('assets/backend/'); ?>font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?= base_url('assets/backend/'); ?>Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="<?= base_url('assets/backend/'); ?>dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="<?= base_url('assets/backend/'); ?>dist/css/skins/_all-skins.min.css">

  <style>
    .user-panel > .image > img {
      width: 50px;
      height: 50px;
      max-width: 50px;
    }
  </style>

  <link rel="shortcut icon" href="<?= base_url('assets/img/logo.png'); ?>">
</head>
<body class="hold-transition skin-green sidebar-mini">

<div class="wrapper">

<header class="main-header">
  <!-- Logo -->
  <a href="<?= base_url('administrator'); ?>" class="logo">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini"><b>YPI</b></span>
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg"><b>MA YPI Martapura</b></span>
  </a>
  <!-- Header Navbar: style can be found in header.less -->
  <nav class="navbar navbar-static-top">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
      <span class="sr-only">Toggle navigation</span>
    </a>

    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
        <!-- User Account: style can be found in dropdown.less -->
        <li class="dropdown user user-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <img src="<?= base_url('assets/img/profil/thumbs/'.userLogin()['foto']); ?>" class="user-image" alt="User Image">
            <span class="hidden-xs"><?= userLogin()['nama'] ?></span>
          </a>
          <ul class="dropdown-menu">
            <!-- User image -->
            <li class="user-header">
              <img src="<?= base_url('assets/img/profil/thumbs/'.userLogin()['foto']); ?>" class="img-circle" alt="User Image">

              <p>
                <?= userLogin()['nama']; ?>
                <small>Admin sejak 02 Novermber 2018</small>
              </p>
            </li>

            <!-- Menu Footer-->
            <li class="user-footer">
              <div class="pull-left">
                <a href="<?= base_url('administrator/profile_user'); ?>" class="btn btn-default btn-flat">Profile</a>
              </div>
              <div class="pull-right">
                <a href="<?= base_url('auth/logout'); ?>" class="btn btn-default btn-flat">Logout</a>
              </div>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </nav>
</header>
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="<?= base_url('assets/img/profil/thumbs/'.userLogin()['foto']); ?>" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p><?= userlogin()['nama']; ?></p>
        <a href="#"><i class="fa fa-circle text-success"></i><?= userlogin()['level']; ?></a>
      </div>
    </div>
    
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">MENU</li>

      <li class="<?= active_menu('') || active_menu('dashboard'); ?>">
        <a href="<?= base_url('administrator'); ?>"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
      </li>

      <li class="treeview <?= active_menu('header') || active_menu('sambutan'); ?>">
        <a href="">
          <i class="fa fa-home"></i> <span>Manajemen Beranda</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class="<?= active_menu('header'); ?>">
            <a href="<?= base_url('administrator/header'); ?>"><i class="fa fa-circle-o"></i> Header</a>
          </li>
          <li class="<?= active_menu('sambutan'); ?>">
            <a href="<?= base_url('administrator/sambutan'); ?>"><i class="fa fa-circle-o"></i> Sambutan</a>
          </li>
        </ul>
      </li>

      <li class="treeview <?= active_menu('sejarah') || active_menu('visi_misi') || active_menu('struktur_organisasi'); ?>">
        <a href="">
          <i class="fa fa-user"></i> <span>Manajemen Profil</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class="<?= active_menu('sejarah'); ?>">
            <a href="<?= base_url('administrator/sejarah'); ?>"><i class="fa fa-circle-o"></i> Sejarah</a>
          </li>
          <li class="<?= active_menu('visi_misi'); ?>">
            <a href="<?= base_url('administrator/visi_misi'); ?>"><i class="fa fa-circle-o"></i> Visi dan Misi</a>
          </li>
          <li class="<?= active_menu('struktur_organisasi'); ?>">
            <a href="<?= base_url('administrator/struktur_organisasi'); ?>"><i class="fa fa-circle-o"></i> Struktur Organisasi</a>
          </li>
        </ul>
      </li>

      <li class="<?= active_menu('fasilitas'); ?>">
          <a href="<?= base_url('administrator/fasilitas'); ?>"><i class="fa fa-cubes"></i> <span>Manajemen Fasilitas</span></a>
      </li>

      <li class="treeview <?= active_menu('prestasi_siswa') || active_menu('ekstrakurikuler'); ?>">
        <a href="">
          <i class="fa fa-users"></i> <span>Manajemen Siswa</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class="<?= active_menu('prestasi_siswa'); ?>">
            <a href="<?= base_url('administrator/prestasi_siswa'); ?>"><i class="fa fa-circle-o"></i> Prestasi Siswa</a>
          </li>
          <li class="<?= active_menu('ekstrakurikuler'); ?>">
            <a href="<?= base_url('administrator/ekstrakurikuler'); ?>"><i class="fa fa-circle-o"></i> Ekstrakurikuler</a>
          </li>
        </ul>
      </li>

      <li class="<?= active_menu('guru'); ?>">
          <a href="<?= base_url('administrator/guru'); ?>"><i class="fa fa-users"></i> <span>Manajemen Guru</span></a>
      </li>

      <li class="<?= active_menu('program_unggulan'); ?>">
          <a href="<?= base_url('administrator/program_unggulan'); ?>"><i class="fa fa-diamond"></i> <span>Manajemen P.Unggulan</span></a>
      </li>

      <li class="<?= active_menu('pengumuman'); ?>">
          <a href="<?= base_url('administrator/pengumuman'); ?>"><i class="fa fa-info-circle"></i> <span>Manajemen Pengumuman</span></a>
      </li>

      <li class="treeview <?= active_menu('foto_galeri') || active_menu('kategori_galeri'); ?>">
        <a href="">
          <i class="fa fa-users"></i> <span>Manajemen Galeri</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class="<?= active_menu('kategori_galeri'); ?>">
            <a href="<?= base_url('administrator/kategori_galeri'); ?>"><i class="fa fa-circle-o"></i> Kategori Galeri</a>
          </li>
          <li class="<?= active_menu('foto_galeri'); ?>">
            <a href="<?= base_url('administrator/foto_galeri'); ?>"><i class="fa fa-circle-o"></i> Foto Galeri</a>
          </li>
        </ul>
      </li>

      <li class="<?= active_menu('berita'); ?>">
        <a href="<?= base_url('administrator/berita'); ?>"><i class="fa fa-newspaper-o"></i> <span>Manajemen Berita</span></a>
      </li>

      <li class="<?= active_menu('kontak'); ?>">
          <a href="<?= base_url('administrator/kontak'); ?>"><i class="fa fa-phone"></i> <span>Manajemen Kontak</span></a>
      </li>

      <?php if( $this->session->userdata('level') == 'superadmin' ) : ?>
        <li class="<?= active_menu('user'); ?>">
          <a href="<?= base_url('administrator/user'); ?>"><i class="fa fa-users"></i> <span>Manajemen User</span></a>
        </li>
      <?php endif; ?>

    </ul>
  </section>
  <!-- /.sidebar -->
</aside>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  
