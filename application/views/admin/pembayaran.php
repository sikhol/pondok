<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Pembayaran Santri</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Pembayaran
                        </div>
                        <div class="col-sm-5" style="margin-top:30px;">

                        </div>

                        <div class="col-sm-4" style="margin-top:30px;">
                              <a href="<?php echo base_url ("admin/tambahsantri");?>"><button type="submit" class="btn btn-success"><i class="fa fa-edit fa-fw"></i>Tambah Santri</button> </a>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>

                                        <th>Nama </th>
                                        <th>Pembayaran</th>
                                        <th>Tanggal</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                  <?php foreach ($pembayaran as $u) :?>
                                    <tr class="odd gradeX">

                                        <td><?= $u['nama_s']?></td>
                                        <td class="center"><?= $u['jumlah_pembayaran']?></td>
                                        <td><?= $u['tanggal']?></td>
                                        <td>

                                          <a href="<?php echo
                                              base_url('admin/delete1/'.$u['id']);?>">Hapus</a> |
                                              <a href="<?php echo
                                                  base_url('admin/editpembayaran/'.$u['id']);?>">Edit</a>
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
