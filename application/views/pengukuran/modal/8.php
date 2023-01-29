 <!-- Modal -->
 <div class="modal fade" id="editModal8" tabindex="-1" aria-labelledby="newSubMenuModalLabel" aria-hidden="true">
     <div class="modal-dialog">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="exampleModalLabel">Edit STL</b></h5>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
             </div>
             <form action="<?= base_url('pengukuran/edit8'); ?>" method="POST">
                 <div class="modal-body">
                     <div class="form-group">
                         <label for="no_spt"><b>No SPT</b></label>
                         <input type="text" class="form-control" id="no_spt" name="no_spt" placeholder="No SPT" value="<?= $detail['no_spt']; ?>">
                     </div>
                     <div class="form-group">
                         <label for="tgl_spt"><b>Tanggal SPT</b></label>
                         <input type="date" class="form-control" id="tgl_spt" name="tgl_spt" placeholder="Tanggal SPT" value="<?= $detail['tgl_spt']; ?>">
                     </div>
                     <div class="form-group">
                         <label for="jenis_sbk"><b>Jenis SBK</b></label>
                         <input type="text" class="form-control" id="jenis_sbk" name="jenis_sbk" placeholder="Jenis SBK" value="<?= $detail['jenis_sbk']; ?>">
                     </div>
                     <div class="form-group">
                         <label for="ket_kecamatan"><b>Kecamatan</b></label>
                         <input type="text" class="form-control" id="ket_kecamatan" name="ket_kecamatan" placeholder="Kecamatan" value="<?= $detail['kecamatan_ket']; ?>">
                     </div>
                     <div class="form-group">
                         <label for="jln"><b>Jalan</b></label>
                         <input type="text" class="form-control" id="jln" name="jln" placeholder="Jalan" value="<?= $detail['jln_ket']; ?>">
                     </div>
                     <div class="form-group">
                         <label for="ket_lat"><b>Latitude</b></label>
                         <input type="text" class="form-control" id="ket_lat" name="ket_lat" placeholder="Jalan" value="<?= $detail['lat_ket']; ?>">
                     </div>
                     <div class="form-group">
                         <label for="ket_lng"><b>Longitude</b></label>
                         <input type="text" class="form-control" id="ket_lng" name="ket_lng" placeholder="Jalan" value="<?= $detail['lng_ket']; ?>">
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