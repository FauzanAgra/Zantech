                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

                    <div class="row">
                        <div class="col-lg-7">

                            <div class="card shadow mb-4">
                                <div class="card-body">
                                    <!-- Pesan Error  -->
                                    <?= form_error(
                                        'menu',
                                        '<div class="alert alert-danger alert-dismissible fade show" role="alert">',
                                        '<button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        </div>'
                                    ) ?>

                                    <?= $this->session->flashdata('message'); ?>

                                    <a href="" class="btn btn-primary mb-3 float-right" data-toggle="modal" data-target="#newRoleModal">
                                        <i class="fas fa-plus"></i> Add New Role
                                    </a>
                                    <div class="table-responsive">
                                        <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Role</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $no = 1; ?>
                                                <?php foreach ($role as $r) : ?>
                                                    <tr>
                                                        <th scope="row"><?= $no++; ?></th>
                                                        <th><?= $r['role']; ?></th>
                                                        <td>
                                                            <a href="<?= base_url('admin/roleaccess/') . $r['id']; ?>" class="btn btn-warning btn-circle">
                                                                <i class="fab fa-accessible-icon"></i>
                                                            </a>
                                                            <a href="" class="btn btn-danger btn-circle" onclick="return confirm('Are you sure?');">
                                                                <i class="fas fa-trash-alt"></i>
                                                            </a>
                                                            <a href="" class="btn btn-success btn-circle">
                                                                <i class="fas fa-pen"></i>
                                                            </a>
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

                    <!-- Modal Add Menu-->
                    <div class="modal fade" id="newRoleModal" tabindex="-1" role="dialog" aria-labelledby="newRoleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="newRoleModalLabel">Add New Role</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form action="<?= base_url('admin/role') ?>" method="post">
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label for="menu">Role Names</label>
                                            <input type="text" class="form-control" id="role" name="role">
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
                <!-- /.container-fluid -->