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
             <form action="<?= base_url('pengukuran/edit4'); ?>" method="POST">
                 <div class="modal-body">
                     <div class="form-group">
                         <label for="merk"><b>Merk</b></label>
                         <input type="text" class="form-control" id="merk" name="merk" placeholder="Merk" value="<?= $detail['merk']; ?>">
                     </div>
                     <div class="form-group">
                         <label for="jenis"><b>Jenis/Type</b></label>
                         <input type="text" class="form-control" id="jenis" name="jenis" placeholder="Jenis/Type" value="<?= $detail['jenis']; ?>">
                     </div>
                     <div class="form-group">
                         <label for="seri"><b>No Seri</b></label>
                         <input type="text" class="form-control" id="seri" name="seri" placeholder="Nomor Seri" value="<?= $detail['no_seri']; ?>">
                     </div>
                     <div class="form-group">
                         <label for="negara_pem"><b>Negara Pembuat</b></label>
                         <input type="text" class="form-control" id="negara_pem" name="negara_pem" placeholder="Negara Pembuat" value="<?= $detail['negara']; ?>">
                     </div>
                     <div class="form-group">
                         <label for="tahun_pem"><b>Tahun Pembuatan</b></label>
                         <input type="text" class="form-control" id="tahun_pem" name="tahun_pem" placeholder="Tahun Pembuatan" value="<?= $detail['tahun']; ?>">
                     </div>
                     <div class="form-group">
                         <label for="freq"><b>Frekuensi</b></label>
                         <input type="text" class=" decimal form-control" id="freq" name="freq" placeholder="Frekuensi" value="<?= $detail['frekuensi']; ?>">
                     </div>
                     <div class="form-group">
                         <label for="kelas_em"><b>Kelas Emisi</b></label>
                         <input type="text" class="form-control" id="kelas_em" name="kelas_em" placeholder="Kelas Emisi" value="<?= $detail['kelas_emisi']; ?>">
                     </div>
                     <div class="form-group">
                         <label for="bw"><b>Bandwith</b></label>
                         <input type="text" class="decimal form-control" id="bw" name="bw" placeholder="Bandwith" value="<?= $detail['bandwith']; ?>">
                     </div>
                     <div class="form-group">
                         <label for="dalam"><b>Kedalaman Modulasi</b></label>
                         <input type="text" class="decimal form-control" id="dalam" name="dalam" placeholder="Kedalaman Modulasi" value="<?= $detail['kedalaman_mod']; ?>">
                     </div>
                     <div class="form-group">
                         <label for="max_p"><b>Max Power</b></label>
                         <input type="text" class="decimal form-control" id="max_p" name="max_p" placeholder="Max Power" value="<?= $detail['max_power']; ?>">
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