<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Tabungan</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Tabungan Santri
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                          <div class="col-sm-5" style="margin-top:30px;">

                          </div>

                          <div class="col-sm-4" style="margin-top:30px;">
                                <a href="<?php echo base_url ("admin/tambahtabungan");?>"><button type="submit" class="btn btn-success"><i class="fa fa-edit fa-fw"></i>Tambah Tabungan</button> </a>
                          </div>



                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Nama</th>
                                        <th>Jumlah</th>
                                        <th>Tanggal</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                  <?php foreach ($tabungan as $u) :?>
                                    <tr class="odd gradeX">
                                        <td class="center"><?= $u['nama']?></td>
                                        <td class="center"><?= $u['tabungan']?></td>
                                        <td class="center"><?= $u['tanggal']?></td>
                                        <td>
                                          <a href="<?php echo
                                              base_url('admin/edittabungan/'.$u['id']);?>">Edit</a> |
                                              <a href="<?php echo
                                                  base_url('admin/edittabungan/'.$u['id']);?>">hapus</a>

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
