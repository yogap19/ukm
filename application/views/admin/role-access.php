<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- card -->
    <div class="card border-dark mb-3">
        <div class="card-header text-white h2" style="background: rgb(74,111,220);">Role : <?= $role['role']; ?></div>
        <div class="card-body" style="background: rgb(74,111,220,.5);">
            <!-- card isi -->
            <div class="tab-content col-md-12">

                <!-- button add -->
                <div class="card">
                    <small>
                        <?= $this->session->flashdata('message'); ?>
                    </small>
                </div>
                <!-- table input -->
                <table class="table table-hover text-white text-center">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Menu</th>
                            <th scope="col">Access</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($menu as $m) : ?>
                            <tr>
                                <th scope="row"><?= $i; ?></th>
                                <td><?= $m['menu']; ?></td>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" <?= check_access($role['id'], $m['id']); ?> data-role="<?= $role['id']; ?>" data-menu="<?= $m['id']; ?>">
                                    </div>
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