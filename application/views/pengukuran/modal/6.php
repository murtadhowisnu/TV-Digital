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
             <form action="<?= base_url('pengukuran/edit6'); ?>" method="POST">
                 <div class="modal-body">
                     <div class="form-group">
                         <label for="kanal"><b>Kanal</b></label>
                         <input type="text" class="form-control" id="kanal" name="kanal" placeholder="Kanal" value="<?= $detail['kanal']; ?>">
                     </div>
                     <div class="form-group">
                         <label for="freq_terukur"><b>Frekuensi Terukur</b></label>
                         <input type="text" class="form-control" id="freq_terukur" name="freq_terukur" placeholder="Frekuensi Terukur" value="<?= $detail['freq_terukur']; ?>" onkeyup="sum()">
                         <script>
                             function sum() {
                                 var freq_terukur = document.getElementById('freq_terukur').value;
                                 var freq = "<?= $detail['frekuensi'] ?>";
                                 var result = parseFloat(freq) - parseFloat(freq_terukur);
                                 if (!isNaN(result)) {
                                     document.getElementById('pergeseran').value = result;
                                 }
                             }
                         </script>
                     </div>
                     <div class="form-group">
                         <label for="pergeseran"><b>Pergeseran</b></label>
                         <input type="text" class="form-control" id="pergeseran" name="pergeseran" placeholder="Pergeseran" value="<?= $detail['pergeseran']; ?>" readonly>
                     </div>
                     <div class="form-group">
                         <label for="level"><b>Level</b></label>
                         <input type="text" class="form-control" id="level" name="level" placeholder="Level" value="<?= $detail['level']; ?>">
                     </div>
                     <div class="form-group">
                         <label for="bw_hasil"><b>Bandwith</b></label>
                         <input type="text" class="form-control" id="bw_hasil" name="bw_hasil" placeholder="Bandwith" value="<?= $detail['bandwith']; ?>">
                     </div>
                     <div class="form-group">
                         <label for="field_str"><b>Field Strength</b></label>
                         <input type="text" class="form-control" id="field_str" name="field_str" placeholder="Field Strength" value="<?= $detail['field_str']; ?>">
                     </div>
                     <div class="form-group">
                         <label for="daya_ukur"><b>Daya Ukur</b></label>
                         <input type="text" class="form-control" id="daya_ukur" name="daya_ukur" placeholder="Daya Ukur" value="<?= $detail['daya_terukur']; ?>" onkeyup="daya_alert()">
                         <script>
                             function daya_alert() {
                                 var daya_ukur = document.getElementById('daya_terukur').value;
                                 var result = (10 * Math.log10(daya_ukur) + 30) + <?= $detail['gain'] ?> - 1;
                                 document.getElementById('erp').value = result.toFixed(2);
                             }
                         </script>
                     </div>
                     <div class="form-group">
                         <label for="kedalaman_mod"><b>Kedalaman Modulasi</b></label>
                         <input type="text" class="form-control" id="kedalaman_mod" name="kedalaman_mod" placeholder="Kedalaman Modulasi" value="<?= $detail['kedalaman_mod']; ?>" readonly>
                     </div>
                     <div class="form-group">
                         <label for="deviasi"><b>Deviasi</b></label>
                         <input type="text" class="form-control" id="deviasi" name="deviasi" placeholder="Deviasi" value="<?= $detail['deviasi_freq']; ?>" onkeyup="max_dev()">
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
                         <input type="text" class="form-control" id="erp" name="erp" placeholder="ERP" value="<?= $detail['erp']; ?>" readonly>
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