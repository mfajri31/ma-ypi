<!-- slide -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?= base_url('assets/img/1.jpg'); ?>" width="100%" height="500" class="img-fluid">
      <div class="container">
        <div class="carousel-caption">
          <h1>Example headline.</h1>
          <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
          <!-- <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p> -->
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <img src="<?= base_url('assets/img/2.jpg'); ?>" width="100%" height="500" class="img-fluid">
      <div class="container">
        <div class="carousel-caption">
          <h1>Another example headline.</h1>
          <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
          <!-- <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p> -->
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <img src="<?= base_url('assets/img/3.jpg'); ?>" width="100%" height="500" class="img-fluid">
      <div class="container">
        <div class="carousel-caption">
          <h1>One more for good measure.</h1>
          <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
          <!-- <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p> -->
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
    <div class="row">
      <div class="col-md-12">
        <h1 class="text-center mb-4">Sambutan Kepala Sekolah</h1>
      </div>
    </div>
    <div class="row">
      <div class="col-md-2 text-center mb-3">
        <img src="<?= base_url('assets/img/logo.png'); ?>" width="150">
      </div>
      <div class="col-md-10">
        <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda aperiam dignissimos incidunt amet, quam, expedita nisi dolorum voluptatem reprehenderit eos nesciunt, minima debitis quod a quisquam vero eum nostrum enim! Ad deleniti tempore eaque recusandae sint? Iusto sapiente alias, dicta qui unde aut numquam fugiat repellendus, obcaecati nam, aspernatur ipsum facilis asperiores rerum voluptas quam. Quas voluptas sequi nostrum, corrupti accusantium natus, ullam dolorem temporibus architecto labore praesentium, dolor maxime ut ipsa tempore eveniet veritatis enim quaerat necessitatibus sapiente quia culpa adipisci sint? At omnis ab, error eius, minus animi tempore mollitia voluptatum saepe libero? Delectus cum incidunt a consectetur!</p>
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
    <div class="row">
      <?php for( $i=1; $i<=8; $i++ ) : ?>
      <div class="col-md-3 mb-3">
        <div class="card">
          <img class="card-img-top" src="<?= base_url('assets/img/logo.png'); ?>" alt="Card image cap">
          <div class="card-body">
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
        </div>
      </div>
      <?php endfor; ?>
    </div>
  </div>
</section>
<!-- /galeri -->