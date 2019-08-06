$(document).ready(function(){
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

    tampil_data_guru();
});

function tampil_data_guru(){
  $.ajax({
    url: 'guru/tampil_guru',
    type: 'post',
    dataType: 'json',
    success: function(guru){
      var tampil = '';
      for( var i=0; i<guru.length; i++ ){
        tampil += `
          <div class="col-md-4">
            <div class="card mt-4">
              <div class="zoom-gallery">
                <img class="card-img-top guru" src="assets/img/guru/`+guru[i].foto+`" alt="`+guru[i].jabatan+` MA YPI Martapura">
              </div>
              <div class="card-body">
                <h6 class="card-title text-center"><a href="" onclick="info(`+guru[i].id+`)" data-toggle="modal" data-target="#modal-guru">`+guru[i].nama+`</a></h6>
              </div>
            </div>
          </div>
        `
      }
      $('#data-guru').html(tampil);
    }
  })
}

function info(id){
  $.ajax({
    url: 'guru/tampil_guru_perId',
    type: 'post',
    data: 'id='+id,
    dataType: 'json',
    success: function(guru){

      $('#foto').attr('src', 'assets/img/guru/'+guru.foto);
      $('#nama').html(guru.nama);
      $('#jabatan').html(guru.jabatan);
      $('#mapel').html(guru.mapel);
      $('#jum_jam').html(guru.jum_jam+" Jam");
    }
  })
}