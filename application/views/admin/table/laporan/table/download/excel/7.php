
<tr>
<th></th>
    <th width="10%" style="border: 1px solid black;text-align: center;background-color: #C0C0C0;">5</th>
    <th width="30%" colspan="3" style="border: 1px solid black;background-color: #C0C0C0;">STUDIO-TO-TRANSMITTER LINK (STL)</th>
    <th width="25%" colspan="2" style="border: 1px solid black;background-color:#C0C0C0;text-align:center;"></th>
    <th width="10%" style="border: 1px solid black;text-align: center;background-color:#C0C0C0;"></th>
</tr>
<tr>
<th></th>
    <th width="10%" rowspan="9" style="border: 1px solid black;text-align: center;">6</th>
    <th width="30%" colspan="2" rowspan="9" style="border: 1px solid black;text-align:center;vertical-align:middle">OPSI TAMBAHAN</th>
    <th style="border: 1px solid black;">Provinsi</th>
    <th width="25%" colspan="2" style="border: 1px solid black;background-color:#FCF305;color:green; text-align:center;"><?=$masuk['provinsi']; ?> </th>
    <th width="10%" style="border: 1px solid black;text-align: center;"></th>
</tr>
<tr>
<th></th>
    <th style="border: 1px solid black;">Kabupaten</th>
    <th width="25%" colspan="2" style="border: 1px solid black;background-color:#FCF305;color:green; text-align:center;"><?=$masuk['kabkota']; ?></th>
    <th width="10%" style="border: 1px solid black;text-align: center;"></th>
</tr>
<tr>
<th></th>
    <th style="border: 1px solid black;">No. SPT</th>
    <th width="25%" colspan="2" style="border: 1px solid black;background-color:#FCF305;color:red;text-align:center;"><?=$ket_a['no_spt']; ?> </th>
    <th width="10%" style="border: 1px solid black;text-align: center;"></th>
</tr>
<tr>
<th></th>
    <th style="border: 1px solid black;">Tgl. SPT</th>
    <?php 
    $DATE = $ket_a['tgl_spt'];
    $date_split =  explode('-', $DATE);
    $tanggal = $date_split[2].'-'.$date_split[1].'-'.$date_split[0];
    ?>
    <th width="25%" colspan="2" style="border: 1px solid black;background-color:#FCF305;color:red;text-align:center;"><?=$tanggal; ?></th>
    <th width="10%" style="border: 1px solid black;text-align: center;"></th>
</tr>
<tr>
<th></th>
    <th style="border: 1px solid black;">Jenis SPK</th>
    <th width="25%" colspan="2" style="border: 1px solid black;background-color:#FCF305;color:red;text-align:center;"><?=$ket_a['jenis_sbk']; ?></th>
    <th width="10%" style="border: 1px solid black;text-align: center;"></th>
</tr>
<tr>
<th></th>
    <th style="border: 1px solid black;">Kecamatan</th>
    <th width="25%" colspan="2" style="border: 1px solid black;background-color:#FCF305;color:red;text-align:center;"><?=$ket_a['ket_kecamatan']; ?></th>
    <th width="10%" style="border: 1px solid black;text-align: center;"></th>
</tr>
<tr>
<th></th>
    <th style="border: 1px solid black;">Jalan / Desa</th>
    <th width="25%" colspan="2" style="border: 1px solid black;background-color:#FCF305;color:red;text-align:center;"><?=$ket_a['jln']; ?></th>
    <th width="10%" style="border: 1px solid black;text-align: center;"></th>
</tr>
<tr>
<th></th>
    <th style="border: 1px solid black;">Latitude</th>
    <th width="25%" colspan="2" style="border: 1px solid black;background-color:#FCF305;color:red;text-align:center;"><?=str_replace('.', ',',$ket_a['ket_lat']); ?></th>
    <th width="10%" style="border: 1px solid black;text-align: center;"></th>
</tr>
<tr>
<th></th>
    <th style="border: 1px solid black;">Longitude</th>
    <th width="25%" colspan="2" style="border: 1px solid black;background-color:#FCF305;color:red;text-align:center;"><?=str_replace('.', ',',$ket_a['ket_lng']); ?></th>
    <th width="10%" style="border: 1px solid black;text-align: center;"></th>
</tr>