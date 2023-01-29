<h6>SPT</h6>
<section>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="stl">STUDIO-TO-TRANSMITTER LINK (STL)</label>
                <input type="text" class="form-control required" id="stl" name="stl" value="SATELIT">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="no_spt">No. SPT</label>
                <input type="text" class="form-control required" id="no_spt" name="no_spt">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="tgl_spt">Tanggal SPT</label>
                <input type="date" class="form-control required" id="tgl_spt" name="tgl_spt">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="jenis_sbk">Jenis SBK</label>
                <input type="text" class="form-control required" id="jenis_sbk" name="jenis_sbk" value="PENGUKURAN">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="spt_kecamatan">Kecamatan</label>
                <input type="text" class="form-control required" id="spt_kecamatan" name="spt_kecamatan">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="spt_alamat">Alamat</label>
                <input type="text" class="form-control required" id="spt_alamat" name="spt_alamat">
            </div>
        </div>
        <div class="col-md-6 mt-4">
            <div id="gmaps_spt">
            </div>
        </div>
        <div class="col-md-6 mt-5">
            <div class="input-group">
                <div class="input-group-append">
                    <span class="input-group-text" id="basic-addon2"><b>Latitude</b></span>
                </div>
                <input type="text" class="form-control required" id="spt_lat" name="spt_lat" placeholder="Latitude">
            </div>
            <div class="input-group mt-4">
                <div class="input-group-append">
                    <span class="input-group-text" id="basic-addon2"><b>Longitude</b></span>
                </div>
                <input type="text" class="form-control required" id="spt_lng" name="spt_lng" placeholder="Longitude">
            </div>
        </div>
    </div>
</section>