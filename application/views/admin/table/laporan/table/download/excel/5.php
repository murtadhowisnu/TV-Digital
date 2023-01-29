<thead>
<th style="background-color: WHITE;"></th>
                <th style="border: 1px solid black;text-align: center;background-color: #C0C0C0;" width="10%">4</th>
                <th style="border: 1px solid black;background-color: #C0C0C0;" width="30%" colspan="3">HASIL UKUR</th>
                <th style="border: 1px solid black;background-color: #C0C0C0;" width="25%" colspan="2"> </th>
                <th style="border: 1px solid black;background-color: #C0C0C0;" width="10%">     </th>
            </thead><tbody>
            <tr>
            <td></td>
                <td style="border: 1px solid black;" rowspan="19"> </td>
                <td style="border: 1px solid black;" colspan="3">Kanal</td>
                <td colspan="2" style="text-align: center;  background-color:#FCF305;color:green;border: 1px solid black;"><?= str_replace('.', ',',$hasil['kanal']);?></td>
                <td style="border: 1px solid black;text-align: center;">-</td>  
            </tr>
            <tr>
            <td></td>
                <td style="border: 1px solid black;" colspan="3">Frekuensi Terukur</td>
                <td style="text-align: center;  background-color:#FCF305;color:green;border: 1px solid black;"><?= str_replace('.', ',',$hasil['freq_terukur'])?></td>
                <td style="border: 1px solid black;text-align: center;  " width="10%">MHz</td>
                <td style="border: 1px solid black;text-align: center;">-</td>  
            </tr>
            <tr>
            <td></td>
                <td style="border: 1px solid black;" colspan="3">Pergeseran</td>
                <td style="text-align: center;  background-color:#FCF305;color:green;border: 1px solid black;"><?= str_replace('.', ',',$hasil['pergeseran'])?></td>
                <td style="border: 1px solid black;text-align: center;  " width="10%">Hz</td>
                <td style="border: 1px solid black;text-align: center;">-</td>  
            </tr>
            <tr>
            <td></td>
                <td style="border: 1px solid black;" colspan="3">Level</td>
                <td style="text-align: center;  background-color:#FCF305;color:green;border: 1px solid black;"><?= str_replace('.', ',',$hasil['level'])?></td>
                <td style="border: 1px solid black;text-align: center;  " width="10%">dBm</td>
                <td style="border: 1px solid black;text-align: center;">-</td>  
            </tr>
            <tr>
            <td></td>
                <td style="border: 1px solid black;" colspan="3">Bandwith</td>
                <td style="text-align: center;  background-color:#FCF305;color:green;border: 1px solid black;"><?= str_replace('.', ',',$hasil['bw_hasil'])?></td>
                <td style="border: 1px solid black;text-align: center;  " width="10%">KHz</td>
                <td style="border: 1px solid black;text-align: center;">
                    <?php
                        if ($bw['bw_hasil'] > 300) { ?>
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
                <td style="text-align: center;  background-color:#FCF305;color:green;border: 1px solid black;"><?= str_replace('.', ',',$hasil['field_str'])?></td>
                <td style="border: 1px solid black;text-align: center;  " width="10%">dBuV/m</td>
                <td style="border: 1px solid black;text-align: center;">-</td>  
            </tr>
            <tr>
            <td></td>
                <td style="border: 1px solid black;" colspan="3">Daya Terukur Tx</td>
                <td style="text-align: center;  background-color:#FCF305;color:green;border: 1px solid black;"><?= str_replace('.', ',',$hasil['daya_ukur'])?></td>
                <td style="border: 1px solid black;text-align: center;  " width="10%">Watt</td>
                <td style="border: 1px solid black;text-align: center;">
                    <?php
                        if ( $bw['daya_ukur'] >= $max_p['max_p']) { ?>
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
                <td style="text-align: center;  background-color:#FCF305;color:green;border: 1px solid black;"><?= str_replace('.', ',',$hasil['kedalaman_mod'])?></td>
                <td style="border: 1px solid black;text-align: center;  " width="10%">%</td>
                <td style="border: 1px solid black;text-align: center;">-</td>  
            </tr>
            <tr>
            <td></td>
                <td style="border: 1px solid black;" colspan="3">Deviasi Frekuensi</td>
                <td style="text-align: center;  background-color:#FCF305;color:green;border: 1px solid black;"><?= str_replace('.', ',',$hasil['deviasi'])?></td>
                <td style="border: 1px solid black;text-align: center;  " width="10%">KHz</td>
                <td style="border: 1px solid black;text-align: center;">
                    <?php
                        if ( $bw['deviasi'] >= 75) { ?>
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
                <td style="text-align: center;  background-color:#FCF305;color:green;border: 1px solid black;"><?= str_replace('.', ',',$hasil['erp'])?></td>
                <td style="border: 1px solid black;text-align: center;  " width="10%">dBi</td>
                <td style="border: 1px solid black;text-align: center;">-</td>  
            </tr>