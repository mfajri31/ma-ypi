<!-- ./Content Wrapper -->
</div>

<!-- Main Footer -->
<footer class="main-footer text-center">
  <strong>Copyright &copy; MAYPI <?= date('Y'); ?></strong>
</footer>

<!-- Add the sidebar's background. This div must be placed
  immediately after the control sidebar -->
<div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<script src="<?= base_url('assets/'); ?>jquery/jquery.min.js"></script>
<script src="<?= base_url('assets/'); ?>backend/tinymce/tinymce.min.js"></script>
<script src="<?= base_url('assets/backend/'); ?>js/bootstrap.min.js"></script>
<script src="<?= base_url('assets/backend/'); ?>dist/js/adminlte.min.js"></script>
<script>
    tinymce.init({
      selector: "#isi_berita",
      height: 300,
      plugins: 'preview fullscreen link codesample table charmap hr anchor advlist lists wordcount help emoticons autolink visualchars pagebreak nonbreaking',
      toolbar: 'formatselect bold italic strikethrough underline superscript subscript codesample | emoticons | forecolor backcolor | link | alignleft aligncenter alignright alignjustify | numlist bullist outdent indent |insertdatetime | removeformat | fullscreen'
    });
</script>
</body>
</html>