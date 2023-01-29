<?php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=HistoryPengukuranRadio.xls");
?>
	<table border="1">
        <thead>
            <tr>
                <th>NO</th>
                <th>UPT</th>
                <th>TANGGAL</th>
                <th>PROVINSI</th>
                <th>KABKOTA</th>
                <!--  -->
                <th>PENYELENGGARA </th>
                <th>ALAMAT</th>
                <th>KELURAHAN</th>
                <th>KECAMATAN</th>
                <th>KOTAMADYA</th>
                <th>TELP</th>
                <th>EMAIL</th>
                <!--  -->
                <th>KOORDINAT</th>
                <th>ALAMAT</th>
                <th>KELURAHAN</th>
                <th>KECAMATAN</th>
                <th>KOTAMADYA</th>
                <th>TELP</th>
                <th>TINGGI_LOK</th>
                <th>TINGGI_GEDUNG</th>
                <th>TINGGI_MENARA</th>
                <!--  -->
                <th>MERK</th>
                <th>JENIS/TYPE</th>
                <th>NO.SERI</th>
                <th>NEGARA_PEM</th>
                <th>TAHUN_PEM</th>
                <th>FREKUENSI</th>
                <th>KELAS EMISI</th>
                <th>BANDWITH</th>
                <th>KEDALAMAN_MOD</th>
                <th>MAX_POWER</th>
                <!--  -->
                <th>JENIS_ANT</th>
                <th>POLARISASI</th>
                <th>JLH_ELEMEN</th>
                <th>GAIN</th>
                <th>BEAM_ANT</th>
                <th>FEEDER</th>
                <th>TYPE KABEL</th>
                <th>PANJANG FEEDER</th>
                <!--  -->
                <th>KANAL</th>
                <th>FREQ_TERUKUR</th>
                <th>PERGESERAN</th>
                <th>LEVEL</th>
                <th>BANDWITH</th>
                <th>FIELD_STRENGTH</th>
                <th>DAYA</th>
                <th>KEDALAMAN_MOD</th>
                <th>DEVIASI</th>
                <th>ERP</th>
                <!--  -->
                <th>H1_FREQ</th>
                <th>H1_LEVEL</th>
                <th>H2_FREQ</th>
                <th>H2_LEVEL</th>
                <th>H3_FREQ</th>
                <th>H3_LEVEL</th>
                <!--  -->
                <th>NO_SPT</th>
                <th>TGL_SPT</th>
                <th>JENIS_SBK</th>
                <th>KEC</th>
                <th>JLN</th>
                <th>LAT</th>
                <th>LONG</th>
            </tr>
        </thead>
        <?php for($x=0;$x<=$row-1;$x++){ 
            $f1 = $form1[$x];
            $f2 = $form2[$x]; 
            $f3 = $form3[$x]; 
            $f4 = $form4[$x]; 
            $f5 = $form5[$x]; 
            $f6 = $form6[$x]; 
            $f7 = $form7[$x]; 
            $f8 = $form8[$x]; 
            ?>
            <tr style="text-align: center; vertical-align:middle;">
                <td><?= $x+1; ?></td>
                <td><?= $f1['upt']; ?></td>
                <td><?= $f1['tanggal']; ?></td>
                <td><?= $f1['provinsi']; ?></td>
                <td><?= $f1['kabkota']; ?></td>
                
                <td><?= $f2['penyelenggara']; ?></td>
                <td><?= $f2['alamat']; ?></td>
                <td><?= $f2['kelurahan']; ?></td>
                <td><?= $f2['kecamatan']; ?></td>
                <td><?= $f2['kotamadya']; ?></td>
                <td><?= $f2['telp']; ?></td>
                <td><?= $f2['email']; ?></td>

                <td><?= $f3['lat']; ?>, <?= $f3['lng']; ?></td>
                <td><?= $f3['alamat_lokasi']; ?></td>
                <td><?= $f3['kelurahan_lokasi']; ?></td>
                <td><?= $f3['kecamatan_lokasi']; ?></td>
                <td><?= $f3['kotamadya_lokasi']; ?></td>
                <td><?= $f3['telp_lokasi']; ?></td>
                <td><?= $f3['tinggi_lok']; ?></td>
                <td><?= $f3['tinggi_ged']; ?></td>
                <td><?= $f3['tinggi_men']; ?></td>

                <td><?= $f4['merk']; ?></td>
                <td><?= $f4['jenis']; ?></td>
                <td><?= $f4['seri']; ?></td>
                <td><?= $f4['negara_pem']; ?></td>
                <td><?= $f4['tahun_pem']; ?></td>
                <td><?= $f4['freq']; ?></td>
                <td><?= $f4['kelas_em']; ?></td>
                <td><?= $f4['bw']; ?></td>
                <td><?= $f4['dalam']; ?></td>
                <td><?= $f4['max_p']; ?></td>

                <td><?= $f5['jenis_ant']; ?></td>
                <td><?= $f5['polarisasi']; ?></td>
                <td><?= $f5['jlh_el']; ?></td>
                <td><?= $f5['gain']; ?></td>
                <td><?= $f5['beam_ant']; ?></td>
                <td><?= $f5['jenis_kabel']; ?></td>
                <td><?= $f5['type_kabel']; ?></td>
                <td><?= $f5['panjang_kabel']; ?></td>

                <td><?= $f6['kanal']; ?></td>
                <td><?= $f6['freq_terukur']; ?></td>
                <td><?= $f6['pergeseran']; ?></td>
                <td><?= $f6['level']; ?></td>
                <td><?= $f6['bw_hasil']; ?></td>
                <td><?= $f6['field_str']; ?></td>
                <td><?= $f6['daya_ukur']; ?></td>
                <td><?= $f6['kedalaman_mod']; ?></td>
                <td><?= $f6['deviasi']; ?></td>
                <td><?= $f6['erp']; ?></td>

                <td><?= $f7['h1_freq']; ?></td>
                <td><?= $f7['h1_level']; ?></td>
                <td><?= $f7['h2_freq']; ?></td>
                <td><?= $f7['h2_level']; ?></td>
                <td><?= $f7['h3_freq']; ?></td>
                <td><?= $f7['h3_level']; ?></td>

                <td><?= $f8['no_spt']; ?></td>
                <td><?= $f8['tgl_spt']; ?></td>
                <td><?= $f8['jenis_sbk']; ?></td>
                <td><?= $f8['ket_kecamatan']; ?></td>
                <td><?= $f8['jln']; ?></td>
                <td><?= str_replace('.',',',$f8['ket_lat']); ?></td>
                <td><?= str_replace('.',',',$f8['ket_lng']); ?></td>
            </tr>
        <?php } ?>
	</table>