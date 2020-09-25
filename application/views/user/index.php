<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="card py-5">
        <div class="row">
            <div class="col-lg">
                <?= $this->session->flashdata('message'); ?>
            </div>
        </div>
        <div class="fade-in">
            <div class="row">
                <div class="col-md-12 mb-12">
                    <!-- table navigasi -->
                    <div class="col-md-12 mb-12">
                        <div class="nav-tabs-boxed">
                            <ul class="nav nav-tabs">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#profile" role="tab" aria-controls="Profile">Profile</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#service" role="tab" aria-controls="Profile">Service</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#profile" role="tab" aria-controls="profile">Service</a>
                                </li>
                            </ul>

                            <div class="tab-content">
                                <!-- profile -->
                                <div class="tab-pane active" id="profile" role="tabpanel">
                                    <div class="card mb-3">
                                        <div class="row no-gutters px-5 py-5">
                                            <div class="col-md-4">
                                                <img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" class="card-img" style="max-width: 200px; max-height: 300px;">
                                            </div>
                                            <div class="col-md-8">
                                                <div class="card-body">
                                                    <h5 class="card-title"><?= $user['name']; ?></h5>
                                                    <p class="card-text"><?= $user['email']; ?></p>
                                                    <p class="card-text"><small class="text-muted">Member since <?= date('d F Y', $user['date_created']); ?></small></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- service2 -->
                                <div class="tab-pane" id="service" role="tabpanel">
                                    <div>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        Fugiat rerum doloremque ipsam pariatur iure, delectus porro ducimus
                                        incidunt alias culpa dolorem, maiores fugit voluptatem? Rem distinctio qu
                                        is nam expedita repudiandae?</div>
                                </div>
                                <!-- service3 -->
                                <div class="tab-pane" id="profile" role="tabpanel">
                                    <div>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        Fugiat rerum doloremque ipsam pariatur iure, delectus porro ducimus
                                        incidunt alias culpa dolorem, maiores fugit voluptatem? Rem distinctio qu
                                        is nam expedita repudiandae?</div>
                                </div>
                            </div>
                        </div>
                        <!-- end table navigasi -->
                    </div>
                </div>
            </div>
        </div>


        <!-- </div> -->
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->