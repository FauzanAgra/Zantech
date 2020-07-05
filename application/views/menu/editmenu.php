                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

                    <div class="row">
                        <div class="col-lg-6">
                            <form action="" method="POST">
                                <input type="hidden" name="id" id="id" value="<?= $menu['id']; ?>">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <label for="menu" class="pt-1">Menu Name</label>
                                        </div>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" id="menu" name="menu" value="<?= $menu['menu']; ?>">
                                            <?= form_error('menu', '<small class="text-danger pl-1">', '</small>'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-danger">Edit</button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->