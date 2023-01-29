<body onload="initialize()">
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 ml-4 ">
                        <?= $this->session->flashdata('message'); ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 mt-4">
                        <div class="card">
                            <div class="card-body wizard-content">
                                <h4 class="card-title text-center"><b>Form Pengukuran Radio</b></h4>
                                <form id="form" action="<?= base_url('pengukuran/input_form') ?>" method="POST" enctype="multipart/form-data" class="validation-wizard wizard-circle m-t-40" novalidate>
                                    <!-- Step 1 -->
                                    <?php include('keterangan.php') ?>
                                    <!-- Step 2 -->
                                    <?php include('penyelenggara.php') ?>
                                    <!-- Step 3 -->
                                    <?php include('pemancar.php') ?>
                                    <!-- Step 4 -->
                                    <?php include('spesifikasi.php') ?>
                                    <!-- Step 5 -->
                                    <?php include('hasilukur.php') ?>
                                    <!-- Step 6 -->
                                    <?php include('spt.php') ?>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>