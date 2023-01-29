<h6>Hasil Ukur</h6>
<section>
    <div class="card-header mb-4 pl-0" style="color: black; background-color:transparent; font-size:20px;">
        <b>Hasil Ukur</b>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group" id="kanal">
            </div>
        </div>
        <div class="col-md-6">
            <label for="freq_terukur">Frekuensi Terukur</label>
            <div class="input-group">
                <input type="text" class="decimal form-control required" id="freq_terukur" name="freq_terukur" onkeyup="sum()">
                <div class="input-group-append">
                    <span class="input-group-text" id="basic-addon2"><b>(Mhz)</b></span>
                </div>
            </div>
            <script>
                function sum() {
                    var freq_terukur = document.getElementById('freq_terukur').value;
                    var freq = document.getElementById('frekuensi').value;
                    var result = parseFloat(freq) - parseFloat(freq_terukur);
                    var result_akhir = result * 1000000;
                    if (!isNaN(result)) {
                        document.getElementById('pergeseran').value = Math.ceil(result_akhir);
                    }

                    var h1_freq = freq * 2;
                    document.getElementById('h1_freq').value = h1_freq;
                    var h2_freq = freq * 3;
                    document.getElementById('h2_freq').value = h2_freq;
                    var h3_freq = freq * 4;
                    document.getElementById('h3_freq').value = h3_freq;
                }
            </script>
        </div>
        <div class="col-md-6 mb-3">
            <label for="pergeseran">Pergeseran</label>
            <div class="input-group">
                <input type="text" class="decimal form-control required" id="pergeseran" name="pergeseran">
                <div class="input-group-append">
                    <span class="input-group-text" id="basic-addon2"><b>(Hz)</b></span>
                </div>
            </div>
        </div>
        <div class="col-md-6 mb-3">
            <label for="level">Level</label>
            <div class="input-group">
                <input type="text" class="decimal form-control required" id="level" name="level">
                <div class="input-group-append">
                    <span class="input-group-text" id="basic-addon2"><b>(dBm)</b></span>
                </div>
            </div>
        </div>
        <div class="col-md-6 mb-3">
            <label for="bandwith_hasil">Bandwith</label>
            <div class="input-group">
                <input type="text" class="decimal form-control required" id="bandwith_hasil" name="bandwith_hasil" onkeyup="lvl_alert()">
                <div class="input-group-append">
                    <span class="input-group-text" id="basic-addon2"><b>(Khz)</b></span>
                </div>
            </div>
            <p id="max_bw" style="color: red; text-align:left" class="ml-0"></p>
            <script>
                function lvl_alert() {
                    var level = document.getElementById('bandwith_hasil').value;
                    var max = 300;
                    if (level >= max) {
                        document.getElementById("max_bw").innerHTML = "Melanggar";
                    } else if (level < max) {
                        document.getElementById("max_bw").innerHTML = "";
                    }
                }
            </script>
        </div>
        <div class="col-md-6 mb-3">
            <label for="field_str">Field Strength</label>
            <div class="input-group">
                <input type="text" class="decimal form-control required" id="field_str" name="field_str">
                <div class="input-group-append">
                    <span class="input-group-text" id="basic-addon2"><b>(dBuV/m)</b></span>
                </div>
            </div>
        </div>
        <div class="col-md-6 mb-3">
            <label for="daya_terukur">Daya Terukur Tx</label>
            <div class="input-group">
                <input type="text" class="decimal form-control required" id="daya_terukur" name="daya_terukur">
                <div class="input-group-append">
                    <span class="input-group-text" id="basic-addon2"><b>(Watt)</b></span>
                </div>
            </div>
            <p id="max_daya" style="color: red; text-align:left" class="ml-0"></p>
        </div>
        <div class="col-md-6 mb-3">
            <label for="deviasi_freq">Deviasi Frekuensi</label>
            <div class="input-group">
                <input type="text" class="decimal form-control required" id="deviasi_freq" name="deviasi_freq" onkeyup="max_dev()">
                <div class="input-group-append">
                    <span class="input-group-text" id="basic-addon2"><b>(Khz)</b></span>
                </div>
                <script>
                    function max_dev() {
                        var deviasi = document.getElementById('deviasi_freq').value;
                        var max = 75;
                        if (deviasi >= max) {
                            document.getElementById("max_deviasi").innerHTML = "Melanggar";
                        } else if (deviasi < max) {
                            document.getElementById("max_deviasi").innerHTML = "";
                        }
                        var hasil = parseInt(deviasi) / 75 * 100;
                        if (!isNaN(hasil)) {
                            document.getElementById('mod').value = Math.round(hasil);
                        }
                    }
                </script>
                <p id="max_deviasi" style="color: red; text-align:left" class="ml-0"></p>
            </div>
        </div>
        <div class="col-md-6 mb-3">
            <label for="mod">Kedalaman Modulasi</label>
            <div class="input-group">
                <input type="text" class="decimal form-control required" id="mod" name="mod">
                <div class="input-group-append">
                    <span class="input-group-text" id="basic-addon2"><b>(%)</b></span>
                </div>
            </div>
        </div>
        <div class="col-md-6 mb-3">
            <label for="erp">ERP</label>
            <div class="input-group">
                <input type="text" class="decimal form-control required" id="erp" name="erp">
                <div class="input-group-append">
                    <span class="input-group-text" id="basic-addon2"><b>(dBm)</b></span>
                </div>
            </div>
        </div>
    </div>

    <div class="card-header mb-1 pl-0 mt-3" style="color: black; background-color:transparent; font-size:20px;">
        <b>Harmonisa 1</b>
    </div>
    <div class="row">
        <div class="col-md-6">
            <label for="h1_freq">Frekuensi</label>
            <div class="input-group">
                <input type="text" class="decimal form-control required" id="h1_freq" name="h1_freq">
                <div class="input-group-append">
                    <span class="input-group-text" id="basic-addon2"><b>(Mhz)</b></span>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <label for="h1_level">Level</label>
            <div class="input-group">
                <input type="text" class="decimal form-control required" id="h1_level" name="h1_level">
                <div class="input-group-append">
                    <span class="input-group-text" id="basic-addon2"><b>(dB)</b></span>
                </div>
            </div>
            <p id="max_lvl1" style="color: red; text-align:left" class="ml-0"></p>
        </div>
    </div>

    <div class="card-header mb-1 pl-0 mt-3" style="color: black; background-color:transparent; font-size:20px;">
        <b>Harmonisa 2</b>
    </div>
    <div class="row">
        <div class="col-md-6">
            <label for="h2_freq">Frekuensi</label>
            <div class="input-group">
                <input type="text" class="decimal form-control required" id="h2_freq" name="h2_freq">
                <div class="input-group-append">
                    <span class="input-group-text" id="basic-addon2"><b>(Mhz)</b></span>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <label for="h2_level">Level</label>
            <div class="input-group">
                <input type="text" class="decimal form-control required" id="h2_level" name="h2_level">
                <div class="input-group-append">
                    <span class="input-group-text" id="basic-addon2"><b>(dB)</b></span>
                </div>
            </div>
            <p id="max_lvl2" style="color: red; text-align:left" class="ml-0"></p>
        </div>
    </div>

    <div class="card-header mb-1 pl-0 mt-3" style="color: black; background-color:transparent; font-size:20px;">
        <b>Harmonisa 3</b>
    </div>
    <div class="row">
        <div class="col-md-6">
            <label for="h3_freq">Frekuensi</label>
            <div class="input-group">
                <input type="text" class="decimal form-control required" id="h3_freq" name="h3_freq">
                <div class="input-group-append">
                    <span class="input-group-text" id="basic-addon2"><b>(Mhz)</b></span>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <label for="h3_level">Level</label>
            <div class="input-group">
                <input type="text" class="decimal form-control required" id="h3_level" name="h3_level">
                <div class="input-group-append">
                    <span class="input-group-text" id="basic-addon2"><b>(dB)</b></span>
                </div>
            </div>
            <p id="max_lvl3" style="color: red; text-align:left" class="ml-0"></p>
        </div>
    </div>

    <hr class="mt-3">
    <div style="margin-bottom:20px;">
        <h5><b>Input Hasil Scan</b></h5>
        <small style="color:red" class="ml-2">*Ekstensi File : .jpg / .png / .bmp</small>
    </div>

    <div class="row">
        <div class="col-md-6 mb-3">
            <label for="image_freq">Input Scan Frekuensi</label>
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="image_freq" name="image_freq" accept="image/*">
                <label class="custom-file-label" for="image">Choose file</label>
            </div>
        </div>
        <div class="col-md-6 mb-3">
            <label for="image_geser">Input Scan Pergeseran</label>
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="image_geser" name="image_geser" accept="image/*">
                <label class="custom-file-label" for="image">Choose file</label>
            </div>
        </div>
        <div class="col-md-6 mb-3">
            <label for="image_bw">Input Scan Bandwith</label>
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="image_bw" name="image_bw" accept="image/*">
                <label class="custom-file-label" for="image">Choose file</label>
            </div>
        </div>
        <div class="col-md-6 mb-3">
            <label for="image_field">Input Scan Field Strength</label>
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="image_field" name="image_field" accept="image/*">
                <label class="custom-file-label" for="image">Choose file</label>
            </div>
        </div>
        <div class="col-md-6 mb-3">
            <label for="image_deviasi">Input Scan Deviasi</label>
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="image_deviasi" name="image_deviasi" accept="image/*">
                <label class="custom-file-label" for="image">Choose file</label>
            </div>
        </div>
        <div class="col-md-6 mb-3">
            <label for="image_harmonisa1">Input Scan Harmonisa 1</label>
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="image_harmonisa1" name="image_harmonisa1" accept="image/*">
                <label class="custom-file-label" for="image">Choose file</label>
            </div>
        </div>
        <div class="col-md-6 mb-3">
            <label for="image_harmonisa2">Input Scan Harmonisa 2</label>
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="image_harmonisa2" name="image_harmonisa2" accept="image/*">
                <label class="custom-file-label" for="image">Choose file</label>
            </div>
        </div>
        <div class="col-md-6 mb-3">
            <label for="image_harmonisa3">Input Scan Harmonisa 3</label>
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="image_harmonisa3" name="image_harmonisa3" accept="image/*">
                <label class="custom-file-label" for="image">Choose file</label>
            </div>
        </div>
    </div>

</section>