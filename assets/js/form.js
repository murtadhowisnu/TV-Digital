$(document).ready(function(){
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
                     var i;
                     html += '<option value="">Pilih Pemancar</option>';
                     html += '<option value="Y">Ketik Manual</option>';
                     for (i = 0; i < data.length; i++) {
                         html += '<option value=' + data[i].id + '>' + data[i].alamat + '</option>';
                     }
                     $('#alamat_pem').html(html);
                 }

             }
         });
         return false;
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
                     var html_kec = '';
                     var html_al = '';
                     html += '<label for="kanal">Kanal</label>';
                     for (i = 0; i < data.length; i++) {
                         html += '<input type="text" name="kanal" id="kanal" class="form-control required" value="' + data[i].kanal + '">';
                     }
                     $('#kanal').html(html);

                     html_kec += '<label for="spt_kecamatan">Kecamatan</span></label>';
                     html_kec += '<input type="text" class="form-control required" name="spt_kecamatan">';
                     $('#spt_kecamatan').html(html_kec);

                     html_al += '<label for="spt_alamat">Alamat</label>';
                     html_al += '<input type="text" class="form-control required" name="spt_alamat">';
                     $('#spt_alamat').html(html_al);
                 }

             }
         });
         return false;
     });
});
