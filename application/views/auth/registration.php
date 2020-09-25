<div class="container">

    <div class="card o-hidden bg-dark text-white border-0 shadow-lg my-5 col-lg-7 mx-auto">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <!-- form input -->
            <div>
                <div class="p-5">
                    <div class="text-center">
                        <img class="rounded" src="../assets/img/login/imos.png" alt="IMOS" style="width: 20%; height:20%;"><br>
                        <h1 class="h4 text-white-900 mb-4">Create an Account!</h1>
                        <hr>
                    </div>
                    <form class="user" method="POST" action="<?= base_url('auth/registration'); ?>">
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user" id="name" name="name" placeholder="Full Name" value="<?= set_value('name'); ?>">
                            <?= form_error('name', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user" id="username" name="username" placeholder="Username" value="<?= set_value('username'); ?>">
                            <?= form_error('username', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Email Address" value="<?= set_value('email'); ?>">
                            <?= form_error('email', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-4">
                                    <h4 class="btn btn-info">Pilih UKM</h4>
                                </div>
                                <div class="col-md-8">
                                    <select id="role_id" name="role_id" class="btn btn-info col-md-12">
                                        <option value="3">Badan Eksekutif Mahasiswa</option>
                                        <option value="4">IMOS</option>
                                        <option value="5">IMPALA</option>
                                        <option value="6">IMFC</option>
                                        <option value="7">PBIM</option>
                                        <option value="8">IMFORSIL</option>
                                        <option value="9">Taekwondo</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-4">
                                    <h4 class="btn btn-info">Gender</h4>
                                </div>
                                <div class="col-md-8">
                                    <select id="gender" name="gender" class="btn btn-info col-md-12">
                                        <option value="1" disabled>Official</option>
                                        <option value="2">Laki - laki</option>
                                        <option value="3">Perempuan</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="password" class="form-control form-control-user" id="password1" name="password1" placeholder="Password">
                                <?= form_error('password1', '<small class="text-danger pl-3">', '</small>') ?>
                            </div>
                            <div class="col-sm-6">
                                <input type="password" class="form-control form-control-user" id="password2" name="password2" placeholder="Repeat Password">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-user btn-block">
                            Register Account
                        </button>
                    </form>
                    <hr>
                    <div class="text-center">
                        <a class="small text-white" href="<?= base_url('auth'); ?>">Already have an account? Login!</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>