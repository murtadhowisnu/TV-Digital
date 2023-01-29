 <!-- Modal -->
 <div class="modal fade" id="editModal7" tabindex="-1" aria-labelledby="newSubMenuModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Harmonisa</b></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('admin/edit7'); ?>" method="POST">
                <div class="modal-body">
                    <h5><b>H1</b></h5> <hr>
                    <div class="form-group">
                        <label for="h1_freq"><b>Frekuensi</b></label>
                        <input type="text" class="form-control" id="h1_freq" name="h1_freq" placeholder="Frekuensi" value="<?=$harmonisa['h1_freq'];?>">
                    </div>
                    <div class="form-group">
                        <label for="h1_level"><b>Level</b></label>
                        <input type="text" class="form-control" id="h1_level" name="h1_level" placeholder="Level" value="<?=$harmonisa['h1_level'];?>">
                    </div>
                    <h5><b>H2</b></h5> <hr>
                    <div class="form-group">
                        <label for="h2_freq"><b>Frekuensi</b></label>
                        <input type="text" class="form-control" id="h2_freq" name="h2_freq" placeholder="Frekuensi" value="<?=$harmonisa['h2_freq'];?>">
                    </div>
                    <div class="form-group">
                        <label for="h2_level"><b>Level</b></label>
                        <input type="text" class="form-control" id="h2_level" name="h2_level" placeholder="Level" value="<?=$harmonisa['h2_level'];?>">
                    </div>
                    <h5><b>H3</b></h5> <hr>
                    <div class="form-group">
                        <label for="h3_freq"><b>Frekuensi</b></label>
                        <input type="text" class="form-control" id="h3_freq" name="h3_freq" placeholder="Frekuensi" value="<?=$harmonisa['h3_freq'];?>">
                    </div>
                    <div class="form-group">
                        <label for="h3_level"><b>Level</b></label>
                        <input type="text" class="form-control" id="h3_level" name="h3_level" placeholder="Level" value="<?=$harmonisa['h3_level'];?>">
                    </div>
                </div>


                <div class="modal-footer">
                    <input type="hidden" id="id" name="id" value="<?=$harmonisa['id']; ?>">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>