
<footer class="page-footer font-small text-white" style="background-color: #135238;">

  <div style="background-color: #28a745;">
    <div class="container">

      <div class="row py-4 d-flex align-items-center">

        <div class="col-md-6 col-lg-5 text-center text-md-left mb-3">
          <h5 class="mb-0">SOSIAL MEDIA</h5>
        </div>

        <div class="col-md-6 col-lg-7 text-center text-md-right">
        	<a href="" class="fb-ic">
        		<i class="fab fa-facebook fa-2x text-white mr-3"></i>
        	</a>
        	<a href="" class="ins-ic">
        		<i class="fab fa-instagram fa-2x text-white mr-3"></i>
        	</a>
        	<a href="" class="tw-ic">
        		<i class="fab fa-twitter fa-2x text-white"></i>
        	</a>
        </div>


      </div>

    </div>
  </div>

  <div class="container text-center text-md-left">

    <div class="row mt-3">
      <div class="col-md-4 mb-4">
        <h6 class="text-uppercase font-weight-bold">Alamat</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 150px;">
        <p>Kumpul Mulyo, Martapura, Kab. OKU Timur Sumatera Selatan</p>
      </div>

      <div class="col-md-4 mb-4">
        <h6 class="text-uppercase font-weight-bold">Menu Utama</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 150px;">
        <div class="text-uppercase">
	        <p>
	        	Beranda
	        </p>
	        <p>
	        	Profil
	        </p>
	        <p>
	        	Pengumuman
	        </p>
	        <p>
	        	Kontak
	        </p>
        </div>
      </div>

      <div class="col-md-4 mb-4">
        <h6 class="text-uppercase font-weight-bold">Contact</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 150px;">
        <p><i class="fas fa-home mr-3"></i> Kumpul Mulyo, Martapura</p>
        <p><i class="fas fa-envelope mr-3"></i> loremipsum@gmail.com</p>
        <p><i class="fas fa-phone mr-3"></i> +0735400</p>
      </div>

    </div>

  </div>

  <div class="footer-copyright text-center py-3" style="background-color: #104433;">
  	Copyright &copy; MAYPI <?= date('Y'); ?> 
  </div>

</footer>

    <script src="<?= base_url('assets/jquery/jquery.min.js'); ?>"></script>
    <script src="<?= base_url('assets/frontend/js/bootstrap.min.js'); ?>"></script>
    <script src="<?= base_url('assets/frontend/js/magnific.js'); ?>"></script>
    <script>
        $(document).ready(function() {
          $('.zoom-gallery').magnificPopup({
            delegate: 'a',
            type: 'image',
            closeOnContentClick: false,
            closeBtnInside: false,
            mainClass: 'mfp-with-zoom mfp-img-mobile',
            image: {
              verticalFit: true,
              titleSrc: function(item) {
                return item.el.attr('title');
                // return item.el.attr('title') + ' &middot; <a class="image-source-link" href="'+item.el.attr('data-source')+'" target="_blank">image source</a>';
              }
            },
            gallery: {
              enabled: true
            },
            zoom: {
              enabled: true,
              duration: 300, // don't foget to change the duration also in CSS
              opener: function(element) {
                return element.find('img');
              }
            }
            
          });
        });
    </script>
  </body>
</html>