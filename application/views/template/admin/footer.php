   <!-- Footer -->
   <footer class="sticky-footer bg-white shadow">
       <div class="container my-auto">
           <div class="copyright text-center my-auto">
               <span>Copyright &copy; Balmon Pontianak 2020</span>
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
                   <a class="btn btn-primary" href="<?= base_url('auth/logout'); ?>">Logout</a>
               </div>
           </div>
       </div>
   </div>
   <!-- Bootstrap core JavaScript-->
   <script src="<?= base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>
   <script src="<?= base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
   <!-- Core plugin JavaScript-->
   <script src="<?= base_url('assets/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>
   <!-- Custom scripts for all pages-->
   <script src="<?= base_url('assets/'); ?>js/sb-admin-2.min.js"></script>

   <!-- Page level plugins -->
   <script src="<?= base_url('assets/'); ?>vendor/chart.js/Chart.min.js"></script>

   <!-- Page level custom scripts -->
   <script src="<?= base_url('assets/'); ?>js/demo/chart-area-demo.js"></script>
   <script src="<?= base_url('assets/'); ?>js/demo/chart-pie-demo.js"></script>

   <!-- Page level plugins -->
   <script src="<?= base_url('assets/'); ?>vendor/datatables/jquery.dataTables.min.js"></script>
   <script src="<?= base_url('assets/'); ?>vendor/datatables/dataTables.bootstrap4.min.js"></script>

   <!-- Page level custom scripts -->
   <script src="<?= base_url('assets/'); ?>js/demo/datatables-demo.js"></script>

   <!-- //// -->
   <script type="text/javascript">
       $(document).ready(function() {
           $('.decimal').keyup(function() {
               var val = $(this).val();
               if (isNaN(val)) {
                   val = val.replace(/[^0-9\-]/g, '.');
                   if (val.split('.').length > 2) {
                       val = val.replace(/\.+$/, "");
                   }
                   if (val.split('-').length > 2) {
                       val = val.replace(/\.+$/, "");
                   }
               }
               $(this).val(val);
           });
       });
   </script>
   <script>
       $('.custom-file-input').on('change', function() {
           let fileName = $(this).val().split('\\').pop();
           $(this).next('.custom-file-label').addClass("selected").html(fileName);
       });
       $('.form-check-input').on('click', function() {
           const menuId = $(this).data('menu');
           const roleId = $(this).data('role');
           $.ajax({
               url: "<?= base_url('admin/changeaccess'); ?>",
               type: "post",
               data: {
                   menuId: menuId,
                   roleId: roleId
               },
               success: function() {
                   document.location.href = "<?= base_url('admin/roleaccess/'); ?>" + roleId;
               }
           })
       });
       $(document).ready(function() {
           // get Edit Product
           $('.btn-edit').on('click', function() {
               // get data from button edit
               const id = $(this).data('id');
               const menu = $(this).data('menu');
               const title = $(this).data('title');
               const url = $(this).data('url');
               const icon = $(this).data('icon');
               // Set data to Form Edit
               $('.id').val(id);
               $('.menu_id').val(menu);
               $('.title').val(title);
               $('.url').val(url);
               $('.icon').val(icon).trigger('change');
               // Call Modal Edit
               $('#editModal').modal('show');
           });
       });
       $(document).ready(function() {
           // get Edit Product
           $('.btn-edit2').on('click', function() {
               // get data from button edit
               const id = $(this).data('id');
               const nip = $(this).data('nip');
               const name = $(this).data('name');
               const email = $(this).data('email');
               const telp = $(this).data('telp');
               // Set data to Form Edit
               $('.id').val(id);
               $('.nip').val(nip);
               $('.name').val(name);
               $('.email').val(email);
               $('.telp').val(telp);
               // Call Modal Edit
               $('#editModal2').modal('show');
           });
       });
   </script>
   <script>
       $('#password, #password2').on('keyup', function() {
           if ($('#password').val() == '') {
               $('#message').html('Password is Empty').css('color', 'red');
           } else if ($('#password').val() == $('#password2').val()) {
               $('#message').html('Password Matching').css('color', 'green');
           } else
               $('#message').html('Password Not Matching').css('color', 'red');
       });
   </script>

   </body>

   </html>