<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- card -->
    <div class="card border-dark mb-3">
        <div class="card-header text-white h2 text-center" style="background: rgb(71,108,217);">Managemen Menu</div>
        <div class="card-body" style="background: rgb(71,108,217,.5)">
            <!-- card isi -->
            <div class="tab-content col-md-12">

                <!-- button add -->
                <div class="card">
                    <button href="" class="btn btn-primary" data-toggle="modal" data-target="#newMenuModal">Add New Menu</button>
                    <small>
                        <?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>') ?>
                        <?= $this->session->flashdata('message'); ?>
                    </small>
                </div>
                <!-- table input -->
                <table class="table table-hover text-white text-center">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Menu</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($menu as $m) : ?>
                            <tr>
                                <th scope="row"><?= $i; ?></th>
                                <td><?= $m['menu']; ?></td>
                                <td>
                                    <a href="<?= base_url('menu/edit/'); ?><?= $m['id']; ?>" class="btn btn-success btn-circle"><i class="far fa-fw fa-edit"></i></a>
                                    <a href="<?= base_url('menu/hapus/'); ?><?= $m['id']; ?>" class="btn btn-danger btn-circle" onclick="return confirm('Are you sure, delete this menu?')"><i class="fas fa-trash"></i></a>
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

    <!-- Modal add data -->
    <div class=" modal fade" id="newMenuModal" tabindex="-1" role="dialog" aria-labelledby="newMenuModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="newMenuModalLabel">Add New Menu</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <!-- body -->
                <form action="<?= base_url('menu'); ?>" method="POST">
                    <div class="modal-body">
                        <div class="form-group">
                            <input type="text" class="form-control" id="menu" name="menu" placeholder="Menu Name">
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