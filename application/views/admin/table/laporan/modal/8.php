 <!-- Modal -->

 <div class="modal fade" id="editModal8" tabindex="-1" aria-labelledby="newSubMenuModalLabel" aria-hidden="true">

    <div class="modal-dialog">

        <div class="modal-content">

            <div class="modal-header">

                <h5 class="modal-title" id="exampleModalLabel">Edit OPSI TAMBAHAN</b></h5>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                    <span aria-hidden="true">&times;</span>

                </button>

            </div>

            <form action="<?= base_url('admin/edit8'); ?>" method="POST">
                <div class="modal-body">
                    <!-- <div class="form-group">
                        <label for="stl"><b>Studio To Transmitter Link</b></label>
                        <input type="text" class="form-control" id="stl" name="stl" placeholder="Studio To Transmitter Link" value="<?=$ket_a['stl'];?>">
                    </div> -->
                    <div class="form-group">
                        <label for="no_spt"><b>No SPT</b></label>
                        <input type="text" class="form-control" id="no_spt" name="no_spt" placeholder="No SPT" value="<?=$ket_a['no_spt'];?>">
                    </div>
                    <div class="form-group">
                        <label for="tgl_spt"><b>Tanggal SPT</b></label>
                        <input type="date" class="form-control" id="tgl_spt" name="tgl_spt" placeholder="Tanggal SPT" value="<?=$ket_a['tgl_spt'];?>">
                    </div>
                    <div class="form-group">
                        <label for="jenis_sbk"><b>Jenis SBK</b></label>
                        <input type="text" class="form-control" id="jenis_sbk" name="jenis_sbk" placeholder="Jenis SBK" value="<?=$ket_a['jenis_sbk'];?>">
                    </div>
                    <div class="form-group">
                        <label for="ket_kecamatan"><b>Kecamatan</b></label>
                        <input type="text" class="form-control" id="ket_kecamatan" name="ket_kecamatan" placeholder="Kecamatan" value="<?=$ket_a['ket_kecamatan'];?>">
                    </div>
                    <div class="form-group">
                        <label for="jln"><b>Jalan</b></label>
                        <input type="text" class="form-control" id="jln" name="jln" placeholder="Jalan" value="<?=$ket_a['jln'];?>">
                    </div>
                    <div class="form-group">
                        <label for="ket_lat"><b>Latitude</b></label>
                        <input type="text" class="form-control" id="ket_lat" name="ket_lat" placeholder="Jalan" value="<?=$ket_a['ket_lat'];?>">
                    </div>
                    <div class="form-group">
                        <label for="ket_lng"><b>Longitude</b></label>
                        <input type="text" class="form-control" id="ket_lng" name="ket_lng" placeholder="Jalan" value="<?=$ket_a['ket_lng'];?>">
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="hidden" id="id" name="id" value="<?=$ket_a['id']; ?>">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </form>
        </div>

    </div>

</div>