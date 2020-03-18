<!-- slide -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?= base_url('assets/img/header/'.$header[0]['slide']); ?>" width="100%" class="gambar-slide">
      <div class="container">
        <div class="carousel-caption">
          
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <img src="<?= base_url('assets/img/header/'.$header[1]['slide']); ?>" width="100%" class="gambar-slide">
      <div class="container">
        <div class="carousel-caption">
          
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <img src="<?= base_url('assets/img/header/'.$header[2]['slide']); ?>" width="100%" class="gambar-slide">
      <div class="container">
        <div class="carousel-caption">
          
        </div>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<!-- service -->
<section id="service" class="mt-4 pt-4 pb-4">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1 class="text-center"></h1>
      </div>
    </div>
    <div class="row text-center">

      <div class="col-md-4 mb-4">
        <h3 class="mb-3">Tahfidz Al-Qur'an</h3>
        <i class="fa fa-quran service"></i>
      </div>

      <div class="col-md-4 mb-4">
        <h3 class="mb-3">Khataman Al-Qur'an</h3>
        <i class="fa fa-book-reader service"></i>
      </div>

      <div class="col-md-4 mb-4">
        <h3 class="mb-3">Sholat dan Tadarus</h3>
        <i class="fa fa-mosque service"></i>
      </div>

    </div>
  </div>
</section>
<!-- /service -->


<!-- sambutan -->
<section id="sambutan" class="mt-4 pt-4 pb-4 bg-abu">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-2"></div>
      <div class="col-md-10 text-center">
        <h1 class="mb-3"><?= $sambutan['judul']; ?></h1>
      </div>
    </div>
    <div class="row">
      <div class="col-md-2 text-center mb-3">
        <img src="<?= base_url('assets/img/sambutan/'.$sambutan['foto']); ?>" class="img-fluid" alt="Kepala Madrasah MA YPI Martapura" title="Kepala Madrasah MA YPI Martapura">
      </div>
      <div class="col-md-10">
        <?= word_limiter($sambutan['isi'], 60); ?>
        <a href="<?= base_url('home/sambutan'); ?>">Selengkapnya</a>
      </div>
    </div>
  </div>
</section>
<!-- /sambutan -->


<!-- galeri -->
<section id="galeri" class="mt-4 pt-4 pb-4">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1 class="text-center mb-4">Galeri</h1>
      </div>
    </div>
    <div class="row justify-content-center">
      <?php foreach($kategori_galeri as $kategori_galeri) : ?>
      <div class="col-md-3 mb-3">
        <div class="card">
          <img class="card-img-top berita" src="<?= base_url('assets/img/kategori_galeri/'.$kategori_galeri['foto']) ?>" alt="<?= $kategori_galeri['nama']; ?>">
          <div class="card-body">
            <a href="<?= base_url('galeri/'.$kategori_galeri['id'].'/'.$kategori_galeri['slug']); ?>"><h5 class="card-title text-center"><?= word_limiter($kategori_galeri['nama'], 8) ?></h5></a>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
    <div class="row">
      <div class="col-md-12 text-center">
        <a href="<?= base_url('galeri'); ?>" class="btn btn-primary">Lihat Lebih Banyak</a>
      </div>
    </div>
  </div>
</section>
<!-- /galeri -->

<!-- berita -->
<section id="galeri" class="mt-4 pt-4 pb-4 bg-abu">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1 class="text-center mb-4">Berita</h1>
      </div>
    </div>
    <div class="row justify-content-center">
      <?php foreach($berita as $berita) : ?>
      <div class="col-md-3 mb-3">
        <div class="card">
          <img class="card-img-top berita" src="<?= base_url('assets/img/berita/'.$berita['foto']); ?>" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title"><?= word_limiter($berita['judul'], 8) ?></h5>
            <p class="card-text"><?= word_limiter($berita['isi'], 8); ?></p>
            <a href="<?= base_url('berita/'.$berita['id'].'/'.$berita['slug']); ?>" class="btn btn-primary btn-block">Baca Selengkapnya</a>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
    <div class="row">
      <div class="col-md-12 text-center">
        <a href="<?= base_url('berita'); ?>" class="btn btn-primary">Lihat Lebih Banyak</a>
      </div>
    </div>
  </div>
</section>

<!-- berita -->