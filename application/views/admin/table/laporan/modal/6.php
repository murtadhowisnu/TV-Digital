 <!-- Modal -->
 <div class="modal fade" id="editModal6" tabindex="-1" aria-labelledby="newSubMenuModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Hasil Ukur</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('admin/edit6'); ?>" method="POST">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="kanal"><b>Kanal</b></label>
                        <input type="text" class="form-control" id="kanal" name="kanal" placeholder="Kanal" value="<?=$hasil['kanal'];?>">
                    </div>
                    <div class="form-group">
                        <label for="freq_terukur"><b>Frekuensi Terukur</b></label>
                        <input type="text" class="form-control" id="freq_terukur" name="freq_terukur" placeholder="Frekuensi Terukur" value="<?=$hasil['freq_terukur'];?>" onkeyup="sum()">
                        <script>
                            function sum() {
                                var freq_terukur = document.getElementById('freq_terukur').value;
                                var freq = "<?=$geser['freq']?>";
                                var result = parseFloat(freq) - parseFloat(freq_terukur);
                                    if (!isNaN(result)) {
                                        document.getElementById('pergeseran').value = result;
                                    }
                            }
                        </script>
                    </div>
                    <div class="form-group">
                        <label for="pergeseran"><b>Pergeseran</b></label>
                        <input type="text" class="form-control" id="pergeseran" name="pergeseran" placeholder="Pergeseran" value="<?=$hasil['pergeseran'];?>" readonly>
                    </div>
                    <div class="form-group">
                        <label for="level"><b>Level</b></label>
                        <input type="text" class="form-control" id="level" name="level" placeholder="Level" value="<?=$hasil['level'];?>">
                    </div>
                    <div class="form-group">
                        <label for="bw_hasil"><b>Bandwith</b></label>
                        <input type="text" class="form-control" id="bw_hasil" name="bw_hasil" placeholder="Bandwith" value="<?=$hasil['bw_hasil'];?>">
                    </div>
                    <div class="form-group">
                        <label for="field_str"><b>Field Strength</b></label>
                        <input type="text" class="form-control" id="field_str" name="field_str" placeholder="Field Strength" value="<?=$hasil['field_str'];?>">
                    </div>
                    <div class="form-group">
                        <label for="daya_ukur"><b>Daya Ukur</b></label>
                        <input type="text" class="form-control" id="daya_ukur" name="daya_ukur" placeholder="Daya Ukur" value="<?=$hasil['daya_ukur'];?>" onkeyup="daya_alert()">
                        <script>
                            function daya_alert() {
                                var daya_ukur = document.getElementById('daya_ukur').value;
                                var result = (10*Math.log10(daya_ukur)+30)+<?=$ant['gain']?>-1;
                                document.getElementById('erp').value = result.toFixed(2);
                            }
                        </script>
                    </div>
                    <div class="form-group">
                        <label for="kedalaman_mod"><b>Kedalaman Modulasi</b></label>
                        <input type="text" class="form-control" id="kedalaman_mod" name="kedalaman_mod" placeholder="Kedalaman Modulasi" value="<?=$hasil['kedalaman_mod'];?>" readonly>
                    </div>
                    <div class="form-group">
                        <label for="deviasi"><b>Deviasi</b></label>
                        <input type="text" class="form-control" id="deviasi" name="deviasi" placeholder="Deviasi" value="<?=$hasil['deviasi'];?>" onkeyup="max_dev()">
                        <script>
                            function max_dev() {
                                var deviasi = document.getElementById('deviasi').value;
                                var result = parseInt(deviasi) / 75 * 100;
                                    if (!isNaN(result)) {
                                        document.getElementById('kedalaman_mod').value = Math.round(result);
                                    }
                            }
                        </script>
                    </div>
                    <div class="form-group">
                        <label for="erp"><b>ERP</b></label>
                        <input type="text" class="form-control" id="erp" name="erp" placeholder="ERP" value="<?=$hasil['erp'];?>" readonly>
                    </div>
                </div>


                <div class="modal-footer">
                    <input type="hidden" id="id" name="id" value="<?=$hasil['id']; ?>">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>