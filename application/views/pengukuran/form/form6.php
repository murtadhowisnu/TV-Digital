<body onload="initialize()">
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid">
                <?php
                if ($max1['session'] == $max5['session']) { ?>
                    <h1 class="mt-4 mb-4"><?= $title; ?></h1>
                <?php
                } else if ($max1['session'] != $max8['session']) { ?>
                    <h1 class="mt-4 mb-4"><?= $title; ?></h1>
                    <div class="row">
                        <div class="col-lg-8">
                            <h5 class="mb-3 ml-4 alert alert-danger">Ada Form yang belum terisi sepenuhnya,
                                <a href="<?= base_url('pengukuran/kembali'); ?>" style="color: red;"> Mohon Isi Kembali!</a>
                            </h5>
                        </div>
                    </div>
                <?php } else { ?>
                    <h1 class="mt-4 mb-4"><?= $title; ?></h1> <?php
                                                            }
                                                                ?>
                <div class="card mb-3 ml-4 mb-2" style="max-width: 750px;">
                    <div class="card-header bg-primary" style="color: white;">
                        Form Pengukuran Radio
                    </div>
                    <div class="row no-gutters">
                        <div class="col-md-12">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-12 pr-5 pl-4">
                                        <form action="<?= base_url('form/form6'); ?>" method="POST" onsubmit="return confirm('Data Sudah Lengkap?');" enctype="multipart/form-data">
                                            <div class="card-header mb-3 pl-0" style="color: black; background-color:transparent; font-size:20px;">
                                                <b>Hasil Ukur</b>
                                            </div>
                                            <div class="form-group row">
                                                <label for="kanal" class="col-sm-4 col-form-label">Kanal</label>
                                                <div class="col-sm-4">
                                                    <input type="text" class="form-control" id="kanal" name="kanal" value="<?= $kanal['kanal']; ?>">
                                                </div>
                                                <div class="col-sm-2">
                                                    <p id="field" style="color: red; text-align:left" class="ml-0"></p>
                                                </div>
                                                <div class="col-sm-2">
                                                    <p id="field" style="color: red; text-align:left" class="ml-0"></p>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="freq_terukur" class="col-sm-4 col-form-label">Frekuensi Terukur</label>
                                                <div class="col-sm-4">
                                                    <input type="text" class="decimal form-control" id="freq_terukur" name="freq_terukur" value="" onkeyup="sum()">
                                                    <script>
                                                        function sum() {
                                                            var freq_terukur = document.getElementById('freq_terukur').value;
                                                            var freq = "<?= $geser['freq'] ?>";
                                                            var result = parseFloat(freq) - parseFloat(freq_terukur);
                                                            var result_akhir = result * 100000;
                                                            if (!isNaN(result)) {
                                                                document.getElementById('pergeseran').value = Math.ceil(result_akhir);
                                                            }
                                                        }
                                                    </script>
                                                </div>
                                                <div class="col-sm-2">
                                                    <b>MHz</b>
                                                </div>
                                                <div class="col-sm-2">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="pergeseran" class="col-sm-4 col-form-label">Pergeseran</label>
                                                <div class="col-sm-4">
                                                    <input type="text" class="decimal form-control" id="pergeseran" name="pergeseran" value="">
                                                </div>
                                                <div class="col-sm-2">
                                                    <b>Hz</b>
                                                </div>
                                                <div class="col-sm-2">
                                                    <p id="field" style="color: red; text-align:left" class="ml-0"></p>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="level" class="col-sm-4 col-form-label">Level</label>
                                                <div class="col-sm-4">
                                                    <input type="text" class="decimal form-control" id="level" name="level" value="">
                                                </div>
                                                <div class="col-sm-2">
                                                    <b>dBm</b>
                                                </div>
                                                <div class="col-sm-2">
                                                    <p id="field" style="color: red; text-align:left" class="ml-0"></p>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="bw_hasil" class="col-sm-4 col-form-label">Bandwith</label>
                                                <div class="col-sm-4">
                                                    <input type="text" class="decimal form-control" id="bw_hasil" name="bw_hasil" value="" onkeyup="lvl_alert()">
                                                    <script>
                                                        function lvl_alert() {
                                                            var level = document.getElementById('bw_hasil').value;
                                                            var max = 300;
                                                            if (level >= max) {
                                                                document.getElementById("max_bw").innerHTML = "Melanggar";
                                                            } else if (level < max) {
                                                                document.getElementById("max_bw").innerHTML = "";
                                                            }
                                                        }
                                                    </script>
                                                </div>
                                                <div class="col-sm-2">
                                                    <b>KHz</b>
                                                </div>
                                                <div class="col-sm-2">
                                                    <p id="max_bw" style="color: red; text-align:left" class="ml-0"></p>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="field_str" class="col-sm-4 col-form-label">Field Strength</label>
                                                <div class="col-sm-4">
                                                    <input type="text" class="decimal form-control" id="field_str" name="field_str" value="">
                                                </div>
                                                <div class="col-sm-2">
                                                    <b>dBuV/m</b>
                                                </div>
                                                <div class="col-sm-2">
                                                    <p id="field" style="color: red; text-align:left" class="ml-0"></p>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="daya_ukur" class="col-sm-4 col-form-label">Daya Terukur</label>
                                                <div class="col-sm-4">
                                                    <input type="text" class="decimal form-control" id="daya_ukur" name="daya_ukur" value="" onkeyup="daya_alert()">
                                                    <script>
                                                        function daya_alert() {
                                                            var daya_ukur = document.getElementById('daya_ukur').value;
                                                            var max = <?= $geser['max_p'] ?>;
                                                            if (daya_ukur >= max) {
                                                                document.getElementById("max_daya").innerHTML = "Melanggar";
                                                            } else if (daya_ukur < max) {
                                                                document.getElementById("max_daya").innerHTML = "";
                                                            }
                                                            var result = (10 * Math.log10(daya_ukur) + 30) + <?= $ant['gain'] ?> - 1;
                                                            document.getElementById('erp').value = result.toFixed(2);
                                                        }
                                                    </script>
                                                </div>
                                                <div class="col-sm-2">
                                                    <b>Watt</b>
                                                </div>
                                                <div class="col-sm-2">
                                                    <p id="max_daya" style="color: red; text-align:left" class="ml-0"></p>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="deviasi" class="col-sm-4 col-form-label">Deviasi Frekuensi</label>
                                                <div class="col-sm-4">
                                                    <input type="text" class="decimal form-control" id="deviasi" name="deviasi" value="" onkeyup="max_dev()">
                                                    <script>
                                                        function max_dev() {
                                                            var deviasi = document.getElementById('deviasi').value;
                                                            var max = 75;
                                                            if (deviasi >= max) {
                                                                document.getElementById("max_dev").innerHTML = "Melanggar";
                                                            } else if (deviasi < max) {
                                                                document.getElementById("max_dev").innerHTML = "";
                                                            }
                                                            var result = parseInt(deviasi) / 75 * 100;
                                                            if (!isNaN(result)) {
                                                                document.getElementById('kedalaman_mod').value = Math.round(result);
                                                            }
                                                        }
                                                    </script>
                                                </div>
                                                <div class="col-sm-2">
                                                    <b>KHz</b>
                                                </div>
                                                <div class="col-sm-2">
                                                    <p id="max_dev" style="color: red; text-align:left" class="ml-0"></p>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="kedalaman_mod" class="col-sm-4 col-form-label">Kedalaman Modulasi</label>
                                                <div class="col-sm-4">
                                                    <input type="text" class="decimal form-control" id="kedalaman_mod" name="kedalaman_mod" value="">
                                                </div>
                                                <div class="col-sm-2">
                                                    <b>%</b>
                                                </div>
                                                <div class="col-sm-2">
                                                    <p id="field" style="color: red; text-align:left" class="ml-0"></p>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="erp" class="col-sm-4 col-form-label">ERP</label>
                                                <div class="col-sm-4">
                                                    <input type="text" class="decimal form-control" id="erp" name="erp" value="">
                                                </div>
                                                <div class="col-sm-2">
                                                    <b>dBm</b>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="form-group row">
                                                <label class="col-sm-4 col-form-label">Input Scan Frekuensi</label>
                                                <div class="custom-file col-sm-4 ml-2">
                                                    <input type="file" class="custom-file-input" id="image" name="image" accept="image/*">
                                                    <label class="custom-file-label" for="image">Choose file</label>
                                                </div>
                                                <div class="col-sm-4"></div>
                                                <div class="col-sm-4">
                                                    <small style="color:red">*Ekstensi File : .jpg / .png / .bmp</small>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-4 col-form-label">Input Scan Pergeseran</label>
                                                <div class="custom-file col-sm-4 ml-2">
                                                    <input type="file" class="custom-file-input" id="image2" name="image2" accept="image/*">
                                                    <label class="custom-file-label" for="image2">Choose file</label>
                                                </div>
                                                <div class="col-sm-4"></div>
                                                <div class="col-sm-4">
                                                    <small style="color:red">*Ekstensi File : .jpg / .png / .bmp</small>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-4 col-form-label">Input Scan Bandwith</label>
                                                <div class="custom-file col-sm-4 ml-2">
                                                    <input type="file" class="custom-file-input" id="image3" name="image3" accept="image/*">
                                                    <label class="custom-file-label" for="image3">Choose file</label>
                                                </div>
                                                <div class="col-sm-4"></div>
                                                <div class="col-sm-4">
                                                    <small style="color:red">*Ekstensi File : .jpg / .png / .bmp</small>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-4 col-form-label">Input Scan Field Strength</label>
                                                <div class="custom-file col-sm-4 ml-2">
                                                    <input type="file" class="custom-file-input" id="image4" name="image4" accept="image/*">
                                                    <label class="custom-file-label" for="image4">Choose file</label>
                                                </div>
                                                <div class="col-sm-4"></div>
                                                <div class="col-sm-4">
                                                    <small style="color:red">*Ekstensi File : .jpg / .png / .bmp</small>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-4 col-form-label">Input Scan Deviasi</label>
                                                <div class="custom-file col-sm-4 ml-2">
                                                    <input type="file" class="custom-file-input" id="image5" name="image5" accept="image/*">
                                                    <label class="custom-file-label" for="image5">Choose file</label>
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