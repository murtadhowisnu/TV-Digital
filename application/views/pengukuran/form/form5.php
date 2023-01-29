<body onload="initialize()">
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
                                        <form action="<?= base_url('form/form5'); ?>" method="POST" onsubmit="return confirm('Data Sudah Lengkap?');">
                                            <div class="card-header pl-0" style="color: black; background-color:transparent; font-size:20px;">
                                                <b>Spesifikasi Perangkat</b>
                                            </div>
                                            <div class="card-header mb-4 pl-2" style="color: Green; background-color:transparent; font-size:15px;">
                                                <b>Antena</b>
                                            </div>
                                            <div class="form-group row">
                                                <label for="jenis_ant" class="col-sm-3 col-form-label">Jenis Antenna</label>
                                                <div class="col-sm-7">
                                                    <input type="text" class="form-control" id="jenis_ant" name="jenis_ant" value="">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="pol" class="col-sm-3 col-form-label">Polarisasi</label>
                                                <div class="col-sm-7">
                                                    <input type="text" class="form-control" id="pol" name="pol" value="">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="jlh_el" class="col-sm-3 col-form-label">Jumlah Elemen</label>
                                                <div class="col-sm-7">
                                                    <input type="text" class="decimal form-control" id="jlh_el" name="jlh_el" value="">
                                                </div>
                                                <div class="col-sm-2">
                                                    <b>Bay</b>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="gain" class="col-sm-3 col-form-label">Gain</label>
                                                <div class="col-sm-7">
                                                    <input type="text" class="decimal form-control" id="gain" name="gain" value="">
                                                </div>
                                                <div class="col-sm-2">
                                                    <b>dB</b>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="beam_ant" class="col-sm-3 col-form-label">Beam Antenna/Arah</label>
                                                <div class="col-sm-7">
                                                    <input type="text" class="form-control" id="beam_ant" name="beam_ant" value="">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="jenis_kabel" class="col-sm-3 col-form-label">Jenis Kabel/Feeder</label>
                                                <div class="col-sm-7">
                                                    <input type="text" class="form-control" id="jenis_kabel" name="jenis_kabel" value="" list="input">
                                                    <datalist id="input">
                                                        <option>COAXIAL</option>
                                                    </datalist>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="type_kabel" class="col-sm-3 col-form-label">Type Kabel</label>
                                                <div class="col-sm-7">
                                                    <input type="text" class="form-control" id="type_kabel" name="type_kabel" value="" list="input2">
                                                    <datalist id="input2">
                                                        <option>HeliaxLDF 7/8</option>
                                                    </datalist>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="panjang_kabel" class="col-sm-3 col-form-label">Panjang Kabel/Feeder</label>
                                                <div class="col-sm-7">
                                                    <input type="text" class="decimal form-control" id="panjang_kabel" name="panjang_kabel" value="">
                                                </div>
                                                <div class="col-sm-2">
                                                    <b>Meter</b>
                                                </div>
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