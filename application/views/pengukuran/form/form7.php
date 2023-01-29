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
                                        <form action="<?= base_url('form/form7'); ?>" method="POST" onsubmit="return confirm('Data Sudah Lengkap?');" enctype="multipart/form-data">
                                            <div class="card-header pl-0" style="color: black; background-color:transparent; font-size:20px;">
                                                <b>Hasil Ukur</b>
                                            </div>
                                            <div class="card-header mb-4 pl-2" style="color: red; background-color:transparent; font-size:15px;">
                                                <b>Harmonisa 1 </b>
                                            </div>
                                            <div class="form-group row">
                                                <label for="h1_freq" class="col-sm-3 col-form-label">Frekuensi</label>
                                                <div class="col-sm-5">
                                                    <input type="text" class="decimal form-control" id="h1_freq" name="h1_freq" value="">
                                                    <script>
                                                        var freq = <?= $geser['freq'] ?>;
                                                        var result = freq * 2;
                                                        if (!isNaN(result)) {
                                                            document.getElementById('h1_freq').value = result;
                                                        }
                                                    </script>
                                                </div>
                                                <div class="col-sm-2">
                                                    <b>MHz</b>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="h1_level" class="col-sm-3 col-form-label">Level</label>
                                                <div class="col-sm-5">
                                                    <input type="text" class="decimal form-control" id="h1_level" name="h1_level" value="" onkeyup="lvl_alert()">
                                                    <script>
                                                        function lvl_alert() {
                                                            var level = document.getElementById('h1_level').value;
                                                            var max = 60;
                                                            if (level <= max) {
                                                                document.getElementById("alert").innerHTML = "Melanggar";
                                                            } else if (level > max) {
                                                                document.getElementById("alert").innerHTML = "";
                                                            }
                                                        }
                                                    </script>
                                                </div>
                                                <div class="col-sm-2">
                                                    <b>dB</b>
                                                </div>
                                                <div class="col-sm-2">
                                                    <p id="alert" style="color: red; text-align:left" class="ml-0"></p>
                                                </div>
                                            </div>
                                            <div class="card-header mb-4 pl-2" style="color: red; background-color:transparent; font-size:15px;">
                                                <b>Harmonisa 2 </b>
                                            </div>
                                            <div class="form-group row">
                                                <label for="h2_freq" class="col-sm-3 col-form-label">Frekuensi</label>
                                                <div class="col-sm-5">
                                                    <input type="text" class="decimal form-control" id="h2_freq" name="h2_freq" value="">
                                                    <script>
                                                        var freq = <?= $geser['freq'] ?>;
                                                        var result = freq * 3;
                                                        if (!isNaN(result)) {
                                                            document.getElementById('h2_freq').value = result;
                                                        }
                                                    </script>
                                                </div>
                                                <div class="col-sm-2">
                                                    <b>MHz</b>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="h2_level" class="col-sm-3 col-form-label">Level</label>
                                                <div class="col-sm-5">
                                                    <input type="text" class="decimal form-control" id="h2_level" name="h2_level" value="" onkeyup="lvl_alert2()">
                                                    <script>
                                                        function lvl_alert2() {
                                                            var level = document.getElementById('h2_level').value;
                                                            var max = 60;
                                                            if (level <= max) {
                                                                document.getElementById("alert2").innerHTML = "Melanggar";
                                                            } else if (level > max) {
                                                                document.getElementById("alert2").innerHTML = "";
                                                            }
                                                        }
                                                    </script>
                                                </div>
                                                <div class="col-sm-2">
                                                    <b>dB</b>
                                                </div>
                                                <div class="col-sm-2">
                                                    <p id="alert2" style="color: red; text-align:left" class="ml-0"></p>
                                                </div>
                                            </div>
                                            <div class="card-header mb-4 pl-2" style="color: red; background-color:transparent; font-size:15px;">
                                                <b>Harmonisa 3 </b>
                                            </div>
                                            <div class="form-group row">
                                                <label for="h2_freq" class="col-sm-3 col-form-label">Frekuensi</label>
                                                <div class="col-sm-5">
                                                    <input type="text" class="decimal form-control" id="h3_freq" name="h3_freq" value="">
                                                    <script>
                                                        var freq = <?= $geser['freq'] ?>;
                                                        var result = freq * 4;
                                                        if (!isNaN(result)) {
                                                            document.getElementById('h3_freq').value = result;
                                                        }
                                                    </script>
                                                </div>
                                                <div class="col-sm-2">
                                                    <b>MHz</b>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="h3_level" class="col-sm-3 col-form-label">Level</label>
                                                <div class="col-sm-5">
                                                    <input type="text" class="decimal form-control" id="h3_level" name="h3_level" value="" onkeyup="lvl_alert3()">
                                                    <script>
                                                        function lvl_alert3() {
                                                            var level = document.getElementById('h3_level').value;
                                                            var max = 60;
                                                            if (level < max) {
                                                                document.getElementById("alert3").innerHTML = "Melanggar";
                                                            } else if (level > max) {
                                                                document.getElementById("alert3").innerHTML = "";
                                                            }
                                                        }
                                                    </script>
                                                </div>
                                                <div class="col-sm-2">
                                                    <b>dB</b>
                                                </div>
                                                <div class="col-sm-2">
                                                    <p id="alert3" style="color: red; text-align:left" class="ml-0"></p>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="form-group row">
                                                <label class="col-sm-4 col-form-label">Input Scan Harmonisa 1</label>
                                                <div class="custom-file col-sm-4 ml-2">
                                                    <input type="file" class="custom-file-input" id="image6" name="image6" accept="image/*">
                                                    <label class="custom-file-label" for="image6">Choose file</label>
                                                </div>
                                                <div class="col-sm-4"></div>
                                                <div class="col-sm-4">
                                                    <small style="color:red">*Ekstensi File : .jpg / .png / .bmp</small>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-4 col-form-label">Input Scan Harmonisa 2</label>
                                                <div class="custom-file col-sm-4 ml-2">
                                                    <input type="file" class="custom-file-input" id="image7" name="image7" accept="image/*">
                                                    <label class="custom-file-label" for="image7">Choose file</label>
                                                </div>
                                                <div class="col-sm-4"></div>
                                                <div class="col-sm-4">
                                                    <small style="color:red">*Ekstensi File : .jpg / .png / .bmp</small>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-4 col-form-label">Input Scan Harmonisa 3</label>
                                                <div class="custom-file col-sm-4 ml-2">
                                                    <input type="file" class="custom-file-input" id="image8" name="image8" accept="image/*">
                                                    <label class="custom-file-label" for="image8">Choose file</label>
                                                </div>
                                                <div class="col-sm-4"></div>
                                                <div class="col-sm-4">
                                                    <small style="color:red">*Ekstensi File : .jpg / .png / .bmp</small>
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