<h6>Keterangan</h6>
<section>
    <div class="card-header mb-4 pl-0" style="color: black; background-color:transparent; font-size:20px;">
        <b>Keterangan Pengukuran</b>
    </div>
    <!-- Step 1 -->
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="upt">UPT</label>
                <input type="text" class="form-control" id="upt" name="upt" value="Balai Monitor Kelas II Pontianak">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="tanggal">Tanggal<span class="danger">*</span> </label>
                <input type="date" class="form-control required" id="tanggal" name="tanggal">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="provinsi">Provinsi</label>
                <input type="text" class="form-control" id="provinsi" name="provinsi" value="Kalimantan Barat">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="kabkota">Kab/Kota<span class="danger">*</span></label>
                <select class="form-control required" name="kabkota" id="kabkota">
                    <option value="">Pilih Kabupaten/Kota</option>
                    <?php foreach ($kabkota as $ci) : ?>
                        <option value="<?= $ci['id_kab']; ?>"><?= $ci['nama_kab']; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>
    </div>
</section>