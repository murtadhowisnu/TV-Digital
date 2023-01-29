<thead>
    <th style="background-color: WHITE;"></th>
    <th style="border: 1px solid black;text-align: center;background-color: #C0C0C0;" width="10%">4</th>
    <th style="border: 1px solid black;background-color: #C0C0C0;" width="30%" colspan="3">HASIL UKUR</th>
    <th style="border: 1px solid black;background-color: #C0C0C0;" width="25%" colspan="2"> </th>
    <th style="border: 1px solid black;background-color: #C0C0C0;" width="10%"> </th>
</thead>
<tbody>
    <tr>
        <td></td>
        <td style="border: 1px solid black;" rowspan="19"> </td>
        <td style="border: 1px solid black;" colspan="3">Kanal</td>
        <td colspan="2" style="text-align: center;  background-color:#FCF305;color:green;border: 1px solid black;"><?= str_replace('.', ',', $detail['kanal']); ?></td>
        <td style="border: 1px solid black;text-align: center;">-</td>
    </tr>
    <tr>
        <td></td>
        <td style="border: 1px solid black;" colspan="3">Frekuensi Terukur</td>
        <td style="text-align: center;  background-color:#FCF305;color:green;border: 1px solid black;"><?= str_replace('.', ',', $detail['freq_terukur']) ?></td>
        <td style="border: 1px solid black;text-align: center;  " width="10%">MHz</td>
        <td style="border: 1px solid black;text-align: center;">-</td>
    </tr>
    <tr>
        <td></td>
        <td style="border: 1px solid black;" colspan="3">Pergeseran</td>
        <td style="text-align: center;  background-color:#FCF305;color:green;border: 1px solid black;"><?= str_replace('.', ',', $detail['pergeseran']) ?></td>
        <td style="border: 1px solid black;text-align: center;  " width="10%">Hz</td>
        <td style="border: 1px solid black;text-align: center;">-</td>
    </tr>
    <tr>
        <td></td>
        <td style="border: 1px solid black;" colspan="3">Level</td>
        <td style="text-align: center;  background-color:#FCF305;color:green;border: 1px solid black;"><?= str_replace('.', ',', $detail['level']) ?></td>
        <td style="border: 1px solid black;text-align: center;  " width="10%">dBm</td>
        <td style="border: 1px solid black;text-align: center;">-</td>
    </tr>
    <tr>
        <td></td>
        <td style="border: 1px solid black;" colspan="3">Bandwith</td>
        <td style="text-align: center;  background-color:#FCF305;color:green;border: 1px solid black;"><?= str_replace('.', ',', $detail['bandwith']) ?></td>
        <td style="border: 1px solid black;text-align: center;  " width="10%">KHz</td>
        <td style="border: 1px solid black;text-align: center;">
            <?php
            if ($detail['bandwith'] > 300) { ?>
                PELANGGARAN <?php
                        } else { ?>
                OKE <?php
                        }
                    ?>
        </td>
    </tr>
    <tr>
        <td></td>
        <td style="border: 1px solid black;" colspan="3">Field Strength</td>
        <td style="text-align: center;  background-color:#FCF305;color:green;border: 1px solid black;"><?= str_replace('.', ',', $detail['field_str']) ?></td>
        <td style="border: 1px solid black;text-align: center;  " width="10%">dBuV/m</td>
        <td style="border: 1px solid black;text-align: center;">-</td>
    </tr>
    <tr>
        <td></td>
        <td style="border: 1px solid black;" colspan="3">Daya Terukur Tx</td>
        <td style="text-align: center;  background-color:#FCF305;color:green;border: 1px solid black;"><?= str_replace('.', ',', $detail['daya_terukur']) ?></td>
        <td style="border: 1px solid black;text-align: center;  " width="10%">Watt</td>
        <td style="border: 1px solid black;text-align: center;">
            <?php
            if ($detail['daya_terukur'] >= $detail['max_power']) { ?>
                PELANGGARAN <?php
                        } else { ?>
                OKE <?php
                        }
                    ?>
        </td>
    </tr>
    <tr>
        <td></td>
        <td style="border: 1px solid black;" colspan="3">Kedalaman Modulasi</td>
        <td style="text-align: center;  background-color:#FCF305;color:green;border: 1px solid black;"><?= str_replace('.', ',', $detail['kedalaman_mod']) ?></td>
        <td style="border: 1px solid black;text-align: center;  " width="10%">%</td>
        <td style="border: 1px solid black;text-align: center;">-</td>
    </tr>
    <tr>
        <td></td>
        <td style="border: 1px solid black;" colspan="3">Deviasi Frekuensi</td>
        <td style="text-align: center;  background-color:#FCF305;color:green;border: 1px solid black;"><?= str_replace('.', ',', $detail['deviasi_freq']) ?></td>
        <td style="border: 1px solid black;text-align: center;  " width="10%">KHz</td>
        <td style="border: 1px solid black;text-align: center;">
            <?php
            if ($detail['deviasi_freq'] >= 75) { ?>
                PELANGGARAN <?php
                        } else { ?>
                OKE <?php
                        }
                    ?>
        </td>
    </tr>
    <tr>
        <td></td>
        <td style="border: 1px solid black;" colspan="3">ERP</td>
        <td style="text-align: center;  background-color:#FCF305;color:green;border: 1px solid black;"><?= str_replace('.', ',', $detail['erp']) ?></td>
        <td style="border: 1px solid black;text-align: center;  " width="10%">dBi</td>
        <td style="border: 1px solid black;text-align: center;">-</td>
    </tr>