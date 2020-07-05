                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

                    <div class="row">
                        <div class="col-lg-7">
                            <?= $this->session->flashdata('message'); ?>
                            <form action="<?= base_url('user/changepassword'); ?>" method="POST">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <label for="current_password" class="pt-1">Current Password</label>
                                        </div>
                                        <div class="col-lg">
                                            <input type="password" class="form-control" id="current_password" name="current_password">
                                            <?= form_error('current_password', '<small class="text-danger pl-1">', '</small>'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <label for="new_password1" class="pt-1">New Password</label>
                                        </div>
                                        <div class="col-lg">
                                            <input type="password" class="form-control" id="new_password1" name="new_password1">
                                            <?= form_error('new_password1', '<small class="text-danger pl-1">', '</small>'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <label for="new_password2" class="pt-1">Repeat Password</label>
                                        </div>
                                        <div class="col-lg">
                                            <input type="password" class="form-control" id="new_password2" name="new_password2">
                                            <?= form_error('new_password2', '<small class="text-danger pl-1">', '</small>'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-danger">Change Password</button>
                                </div>

                            </form>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->