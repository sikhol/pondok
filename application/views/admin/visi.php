<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Visi/Misi</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-sm-8">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Visi/Misi
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <?php foreach ($visi as $u) :?>
                            <div class="row">
                              <div class="col-sm-4">
                                <label for="comment">Judul:</label>
                                <input type="text"  class="form-control" value="<?= $u['judul']?>" disabled>

                              </div>
                              <div class="col-sm-5">

                              </div>
                              <div class="col-sm-3">
                                    <a href="<?php echo base_url ('admin/editvisi/'.$u['id'])?>"><button type="submit" class="btn btn-success"><i class="fa fa-edit fa-fw"></i>Edit</button> </a>
                              </div>

                            </div>

                            <div class="row" style="margin-top:50px;">
                              <div class="col-sm-12">
                                <label for="comment">Deskripsi:</label>
                                 <textarea class="form-control" rows="10" id="comment" disabled><?= $u['deskripsi']?></textarea>

                              </div>


                            </div>








                            <?php endforeach; ?>



                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->

            <!-- /.row -->

            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
