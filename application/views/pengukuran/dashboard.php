<div id="layoutSidenav_content">
  <main>
    <div class="container-fluid">
      <h2 class="mt-4 mb-4"><?= $title; ?>
        <span style="float: right;background-color:rgba(38, 177, 212, 0.3);padding:5px 10px;border-radius:10px;color:black;font-size:20px">Petugas : <?= $user['name']; ?></span>
      </h2>
      <div class="row">
        <div class="col-lg-4 ml-3">
          <?= $this->session->flashdata('message'); ?>
        </div>
      </div>
      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <!--  -->
            <div class="col-xl-4 col-md-6">
              <div class="card  text-white mb-4" style="background-color: #57BFE3;">
                <div class="card-body pb-0">
                  <p style="font-weight: 800;font-size:18px">Hasil Ukur <span style="float:right;"><?= $hasil_ukur; ?></span></p>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                  <a class="text-white stretched-link" href="<?= base_url('pengukuran/history') ?>" style="text-decoration: none;">Lihat</a>
                  <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
              </div>
            </div>
            <!--  -->
            <div class="col-xl-4 col-md-6">
              <div class="card text-white mb-4" style="background-color: #0188CB;">
                <div class="card-body pb-0">
                  <p style="font-weight: 800;font-size:18px">Data Stasiun <span style="float:right;"><?= $data_stasiun; ?></span></p>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                  <a class="text-white stretched-link" href="<?= base_url('setting/data_stasiun') ?>" style="text-decoration: none;">Lihat</a>
                  <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
              </div>
            </div>
            <!--  -->
            <div class="col-xl-4 col-md-6">
              <div class="card text-white mb-4" style="background-color: #0078AB;">
                <div class="card-body pb-0">
                  <p style="font-weight: 800;font-size:18px">Data Pemancar <span style="float:right;"><?= $data_pemancar; ?></span></p>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                  <a class="text-white stretched-link" href="<?= base_url('setting/data_pemancar') ?>" style="text-decoration: none;">Lihat</a>
                  <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
              </div>
            </div>
            <!--  -->
            <!-- <div class="col-xl-3 col-md-6">
              <div class="card text-white mb-4" style="background-color: #005E7D;">
                <div class="card-body pb-0">
                  <p style="font-weight: 800;font-size:18px">Data Antena <span style="float:right;">2</span></p>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                  <a class="text-white stretched-link" href="#">Lihat</a>
                  <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
              </div>
            </div> -->
            <!--  -->
          </div>

          <div class="row">
            <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header" style="color: white;background-color:#8e999e;">
                  <i class="fas fa-chart-area mr-1"></i>
                  Statistik Pengukuran Per-Bulan
                  (<span>Tahun <?= date('Y'); ?></span>)
                </div>
                <div class="card-body"><canvas id="myAreaChart" width="100%" height="25"></canvas></div>
              </div>
            </div>

            <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header" style="color:white;background-color:#8e999e;">
                  <i class="fas fa-table"></i>&nbsp;
                  <?php include('tgl_indo.php') ?>
                  Tabel Hasil Ukur Bulan <?= tgl_indo(date('m')) ?>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                          <th scope="col">No.</th>
                          <th scope="col">No. SPT</th>
                          <th scope="col">Tanggal SPT</th>
                          <th scope="col">Penyelenggara</th>
                          <th scope="col">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($info as $tb) : ?>
                          <tr>
                            <th scope="row"><?= $i; ?></th>
                            <td><?= $tb['no_spt']; ?></td>
                            <td><?= $tb['tgl_spt']; ?></td>
                            <td><?= $tb['nama_stasiun']; ?></td>
                            <td class="text-center">
                              <a href="<?= base_url('pengukuran/info/' .  str_replace('/', '-', $tb['no_spt'])) ?>"><i class="fas fa-eye"></i></a>
                            </td>
                          </tr>
                          <?php $i++; ?>
                        <?php endforeach; ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>

          </div>
          <!--  -->
        </div>
      </section>
    </div>
  </main>