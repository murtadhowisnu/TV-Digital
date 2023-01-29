<body onload="initMap()">

<div id="layoutSidenav_content">

<main>

    <div class="container-fluid">

        <div class="row">

            <div class="col-lg-5 ml-3">

                <?= $this->session->flashdata('message'); ?>

            </div>

        </div>



<button id="download" class="btn btn-lg btn-success clearfix m-3"><span class="fas fa-download"></span> Download</button>
<a href="#" class="btn btn-lg btn-warning clearfix m-3 btn-edit-foto" style="color:white"
data-session="<?=$session; ?>"
data-user_id="<?=$user_id['user_id'] ?>"
><span class="fas fa-edit"></span>&nbsp;Edit Foto</a>

<div id="invoice">

    <p style="text-align: center;font-size:15px">

        <b>LAMPIRAN HASIL PENGUKURAN FREKUENSI RADIO SIARAN FM</b> <br>

        <b style="text-transform: uppercase;"><?=$stasiun['penyelenggara'] ?></b>

    </p>

    <table cellpadding="2" class="mt-1" style="font-size:13px; margin-left:50px; margin-bottom:50px;" align="left">

        <tr>

            <td>TANGGAL</td>

            <td style="padding-left:40px;padding-right:40px">:</td>

            <td><?=$masuk['tanggal'] ?></td>

        </tr>        

        <tr>

            <td>LOKASI PEMANCAR</td>

            <td style="padding-left:40px;padding-right:40px">:</td>

            <td><?=$lokasi['alamat_lokasi'] ?> / <?=$lokasi['kecamatan_lokasi'] ?> / <?=$lokasi['kotamadya_lokasi'] ?></td>

        </tr>        

        <tr>

            <td>KOORDINAT</td>

            <td style="padding-left:40px;padding-right:40px">:</td>

            <td><?=$lokasi['lat'] ?> , <?=$lokasi['lng'] ?></td>

        </tr>        

    </table>
 

    <table border="1" cellpadding="5" width="80%" style="font-size:10px;text-align:center; margin-left:auto;margin-right:auto;margin-top:80px;">
        <tr>
            <th colspan="7" style="font-size:15px;">Frekuensi Carier</th>
        </tr>
        <tr>
            <td>Gambar</td>
            <td>Frekuensi<br>(Mhz)</td>
            <td>Level<br>(dBm)</td>
            <td>Keterangan</td>
        </tr>
        <tr>
            <td>
                <img src="<?=base_url('assets/SCAN/') . $scan_freq['file']?>" alt="" height="240px" width="300px">
            </td>
            <td><?=$hasil['freq_terukur']; ?></td>
            <td><?=$hasil['level']; ?></td>
            <td></td>
        </tr>
    </table>
    <table border="1" cellpadding="5" width="80%" style="font-size:10px;text-align:center; margin-left:auto;margin-right:auto;margin-top:50px;">
        <tr>
            <th colspan="7" style="font-size:15px;">Bandwith</th>
        </tr>
        <tr>
            <td>Gambar</td>
            <td>Frekuensi<br>(Mhz)</td>
            <td>Bandwith<br>(Khz)</td>
            <td>Keterangan</td>
        </tr>
        <tr>
            <td>
                <img src="<?=base_url('assets/SCAN/') . $scan_bw['file']?>" alt="" height="240px" width="300">
            </td>
            <td><?=$hasil['freq_terukur']; ?></td>
            <td><?=$hasil['bw_hasil']; ?></td>
            <td></td>
        </tr>
    </table>
    <table border="1" cellpadding="5" width="80%" style="font-size:10px;text-align:center; margin-left:auto;margin-right:auto;margin-top:140px;">
        <tr>
            <th colspan="7" style="font-size:15px;">Pergeseran Frekuensi</th>
        </tr>
        <tr>
            <td>Gambar</td>
            <td>Frekuensi<br>(Mhz)</td>
            <td>Pergeseran<br>(Hz)</td>
            <td>Keterangan</td>
        </tr>
        <tr>
            <td>
                <img src="<?=base_url('assets/SCAN/') . $scan_geser['file']?>" alt="" height="240px" width="300">
            </td>
            <td><?=$hasil['freq_terukur']; ?></td>
            <td><?=$hasil['pergeseran']; ?></td>
            <td></td>
        </tr>
    </table>
    <table border="1" cellpadding="5" width="80%" style="font-size:10px;text-align:center; margin-left:auto;margin-right:auto;margin-top:20px;">
        <tr>
            <th colspan="7" style="font-size:15px;">Deviasi Frekuensi</th>
        </tr>
        <tr>
            <td>Gambar</td>
            <td>Frekuensi<br>(Mhz)</td>
            <td>Deviasi Frekuensi<br>(Khz)</td>
            <td>Keterangan</td>
        </tr>
        <tr>
            <td>
                <img src="<?=base_url('assets/SCAN/') . $scan_dev['file']?>" alt="" height="240px" width="300">
            </td>
            <td><?=$hasil['freq_terukur']; ?></td>
            <td><?=$hasil['deviasi']; ?></td>
            <td></td>
        </tr>
    </table>
    <table border="1" cellpadding="5" width="80%" style="font-size:10px;text-align:center; margin-left:auto;margin-right:auto;margin-top:20px;">
        <tr>
            <th colspan="7" style="font-size:15px;">Field Strength</th>
        </tr>
        <tr>
            <td>Gambar</td>
            <td>Frekuensi<br>(Mhz)</td>
            <td>Field Strength<br>(dBuV/m)</td>
            <td>Keterangan</td>
        </tr>
        <tr>
            <td>
                <img src="<?=base_url('assets/SCAN/') . $scan_fs['file']?>" alt="" height="240px" width="300">
            </td>
            <td><?=$hasil['freq_terukur']; ?></td>
            <td><?=$hasil['field_str']; ?></td>
            <td></td>
        </tr>
    </table>
    <table border="1" cellpadding="5" width="80%" style="font-size:10px;text-align:center; margin-left:auto;margin-right:auto;margin-top:20px;">
        <tr>
            <th colspan="7" style="font-size:15px;">Harmonisa 1</th>
        </tr>
        <tr>
            <td>Gambar</td>
            <td>Frekuensi<br>(Mhz)</td>
            <td>Level<b>(dB)</b></td>
            <td>Keterangan</td>
        </tr>
        <tr>
            <td>
                <img src="<?=base_url('assets/SCAN/') . $scan_h1['file']?>" alt="" height="240px" width="300">
            </td>
            <td><?=$harmonisa['h1_freq']; ?></td>
            <td><?=$harmonisa['h1_level']; ?></td>
            <td></td>
        </tr>
    </table>
    <table border="1" cellpadding="5" width="80%" style="font-size:10px;text-align:center; margin-left:auto;margin-right:auto;margin-top:10px;">
        <tr>
            <th colspan="7" style="font-size:15px;">Harmonisa 2</th>
        </tr>
        <tr>
            <td>Gambar</td>
            <td>Frekuensi<br>(Mhz)</td>
            <td>Level<b>(dB)</b></td>
            <td>Keterangan</td>
        </tr>
        <tr>
            <td>
                <img src="<?=base_url('assets/SCAN/') . $scan_h2['file']?>" alt="" height="240px" width="300">
            </td>
            <td><?=$harmonisa['h2_freq']; ?></td>
            <td><?=$harmonisa['h2_level']; ?></td>
            <td></td>
        </tr>
    </table>
    <table border="1" cellpadding="5" width="80%" style="font-size:10px;text-align:center; margin-left:auto;margin-right:auto;margin-top:10px;">
        <tr>
            <th colspan="7" style="font-size:15px;">Harmonisa 3</th>
        </tr>
        <tr>
            <td>Gambar</td>
            <td>Frekuensi<br>(Mhz)</td>
            <td>Level<b>(dB)</b></td>
            <td>Keterangan</td>
        </tr>
        <tr>
            <td>
                <img src="<?=base_url('assets/SCAN/') . $scan_h3['file']?>" alt="" height="240px" width="300">
            </td>
            <td><?=$harmonisa['h3_freq']; ?></td>
            <td><?=$harmonisa['h3_level']; ?></td>
            <td></td>
        </tr>
    </table>

