
       <!-- Begin Page Content -->

       <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Temperatura</h1>
        <p class="mb-4">En esta tabla se muestran todos los registros de la temperatura con su fecha correspondiente. &nbsp 
        
        <a class="btn btn-success" href="<?php echo base_url();?>index.php/Temperatura/Reporte_Temperatura_PDF"" target="_blank">Descargar PDF</a>
        <a class="btn btn-success" href="<?php echo base_url();?>index.php/Temperatura/Reporte_Temperatura_PDF"" target="_blank">Descargar CSV</a>

        </p>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tabla Temperatura</h6>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Fecha</th>
                    <th>Temperatura</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>ID</th>
                    <th>Fecha</th>
                    <th>Temperatura</th>
                  </tr>
                </tfoot>
                <tbody>

                  <?php
                    foreach ($datos->result_array() as $reg) {
                    echo "<tr>";
                    echo "<td>".$reg['id_temperatura']."</td>";
                    echo "<td>".$reg['fecha']."</td>";
                    echo "<td>".$reg['temperatura']."</td>";  
                    echo "</tr>";
                    }
                  ?>

                </tbody>
              </table>
            </div>
          </div>
        </div>

      </div>
      <!-- /.container-fluid -->

    </div>

      <!-- End of Main Content -->


  <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url();?>application/assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url();?>application/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url();?>application/assets/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url();?>application/assets/js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="<?php echo base_url();?>application/assets/vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="<?php echo base_url();?>application/assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="<?php echo base_url();?>application/assets/js/demo/datatables-demo.js"></script>

</body>

</html>























    