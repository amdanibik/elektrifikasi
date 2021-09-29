<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Data Desa</title>
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
                  Catat Status
                  <input type="hidden" name="hasilnotif" id="hasilnotif" value="<?= session()->getFlashdata('notif') ?>">
                </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <input type="hidden" name="hasilnotif" id="hasilnotif" value="<?= session()->getFlashdata('notif') ?>">
                <form action="/catat/tambah" method="post">
                <div class="form-group">
                    <label>Tahun</label>
                    <select class="form-control select2bs4" name="tahun" style="width: 100%;">
                        <option value="">-Pilih Tahun-</option>
                        <?php foreach($detail_tahun as $tahun): ?>
                            <option value="<?= $tahun->tahunid;?>" selected><?= $tahun->tahun; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Desa</label>
                    <select class="form-control select2bs4" name="desa" style="width: 100%;">
                        <option value="">-Pilih Desa-</option>
                        <?php foreach($list_desaclear as $ds): ?>
                            <option value="<?= $ds->desaid;?>"><?= $ds->jenisdesa; ?> <?= $ds->namadesa; ?> - Kec. <?= $ds->namakecamatan; ?> - <?= $ds->jenis; ?> <?= $ds->namakabupaten; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Status</label>
                    <select class="form-control select2bs4" name="status" style="width: 100%;">
                        <option value="">-Pilih Status-</option>
                        <?php foreach($list_status as $status): ?>
                            <option value="<?= $status->statusid;?>"><?= $status->namastatus; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Tambah</button>
                </form>
              </div>
              <!-- /.card-body -->
            </div><div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  Data Desa
                </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Desa</th>
                    <th>Status</th>
                    <th>Hapus</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php 
                    $no = 0;
                    foreach($list_desawsts as $desa){
                    if($no=$no+1){
                  ?>
                    <tr>  
                        <td><?= $no; ?></td>
                        <td><?= $desa->jenisdesa; ?> <?= $desa->namadesa; ?> - Kec. <?= $desa->namakecamatan; ?> - <?= $desa->jenis; ?> <?= $desa->namakabupaten; ?></td>
                        <td><?= $desa->namastatus; ?></td>
                        <td>
                          <a href="#" class="btn bg-gradient-danger btn-sm btn-delete" 
                            data-id="<?= $desa->idcatat;?>"
                            data-idth="<?= $desa->idtahun;?>"
                            data-nama="<?= $desa->namadesa;?>"
                            data-kec="<?= $desa->namakecamatan;?>"
                            data-kab="<?= $desa->namakabupaten;?>"
                            data-sts="<?= $desa->namastatus;?>">
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
                    <th>Desa</th>
                    <th>Status</th>
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
<form action="/catat/hapus" method="post">
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Hapus Pencatatan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
          
                <div class="form-group">
                    <label>Desa</label>
                    <input type="text" class="form-control desa" id="desa" name="desa" readonly>
                </div>
                <div class="form-group">
                    <label>Kecamatan</label>
                    <input type="text" class="form-control kec" id="kec" name="kec" readonly>
                </div>
                <div class="form-group">
                    <label>Kabupaten</label>
                    <input type="text" class="form-control kab" id="kab" name="kab" readonly>
                </div>
                <div class="form-group">
                    <label>Status</label>
                    <input type="text" class="form-control sts" id="sts" name="sts" readonly>
                </div>
                
                
            </div>
            <div class="modal-footer">
                <input type="hidden" name="id" class="id">
                <input type="hidden" name="idth" class="idth">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                <button type="submit" class="btn btn-primary">Ya, Hapus </button>
            </div>
            </div>
        </div>
    </div>
</form>
<script>
    $(document).ready(function(){
        // get Delete Product
        $('.btn-delete').on('click',function(){
            // get data from button edit
            const id = $(this).data('id');
            const idth = $(this).data('idth');
            const desa = $(this).data('nama');
            const kec = $(this).data('kec');
            const kab = $(this).data('kab');
            const sts = $(this).data('sts');
            // Set data to Form Edit
            $('.id').val(id);
            $('.idth').val(idth);
            $('.desa').val(desa);
            $('.kec').val(kec);
            $('.kab').val(kab);
            $('.sts').val(sts);
            // Call Modal Edit
            $('#deleteModal').modal('show');
        });
         
    });
  </script>
</body>
</html>