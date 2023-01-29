
            <tr>
                <td width="5%" style="border: 1px solid black;text-align: center;" colspan="5">Harmonisa</td>
                <td width="10%" style="border: 1px solid black;">     </td>
                <th style="background-color:white" width="10%"><a href="#" data-toggle="modal" data-target="#editModal7">Edit</a></th>
            </tr>
            <tr>
                <td rowspan="8" colspan="2" width="20%" style="border: 1px solid black;text-align: center;">Harmonisa 60 dB dibawah mean Power</td>
                <td style="border: 1px solid black;">Frekuensi H1</td>
                <td style="border: 1px solid black;text-align: center;  background-color:#FCF305;color:green;"><?= $harmonisa['h1_freq'];?></td>
                <td style="border: 1px solid black;text-align: center;">MHz</td>
                <td rowspan="2" style="border: 1px solid black;text-align: center;">
                    <?php
                        if ( $hrm['h1_level'] >= 60) { ?>
                            OKE <?php
                        } else { ?>
                           PELANGGARAN <?php
                        }
                    ?>
                </td>  
            </tr>
            <tr>
                <td style="border: 1px solid black;">Level H1</td>
                <td style="border: 1px solid black;text-align: center;  background-color:#FCF305;color:green;"><?= $harmonisa['h1_level'];?></td>
                <td style="border: 1px solid black;text-align: center;">dB</td>
            </tr>

            <tr>
                <td width="10%" style="border: 1px solid black;height:35px;"></td>
                <td width="5%" style="border: 1px solid black;text-align: center;" colspan="3"></td>
            </tr>
            <tr>
                <td style="border: 1px solid black;">Frekuensi H2</td>
                <td style="border: 1px solid black;text-align: center;  background-color:#FCF305;color:green;"><?= $harmonisa['h2_freq'];?> </td>
                <td style="border: 1px solid black;text-align: center;">MHz</td>
                <td rowspan="2" style="border: 1px solid black;text-align: center;">
                    <?php
                        if ( $hrm['h2_level'] >= 60) { ?>
                            OKE <?php
                        } else { ?>
                           PELANGGARAN <?php
                        }
                    ?>
                </td>  
            </tr>
            <tr>
                <td style="border: 1px solid black;">Level H2</td>
                <td style="border: 1px solid black;text-align: center;  background-color:#FCF305;color:green;"><?= $harmonisa['h2_level'];?></td>
                <td style="border: 1px solid black;text-align: center;">dB</td>
            </tr>

            <tr>
                <td width="10%" style="border: 1px solid black;height:35px;"></td>
                <td width="5%" style="border: 1px solid black;text-align: center;" colspan="3"></td>
            </tr>
            <tr>
                <td style="border: 1px solid black;">Frekuensi H3</td>
                <td style="border: 1px solid black;text-align: center;  background-color:#FCF305;color:green;"><?= $harmonisa['h3_freq'];?></td>
                <td style="border: 1px solid black;text-align: center;">MHz</td>
                <td rowspan="2" style="border: 1px solid black;text-align: center;">
                    <?php
                        if ( $hrm['h3_level'] >= 60) { ?>
                            OKE <?php
                        } else { ?>
                            PELANGGARAN <?php
                        }
                    ?>
                </td>  
            </tr>
            <tr>
                <td style="border: 1px solid black;">Level H3</td>
                <td style="border: 1px solid black;text-align: center;  background-color:#FCF305;color:green;"><?= $harmonisa['h3_level'];?></td>
                <td style="border: 1px solid black;text-align: center;">dB</td>
            </tr>
            </tbody>