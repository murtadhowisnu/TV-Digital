<thead class="no_border">
    <tr>
        <td colspan="2">UPT</td>
        <td style="text-align: left;background-color:#FCF305;color:green;"><?= $detail['upt_ket']; ?></td>
        <td></td>
        <td></td>
        <td colspan="2"></td>
    </tr>
    <tr>
        <td colspan="2">Tanggal</td>
        <?php
        $DATE = $detail['tgl_ket'];
        $date_split =  explode('-', $DATE);
        $tanggal = $date_split[2] . '-' . $date_split[1] . '-' . $date_split[0];
        ?>
        <td style="text-align: left;background-color:#FCF305;color:green;"><?= $tanggal; ?></td>
        <td></td>
        <td></td>
        <td colspan="2"></td>
        <th style="background-color:white" width="10%"><a href="#" data-toggle="modal" data-target="#editModal1">Edit</a></th>
    </tr>
</thead>
<thead style="background-color: #C0C0C0;">
    <th style="border: 1px solid black;text-align: center;" width="5%">1</th>
    <th style="border: 1px solid black;" width="30%" colspan="3">NAMA STASIUN RADIO SIARAN</th>
    <th style="border: 1px solid black;" width="25%" colspan="2"> </th>
    <th style="border: 1px solid black;text-align: center;" width="10%">KETERANGAN</th>
    <th style="background-color:white" width="10%"><a href="#" data-toggle="modal" data-target="#editModal2">Edit</a></th>
</thead>
<tbody>
    <tr>
        <td style="border: 1px solid black;" rowspan="7"> </td>
        <td style="border: 1px solid black;" colspan="3">Penyelenggara</td>
        <td style="border: 1px solid black;text-align: center;  background-color:#FCF305;color:green;" colspan="2"><?= $detail['nama_stasiun']; ?></td>
        <td style="border: 1px solid black;text-align: center;">-</td>
    </tr>
    <tr>
        <td style="border: 1px solid black;" colspan="3">b. Alamat</td>
        <td style="border: 1px solid black;text-align: center;  background-color:#FCF305;color:green;" colspan="2"><?= $detail['alamat']; ?></td>
        <td style="border: 1px solid black;text-align: center;">-</td>
    </tr>
    <tr>
        <td style="border: 1px solid black;" colspan="3">c. Kelurahan</td>
        <td style="border: 1px solid black;text-align: center;  background-color:#FCF305;color:green;" colspan="2"><?= $detail['kelurahan']; ?></td>
        <td style="border: 1px solid black;text-align: center;">-</td>
    </tr>
    <tr>
        <td style="border: 1px solid black;" colspan="3">d. Kecamatan</td>
        <td style="border: 1px solid black;text-align: center;  background-color:#FCF305;color:green;" colspan="2"><?= $detail['kecamatan']; ?></td>
        <td style="border: 1px solid black;text-align: center;">-</td>
    </tr>
    <tr>
        <td style="border: 1px solid black;" colspan="3">e. Kota Madya</td>
        <td style="border: 1px solid black;text-align: center;  background-color:#FCF305;color:green;" colspan="2"><?= $detail['kotamadya']; ?></td>
        <td style="border: 1px solid black;text-align: center;">-</td>
    </tr>
    <tr>
        <td style="border: 1px solid black;" colspan="3">f. Telp/Fax</td>
        <?php
        $string = $detail['telp'];
        $no_telp = preg_replace('/^0/', '(+62)', $string);
        ?>
        <td style="border: 1px solid black;text-align: center;  background-color:#FCF305;color:green;" colspan="2"><?= $no_telp; ?></td>
        <td style="border: 1px solid black;text-align: center;">-</td>
    </tr>
    <tr>
        <td style="border: 1px solid black;" colspan="3">g. Email</td>
        <td style="border: 1px solid black;text-align: center;  background-color:#FCF305;color:green;" colspan="2"><?= $detail['email']; ?></td>
        <td style="border: 1px solid black;text-align: center;">-</td>
    </tr>
</tbody>