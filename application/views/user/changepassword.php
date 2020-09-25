<!-- Begin Page Content -->
<div class="container-fluid">

    <div class="card py-5 px-5">
        <!-- isi Content -->

        <div class="card border-dark mb-3">
            <div class="card-header text-white h2 text-center" style="background: rgb(74,111,220);">Change Password</div>
            <div class="card-body text-white" style="background: rgb(74,111,220,.5);">
                <!-- isi -->
                <div class="row">
                    <div class="col-lg">
                        <?= $this->session->flashdata('message'); ?>
                        <form action="<?= base_url('user/changepassword'); ?>" method="post">
                            <div class="form-group">
                                <label for="current_password">Current Password</label>
                                <input type="password" class="form-control" id="current_password" name="current_password">
                                <?= form_error('current_password', '<small class="text-danger pl-3">', '</small>') ?>
                            </div>
                            <div class="form-group">
                                <label for="new_password1">New Password</label>
                                <input type="password" class="form-control" id="new_password1" name="new_password1">
                                <?= form_error('new_password1', '<small class="text-danger pl-3">', '</small>') ?>
                            </div>
                            <div class="form-group">
                                <label for="new_password2">Repeat New Password</label>
                                <input type="password" class="form-control" id="new_password2" name="new_password2">
                                <?= form_error('new_password2', '<small class="text-danger pl-3">', '</small>') ?>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Change Password</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- end isi Content -->

    </div>

</div>
<!-- End of Main Content -->