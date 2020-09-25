<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- card -->
    <div class="card border-dark mb-3">
        <div class="card-header text-white h2 text-center" style="background: rgb(74,111,220);">Managemen Menu</div>
        <div class="card-body" style="background: rgb(74,111,220,.5);">
            <!-- card isi -->
            <div class="tab-content col-md-12">

                <!-- button add -->
                <div class="card">
                    <button href="" class="btn btn-primary" data-toggle="modal" data-target="#newRoleModal">Add New Role</button>
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
                            <th scope="col">Role</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($role as $r) : ?>
                            <tr>
                                <th scope="row"><?= $i; ?></th>
                                <td><?= $r['role']; ?></td>
                                <td>
                                    <a href="<?= base_url('admin/roleaccess/') . $r['id']; ?>" class="btn btn-warning">Access</a>
                                    <a href="" class="btn btn-success">Edit</a>
                                    <a href="" class="btn btn-danger">Delete</a>
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


</div>

<!-- Modal add data -->
<div class=" modal fade" id="newRoleModal" tabindex="-1" role="dialog" aria-labelledby="newRoleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newRoleModalLabel">Add New Role</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!-- body -->
            <form action="<?= base_url('admin'); ?>" method="POST">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="role" name="role" placeholder="Role Name">
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