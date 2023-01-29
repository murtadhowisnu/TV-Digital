 <!-- Modal -->
 <div class="modal fade" id="editModal5" tabindex="-1" aria-labelledby="newSubMenuModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Spesifikasi Perangkat<br><b>Antena</b></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('admin/edit5'); ?>" method="POST">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="jenis_ant"><b>Jenis Antena</b></label>
                        <input type="text" class="form-control" id="jenis_ant" name="jenis_ant" placeholder="Jenis Antena" value="<?=$ant['jenis_ant'];?>">
                    </div>
                    <div class="form-group">
                        <label for="polarisasi"><b>Polarisasi</b></label>
                        <input type="text" class="form-control" id="polarisasi" name="polarisasi" placeholder="Polarisasi" value="<?=$ant['polarisasi'];?>">
                    </div>
                    <div class="form-group">
                        <label for="jlh_el"><b>Jumlah Elemen</b></label>
                        <input type="text" class="decimal form-control" id="jlh_el" name="jlh_el" placeholder="Jumlah Elemen" value="<?=$ant['jlh_el'];?>">
                    </div>
                    <div class="form-group">
                        <label for="gain"><b>Gain</b></label>
                        <input type="text" class="decimal form-control" id="gain" name="gain" placeholder="Gain" value="<?=$ant['gain'];?>">
                    </div>
                    <div class="form-group">
                        <label for="beam_ant"><b>Beam Antena</b></label>
                        <input type="text" class="form-control" id="beam_ant" name="beam_ant" placeholder="Beam Antena" value="<?=$ant['beam_ant'];?>">
                    </div>
                    <div class="form-group">
                        <label for="jenis_kabel"><b>Jenis Kabel</b></label>
                        <input type="text" class="form-control" id="jenis_kabel" name="jenis_kabel" placeholder="Jenis Kabel" value="<?=$ant['jenis_kabel'];?>">
                    </div>
                    <div class="form-group">
                        <label for="type_kabel"><b>Type Kabel</b></label>
                        <input type="text" class="form-control" id="type_kabel" name="type_kabel" placeholder="Type Kabel" value="<?=$ant['type_kabel'];?>">
                    </div>
                    <div class="form-group">
                        <label for="panjang_kabel"><b>Panjang Kabel</b></label>
                        <input type="text" class="form-control" id="panjang_kabel" name="panjang_kabel" placeholder="Panjang Kabel" value="<?=$ant['panjang_kabel'];?>">
                    </div>
                </div>


                <div class="modal-footer">
                    <input type="hidden" id="id" name="id" value="<?=$ant['id']; ?>">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>