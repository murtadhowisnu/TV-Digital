<div class="card-header mb-4 pl-0 mt-4" style="color: black; background-color:transparent; font-size:20px;">
    <b>Spesifikasi Antena</b>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="jenis_ant">Jenis Antenna</label>
            <select name="jenis_ant" id="jenis_ant" class="form-control required" onchange="ShowTextarea4()" onclick="changeValue4(this.value);">
                <?php
                $polarisasi = "var polarisasi = new Array();\n;";
                $elemen = "var elemen = new Array();\n;";
                $gain = "var gain = new Array();\n;";
                $beam = "var beam = new Array();\n;";
                $jenis_kabel = "var jenis_kabel = new Array();\n;";
                $tipe_kabel = "var tipe_kabel = new Array();\n;";
                $panjang_kabel = "var panjang_kabel = new Array();\n;";
                ?>
                <?php foreach ($spek_ant as $spt) :  ?>
                    <?php
                    $polarisasi .= "polarisasi['" . $spt['id_spek'] . "'] = {polarisasi:'" . addslashes($spt['polarisasi']) . "'};\n";
                    $elemen .= "elemen['" . $spt['id_spek'] . "'] = {elemen:'" . addslashes($spt['elemen']) . "'};\n";
                    $gain .= "gain['" . $spt['id_spek'] . "'] = {gain:'" . addslashes($spt['gain']) . "'};\n";
                    $beam .= "beam['" . $spt['id_spek'] . "'] = {beam:'" . addslashes($spt['beam']) . "'};\n";
                    $jenis_kabel .= "jenis_kabel['" . $spt['id_spek'] . "'] = {jenis_kabel:'" . addslashes($spt['jenis_kabel']) . "'};\n";
                    $tipe_kabel .= "tipe_kabel['" . $spt['id_spek'] . "'] = {tipe_kabel:'" . addslashes($spt['tipe_kabel']) . "'};\n";
                    $panjang_kabel .= "panjang_kabel['" . $spt['id_spek'] . "'] = {panjang_kabel:'" . addslashes($spt['panjang_kabel']) . "'};\n";
                    ?>
                <?php endforeach; ?>
            </select>
            <input type="text" class="form-control mb-3 mt-3 required" style="display: none;" name="jenis_ant2" id="jenis_ant2" placeholder="Merk">
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="polarisasi">Polarisasi</label>
            <input type="text" class="form-control required" id="polarisasi" name="polarisasi">
        </div>
    </div>
    <div class="col-md-6">
        <label for="elemen">Jumlah Elemen</label>
        <div class="input-group">
            <input type="text" class="form-control required" id="elemen" name="elemen">
            <div class="input-group-append">
                <span class="input-group-text" id="basic-addon2"><b>(Bay)</b></span>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <label for="gain">Gain</label>
        <div class="input-group">
            <input type="text" class="form-control required" id="gain" name="gain">
            <div class="input-group-append">
                <span class="input-group-text" id="basic-addon2"><b>(dB)</b></span>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="beam">Beam Antenna / Arah</label>
            <input type="text" class="form-control required" id="beam" name="beam">
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="jenis_kabel">Jenis Kabel / Feeder</label>
            <input type="text" class="form-control required" id="jenis_kabel" name="jenis_kabel">
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="tipe_kabel">Type Kabel</label>
            <input type="text" class="form-control required" id="tipe_kabel" name="tipe_kabel">
        </div>
    </div>
    <div class="col-md-6">
        <label for="panjang_kabel">Panjang Kabel / Feeder</label>
        <div class="input-group">
            <input type="text" class="form-control required" id="panjang_kabel" name="panjang_kabel">
            <div class="input-group-append">
                <span class="input-group-text" id="basic-addon2"><b>(Meter)</b></span>
            </div>
        </div>
    </div>
</div>
</section>
<script type="text/javascript">
    <?php
    echo $polarisasi;
    echo $elemen;
    echo $gain;
    echo $beam;
    echo $jenis_kabel;
    echo $tipe_kabel;
    echo $panjang_kabel;
    ?>

    function changeValue4(id) {
        document.getElementById('polarisasi').value = polarisasi[id].polarisasi;
        document.getElementById('elemen').value = elemen[id].elemen;
        document.getElementById('gain').value = gain[id].gain;
        document.getElementById('beam').value = beam[id].beam;
        document.getElementById('jenis_kabel').value = jenis_kabel[id].jenis_kabel;
        document.getElementById('tipe_kabel').value = tipe_kabel[id].tipe_kabel;
        document.getElementById('panjang_kabel').value = panjang_kabel[id].panjang_kabel;
    };

    function ShowTextarea4() {
        var jenis_ant = document.getElementById("jenis_ant");
        var jenis_ant2 = document.getElementById("jenis_ant2");
        if (jenis_ant.value == "Y") {
            jenis_ant2.style.display = "block"
            jenis_ant.style.backgroundColor = "#bfbfbf"
            jenis_ant.style.color = "white"
            document.getElementById("polarisasi").value = "";
            document.getElementById("elemen").value = "";
            document.getElementById("gain").value = "";
            document.getElementById("beam").value = "";
            document.getElementById("jenis_kabel").value = "";
            document.getElementById("tipe_kabel").value = "";
            document.getElementById("panjang_kabel").value = "";
        } else {
            jenis_ant2.style.display = "none"
            jenis_ant.style.backgroundColor = "white"
            jenis_ant.style.color = "black"

        }
    }
</script>