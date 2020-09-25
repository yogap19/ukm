<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">
        <div class="card o-hidden border-0 shadow-lg my-5 col-md-6 mx-auto">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row text-white bg-dark">
                    <div class="">
                        <div class="p-5">
                            <div class="text-center">
                                <img class="rounded" src="assets/img/login/imos.png" alt="IMOS" style="width: 20%; height:20%;"><br>
                                <h1 class="h3 text-white-900 mb-4">Login</h1>
                                <hr>
                            </div>
                            <?= $this->session->flashdata('message'); ?>
                            <!-- form input -->
                            <form class="user" method="POST" action="<?= base_url('auth'); ?>">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="username" name="username" aria-describedby="emailHelp" placeholder="Username..." value="<?= set_value('username'); ?>">
                                    <?= form_error('username', '<small class="text-danger pl-3">', '</small>') ?>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password">
                                    <?= form_error('password', '<small class="text-danger pl-3">', '</small>') ?>
                                </div>
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox small">
                                        <input type="checkbox" class="custom-control-input" id="customCheck">
                                        <label class="custom-control-label" for="customCheck">Remember Me</label>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    Login
                                </button>
                                <hr>
                            </form>
                            <div class="text-center">
                                <a class="small text-white" href="forgot-password.html">Forgot Password?</a>
                            </div>
                            <div class="text-center">
                                <a class="small text-white" href="<?= base_url('auth/registration'); ?>">Create an Account!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>