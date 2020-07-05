                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
                    <div class="row">
                        <div class="col-lg-6">
                            <?= form_open_multipart('admin/addmovies') ?>
                            <div class="form-group row">
                                <label for="name" class="col-sm-3 col-form-label">Title Movies</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="name" name="name">
                                    <?= form_error('name', '<small class="text-danger pl-2">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="year" class="col-sm-3 col-form-label">Year Movies</label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control" id="year" name="year">
                                    <?= form_error('year', '<small class="text-danger pl-2">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="rating" class="col-sm-3 col-form-label">Rating Movies</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="rating" name="rating">
                                    <?= form_error('rating', '<small class="text-danger pl-2">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-3 mr-2 pt-1">Image</div>
                                <div class="custom-file col-sm-8">
                                    <input type="file" class="custom-file-input" id="image" name="image">
                                    <label class="custom-file-label" for="image">Choose file</label>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Add Movies</button>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->