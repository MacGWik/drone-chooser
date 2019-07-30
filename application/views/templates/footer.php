    <!-- Bootstrap Core JavaScript -->
    <script src="<?= base_url(); ?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?= base_url(); ?>assets/bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="<?= base_url(); ?>assets/bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="<?= base_url(); ?>assets/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?= base_url() ?>assets/dist/js/sb-admin-2.js"></script>
    
    <!-- Custom JavaScript -->
    <script src="<?= base_url(); ?>assets/dist/js/lib.js"></script>

    <!-- Select2 JavaScript -->
    <script src="<?= base_url(); ?>assets/bower_components/select2/dist/js/select2.full.min.js"></script>

    <div id="errorPanel">
      <div id="errorOverlay">
        <!-- <i class="fa fa-exclamation-triangle"></i> <span>Data Error!</span> -->
      </div>
      <div id="errorContent">
        <div class="infoError">
            <i class="glyphicon glyphicon-warning-sign"></i> <span>Data Error!</span>
          </div>
        
        <div id="errorMsg">
          <!-- <i class="fa fa-exclamation-triangle"></i> <span>Data Error!</span> -->
        </div>

        <div class="buttonerror">
          <button id="btnOkError">OK</button>
        </div>

      </div>
    </div>

    <div id="confirmPanel">
      <div id="confirmOverlay">
      </div>
      <div id="confirmContent">
        <div class="info">
        <i class="glyphicon glyphicon-question-sign"></i> <span>Konfirmasi!</span>
        </div>

        <div id="confirmMsg">
        </div>

        <div class="buttonConfirm">
          <button id="btnYesConfirm">Yes</button>
          <button id="btnNoConfirm">No</button>
        </div>

      </div>
    </div>

    <div id="infoPanel">
      <div id="infoOverlay">
      <!-- <i class="fa fa-exclamation-triangle"></i> <span>Data info!</span> -->
      </div>
      <div id="infoContent">
        <div class="infoinfo">
          <i class="glyphicon glyphicon-info-sign"></i> <span>Data info!</span>
        </div>

        <div id="infoMsg">
        <!-- <i class="fa fa-exclamation-triangle"></i> <span>Data info!</span> -->
        </div>

        <div class="buttoninfo">
          <button id="btnOkInfo">OK</button>
        </div>

      </div>
    </div>

    <script>
      $(document).ready(function(){
        $('.select2').select2({
          placeholder: "Select a Data"
        });

        $('.select2proppitch').select2({
          placeholder: "Prop Pitch"
        })
      })
    </script>
</body>

</html>