<body onload="initMap()">
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid">
                <h1 class="mt-4 mb-4"><?= $title; ?></h1>
                <div class="row">
                    <div class="col-lg-8">
                        <?= $this->session->flashdata('message'); ?>
                    </div>
                </div>
                <div class="card mb-3 ml-4 mb-2" style="max-width: 750px;">
                    <div class="card-header bg-primary" style="color: white;">
                        Form Pengukuran Radio
                    </div>
                    <div class="row no-gutters">
                        <div class="col-md-12">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-12 pr-5 pl-4">
                                        <form action="<?= base_url('form/form8'); ?>" method="POST" onsubmit="return confirm('Data Sudah Lengkap?');">
                                            <div class="card-header mb-3 pl-0" style="color: black; background-color:transparent; font-size:20px;">
                                                <b>Keterangan</b>
                                            </div>
                                            <div class="form-group row">
                                                <label for="no_spt" class="col-sm-3 col-form-label"> <b>NO SPT</b> </label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="no_spt" name="no_spt" value="">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="tgl_spt" class="col-sm-3 col-form-label"> <b>TANGGAL SPT</b> </label>
                                                <div class="col-sm-9">
                                                    <input type="date" class="form-control datepicker" id="tgl_spt" name="tgl_spt" value="DD/MM/YYYY">
                                                    <script>
                                                        var today = new Date();
                                                        var dd = today.getDate();
                                                        var mm = today.getMonth() + 1; //January is 0!
                                                        var yyyy = today.getFullYear();
                                                        if (dd < 10) {
                                                            dd = '0' + dd
                                                        }
                                                        if (mm < 10) {
                                                            mm = '0' + mm
                                                        }
                                                        today = yyyy + '-' + mm + '-' + dd;
                                                        document.getElementById("tgl_spt").setAttribute("max", today);
                                                    </script>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="jenis_sbk" class="col-sm-3 col-form-label"> <b>JENIS SPK</b> </label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="jenis_sbk" name="jenis_sbk" value="">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="ket_kecamatan" class="col-sm-3 col-form-label"> <b>KECAMATAN</b> </label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="ket_kecamatan" name="ket_kecamatan" value="">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="jln" class="col-sm-3 col-form-label"> <b>JALAN</b> </label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="jln" name="jln" value="">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="lat" class="col-sm-3 col-form-label"><b>KOORDINAT</b></label>
                                                <?php include_once('googlemaps.php'); ?>
                                                <div class="col-sm-3">
                                                    <input type="text" class="form-control mt-3" id="lat" name="lat" placeholder="Latitude">
                                                    <input type="text" class="form-control mt-3" id="lng" name="lng" placeholder="Longitude">
                                                </div>
                                            </div>
                                            <div class="card-footer bg-transparent text-center">
                                                <button type="submit" class="btn btn-primary">Input</button>
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