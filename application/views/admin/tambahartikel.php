

<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Upload Product</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Form Upload Product
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">

                                      <?php echo validation_errors(); ?>

                                      <?php echo form_open_multipart('Admin/tambahartikel', ['role'=>'form']);?>




                                        <div class="form-group">
                                            <label>judul</label>
                                            <input class="form-control" name="judul" required>
                                            <p class="help-block"></p>
                                        </div>
                                        <div class="form-group">
                                            <label>file tidak lebih dari 2mb</label>
                                            <input type="file" name="foto" required>
                                        </div>

                                        <div class="form-group">
                                            <label>deskripsi</label>
                                            <textarea class="form-control" rows="5" id="comment" name="deskripsi" ></textarea>

                                        </div>







                                        <button type="submit" class="btn btn-default" value="upload" >Upload</button>
<?php echo form_close(); ?>

                                </div>
                                <!-- /.col-lg-6 (nested) -->

                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
