<h6>Penyelenggara</h6>
<section>
    <div class="card-header mb-4 pl-0" style="color: black; background-color:transparent; font-size:20px;">
        <b>Stasiun Radio Siaran</b>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="form-group">
                <label for="penyelenggara">Penyelenggara<span class="danger">*</span></label>
                <select class="form-control required" id="penyelenggara" name="penyelenggara" onchange="ShowTextarea2()" onclick="changeValue(this.value);">
                    <?php
                    $a = "var alamat = new Array();\n;";
                    $b = "var kelurahan = new Array();\n;";
                    $c = "var kecamatan = new Array();\n;";
                    $d = "var kotamadya = new Array();\n;";
                    $e = "var telp = new Array();\n;";
                    $f = "var email = new Array();\n;";
                    $g = "var nama_stasiun = new Array();\n;";
                    // $c = "var frekuensi = new Array();\n;";
                    ?>
                    <?php foreach ($stasiun as $ci) : ?>
                        <?php
                        $a .= "alamat['" . $ci['id'] . "'] = {alamat:'" . addslashes($ci['alamat']) . "'};\n";
                        $b .= "kelurahan['" . $ci['id'] . "'] = {kelurahan:'" . addslashes($ci['kelurahan']) . "'};\n";
                        $c .= "kecamatan['" . $ci['id'] . "'] = {kecamatan:'" . addslashes($ci['kecamatan']) . "'};\n";
                        $d .= "kotamadya['" . $ci['id'] . "'] = {kotamadya:'" . addslashes($ci['kotamadya']) . "'};\n";
                        $e .= "telp['" . $ci['id'] . "'] = {telp:'" . addslashes($ci['telp']) . "'};\n";
                        $f .= "email['" . $ci['id'] . "'] = {email:'" . addslashes($ci['email']) . "'};\n";
                        $g .= "nama_stasiun['" . $ci['id'] . "'] = {nama_stasiun:'" . addslashes($ci['nama_stasiun']) . "'};\n";
                        ?>
                    <?php endforeach; ?>
                </select>
                <input type="hidden" name="nama_stasiun" id="nama_stasiun">
            </div>
            <div id="penyelenggara2" class="ol-md-6" style="display: none">
                <div class="form-group">
                    <input type="text" class="form-control mb-3 required" name="penyelenggara2" id="penyelenggara2" placeholder="Penyelenggara">
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea rows="2" class="form-control alamat required" id="alamat" name="alamat"></textarea>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="kelurahan">Kelurahan</label>
                <input type="text" class="form-control kelurahan required" id="kelurahan" name="kelurahan">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="kecamatan">Kecamatan</label>
                <input type="text" class="form-control kecamatan required" id="kecamatan" name="kecamatan">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="kotamadya">Kotamadya</label>
                <input type="text" class="form-control kotamadya required" id="kotamadya" name="kotamadya">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="telp">Telp</label>
                <input type="text" class="form-control telp" id="telp" name="telp">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control email" id="email" name="email">
            </div>
        </div>
    </div>
</section>

<script type="text/javascript">
    <?php
    echo $a;
    echo $b;
    echo $c;
    echo $d;
    echo $e;
    echo $f;
    echo $g;
    ?>

    function changeValue(id) {
        document.getElementById('alamat').value = alamat[id].alamat;
        document.getElementById('kelurahan').value = kelurahan[id].kelurahan;
        document.getElementById('kecamatan').value = kecamatan[id].kecamatan;
        document.getElementById('kotamadya').value = kotamadya[id].kotamadya;
        document.getElementById('telp').value = telp[id].telp;
        document.getElementById('email').value = email[id].email;
        document.getElementById('nama_stasiun').value = nama_stasiun[id].nama_stasiun;
    };

    function ShowTextarea2() {
        var penyelenggara = document.getElementById("penyelenggara");
        var penyelenggara2 = document.getElementById("penyelenggara2");
        if (penyelenggara.value == "Y") {
            penyelenggara2.style.display = "block"
            penyelenggara.style.backgroundColor = "#bfbfbf"
            penyelenggara.style.color = "white"
            document.getElementById("alamat").value = "";
            document.getElementById("kelurahan").value = "";
            document.getElementById("kecamatan").value = "";
            document.getElementById("kotamadya").value = "";
            document.getElementById("telp").value = "";
            document.getElementById("email").value = "";
        } else {
            penyelenggara2.style.display = "none"
            penyelenggara.style.backgroundColor = "white"
            penyelenggara.style.color = "black"

        }
    }
</script>