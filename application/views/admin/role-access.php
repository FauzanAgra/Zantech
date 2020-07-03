                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

                    <div class="row">
                        <div class="col-lg-7">

                            <div class="card shadow mb-4">
                                <div class="card-body">
                                    <!-- Pesan Error  -->
                                    <?= $this->session->flashdata('message'); ?>

                                    <h5>Role : <?= $role['role']; ?></h5>
                                    <div class="table-responsive">
                                        <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Menu</th>
                                                    <th>Akses</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $no = 1; ?>
                                                <?php foreach ($menu as $m) : ?>
                                                    <tr>
                                                        <th scope="row"><?= $no++; ?></th>
                                                        <th><?= $m['menu']; ?></th>
                                                        <td>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" <?= check_access($role['id'], $m['id']); ?> data-role="<?= $role['id']; ?>" data-menu="<?= $m['id']; ?>">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->