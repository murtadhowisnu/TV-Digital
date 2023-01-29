 <!-- Modal -->
 <div class="modal fade" id="editModal3" tabindex="-1" aria-labelledby="newSubMenuModalLabel" aria-hidden="true" onload="initialize()">
     <div class="modal-dialog">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="exampleModalLabel">Edit Lokasi Pemancar</h5>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
             </div>
             <form action="<?= base_url('pengukuran/edit3'); ?>" method="POST">
                 <div class="modal-body">
                     <div class="form-group">
                         <label for="upt"><b>Koordinat</b></label>
                         <div class="col-sm-7">
                             <input type="text" class="form-control" id="lat" name="lat" placeholder="Latitude" maxlength="11" value="<?= $detail['latitude']; ?>">
                             <input type="text" class="form-control mt-2" id="lng" name="lng" placeholder="Longitude" value="<?= $detail['longitude']; ?>">
                         </div>
                     </div>
                     <div class="form-group">
                         <label for="alamat_lokasi"><b>Alamat</b></label>
                         <input type="text" class="form-control" id="alamat_lokasi" name="alamat_lokasi" placeholder="Alamat" value="<?= $detail['alamat']; ?>">
                     </div>
                     <div class="form-group">
                         <label for="kelurahan_lokasi"><b>Kelurahan</b></label>
                         <input type="text" class="form-control" id="kelurahan_lokasi" name="kelurahan_lokasi" placeholder="Kelurahan" value="<?= $detail['kelurahan']; ?>">
                     </div>
                     <div class="form-group">
                         <label for="kecamatan_lokasi"><b>Kecamatan</b></label>
                         <input type="text" class="form-control" id="kecamatan_lokasi" name="kecamatan_lokasi" placeholder="Kecamatan" value="<?= $detail['kecamatan']; ?>">
                     </div>
                     <div class="form-group">
                         <label for="kotamadya_lokasi"><b>Kotamadya</b></label>
                         <input type="text" class="form-control" id="kotamadya_lokasi" name="kotamadya_lokasi" placeholder="Kotamadya" value="<?= $detail['kotamadya']; ?>">
                     </div>
                     <div class="form-group">
                         <label for="telp_lokasi"><b>Telp/Fax</b></label>
                         <input type="text" class="form-control" id="telp_lokasi" name="telp_lokasi" placeholder="Telp/Fax" value="<?= $detail['telp']; ?>">
                     </div>
                     <div class="form-group">
                         <label for="tinggi_lok"><b>Tinggi Lokasi</b></label>
                         <input type="number" class="form-control" id="tinggi_lok" name="tinggi_lok" placeholder="Tinggi Lokasi" value="<?= $detail['tinggi_lok']; ?>">
                     </div>
                     <div class="form-group">
                         <label for="tinggi_ged"><b>Tinggi Gedung</b></label>
                         <input type="number" class="form-control" id="tinggi_ged" name="tinggi_ged" placeholder="Tinggi Gedung" value="<?= $detail['tinggi_ged']; ?>">
                     </div>
                     <div class="form-group">
                         <label for="tinggi_men"><b>Tinggi Menara</b></label>
                         <input type="number" class="form-control" id="tinggi_men" name="tinggi_men" placeholder="Tinggi Menara" value="<?= $detail['tinggi_men']; ?>">
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