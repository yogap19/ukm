<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- card -->
    <div class="card border-dark mb-3">
        <div class="card-header text-white h2 text-center" style="background: rgb(71,108,217);">Managemen Submenu</div>
        <div class="card-body" style="background: rgb(71,108,217,.5);">
            <!-- card isi -->
            <div class="tab-content col-md-12">

                <!-- button add -->
                <div class="card">
                    <button href="" class="btn btn-primary" data-toggle="modal" data-target="#newSubMenuModal">Add New Submenu</button>
                    <small>
                        <?php if (validation_errors()) : ?>
                            <div class="alert alert-danger" role="alert">
                                <?= validation_errors(); ?>
                            </div>
                        <?php endif; ?>

                        <?= $this->session->flashdata('message'); ?>
                    </small>
                </div>
                <!-- table input -->
                <table class="table table-hover text-white text-center">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Menu</th>
                            <th scope="col">Title</th>
                            <th scope="col">Url</th>
                            <th scope="col">Icon</th>
                            <th scope="col">Active</th>
                            <th scope="col">Action</th>
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
                                <td><?= $sm['icon']; ?></td>
                                <td><?= $sm['is_active']; ?></td>
                                <td>
                                    <!-- base url = (file controller/nama method) -->
                                    <a href="<?= base_url('menu/editsubmenu/'); ?><?= $sm['id']; ?>" class="btn btn-success"><i class="far fa-fw fa-edit"></i></a>
                                    <a href="<?= base_url('menu/hapussubmenu/'); ?><?= $sm['id']; ?>" class="btn-circle btn-danger" onclick="return confirm('Are you sure, delete this submenu?')"><i class="fas fa-trash"></i></a>
                                </td>
                                <?php $i++; ?>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <!-- end table -->

            </div>
        </div>
    </div>

    <!-- Modal add submenu -->
    <div class=" modal fade" id="newSubMenuModal" tabindex="-1" role="dialog" aria-labelledby="newSubMenuModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="newSubMenuModalLabel">Add New Submenu</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <!-- body -->
                <form action="<?= base_url('menu/submenu'); ?>" method="POST">
                    <!-- form group -->
                    <div class="modal-body">
                        <div class="form-group">
                            <input type="text" class="form-control" id="title" name="title" placeholder="Submenu Title">
                        </div>
                        <div class="form-group">
                            <Select name="menu_id" id="menu_id" class="form-control">
                                <option value="">Select Menu</option>
                                <?php foreach ($menu as $m) : ?>
                                    <option value="<?= $m['id']; ?>"><?= $m['menu']; ?></option>
                                <?php endforeach; ?>
                            </Select>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="url" name="url" placeholder="Submenu url">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="icon" name="icon" placeholder="Submenu Icon">
                        </div>
                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="1" name="is_active" id="is_active" checked>
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
</div>