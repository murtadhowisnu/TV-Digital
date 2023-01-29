<tbody>
    <tr>
        <td></td>
        <td style="border: 1px solid black;" rowspan="8"></td>
        <td rowspan="8" width="10%" style="text-align: center;border: 1px solid black;vertical-align:middle">Antena</td>
        <td style="border: 1px solid black;" colspan="2">a. Jenis Antenna</td>
        <td colspan="2" style="border: 1px solid black;text-align: center;  background-color:#FCF305;color:green;"><?= $detail['jenis_ant'] ?></td>
        <td style="border: 1px solid black;text-align: center;">-</td>
    </tr>
    <tr>
        <td></td>
        <td style="border: 1px solid black;" colspan="2">b. Polarisasi</td>
        <td colspan="2" style="border: 1px solid black;text-align: center;  background-color:#FCF305;color:green;"><?= $detail['polarisasi'] ?></td>
        <td style="border: 1px solid black;text-align: center;">-</td>
    </tr>
    <tr>
        <td></td>
        <td style="border: 1px solid black;" colspan="2">c. Jumlah Elemen</td>
        <td style="border: 1px solid black;text-align: center;  background-color:#FCF305;color:green;"><?= str_replace('.', ',', $detail['elemen']) ?></td>
        <td style="border: 1px solid black;text-align: center;  " width="10%">Bay</td>
        <td style="border: 1px solid black;text-align: center;">-</td>
    </tr>
    <tr>
        <td></td>
        <td style="border: 1px solid black;" colspan="2">d. Gain</td>
        <td style="border: 1px solid black;text-align: center;  background-color:#FCF305;color:green;"><?= str_replace('.', ',', $detail['gain']) ?></td>
        <td style="border: 1px solid black;text-align: center;  " width="10%">dB</td>
        <td style="border: 1px solid black;text-align: center;">-</td>
    </tr>
    <tr>
        <td></td>
        <td style="border: 1px solid black;" colspan="2">e. Beam Antenna / Arah</td>
        <td colspan="2" style="border: 1px solid black;text-align: center; background-color:#FCF305;color:green;"><?= str_replace('.', ',', $detail['beam']) ?></td>
        <td style="border: 1px solid black;text-align: center;">-</td>
    </tr>
    <tr>
        <td></td>
        <td style="border: 1px solid black;" colspan="2">f. Jenis Kabel / Feeder</td>
        <td colspan="2" style="border: 1px solid black;text-align: center;  background-color:#FCF305;color:green;"><?= $detail['jenis_kabel'] ?></td>
        <td style="border: 1px solid black;text-align: center;">-</td>
    </tr>
    <tr>
        <td></td>
        <td style="border: 1px solid black;" colspan="2">g. Type Kabel</td>
        <td colspan="2" style="border: 1px solid black;text-align: center;  background-color:#FCF305;color:green;"><?= $detail['tipe_kabel'] ?></td>
        <td style="border: 1px solid black;text-align: center;">-</td>
    </tr>
    <tr>
        <td></td>
        <td style="border: 1px solid black;" colspan="2">h. Panjang Kabel / Feeder</td>
        <td style="border: 1px solid black;text-align: center;  background-color:#FCF305;color:green;"><?= str_replace('.', ',', $detail['panjang_kabel']) ?></td>
        <td style="border: 1px solid black;text-align: center;  " width="10%">Meter</td>
        <td style="border: 1px solid black;text-align: center;">-</td>
    </tr>
</tbody>