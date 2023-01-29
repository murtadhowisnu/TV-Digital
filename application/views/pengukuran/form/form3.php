<body onload="initMap()">
<div id="layoutSidenav_content">
<main>
    <div class="container-fluid">
    <h1 class="mt-4 mb-4"><?= $title;?></h1>
    <div class="card mb-3 ml-4 mb-2" style="max-width: 750px;">
        <div class="card-header bg-primary" style="color: white;">
            Form Pengukuran Radio
        </div>
        <div class="row no-gutters">
            <div class="col-md-12">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12 pr-5 pl-4">
                            <form action="<?=base_url('form/form3'); ?>" method="POST" onsubmit="return confirm('Data Sudah Lengkap?');" >
                                <div class="card-header mb-4 pl-0" style="color: black; background-color:transparent; font-size:20px;">
                                    <b>Lokasi Pemancar</b>
                                </div>
                                <div class="form-group row">
                                    <label for="lat" class="col-sm-3 col-form-label">Koordinat</label>
                                    <?php include_once('googlemaps.php'); ?>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control mt-3" id="lat" name="lat" placeholder="Latitude" maxlength="11">
                                        <input type="text" class="form-control mt-3" id="lng" name="lng" placeholder="Longitude" maxlength="11">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="alamat_lokasi" class="col-sm-3 col-form-label">Alamat</label>
                                    <div class="col-sm-7">
                                        <textarea class="form-control" id="alamat_lokasi" name="alamat_lokasi" value="" rows="3"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="kelurahan_lokasi" class="col-sm-3 col-form-label">Kelurahan</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" id="kelurahan_lokasi" name="kelurahan_lokasi" value="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="kecamatan_lokasi" class="col-sm-3 col-form-label">Kecamatan</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" id="kecamatan_lokasi" name="kecamatan_lokasi" value="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="kotamadya_lokasi" class="col-sm-3 col-form-label">Kota Madya</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" id="kotamadya_lokasi" name="kotamadya_lokasi" value="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="telp_lokasi" class="col-sm-3 col-form-label">Telp/Fax</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" id="telp_lokasi" name="telp_lokasi" value="">
                                    </div>
                                </div>
                                <!-- <script>
                                    function no_telp() {
                                        //normalize string and remove all unnecessary characters
                                        var telp = document.getElementById('telp_lokasi').value;
                                        var phone = telp.replace(/[^\d]/g, "");

                                        //check if number length equals to 10
                                        if (phone.length < 15) {
                                            //reformat and return phone number
                                            document.getElementById('telp_lokasi').value = phone.replace(/(\d{4})(\d{4})(\d{4})/, "($1) $2-$3");;
                                        }
                                        if (phone.length == 10) {
                                            //reformat and return phone number
                                            document.getElementById('telp_lokasi').value = phone.replace(/(\d{4})(\d{4})/, "($1) $2");;
                                        }
                                        return null;
                                    }
                                </script> -->

                                <div class="form-group row">
                                    <label for="tinggi_lok" class="col-sm-3 col-form-label">Tinggi Lokasi</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" id="tinggi_lok" name="tinggi_lok" value="">
                                    </div>
                                    <div class="col-sm-2 mt-1"><b>(m/dpl)</b></div>
                                </div>
                                <div class="form-group row">
                                    <label for="tinggi_ged" class="col-sm-3 col-form-label">Tinggi Gedung</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" id="tinggi_ged" name="tinggi_ged" value="">
                                    </div>
                                    <div class="col-sm-2 mt-1"><b>(m)</b></div>
                                </div>
                                <div class="form-group row">
                                    <label for="tinggi_men" class="col-sm-3 col-form-label">Tinggi Menara</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" id="tinggi_men" name="tinggi_men" value="">
                                    </div>
                                    <div class="col-sm-2 mt-1"><b>(m)</b></div>
                                </div>
                                <div class="card-footer bg-transparent text-center">
                                    <button type="submit" class="btn btn-primary">Next</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</main>


     