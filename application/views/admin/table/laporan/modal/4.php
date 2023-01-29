 <!-- Modal -->
 <div class="modal fade" id="editModal4" tabindex="-1" aria-labelledby="newSubMenuModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Spesifikasi Perangkat<br><b>Pemancar</b></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('admin/edit4'); ?>" method="POST">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="merk"><b>Merk</b></label>
                        <input type="text" class="form-control" id="merk" name="merk" placeholder="Merk" value="<?=$spek['merk'];?>">
                    </div>
                    <div class="form-group">
                        <label for="jenis"><b>Jenis/Type</b></label>
                        <input type="text" class="form-control" id="jenis" name="jenis" placeholder="Jenis/Type" value="<?=$spek['jenis'];?>">
                    </div>
                    <div class="form-group">
                        <label for="seri"><b>No Seri</b></label>
                        <input type="text" class="form-control" id="seri" name="seri" placeholder="Nomor Seri" value="<?=$spek['seri'];?>">
                    </div>
                    <div class="form-group">
                        <label for="negara_pem"><b>Negara Pembuat</b></label>
                        <input type="text" class="form-control" id="negara_pem" name="negara_pem" placeholder="Negara Pembuat" value="<?=$spek['negara_pem'];?>">
                    </div>
                    <div class="form-group">
                        <label for="tahun_pem"><b>Tahun Pembuatan</b></label>
                        <input type="text" class="form-control" id="tahun_pem" name="tahun_pem" placeholder="Tahun Pembuatan" value="<?=$spek['tahun_pem'];?>">
                    </div>
                    <div class="form-group">
                        <label for="freq"><b>Frekuensi</b></label>
                        <input type="text" class=" decimal form-control" id="freq" name="freq" placeholder="Frekuensi" value="<?=$spek['freq'];?>">
                    </div>
                    <div class="form-group">
                        <label for="kelas_em"><b>Kelas Emisi</b></label>
                        <input type="text" class="form-control" id="kelas_em" name="kelas_em" placeholder="Kelas Emisi" value="<?=$spek['kelas_em'];?>">
                    </div>
                    <div class="form-group">
                        <label for="bw"><b>Bandwith</b></label>
                        <input type="text" class="decimal form-control" id="bw" name="bw" placeholder="Bandwith" value="<?=$spek['bw'];?>">
                    </div>
                    <div class="form-group">
                        <label for="dalam"><b>Kedalaman Modulasi</b></label>
                        <input type="text" class="decimal form-control" id="dalam" name="dalam" placeholder="Kedalaman Modulasi" value="<?=$spek['dalam'];?>">
                    </div>
                    <div class="form-group">
                        <label for="max_p"><b>Max Power</b></label>
                        <input type="text" class="decimal form-control" id="max_p" name="max_p" placeholder="Max Power" value="<?=$spek['max_p'];?>">
                    </div>
                </div>


                <div class="modal-footer">
                    <input type="hidden" id="id" name="id" value="<?=$spek['id']; ?>">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>