<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Data Tahun</title>
  <?= $this->include('part/main_head') ?>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Main Sidebar Container -->
  <?= $this->include('part/main_menu') ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Provinsi Papua</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  Data Tahun
                  <button type="button" class="btn bg-gradient-success btn-xs" data-toggle="modal" data-target="#addModal">&nbsp Tambah &nbsp</button>
                </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <input type="hidden" name="hasilnotif" id="hasilnotif" value="<?= session()->getFlashdata('notif') ?>">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Tahun</th>
                    <th>Target</th>
                    <th>Ubah</th>
                    <th>Hapus</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php 
                    $no = 0;
                    foreach($list_tahun as $tah){
                    if($no=$no+1){
                  ?>
                    <tr>  
                        <td><?= $no; ?></td>
                        <td><?= $tah->tahun; ?></td>
                        <td><?= $tah->capaian; ?></td>
                        <td>
                          <a href="#" class="btn bg-gradient-info btn-sm btn-edit" 
                            data-id="<?= $tah->tahunid;?>" 
                            data-tahun="<?= $tah->tahun;?>"
                            data-capaian="<?= $tah->capaian;?>">
                            Ubah
                          </a>
                        </td>
                        <td>
                          <a href="#" class="btn bg-gradient-danger btn-sm btn-delete" 
                            data-id="<?= $tah->tahunid;?>"
                            data-tahun="<?= $tah->tahun;?>"
                            data-capaian="<?= $tah->capaian;?>">
                            Hapus
                          </a>
                        </td>
                    </tr>
                  <?php 
                    }
                    } 
                  ?>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>No</th>
                    <th>Tahun</th>
                    <th>Target</th>
                    <th>Ubah</th>
                    <th>Hapus</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.1.0
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<?= $this->include('part/main_foot') ?>

  <form action="/tahun/tambah" method="post">
        <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Tahun</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
             
                <div class="form-group">
                    <label>Tahun</label>
                    <input type="text" class="form-control" name="tahun" placeholder="Masukkan Tahun">
                </div>
                <div class="form-group">
                    <label>Target</label>
                    <input type="text" class="form-control" name="capaian" placeholder="Masukkan Target">
                </div>
                 
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-primary">Tambah</button>
            </div>
            </div>
        </div>
        </div>
    </form>

    <form action="/tahun/ubah" method="post">
        <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ubah Tahun</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
             
                <div class="form-group">
                    <label>Tahun</label>
                    <input type="text" class="form-control tahun" name="tahun" placeholder="Masukkan Tahun">
                </div>
                <div class="form-group">
                    <label>Target</label>
                    <input type="text" class="form-control capaian" name="capaian" placeholder="Masukkan Target">
                </div>
            </div>
            <div class="modal-footer">
                <input type="hidden" name="id" class="id">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-primary">Ubah</button>
            </div>
            </div>
        </div>
        </div>
    </form>

    <form action="/tahun/hapus" method="post">
        <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Hapus Tahun</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
          
                <div class="form-group">
                    <label>Tahun</label>
                    <input type="text" class="form-control tahun" name="tahun" readonly>
                </div>
                <div class="form-group">
                    <label>Target</label>
                    <input type="text" class="form-control capaian" name="capaian" readonly>
                </div>
            </div>
            <div class="modal-footer">
                <input type="hidden" name="id" class="id">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                <button type="submit" class="btn btn-primary">Ya, Hapus </button>
            </div>
            </div>
        </div>
        </div>
    </form>
  <script>
    $(document).ready(function(){
 
        // get Edit Product
        $('.btn-edit').on('click',function(){
            // get data from button edit
            const id = $(this).data('id');
            const tahun = $(this).data('tahun');
            const capaian = $(this).data('capaian');
            // Set data to Form Edit
            $('.id').val(id);
            $('.tahun').val(tahun);
            $('.capaian').val(capaian);
            // Call Modal Edit
            $('#editModal').modal('show');
        });
 
        // get Delete Product
        $('.btn-delete').on('click',function(){
            // get data from button edit
            const id = $(this).data('id');
            const tahun = $(this).data('tahun');
            const capaian = $(this).data('capaian');
            // Set data to Form Edit
            $('.id').val(id);
            $('.tahun').val(tahun);
            $('.capaian').val(capaian);
            // Call Modal Edit
            $('#deleteModal').modal('show');
        });
         
    });
  </script>
</body>
</html>
