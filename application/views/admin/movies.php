                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
                    <div class="row">
                        <div class="col-lg-6">
                            <?= $this->session->flashdata('message'); ?>
                        </div>
                    </div>
                    <div class="row justify-content-end">
                        <a href="<?= base_url('admin/addmovies'); ?>" class="btn btn-primary mb-2"> <i class="fas fa-plus"></i> Add Movies</a>
                    </div>
                    <table class="table table-striped">
                        <thead class="text-center">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Name</th>
                                <th scope="col">Year</th>
                                <th scope="col">Rating</th>
                                <th scope="col">Image</th>
                                <th scope="col">Date Updated</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            <?php
                            $i = 1;
                            date_default_timezone_set('Asia/Jakarta');
                            ?>
                            <?php foreach ($movies as $m) : ?>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td><?= $m['name'] ?></td>
                                    <td><?= $m['year'] ?></td>
                                    <td><?= $m['rating'] ?></td>
                                    <td><?= $m['image'] ?></td>
                                    <td><?= date('d F Y - H:i', $m['date_updated']); ?></td>
                                    <td>
                                        <a href="<?= base_url('admin/deletemovies/') . $m['id']; ?>" class="btn btn-danger" onclick="return confirm('Apakah anda yakin?')">
                                            <i class="fas fa-trash-alt"></i>
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>


                </div>
                <!-- /.container-fluid -->