</div>

 <!-- Modal -->

 <div class="modal fade" id="editfotoModal" tabindex="-1" aria-labelledby="editfotoModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editfotoModalLabel">Edit</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('pengukuran/editfoto'); ?>" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group">
                        <label class="col-sm-4 col-form-label mr-3">Frekuensi</label>
                        <div class="custom-file col-sm-6">
                            <input type="file" class="custom-file-input" id="image" name="image" accept="image/*" >
                            <label class="custom-file-label" for="image">Choose file</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-4 col-form-label mr-3">Pergeseran</label>
                        <div class="custom-file col-sm-6">
                            <input type="file" class="custom-file-input" id="image2" name="image2" accept="image/*" >
                            <label class="custom-file-label" for="image2">Choose file</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-4 col-form-label mr-3">Bandwith</label>
                        <div class="custom-file col-sm-6">
                            <input type="file" class="custom-file-input" id="image3" name="image3" accept="image/*" >
                            <label class="custom-file-label" for="image3">Choose file</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-4 col-form-label mr-3">Field Strength</label>
                        <div class="custom-file col-sm-6">
                            <input type="file" class="custom-file-input" id="image4" name="image4" accept="image/*" >
                            <label class="custom-file-label" for="image4">Choose file</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-4 col-form-label mr-3">Deviasi</label>
                        <div class="custom-file col-sm-6">
                            <input type="file" class="custom-file-input" id="image5" name="image5" accept="image/*" >
                            <label class="custom-file-label" for="image5">Choose file</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-4 col-form-label mr-3">Harmonisa 1</label>
                        <div class="custom-file col-sm-6">
                            <input type="file" class="custom-file-input" id="image6" name="image6" accept="image/*" >
                            <label class="custom-file-label" for="image6">Choose file</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-4 col-form-label mr-3">Harmonisa 2</label>
                        <div class="custom-file col-sm-6">
                            <input type="file" class="custom-file-input" id="image7" name="image7" accept="image/*" >
                            <label class="custom-file-label" for="image7">Choose file</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-4 col-form-label mr-3">Harmonisa 3</label>
                        <div class="custom-file col-sm-6">
                            <input type="file" class="custom-file-input" id="image8" name="image8" accept="image/*" >
                            <label class="custom-file-label" for="image8">Choose file</label>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="hidden" id="id" name="id" class="session">
                    <input type="hidden" id="user_id" name="user_id" class="user_id">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success">Edit</button>
                </div>
            </form>
        </div>
    </div>

</div>





