<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Syahriah</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Syahriah Santri
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">


                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Nama</th>
                                        <th>Jumlah</th>
                                        <th>Tanggal</th>

                                    </tr>
                                </thead>

                                <tbody>
                                  <?php foreach ($syahriah as $u) :?>
                                    <tr class="odd gradeX">
                                        <td class="center"><?= $u['nama']?></td>
                                        <td class="center"><?= $u['jumlah_pembayaran']?></td>
                                        <td class="center"><?= $u['tanggal']?></td>
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
