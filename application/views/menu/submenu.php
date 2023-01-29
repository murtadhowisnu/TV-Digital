<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <div class="row">
        <div class="col-lg-3">
            <?= $this->session->flashdata('message'); ?>
        </div>
        <div class="col-lg-12 ml-3">
            <?php if (validation_errors()) : ?>
                <div class="alert alert-danger" role="alert">
                    <?= validation_errors(); ?>
                </div>
            <?php endif; ?>
            <a href="" class="btn mb-3 btn-primary" data-toggle="modal" data-target="#newSubMenuModal">Add New Subenu</a>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Menu</th>
                        <th scope="col">Url</th>
                        <th scope="col">Icon</th>
                        <th scope="col">Active</th>
                        <th scope="col" style="text-align: center;">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($subMenu as $sm) : ?>
                        <tr>
                            <th scope="row"><?= $i; ?></th>
                            <td><?= $sm['title']; ?></td>
                            <td><?= $sm['menu']; ?></td>
                            <td><?= $sm['url']; ?></td>
                            <td><i class="<?= $sm['icon']; ?>"></i></td>
                            <td>
                                <div class="form-check">
                                    <input type="checkbox" <?= check_active($sm['id'], $sm['is_active']); ?>>
                                </div>
                            </td>
                            <td>
                                <a href="#" class="badge badge-pill badge-info btn-edit" data-id="<?= $sm['id'] ?>" data-menu="<?= $sm['menu'] ?>" data-title="<?= $sm['title'] ?>" data-url="<?= $sm['url'] ?>" data-icon="<?= $sm['icon'] ?>">
                                    Edit
                                </a>
                                <a href="<?= base_url('menu/activation/' . $sm['id']); ?>" class="badge badge-pill badge-success">Activate</a>
                                <a href="<?= base_url('menu/deleteactivation/' . $sm['id']); ?>" class="badge badge-pill badge-warning">Disabled</a>
                                <a href="<?= base_url('menu/delete/' . $sm['id']); ?>" class="badge badge-pill badge-danger">delete</a>
                            </td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->
<!-- Modal -->
<div class="modal fade" id="newSubMenuModal" tabindex="-1" aria-labelledby="newSubMenuModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add New Submenu</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('menu/submenu'); ?>" method="POST">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="title" name="title" placeholder="Submenu Title">
                    </div>
                    <div class="form-group">
                        <select name="menu_id" id="menu_id" class="form-control menu_id">
                            <option value="">Select Menu</option>
                            <?php foreach ($menu as $m) :  ?>
                                <option value="<?= $m['id']; ?>"><?= $m['menu']; ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="url" name="url" placeholder="Submenu Url">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="icon" name="icon" placeholder="Submenu Icon">
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="1" id="is_active" name="is_active" checked>
                            <label class="form-check-label" for="is_active">
                                Active?
                            </label>
                        </div>
                    </div>
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
<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="editModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Submenu</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form class="form-horizontal" action="<?php echo base_url('menu/edit') ?>" method="post" enctype="multipart/form-data" role="form">
                <div class="modal-body">
                    <div class="form-group">
                        <h5>Title</h5>
                        <input type="text" class="form-control title" id="title" name="title" placeholder="Submenu Title">
                    </div>
                    <div class="form-group">
                        <h5>Menu</h5>
                        <select name="menu_id" id="menu_id" class="form-control">
                            <option value="">Select Menu</option>
                            <?php foreach ($menu as $m) :  ?>
                                <option value="<?= $m['id']; ?>"><?= $m['menu']; ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <h5>Url</h5>
                        <input type="text" class="form-control url" id="url" name="url" placeholder="Submenu Url">
                    </div>
                    <div class="form-group">
                        <h5>Icon</h5>
                        <input type="text" class="form-control icon" id="icon" name="icon" placeholder="Submenu Icon">
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