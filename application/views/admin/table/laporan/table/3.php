            <thead style="background-color: #C0C0C0;">
                <th style="border: 1px solid black;text-align: center;" width="5%">3</th>
                <th style="border: 1px solid black;" width="30%" colspan="3">SPESIFIKASI PERANGKAT</th>
                <th style="border: 1px solid black;" width="25%" colspan="2"> </th>
                <th style="border: 1px solid black;" width="10%">     </th>
                <th style="background-color:white" width="10%"><a href="#" data-toggle="modal" data-target="#editModal4">Edit</a></th>
            </thead>
            <tbody>
            <tr>
                <td style="border: 1px solid black;" rowspan="10"></td>
                <td style="border: 1px solid black;text-align: center;" rowspan="10" width="10%">Pemancar</td>
                <td style="border: 1px solid black;" colspan="2">a. Merk</td>
                <td colspan="2" style="border: 1px solid black;text-align: center;  background-color:#FCF305;color:green;"><?= $spek['merk']?></td>
                <td style="border: 1px solid black;text-align: center;">-</td>  
            </tr>
            <tr>
                <td style="border: 1px solid black;" colspan="2">b. Jenis/Type</td>
                <td colspan="2" style="border: 1px solid black;text-align: center;  background-color:#FCF305;color:green;"><?= $spek['jenis']?></td>
                <td style="border: 1px solid black;text-align: center;">-</td>  
            </tr>
            <tr>
                <td style="border: 1px solid black;" colspan="2">c. Nomor Seri</td>
                <td colspan="2" style="border: 1px solid black;text-align: center;  background-color:#FCF305;color:green;"><?= $spek['seri']?></td>
                <td style="border: 1px solid black;text-align: center;">-</td>  
            </tr>
            <tr>
                <td style="border: 1px solid black;" colspan="2">d. Negara Pembuat</td>
                <td colspan="2" style="border: 1px solid black;text-align: center;  background-color:#FCF305;color:green;"><?= $spek['negara_pem']?></td>
                <td style="border: 1px solid black;text-align: center;">-</td>  
            </tr>
            <tr>
                <td style="border: 1px solid black;" colspan="2">e. Tahun Pembuatan</td>
                <td colspan="2" style="border: 1px solid black;text-align: center;  background-color:#FCF305;color:green;"><?= $spek['tahun_pem']?></td>
                <td style="border: 1px solid black;text-align: center;">-</td>  
            </tr>
            <tr>
                <td style="border: 1px solid black;" colspan="2">f. Frekuensi</td>
                <td style="border: 1px solid black;text-align: center;  background-color:#FCF305;color:green;"><?= $spek['freq']?></td>
                <td style="border: 1px solid black;text-align: center;  " width="10%">MHz</td>
                <td style="border: 1px solid black;text-align: center;">-</td>  
            </tr>
            <tr>
                <td style="border: 1px solid black;" colspan="2">g. Kelas Emisi</td>
                <td colspan="2" style="border: 1px solid black;text-align: center;  background-color:#FCF305;color:green;"><?= $spek['kelas_em']?></td>
                <td style="border: 1px solid black;text-align: center;">-</td>  
            </tr>
            <tr>
                <td style="border: 1px solid black;" colspan="2">h. Bandwith</td>
                <td style="border: 1px solid black;text-align: center;  background-color:#FCF305;color:green;"><?= $spek['bw']?></td>
                <td style="border: 1px solid black;text-align: center;  " width="10%">KHz</td>
                <td style="border: 1px solid black;text-align: center;">-</td>  
            </tr>
            <tr>
                <td style="border: 1px solid black;" colspan="2">i. Kedalaman Modulasi</td>
                <td style="border: 1px solid black;text-align: center;  background-color:#FCF305;color:green;"><?= $spek['dalam']?></td>
                <td style="border: 1px solid black;text-align: center;  " width="10%">%</td>
                <td style="border: 1px solid black;text-align: center;">-</td>  
            </tr>
            <tr>
                <td style="border: 1px solid black;" colspan="2">j. Max Power</td>
                <td style="border: 1px solid black;text-align: center;  background-color:#FCF305;color:green;"><?= $spek['max_p']?></td>
                <td style="border: 1px solid black;text-align: center;  " width="10%">Watt</td>
                <td style="border: 1px solid black;text-align: center;">-</td>  
            </tr>
            </tbody>  