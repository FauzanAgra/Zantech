                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

                    <div class="row">
                        <div class="col-lg">

                            <div class="card shadow mb-4">
                                <div class="card-body">
                                    <?php if (validation_errors()) : ?>
                                        <div class="alert alert-danger alert-dismissible fade show mb-1" role="alert">
                                            <?= validation_errors(); ?>
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                    <?php endif; ?>

                                    <?= $this->session->flashdata('message'); ?>

                                    <a href="" class="btn btn-primary mb-3 float-right" data-toggle="modal" data-target="#newSubMenuModal">
                                        <i class="fas fa-plus"></i> New Submenu
                                    </a>
                                    <div class="table-responsive">
                                        <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Title</th>
                                                    <th>Menu</th>
                                                    <th>Url</th>
                                                    <th>Icon</th>
                                                    <th>Active</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $no = 1; ?>
                                                <?php foreach ($submenu as $sm) : ?>
                                                    <tr>
                                                        <th scope="row"><?= $no++; ?></th>
                                                        <th><?= $sm['title']; ?></th>
                                                        <th><?= $sm['menu']; ?></th>
                                                        <th><?= $sm['url']; ?></th>
                                                        <th><?= $sm['icon']; ?></th>
                                                        <th><?= $sm['is_active']; ?></th>
                                                        <td>
                                                            <a href="" class="btn btn-danger btn-circle">
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

                    <!-- Modal -->
                    <div class="modal fade" id="newSubMenuModal" tabindex="-1" role="dialog" aria-labelledby="newSubMenuModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="newSubMenuModalLabel">New Submenu</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form action="<?= base_url('menu/submenu') ?>" method="post">
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label for="title">Menu Names</label>
                                            <input type="text" class="form-control" id="title" name="title" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label for="menu_id">Menu</label>
                                            <select name="menu_id" id="menu_id" class="form-control">
                                                <option value="">Select Menu</option>
                                                <?php foreach ($menu as $m) : ?>
                                                    <option value="<?= $m['id']; ?>"><?= $m['menu']; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="url">URL</label>
                                            <input type="text" class="form-control" id="url" name="url" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label for="icon">Icon</label>
                                            <input type="text" class="form-control" id="icon" name="icon" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="1" id="is_active" name="is_active" checked>
                                                <label class="form-check-label" for="is_active">
                                                    Active?
                                                </label>
                                            </div>
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