<h6>Pemancar</h6>
<section class="mb-3">
    <div class="card-header mb-4 pl-0" style="color: black; background-color:transparent; font-size:20px;">
        <b>Lokasi Pemancar</b>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label for="alamat_pem">Alamat Pemancar<span class="danger">*</span></label>
                <select name="alamat_pem" id="alamat_pem" class="form-control required" onchange="ShowTextarea()" onclick="changeValue2(this.value);">
                    <?php
                    $kelurahan = "var kelurahan_pem = new Array();\n;";
                    $kecamatan = "var kecamatan_pem = new Array();\n;";
                    $kotamadya = "var kotamadya_pem = new Array();\n;";
                    $telp = "var telp_pem = new Array();\n;";
                    $tinggi_lok = "var tinggi_lok = new Array();\n;";
                    $tinggi_ged = "var tinggi_ged = new Array();\n;";
                    $tinggi_men = "var tinggi_men = new Array();\n;";
                    $latitude = "var latitude = new Array();\n;";
                    $longitude = "var longitude = new Array();\n;";
                    ?>
                    <?php foreach ($pemancar as $pem) : ?>
                        <?php
                        $kelurahan .= "kelurahan_pem['" . $pem['id'] . "'] = {kelurahan_pem:'" . addslashes($pem['kelurahan']) . "'};\n";
                        $kecamatan .= "kecamatan_pem['" . $pem['id'] . "'] = {kecamatan_pem:'" . addslashes($pem['kecamatan']) . "'};\n";
                        $kotamadya .= "kotamadya_pem['" . $pem['id'] . "'] = {kotamadya_pem:'" . addslashes($pem['kotamadya']) . "'};\n";
                        $telp .= "telp_pem['" . $pem['id'] . "'] = {telp_pem:'" . addslashes($pem['telp']) . "'};\n";
                        $tinggi_lok .= "tinggi_lok['" . $pem['id'] . "'] = {tinggi_lok:'" . addslashes($pem['tinggi_lok']) . "'};\n";
                        $tinggi_ged .= "tinggi_ged['" . $pem['id'] . "'] = {tinggi_ged:'" . addslashes($pem['tinggi_ged']) . "'};\n";
                        $tinggi_men .= "tinggi_men['" . $pem['id'] . "'] = {tinggi_men:'" . addslashes($pem['tinggi_men']) . "'};\n";
                        $latitude .= "latitude['" . $pem['id'] . "'] = {latitude:'" . addslashes($pem['latitude']) . "'};\n";
                        $longitude .= "longitude['" . $pem['id'] . "'] = {longitude:'" . addslashes($pem['longitude']) . "'};\n";
                        ?>
                    <?php endforeach; ?>
                </select>
            </div>
            <div id="alamat_pem2" style="display: none">
                <textarea rows="2" class="form-control mb-3 required" name="alamat_pem2" id="alamat_pem2" placeholder="Alamat Pemancar"></textarea>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="kelurahan_pem">Kelurahan</label>
                <input type="text" class="form-control kelurahan_pem required" id="kelurahan_pem" name="kelurahan_pem">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="kecamatan_pem">Kecamatan</label>
                <input type="text" class="form-control kecamatan_pem required" id="kecamatan_pem" name="kecamatan_pem">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="kotamadya_pem">Kotamadya</label>
                <input type="text" class="form-control kotamadya_pem required" id="kotamadya_pem" name="kotamadya_pem">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="telp_pem">Telp</label>
                <input type="text" class="form-control telp_pem" id="telp_pem" name="telp_pem">
            </div>
        </div>
        <div class="col-md-6">
            <label for="tinggi_lok">Tinggi Lokasi</label>
            <div class="input-group">
                <input type="text" class="form-control tinggi_lok required" id="tinggi_lok" name="tinggi_lok">
                <div class="input-group-append">
                    <span class="input-group-text" id="basic-addon2"><b>(M/DPL)</b></span>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <label for="tinggi_men">Tinggi Menara</label>
            <div class="input-group">
                <input type="text" class="form-control tinggi_men required" id="tinggi_men" name="tinggi_men">
                <div class="input-group-append">
                    <span class="input-group-text" id="basic-addon2"><b>(Meter)</b></span>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <label for="tinggi_ged">Tinggi Gedung</label>
            <div class="input-group">
                <input type="text" class="form-control tinggi_ged required" id="tinggi_ged" name="tinggi_ged">
                <div class="input-group-append">
                    <span class="input-group-text" id="basic-addon2"><b>(Meter)</b></span>
                </div>
            </div>
        </div>
        <div class="col-md-6 mt-4">
            <div id="googleMap" style="width:auto;height: 300px;
                                       position: relative;
                                       overflow: hidden;">
            </div>
            <div id="gmaps" style="display: none;">
            </div>
        </div>
        <div class="col-md-6 mt-5">
            <div class="input-group">
                <div class="input-group-append">
                    <span class="input-group-text" id="basic-addon2"><b>Latitude</b></span>
                </div>
                <input type="text" class="form-control required" id="lat" name="lat" placeholder="Latitude">
            </div>
            <div class="input-group mt-4">
                <div class="input-group-append">
                    <span class="input-group-text" id="basic-addon2"><b>Longitude</b></span>
                </div>
                <input type="text" class="form-control required" id="lng" name="lng" placeholder="Longitude">
            </div>
        </div>
    </div>
