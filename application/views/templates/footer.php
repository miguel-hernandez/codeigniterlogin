<footer>
  Codeigniter
</footer>

<script src="<?php echo base_url('assets/jquery-3.2.1.min.js'); ?>"></script>

<script src="<?php echo base_url('assets/jquery.validate.js'); ?>"></script>

<script src="<?php echo base_url('assets/bootstrap337/js/bootstrap.min.js'); ?>"></script>

<script src="<?php echo base_url('assets/application/notification.js'); ?>"></script>
<script src="<?php echo base_url('assets/application/login/login.js'); ?>"></script>
<script src="<?php echo base_url('assets/application/usuario/usuario.js'); ?>"></script>

<script>
  $(document).ready(function () {
     base_url = live_url = "<?php echo base_url(); ?>";
     base_url = base_url+"index.php/";

     $("#modal_notification").modal("show");
  });
</script>

</body>
</html>
