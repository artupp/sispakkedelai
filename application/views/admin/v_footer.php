<!-- /section intro -->
    <footer>
        <div class="container">
          <div class="row">
            <div class="span6">
              <div class="copyright">
                <p><span><strong>&copy; Sistem Pakar Metode Backward Chaining dan Teorema Bayes</strong></span></p>
              </div>

            </div>

            <div class="span6">
              <div class="credits"><strong>
                Created by Putrain</strong>
              </div>
            </div>
          </div>
        </div>
    </footer>
  </div>

  <!-- javascript
    ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="<?php echo base_url('assets/js/jquery.js')?>"></script>
  <script src="<?php echo base_url('assets/vendor/jquery/jquery.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/js/jquery.easing.1.3.js')?>"></script>
  <script src="<?php echo base_url('assets/js/bootstrap.js')?>"></script>
  <script src="<?php echo base_url('assets/js/modernizr.custom.js')?>"></script>
  <script src="<?php echo base_url('assets/js/toucheffects.js')?>"></script>
  <script src="<?php echo base_url('assets/js/google-code-prettify/prettify.js')?>"></script>
  <script src="<?php echo base_url('assets/js/jquery.prettyPhoto.js')?>"></script>
  <script src="<?php echo base_url('assets/js/portfolio/jquery.quicksand.js')?>"></script>
  <script src="<?php echo base_url('assets/js/portfolio/setting.js')?>"></script>
  <script src="<?php echo base_url('assets/js/animate.js')?>"></script>
  <!-- Metis Menu Plugin JavaScript -->
  <script src="<?php echo base_url('assets/vendor/metisMenu/metisMenu.min.js'); ?>"></script>
  <!-- Template Custom JavaScript File -->
  <script src="<?php echo base_url('assets/js/custom.js')?>"></script>
  <!-- DataTables JavaScript -->
  <script src="<?php echo base_url('assets/vendor/datatables/js/jquery.dataTables.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/vendor/datatables-plugins/dataTables.bootstrap.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/vendor/datatables-responsive/dataTables.responsive.js'); ?>"></script>
  <!-- Page-Level Demo Scripts - Tables - Use for reference -->
  <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
  </script>
  <script>
  $(function(){
	$("#showPass").click(function(){ // #showPass -> id Checkbox
	if($("[name=password]").attr('type')=='password'){
  $("[name=password]").attr('type','text');
  }else{
  $("[name=password]").attr('type','password');
  }
  });
  });
  </script>
</body>

</html>