<thead>
                <th style="background-color: WHITE;"></th>
                <th style="border: 1px solid black;background-color: #C0C0C0;text-align: center;" width="10%">2</th>
                <th style="border: 1px solid black;background-color: #C0C0C0;" width="30%" colspan="3">LOKASI PEMANCAR</th>
                <th style="border: 1px solid black;background-color: #C0C0C0;" width="25%" colspan="2"> </th>
                <th style="border: 1px solid black;background-color: #C0C0C0;" width="10%">     </th>
            </thead><tbody>
            <tr>
            <td></td>
                <td style="border: 1px solid black;" rowspan="9"> </td>
                <td style="border: 1px solid black;" colspan="3">a. Koordinat</td>
                <td colspan="2" style="border: 1px solid black;text-align: center;  background-color:#FCF305;color:green;"><?= $lokasi['lat'];?> , <?= $lokasi['lng'];?></td>
                <td style="border: 1px solid black;text-align: center;">-</td>  
            </tr>
            <tr>
            <td></td>
                <td style="border: 1px solid black;" colspan="3">b. Alamat</td>
                <td colspan="2" style="border: 1px solid black;text-align: center;  background-color:#FCF305;color:green;"><?= $lokasi['alamat_lokasi'];?></td>
                <td style="border: 1px solid black;text-align: center;">-</td>  
            </tr>
            <tr>
            <td></td>
                <td style="border: 1px solid black;" colspan="3">c. Kelurahan</td>
                <td colspan="2" style="border: 1px solid black;text-align: center;  background-color:#FCF305;color:green;"><?= $lokasi['kelurahan_lokasi'];?></td>
                <td style="border: 1px solid black;text-align: center;">-</td>  
            </tr>
            <tr>
            <td></td>
                <td style="border: 1px solid black;" colspan="3">d. Kecamatan</td>
                <td colspan="2" style="border: 1px solid black;text-align: center;  background-color:#FCF305;color:green;"><?= $lokasi['kecamatan_lokasi'];?></td>
                <td style="border: 1px solid black;text-align: center;">-</td>  
            </tr>
            <tr>
            <td></td>
                <td style="border: 1px solid black;" colspan="3">e. Kota Madya</td>
                <td colspan="2" style="border: 1px solid black;text-align: center;  background-color:#FCF305;color:green;"><?= $lokasi['kotamadya_lokasi'];?></td>
                <td style="border: 1px solid black;text-align: center;">-</td>  
            </tr>
            <tr>
            <td></td>
                <td style="border: 1px solid black;" colspan="3">f. Telp/Fax</td>
                <?php 
                $string =$lokasi['telp_lokasi'];
                $no_telp = preg_replace('/^0/', '(+62)', $string);
                ?>
                <td colspan="2" style="border: 1px solid black;text-align: center;  background-color:#FCF305;color:green;"><?= $no_telp;?></td>
                <td style="border: 1px solid black;text-align: center;">-</td>  
            </tr>
            <tr>
            <td></td>
                <td style="border: 1px solid black;" colspan="3">g. Tinggi Lokasi</td>
                <td colspan="2" style="border: 1px solid black;text-align: center;  background-color:#FCF305;color:green;"><?=str_replace('.', ',',$lokasi['tinggi_lok']); ?></td>
                <td style="border: 1px solid black;text-align: center;">-</td>  
            </tr>
            <tr>
            <td></td>
                <td style="border: 1px solid black;" colspan="3">h. Tinggi Gedung</td>
                <td colspan="2" style="border: 1px solid black;text-align: center;  background-color:#FCF305;color:green;"><?=str_replace('.', ',',$lokasi['tinggi_ged']); ?></td>
                <td style="border: 1px solid black;text-align: center;">-</td>  
            </tr>
            <tr>
            <td></td>
                <td style="border: 1px solid black;" colspan="3">i. Tinggi Menara</td>
                <td colspan="2" style="border: 1px solid black;text-align: center;  background-color:#FCF305;color:green;"><?=str_replace('.', ',',$lokasi['tinggi_men']); ?></td>
                <td style="border: 1px solid black;text-align: center;">-</td>  
            </tr>
            </tbody>