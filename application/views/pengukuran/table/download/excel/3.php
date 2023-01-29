<thead>
    <th style="background-color: WHITE;"></th>
    <th style="border: 1px solid black;text-align: center;background-color: #C0C0C0;" width="10%">3</th>
    <th style="border: 1px solid black;background-color: #C0C0C0;" width="30%" colspan="3">SPESIFIKASI PERANGKAT</th>
    <th style="border: 1px solid black;background-color: #C0C0C0;" width="25%" colspan="2"> </th>
    <th style="border: 1px solid black;background-color: #C0C0C0;" width="10%"> </th>
</thead>
<tbody>
    <tr>
        <td></td>
        <td style="border: 1px solid black;" rowspan="10"></td>
        <td style="border: 1px solid black;text-align: center;vertical-align:middle" rowspan="10" width="10%">Pemancar</td>
        <td style="border: 1px solid black;" colspan="2">a. Merk</td>
        <td colspan="2" style="border: 1px solid black;text-align: center;  background-color:#FCF305;color:green;"><?= $detail['merk'] ?></td>
        <td style="border: 1px solid black;text-align: center;">-</td>
    </tr>
    <tr>
        <td></td>
        <td style="border: 1px solid black;" colspan="2">b. Jenis/Type</td>
        <td colspan="2" style="border: 1px solid black;text-align: center;  background-color:#FCF305;color:green;"><?= $detail['jenis'] ?></td>
        <td style="border: 1px solid black;text-align: center;">-</td>
    </tr>
    <tr>
        <td></td>
        <td style="border: 1px solid black;" colspan="2">c. Nomor Seri</td>
        <td colspan="2" style="border: 1px solid black;text-align: center;  background-color:#FCF305;color:green;"><?= str_replace('.', ',', $detail['no_seri']); ?></td>
        <td style="border: 1px solid black;text-align: center;">-</td>
    </tr>
    <tr>
        <td></td>
        <td style="border: 1px solid black;" colspan="2">d. Negara Pembuat</td>
        <td colspan="2" style="border: 1px solid black;text-align: center;  background-color:#FCF305;color:green;"><?= $detail['negara'] ?></td>
        <td style="border: 1px solid black;text-align: center;">-</td>
    </tr>
    <tr>
        <td></td>
        <td style="border: 1px solid black;" colspan="2">e. Tahun Pembuatan</td>
        <td colspan="2" style="border: 1px solid black;text-align: center;  background-color:#FCF305;color:green;"><?= $detail['tahun'] ?></td>
        <td style="border: 1px solid black;text-align: center;">-</td>
    </tr>
    <tr>
        <td></td>
        <td style="border: 1px solid black;" colspan="2">f. Frekuensi</td>
        <td style="border: 1px solid black;text-align: center;  background-color:#FCF305;color:green;"><?= str_replace('.', ',', $detail['frekuensi']); ?></td>
        <td style="border: 1px solid black;text-align: center;  " width="10%">MHz</td>
        <td style="border: 1px solid black;text-align: center;">-</td>
    </tr>
    <tr>
        <td></td>
        <td style="border: 1px solid black;" colspan="2">g. Kelas Emisi</td>
        <td colspan="2" style="border: 1px solid black;text-align: center;  background-color:#FCF305;color:green;"><?= $detail['kelas_emisi'] ?></td>
        <td style="border: 1px solid black;text-align: center;">-</td>
    </tr>
    <tr>
        <td></td>
        <td style="border: 1px solid black;" colspan="2">h. Bandwith</td>
        <td style="border: 1px solid black;text-align: center;  background-color:#FCF305;color:green;"><?= str_replace('.', ',', $detail['bandwith']); ?></td>
        <td style="border: 1px solid black;text-align: center;  " width="10%">KHz</td>
        <td style="border: 1px solid black;text-align: center;">-</td>
    </tr>
    <tr>
        <td></td>
        <td style="border: 1px solid black;" colspan="2">i. Kedalaman Modulasi</td>
        <td style="border: 1px solid black;text-align: center;  background-color:#FCF305;color:green;"><?= str_replace('.', ',', $detail['kedalaman_mod']); ?></td>
        <td style="border: 1px solid black;text-align: center;  " width="10%">%</td>
        <td style="border: 1px solid black;text-align: center;">-</td>
    </tr>
    <tr>
        <td></td>
        <td style="border: 1px solid black;" colspan="2">j. Max Power</td>
        <td style="border: 1px solid black;text-align: center;  background-color:#FCF305;color:green;"><?= str_replace('.', ',', $detail['max_power']); ?></td>
        <td style="border: 1px solid black;text-align: center;  " width="10%">Watt</td>
        <td style="border: 1px solid black;text-align: center;">-</td>
    </tr>
</tbody>