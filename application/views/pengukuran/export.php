<?php
// Skrip berikut ini adalah skrip yang bertugas untuk meng-export data tadi ke excell
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=HasilPengukuranRadio.xls");
?>
<p style="text-align: center;font-size:15px" class="mt-5"><b>FORM LAPORAN PENGUKURAN KARAKTERISTIK SIARAN</b></p>
<table cellpadding="2" width="50%" class="mx-auto mt-1" style="font-size: 12px;">
    <!-- 1 -->
    <?php include('table/download/excel/1.php') ?>
    <!-- 2 -->
    <?php include('table/download/excel/2.php') ?>
    <!-- 3 -->
    <?php include('table/download/excel/3.php') ?>
    <!-- 4 -->
    <?php include('table/download/excel/4.php') ?>
    <!-- 5 -->
    <?php include('table/download/excel/5.php') ?>
    <!-- 6 -->
    <?php include('table/download/excel/6.php') ?>
    <!-- 7 -->
    <?php include('table/download/excel/7.php') ?>
</table>