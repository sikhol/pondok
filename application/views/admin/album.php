<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Galeri Santri</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Galeri
                        </div>
                        <div class="row" style="margin-top:30px;">
                          <div class="col-sm-5">

                          </div>

                          <div class="col-sm-4">
                                <a href="<?php echo base_url ("admin/tambahgambar");?>"><button type="submit" class="btn btn-success"><i class="fa fa-edit fa-fw"></i>Tambah Gambar</button> </a>
                          </div>

                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>


                                        <th>Gambar</th>

                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                  <?php foreach ($galeri as $u) :?>
                                    <tr class="odd gradeX">


                                        <td>  <img src="<?php echo base_url().'assets/img/uploads/';?><?php echo $u['gambar'] ?>" width="100"/><br><br></td>

                                        <td>

                                          <a href="<?php echo
                                              base_url('admin/deletesantri/'.$u['id']);?>">Hapus</a> |
                                          <a href="<?php echo
                                              base_url('admin/editartikel/'.$u['id']);?>">Edit</a>
                                        </td>
                                    </tr>
                                  <?php endforeach; ?>

                                </tbody>
                            </table>
                            <!-- /.table-responsive -->

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
