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

                   <a class="btn btn-danger" href="<?= base_url('auth/logout'); ?>">Logout</a>

               </div>

           </div>

       </div>

   </div>



   <!-- confirm modal -->

   <div class="modal fade" id="confirmModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

       <div class="modal-dialog modal-dialog-centered" role="document">

           <div class="modal-content">

               <div class="modal-header">

                   <h5 class="modal-title" id="exampleModalLabel">Next?</h5>

                   <button class="close" type="button" data-dismiss="modal" aria-label="Close">

                       <span aria-hidden="true">×</span>

                   </button>

               </div>

               <div class="modal-footer">

                   <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>

                   <a class="btn btn-primary" href="<?= base_url('lapor/lpr2'); ?>">Next</a>

               </div>

           </div>

       </div>

   </div>



  

                <footer class="py-4 bg-light mt-auto">

                    <div class="container-fluid">

                        <div class="d-flex align-items-center justify-content-between small">

                            <div class="text-muted">Copyright &copy; Your Website 2020</div>

                            <div>

                                <a href="#">Privacy Policy</a>

                                &middot;

                                <a href="#">Terms &amp; Conditions</a>

                            </div>

                        </div>

                    </div>

                </footer>

            </div>

        </div>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

        <script src="<?=base_url('vendor/sbadmin/dist/'); ?>js/scripts.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>

        <script src="<?=base_url('vendor/sbadmin/dist/'); ?>assets/demo/chart-area-demo.js"></script>

        <script src="<?=base_url('vendor/sbadmin/dist/'); ?>assets/demo/chart-bar-demo.js"></script>

        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>

        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>



        

<script>

    $('.custom-file-input').on('change', function() {

        let fileName = $(this).val().split('\\').pop();

        $(this).next('.custom-file-label').addClass("selected").html(fileName);

    });



    $('.decimal').keyup(function(){

    var val = $(this).val();

    if(isNaN(val)){

         val = val.replace(/[^0-9\.]/g,'');

         if(val.split('.').length>2) 

             val =val.replace(/\.+$/,"");

    }

    $(this).val(val); 

    });


    $('.btn-edit-foto').on('click', function() {
        // get data from button edit
        const session = $(this).data('session');
        const user_id = $(this).data('user_id');
        // Set data to Form Edit
        $('.session').val(session);
        $('.user_id').val(user_id).trigger('change');
        // Call Modal Edit
        $('#editfotoModal').modal('show');
    });

</script>



<!-- you need to include the shieldui css and js assets in order for the components to work -->

<link rel="stylesheet" type="text/css" href="https://www.shieldui.com/shared/components/latest/css/light/all.min.css" />

<script type="text/javascript" src="https://www.shieldui.com/shared/components/latest/js/shieldui-all.min.js"></script>

<script type="text/javascript" src="https://www.shieldui.com/shared/components/latest/js/jszip.min.js"></script>



<script>

 function goBack() {

        window.history.back();

    }

</script>

<script>

window.onload = function () {

    document.getElementById("download")

        .addEventListener("click", () => {

            const invoice = this.document.getElementById("invoice");

            console.log(invoice);

            console.log(window);

            var opt = {

                margin: 0.5,

                filename: 'LampiranHasilPengukuran.pdf',

                image: { type: 'jpeg', quality: 1 },

                html2canvas: { scale: 4 },

                jsPDF: { unit: 'in', format: 'a4', orientation: 'portrait' }

            };

            html2pdf().from(invoice).set(opt).save();

        })

}





 $(document).ready(function() {

  $('#convert').click(function() {

   var table_content = '<table>';

   table_content += $('#table_content').html();

   table_content += '</table>';

   $('#file_content').val(table_content);

   $('#convert_form').html();

  });

 });



</script>

</html>