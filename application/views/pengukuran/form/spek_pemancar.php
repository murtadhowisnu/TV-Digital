<h6>Spesifikasi</h6>
<section>
    <div class="card-header mb-4 pl-0" style="color: black; background-color:transparent; font-size:20px;">
        <b>Spesifikasi Pemancar</b>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="merk">Merk</label>
                <select name="merk" id="merk" class="form-control required" onchange="ShowTextarea3()" onclick="changeValue3(this.value);">
                    <?php
                    $jenis = "var jenis = new Array();\n;";
                    $no_seri = "var no_seri = new Array();\n;";
                    $negara = "var negara = new Array();\n;";
                    $tahun = "var tahun = new Array();\n;";
                    $frekuensi = "var frekuensi = new Array();\n;";
                    $kelas_emisi = "var kelas_emisi = new Array();\n;";
                    $bandwith = "var bandwith = new Array();\n;";
                    $kedalaman_mod = "var kedalaman_mod = new Array();\n;";
                    $max_power = "var max_power = new Array();\n;";
                    ?>
                    <?php foreach ($spek_pem as $spk) :  ?>
                        <?php
                        $jenis .= "jenis['" . $spk['id_spek'] . "'] = {jenis:'" . addslashes($spk['jenis']) . "'};\n";
                        $no_seri .= "no_seri['" . $spk['id_spek'] . "'] = {no_seri:'" . addslashes($spk['no_seri']) . "'};\n";
                        $negara .= "negara['" . $spk['id_spek'] . "'] = {negara:'" . addslashes($spk['negara']) . "'};\n";
                        $tahun .= "tahun['" . $spk['id_spek'] . "'] = {tahun:'" . addslashes($spk['tahun']) . "'};\n";
                        $frekuensi .= "frekuensi['" . $spk['id_spek'] . "'] = {frekuensi:'" . addslashes($spk['frekuensi']) . "'};\n";
                        $kelas_emisi .= "kelas_emisi['" . $spk['id_spek'] . "'] = {kelas_emisi:'" . addslashes($spk['kelas_emisi']) . "'};\n";
                        $bandwith .= "bandwith['" . $spk['id_spek'] . "'] = {bandwith:'" . addslashes($spk['bandwith']) . "'};\n";
                        $kedalaman_mod .= "kedalaman_mod['" . $spk['id_spek'] . "'] = {kedalaman_mod:'" . addslashes($spk['kedalaman_mod']) . "'};\n";
                        $max_power .= "max_power['" . $spk['id_spek'] . "'] = {max_power:'" . addslashes($spk['max_power']) . "'};\n";
                        ?>
                    <?php endforeach; ?>
                </select>
                <input type="text" class="form-control mb-3 mt-3 required" style="display: none;" name="merk2" id="merk2" placeholder="Merk">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="jenis">Jenis/Tipe</label>
                <input type="text" class="form-control required" id="jenis" name="jenis">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="no_seri">Nomor Seri</label>
                <input type="text" class="form-control" id="no_seri" name="no_seri">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="negara">Negara Pembuat</label>
                <input type="text" class="form-control" id="negara" name="negara">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="tahun">Tahun Pembuatan</label>
                <input type="text" class="form-control" id="tahun" name="tahun">
            </div>
        </div>
        <div class="col-md-6">
            <label for="frekuensi">Frekuensi</label>
            <div class="input-group">
                <input type="text" class="form-control required" id="frekuensi" name="frekuensi">
                <div class="input-group-append">
                    <span class="input-group-text" id="basic-addon2"><b>(Mhz)</b></span>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="kelas_emisi">Kelas Emisi</label>
                <input type="text" class="form-control required" id="kelas_emisi" name="kelas_emisi">
            </div>
        </div>
        <div class="col-md-6">
            <label for="bandwith">Bandwith</label>
            <div class="input-group">
                <input type="text" class="form-control required" id="bandwith" name="bandwith">
                <div class="input-group-append">
                    <span class="input-group-text" id="basic-addon2"><b>(Khz)</b></span>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <label for="kedalaman_mod">Kedalaman Modulasi</label>
            <div class="input-group">
                <input type="text" class="form-control required" id="kedalaman_mod" name="kedalaman_mod">
                <div class="input-group-append">
                    <span class="input-group-text" id="basic-addon2"><b>(%)</b></span>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <label for="max_power">Max Power</label>
            <div class="input-group">
                <input type="text" class="form-control required" id="max_power" name="max_power">
                <div class="input-group-append">
                    <span class="input-group-text" id="basic-addon2"><b>(Watt)</b></span>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        <?php
        echo $jenis;
        echo $no_seri;
        echo $negara;
        echo $tahun;
        echo $frekuensi;
        echo $kelas_emisi;
        echo $bandwith;
        echo $kedalaman_mod;
        echo $max_power;
        ?>

        function changeValue3(id) {
            document.getElementById('jenis').value = jenis[id].jenis;
            document.getElementById('no_seri').value = no_seri[id].no_seri;
            document.getElementById('negara').value = negara[id].negara;
            document.getElementById('tahun').value = tahun[id].tahun;
            document.getElementById('frekuensi').value = frekuensi[id].frekuensi;
            document.getElementById('kelas_emisi').value = kelas_emisi[id].kelas_emisi;
            document.getElementById('bandwith').value = bandwith[id].bandwith;
            document.getElementById('kedalaman_mod').value = kedalaman_mod[id].kedalaman_mod;
            document.getElementById('max_power').value = max_power[id].max_power;
        };

        function ShowTextarea3() {
            var merk = document.getElementById("merk");
            var merk2 = document.getElementById("merk2");
            if (merk.value == "Y") {
                merk2.style.display = "block"
                merk.style.backgroundColor = "#bfbfbf"
                merk.style.color = "white"
                document.getElementById("jenis").value = "";
                document.getElementById("no_seri").value = "";
                document.getElementById("negara").value = "";
                document.getElementById("tahun").value = "";
                document.getElementById("frekuensi").value = "";
                document.getElementById("kelas_emisi").value = "";
                document.getElementById("bandwith").value = "";
                document.getElementById("kedalaman_mod").value = "";
                document.getElementById("max_power").value = "";
            } else {
                merk2.style.display = "none"
                merk.style.backgroundColor = "white"
                merk.style.color = "black"

            }
        }
    </script>