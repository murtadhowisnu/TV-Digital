<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <div class="row">
        <div class="col-lg-5">
            <?= $this->session->flashdata('message'); ?>
        </div>
    </div>
    <a href="" class="btn mb-3 btn-primary" data-toggle="modal" data-target="#newPetugasModal">Tambah Petugas</a>
    <table class="table table-hover col-lg-12">
        <thead class="table text-white bg-primary" style="text-align: center;">
            <tr>
                <th scope="col">No</th>
                <th scope="col">NIP</th>
                <th scope="col">Email</th>
                <th scope="col">Nama</th>
                <th scope="col">Telp</th>
                <th scope="col">Date Created</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $x = 1; ?>
            <?php foreach ($userlist as $ul) : ?>
                <tr class="text-dark">
                    <th scope="row"><?= $x; ?></th>
                    <td>
                        <?= $ul['nip']; ?>
                    </td>
                    <td>
                        <?= $ul['email']; ?>
                    </td>
                    <td>
                        <?= $ul['name']; ?>
                    </td>
                    <td>
                        <?= $ul['telp']; ?>
                    </td>
                    <td>
                        <?= $ul['date_created']; ?>
                    </td>
                    <td>
                        <a href="#" class="badge badge-pill badge-warning btn-edit2" data-id="<?= $ul['id'] ?>" data-nip="<?= $ul['nip'] ?>" data-name="<?= $ul['name'] ?>" data-email="<?= $ul['email'] ?>" data-telp="<?= $ul['telp'] ?>">Edit</a>
                        <a href="<?= base_url('admin/delete/' . $ul['id']); ?>" class="badge badge-pill badge-danger" onclick="return confirm('Hapus Pegawai?');">Delete</a>
                    </td>
                </tr>
                <?php $x++; ?>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->
<!-- Modal -->
<div class="modal fade" id="newPetugasModal" tabindex="-1" aria-labelledby="newMenuModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Petugas</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('admin/petugas'); ?>" method="POST">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="nip" name="nip" placeholder="NIP" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Petugas" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="email" name="email" placeholder="Email" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="telp" name="telp" placeholder="No Telepon" maxlength="15" required>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" id="password2" name="password2" placeholder="Repeat Passoword" required>
                    </div>
                    <span style="margin-left:15px;" id='message'></span>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Modal Ubah -->
<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="editModal2" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Petugas</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form class="form-horizontal" action="<?php echo base_url('admin/edit') ?>" method="post" enctype="multipart/form-data" role="form">
                <div class="modal-body">
                    <div class="form-group">
                        <h5>NIP</h5>
                        <input type="text" class="form-control nip" id="nip" name="nip" placeholder="NIP" style="color:red;">
                    </div>
                    <div class="form-group">
                        <h5>Name</h5>
                        <input type="text" class="form-control name" id="name" name="name" placeholder="Name" style="color:red;">
                    </div>
                    <div class="form-group">
                        <h5>Email</h5>
                        <input type="text" class="form-control email" id="email" name="email" placeholder="Email" style="color:red;">
                    </div>
                    <div class="form-group">
                        <h5>Telp</h5>
                        <input type="text" class="form-control telp" id="telp" name="telp" placeholder="No Telp" style="color:red;">
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="hidden" id="id" name="id" class="id">
                    <button class="btn btn-success" type="submit"> Simpan&nbsp;</button>
                    <button type="button" class="btn btn-warning" data-dismiss="modal"> Batal</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- END Modal Ubah -->