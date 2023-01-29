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
             <div class="text-muted">Copyright &copy; Balmon Pontianak <?= date('Y'); ?></div>
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
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
 <script src="<?= base_url('vendor/sbadmin/dist/'); ?>js/scripts.js"></script>
 <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
 <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
 <script src="<?= base_url('vendor/sbadmin/dist/'); ?>assets/demo/datatables-demo.js"></script>
 <!--Custom JavaScript -->
 <script src="<?= base_url('vendor/admin_bite/') ?>assets/libs/jquery-steps/build/jquery.steps.min.js"></script>
 <script src="<?= base_url('vendor/admin_bite/') ?>assets/libs/jquery-validation/dist/jquery.validate.min.js"></script>
 <!-- Chart -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
 <script>
     // Set new default font family and font color to mimic Bootstrap's default styling
     Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
     Chart.defaults.global.defaultFontColor = '#292b2c';

     // Area Chart Example
     var ctx = document.getElementById("myAreaChart");
     var myLineChart = new Chart(ctx, {
         type: 'line',
         data: {
             labels: [
                 "Januari",
                 "Februari",
                 "Maret",
                 "April",
                 "Mei",
                 "Juni",
                 "Juli",
                 "Agustus",
                 "September",
                 "Oktober",
                 "November",
                 "Desember",
             ],
             datasets: [{
                 label: "Pengukuran",
                 lineTension: 0.3,
                 backgroundColor: "rgba(2,117,216,0.2)",
                 borderColor: "rgba(2,117,216,1)",
                 pointRadius: 5,
                 pointBackgroundColor: "rgba(2,117,216,1)",
                 pointBorderColor: "rgba(255,255,255,0.8)",
                 pointHoverRadius: 5,
                 pointHoverBackgroundColor: "rgba(2,117,216,1)",
                 pointHitRadius: 50,
                 pointBorderWidth: 2,
                 data: [
                     <?= $chart_bulan1; ?>,
                     <?= $chart_bulan2; ?>,
                     <?= $chart_bulan3; ?>,
                     <?= $chart_bulan4; ?>,
                     <?= $chart_bulan5; ?>,
                     <?= $chart_bulan6; ?>,
                     <?= $chart_bulan7; ?>,
                     <?= $chart_bulan8; ?>,
                     <?= $chart_bulan9; ?>,
                     <?= $chart_bulan10; ?>,
                     <?= $chart_bulan11; ?>,
                     <?= $chart_bulan12; ?>
                 ],
             }],
         },
         options: {
             scales: {
                 xAxes: [{
                     time: {
                         unit: 'date'
                     },
                     gridLines: {
                         display: false
                     },
                     ticks: {
                         maxTicksLimit: 7
                     }
                 }],
                 yAxes: [{
                     ticks: {
                         min: 0,
                         max: 10,
                         maxTicksLimit: 5
                     },
                     gridLines: {
                         color: "rgba(0, 0, 0, .125)",
                     }
                 }],
             },
             legend: {
                 display: false
             }
         }
     });
 </script>

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

         $('#kabkota').change(function() {
             var id = $(this).val();
             $.ajax({
                 url: "<?= base_url('Pengukuran/get_stasiun'); ?>",
                 method: "POST",
                 data: {
                     id: id
                 },
                 async: true,
                 dataType: 'JSON',
                 success: function(data) {
                     if (data == '') {
                         html += '<option value="">Pilih Penyelenggara</option>';
                         html += '<option value="Y">Ketik Manual</option>';
                         $('#penyelenggara').html(html);

                     } else {
                         var html = '';
                         var i;
                         html += '<option value="">Pilih Penyelenggara</option>';
                         html += '<option value="Y">Ketik Manual</option>';
                         for (i = 0; i < data.length; i++) {
                             html += '<option value=' + data[i].id + '>' + data[i].nama_stasiun + '</option>';
                         }
                         $('#penyelenggara').html(html);
                     }

                 }
             });
             return false;
         });

         $('#penyelenggara').click(function() {
             var id = $(this).val();
             var alamat = $('#alamat').val();
             $.ajax({
                 url: "<?= base_url('Pengukuran/get_spt_pemancar'); ?>",
                 method: "POST",
                 data: {
                     id: id,
                     alamat: alamat
                 },
                 async: true,
                 dataType: 'JSON',
                 success: function(data) {
                     var map = '';
                     if (data == '') {
                         map += '<div id="googleMap" style="width:auto;height: 300px; position: relative;overflow: hidden;">';
                         $('#gmaps_spt').html(map);
                     } else {
                         var i;
                         for (i = 0; i < data.length; i++) {
                             $('#spt_kecamatan').val(data[i].kecamatan);
                             $('#spt_alamat').val(data[i].alamat);
                             $('#spt_lat').val(data[i].latitude);
                             $('#spt_lng').val(data[i].longitude);
                             map += '<iframe src="https://maps.google.com/maps?q=' + data[i].latitude + ',' + data[i].longitude + '&hl=es;z=14&amp;output=embed" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>';
                         }
                         $('#gmaps_spt').html(map);
                     }
                 }
             });
             return false;
         });

         $('#penyelenggara').change(function() {
             var id = $(this).val();
             $.ajax({
                 url: "<?= base_url('Pengukuran/get_pemancar'); ?>",
                 method: "POST",
                 data: {
                     id: id
                 },
                 async: true,
                 dataType: 'JSON',
                 success: function(data) {
                     if (data == '') {
                         html += '<option value="">Pilih Pemancar</option>';
                         html += '<option value="Y">Ketik Manual</option>';
                         $('#alamat_pem').html(html);

                     } else {
                         var html = '';
                         var maps = '';
                         var i;
                         html += '<option value="">Pilih Pemancar</option>';
                         html += '<option value="Y">Ketik Manual</option>';
                         for (i = 0; i < data.length; i++) {
                             html += '<option value=' + data[i].id + '>' + data[i].alamat + '</option>';
                             maps += '<iframe style="display: none;" id="gmaps" src="https://maps.google.com/maps?q=' + data[i].latitude + ',' + data[i].longitude + '&hl=es;z=14&amp;output=embed" width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe>';
                         }

                         $('#alamat_pem').html(html);
                         $('#gmaps').html(maps);
                     }

                 }
             });
             return false;
         });

         $('#alamat_pem').click(function() {
             var id = $(this).val();
             $.ajax({
                 url: "<?= base_url('Pengukuran/get_koordinat'); ?>",
                 method: "POST",
                 data: {
                     id: id
                 },
                 async: true,
                 dataType: 'JSON',
                 success: function(data) {
                     var maps = '';
                     var i;
                     for (i = 0; i < data.length; i++) {
                         maps += '<iframe id="gmaps" src="https://maps.google.com/maps?q=' + data[i].latitude + ',' + data[i].longitude + '&hl=es;z=14&amp;output=embed" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>';
                     }
                     $('#gmaps').html(maps);

                 }
             });

         });


         $('#alamat_pem').change(function() {
             var id_pemancar = $(this).val();
             $.ajax({
                 url: "<?= base_url('Pengukuran/get_spek_pem'); ?>",
                 method: "POST",
                 data: {
                     id: id_pemancar
                 },
                 async: true,
                 dataType: 'JSON',
                 success: function(data) {
                     if (data == '') {
                         html += '<option value="">Pilih Merk</option>';
                         html += '<option value="Y">Ketik Manual</option>';
                         $('#merk').html(html);

                     } else {
                         var html = '';
                         var i;
                         html += '<option value="">Pilih Merk</option>';
                         html += '<option value="Y">Ketik Manual</option>';
                         for (i = 0; i < data.length; i++) {
                             html += '<option value=' + data[i].id_stasiun + '>' + data[i].merk + '</option>';
                         }
                         $('#merk').html(html);
                     }

                 }
             });
             return false;
         });

         $('#merk').change(function() {
             var id = $(this).val();
             $.ajax({
                 url: "<?= base_url('Pengukuran/get_spek_ant'); ?>",
                 method: "POST",
                 data: {
                     id: id
                 },
                 async: true,
                 dataType: 'JSON',
                 success: function(data) {
                     var html = '';
                     if (data == '') {
                         html += '<option value="">Pilih Merk</option>';
                         html += '<option value="Y">Ketik Manual</option>';
                         $('#jenis_ant').html(html);

                     } else {
                         var i;
                         html += '<option value="">Pilih Merk</option>';
                         html += '<option value="Y">Ketik Manual</option>';
                         for (i = 0; i < data.length; i++) {
                             html += '<option value=' + data[i].id_stasiun + '>' + data[i].jenis_ant + '</option>';
                         }
                         $('#jenis_ant').html(html);
                     }

                 }
             });
             return false;
         });

         $('#jenis_ant').change(function() {
             var freq = $('#frekuensi').val();
             var spt_kecamatan = $('#kecamatan').val();
             var spt_alamat = $('#alamat').val();
             $.ajax({
                 url: "<?= base_url('Pengukuran/get_kanal_auto'); ?>",
                 method: "POST",
                 data: {
                     freq: freq
                 },
                 async: true,
                 dataType: 'JSON',
                 success: function(data) {
                     if (data == '') {
                         var html = '';
                         html += '<label for="kanal">Kanal</label>';
                         html += '<input type="text" name="kanal" id="kanal" class="form-control required">';
                         $('#kanal').html(html);

                     } else {
                         var html = '';
                         html += '<label for="kanal">Kanal</label>';
                         for (i = 0; i < data.length; i++) {
                             html += '<input type="text" name="kanal" id="kanal" class="form-control required" value="' + data[i].kanal + '">';
                         }
                         $('#kanal').html(html);
                     }

                 }
             });
             return false;
         });

         $('#daya_terukur').keyup(function() {
             var daya_ukur = $(this).val();
             var max = $('#max_power').val();
             var gain_var = $('#gain').val();
             var a = 'Melanggar';
             var b = '';

             if (Number(max) < Number(daya_ukur)) {
                 $('#max_daya').html(a);
             } else if (Number(max) > Number(daya_ukur)) {
                 $('#max_daya').html(b);
             }
             var result = (10 * Math.log10(Number(daya_ukur)) + 30) + Number(gain_var) - 1;
             $('#erp').val(Number(result).toFixed(2));
         });

         $('#h1_level').keyup(function() {
             var h1_lvl = $(this).val();
             var max_lvl = 60;
             var a = 'Melanggar';
             var b = '';

             if (Number(max_lvl) > Number(h1_lvl)) {
                 $('#max_lvl1').html(a);
             } else if (Number(max_lvl) < Number(h1_lvl)) {
                 $('#max_lvl1').html(b);
             }
         });

         $('#h2_level').keyup(function() {
             var h2_lvl = $(this).val();
             var max_lvl = 60;
             var a = 'Melanggar';
             var b = '';

             if (Number(max_lvl) > Number(h2_lvl)) {
                 $('#max_lvl2').html(a);
             } else if (Number(max_lvl) < Number(h2_lvl)) {
                 $('#max_lvl2').html(b);
             }
         });

         $('#h3_level').keyup(function() {
             var h3_lvl = $(this).val();
             var max_lvl = 60;
             var a = 'Melanggar';
             var b = '';

             if (Number(max_lvl) > Number(h3_lvl)) {
                 $('#max_lvl3').html(a);
             } else if (Number(max_lvl) < Number(h3_lvl)) {
                 $('#max_lvl3').html(b);
             }
         });

         $('.custom-file-input').on('change', function() {
             let fileName = $(this).val().split('\\').pop();
             $(this).next('.custom-file-label').addClass("selected").html(fileName);
         });

         $('.btn-edit-stasiun').on('click', function() {
             // get data from button edit
             const id = $(this).data('id');
             const nama_stasiun = $(this).data('nama_stasiun');
             const alamat = $(this).data('alamat');
             const kelurahan = $(this).data('kelurahan');
             const kecamatan = $(this).data('kecamatan');
             const kotamadya = $(this).data('kotamadya');
             const telp = $(this).data('telp');
             const email = $(this).data('email');
             // Set data to Form Edit
             $('.id').val(id);
             $('.nama_stasiun').val(nama_stasiun);
             $('.alamat').val(alamat);
             $('.kelurahan').val(kelurahan);
             $('.kecamatan').val(kecamatan);
             $('.kotamadya').val(kotamadya);
             $('.telp').val(telp);
             $('.email').val(email).trigger('change');
             // Call Modal Edit
             $('#editStasiunModal').modal('show');
         });

     });
 </script>
 <script type="text/javascript">
     function goBack() {
         window.history.back();
     }

     var form = $(".validation-wizard").show();

     $(".validation-wizard").steps({
         headerTag: "h6",
         bodyTag: "section",
         transitionEffect: "fade",
         titleTemplate: '<span class="step">#index#</span> #title#',
         labels: {
             finish: "Submit"
         },
         onStepChanging: function(event, currentIndex, newIndex) {
             if (currentIndex === 6) { //if last step
                 //remove default #finish button
                 $('.validation-wizard').find('a[href="#finish"]').remove();
                 //append a submit type button
                 $('.validation-wizard li:last-child').append('<button type="submit" id="submit" class="btn-large"><span class="fa fa-chevron-right"></span></button>');
             }
             return currentIndex > newIndex || !(3 === newIndex && Number($("#age-2").val()) < 18) && (currentIndex < newIndex && (form.find(".body:eq(" + newIndex + ") label.error").remove(), form.find(".body:eq(" + newIndex + ") .error").removeClass("error")), form.validate().settings.ignore = ":disabled,:hidden", form.valid())
         },
         onFinishing: function(event, currentIndex) {
             $("#form").submit();
             return form.validate().settings.ignore = ":disabled", form.valid()
         },
         onFinished: function(event, currentIndex) {
             $("#form").submit();
             swal("Form Submitted!", "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lorem erat eleifend ex semper, lobortis purus sed.");
         }
     }), $(".validation-wizard").validate({
         ignore: "input[type=hidden]",
         errorClass: "text-danger",
         successClass: "text-success",
         highlight: function(element, errorClass) {
             $(element).removeClass(errorClass)
         },
         unhighlight: function(element, errorClass) {
             $(element).removeClass(errorClass)
         },
         errorPlacement: function(error, element) {
             error.insertAfter(element)
         },
         rules: {
             email: {
                 email: !0
             }
         }
     })
 </script>

 </html>