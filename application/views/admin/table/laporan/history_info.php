<style>
    th {
        color: black;
    }
</style>

<body onload="initMap()">
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid">
                <h1 class="mt-4 mb-4"><?= $title; ?> <b style="color:Red"><?= $ket_a['no_spt'] ?></b></h1>
                <a href="<?= base_url('admin/laporan') ?>" class="btn mb-3 ml-3" style="background-color: #007DFF; color:white;">
                    <i class="fas fa-long-arrow-alt-left"></i>
                </a>
                <div class="row">
                    <div class="col-lg-5 ml-3">
                        <?= $this->session->flashdata('message'); ?>
                    </div>
                </div>
                <a target="_blank" href="<?= base_url('admin/download_info/' . $bw['session']); ?>">
                    <button class="btn btn-lg btn-danger clearfix mb-3 ml-3"><span class="fas fa-file-pdf"></span> Download as PDF</button>
                </a>
                <a target="_blank" href="<?= base_url('admin/export/' . $bw['session']); ?>">
                    <button id="convert" name="convert" class="btn btn-lg btn-success clearfix mb-3 ml-3"><span class="fas fa-file-excel"></span> Export to Excel</button>
                </a>
                <a target="_blank" href="<?= base_url('admin/scan/' . $bw['session']); ?>">
                    <button class="btn btn-lg btn-info clearfix mb-3 ml-3"><span class="fas fa-download"></span> Download & Edit Scan Foto</button>
                </a>
                <p style="color:red" class="ml-3"><small>*</small>Jika ingin mengedit, pastikan mengisi bilangan desimal dengan titik, tidak dengan koma <br>
                    <small>*</small>Tidak ada rumus yang berlaku ketika mengedit hasil ukur (perhitungan secara manual)
                </p>
                <table cellpadding="5" width="95%" class="mb-5 ml-3 mr-3" id="invoice">
                    <!-- 1 -->
                    <?php include('table/1.php') ?>
                    <!-- 2 -->
                    <?php include('table/2.php') ?>
                    <!-- 3 -->
                    <?php include('table/3.php') ?>
                    <!-- 4 -->
                    <?php include('table/4.php') ?>
                    <!-- 5 -->
                    <?php include('table/5.php') ?>
                    <!-- 6 -->
                    <?php include('table/6.php') ?>
                    <!-- 7 -->
                    <?php include('table/7.php') ?>
                </table>
            </div>
        </main>
        <!-- modal -->
        <?php include('modal/1.php') ?>
        <?php include('modal/2.php') ?>
        <?php include('modal/3.php') ?>
        <?php include('modal/4.php') ?>
        <?php include('modal/5.php') ?>
        <?php include('modal/6.php') ?>
        <?php include('modal/7.php') ?>
        <?php include('modal/8.php') ?>