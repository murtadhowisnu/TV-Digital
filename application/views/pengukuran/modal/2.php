<!-- Modal -->
<div class="modal fade" id="editModal2" tabindex="-1" aria-labelledby="newSubMenuModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Nama Stasiun Radio Siaran</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('pengukuran/edit2'); ?>" method="POST">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="penyelenggara"><b>Penyelenggara</b></label>
                        <input type="text" class="form-control" id="penyelenggara" name="penyelenggara" placeholder="Penyelenggara" value="<?= $detail['nama_stasiun']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="alamat"><b>Alamat</b></label>
                        <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat" value="<?= $detail['alamat']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="kelurahan"><b>Kelurahan</b></label>
                        <input type="text" class="form-control" id="kelurahan" name="kelurahan" placeholder="Kelurahan" value="<?= $detail['kelurahan']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="kecamatan"><b>Kecamatan</b></label>
                        <input type="text" class="form-control" id="kecamatan" name="kecamatan" placeholder="Kecamatan" value="<?= $detail['kecamatan']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="kotamadya"><b>Kotamadya</b></label>
                        <input type="text" class="form-control" id="kotamadya" name="kotamadya" placeholder="Kotamadya" value="<?= $detail['kotamadya']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="telp"><b>Telp/Fax</b></label>
                        <input type="text" class="form-control" id="telp" name="telp" placeholder="Telp/Fax" value="<?= $detail['telp']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="email"><b>Email</b></label>
                        <input type="text" class="form-control" id="email" name="email" placeholder="Email" value="<?= $detail['email']; ?>">
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="hidden" id="id" name="id" value="<?= $detail['no_spt']; ?>">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>