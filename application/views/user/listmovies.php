                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
                    <div class="row">
                        <?php foreach ($movies as $m) : ?>
                            <div class="col-lg-4 col-md-6">
                                <div class="card mb-3">
                                    <div class="row no-gutters">
                                        <div class="col-md-5">
                                            <img src="<?= base_url('assets/img/film/') . $m['image']; ?>" class="card-img img-thumbnail">
                                        </div>
                                        <div class="col-md-7">
                                            <div class="card-body">
                                                <h5 class="card-title"><?= $m['name']; ?> (<?= $m['year']; ?>)</h5>
                                                <h6 class="card-subtitle">Rate : <?= $m['rating']; ?></h6>
                                                <p class="card-text"><small class="text-muted">Last updated : <?= date('d F Y', $m['date_updated']); ?></small></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <!-- /.container-fluid -->