 <!-- Modal -->
 <div class="modal fade" id="editModal1" tabindex="-1" aria-labelledby="newSubMenuModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('admin/edit1'); ?>" method="POST">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="upt"><b>UPT</b></label>
                        <input type="text" class="form-control" id="upt" name="upt" placeholder="UPT" value="<?=$masuk['upt'];?>">
                    </div>
                    <div class="form-group">
                        <label for="tanggal"><b>Tanggal</b></label>
                        <input type="date" class="form-control" id="tanggal" name="tanggal" placeholder="Tanggal" value="<?=$masuk['tanggal'];?>">
                    </div>
                    <div class="form-group">
                        <label for="provinsi"><b>Provinsi</b></label>
                        <input type="text" class="form-control" id="provinsi" name="provinsi" placeholder="Provinsi" value="<?=$masuk['provinsi'];?>">
                    </div>
                    <div class="form-group">
                        <label for="kabkota"><b>Kab/Kota</b></label>
                        <input type="text" class="form-control" id="kabkota" name="kabkota" placeholder="Kab/Kota" value="<?=$masuk['kabkota'];?>">
                    </div>
                </div>

                <div class="modal-footer">
                    <input type="hidden" id="id" name="id" value="<?=$masuk['id']; ?>">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>