</section>
<script type="text/javascript">
    <?php
    echo $kelurahan;
    echo $kecamatan;
    echo $kotamadya;
    echo $telp;
    echo $tinggi_lok;
    echo $tinggi_ged;
    echo $tinggi_men;
    echo $latitude;
    echo $longitude;
    ?>

    function changeValue2(id) {
        document.getElementById('kelurahan_pem').value = kelurahan_pem[id].kelurahan_pem;
        document.getElementById('kecamatan_pem').value = kecamatan_pem[id].kecamatan_pem;
        document.getElementById('kotamadya_pem').value = kotamadya_pem[id].kotamadya_pem;
        document.getElementById('telp_pem').value = telp_pem[id].telp_pem;
        document.getElementById('tinggi_lok').value = tinggi_lok[id].tinggi_lok;
        document.getElementById('tinggi_ged').value = tinggi_ged[id].tinggi_ged;
        document.getElementById('tinggi_men').value = tinggi_men[id].tinggi_men;
        document.getElementById('lat').value = latitude[id].latitude;
        document.getElementById('lng').value = longitude[id].longitude;
    };

    function ShowTextarea() {
        var alamat_pem = document.getElementById("alamat_pem");
        var alamat_pem2 = document.getElementById("alamat_pem2");
        var gmaps = document.getElementById("gmaps");
        var googleMap = document.getElementById("googleMap");
        if (alamat_pem.value == "Y") {
            alamat_pem2.style.display = "block"
            gmaps.style.display = "none"
            googleMap.style.display = "block"
            alamat_pem.style.backgroundColor = "#bfbfbf"
            alamat_pem.style.color = "white"
            document.getElementById("kelurahan_pem").value = "";
            document.getElementById("kecamatan_pem").value = "";
            document.getElementById("kotamadya_pem").value = "";
            document.getElementById("telp_pem").value = "";
            document.getElementById("tinggi_lok").value = "";
            document.getElementById("tinggi_men").value = "";
            document.getElementById("tinggi_ged").value = "";
            document.getElementById("latitude").value = "";
            document.getElementById("longitude").value = "";
        } else if (alamat_pem.value == "") {
            alamat_pem2.style.display = "none"
            gmaps.style.display = "none"
            googleMap.style.display = "block"
            alamat_pem.style.backgroundColor = "white"
            alamat_pem.style.color = "black"
            document.getElementById("kelurahan_pem").value = "";
            document.getElementById("kecamatan_pem").value = "";
            document.getElementById("kotamadya_pem").value = "";
            document.getElementById("telp_pem").value = "";
            document.getElementById("tinggi_lok").value = "";
            document.getElementById("tinggi_men").value = "";
            document.getElementById("tinggi_ged").value = "";
            document.getElementById("latitude").value = "";
            document.getElementById("longitude").value = "";
        } else {
            gmaps.style.display = "block"
            googleMap.style.display = "none"
            alamat_pem2.style.display = "none"
            alamat_pem.style.backgroundColor = "white"
            alamat_pem.style.color = "black"
        }
    }
</script>