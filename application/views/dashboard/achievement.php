  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">


    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Achievement</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url('dashboard') ?>">Home</a></li>
              <li class="breadcrumb-item active">Achievement</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="card">
        <div class="card-body">
          <div class="float-right mt-1 mb-1 mr-2">
            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#AchModal">
              Add
            </button>
          </div>
          <div class="container">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Lembaga</th>
                  <th>Tahun</th>
                  <th colspan="2">Aksi</th>
                </tr>
              </thead>
              <tbody>

                <?php $no = 1; ?>
                <?php foreach ($achievement as $ach) : ?>
                  <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $ach['nama'] ?></td>
                    <td><?= $ach['lembaga'] ?></td>
                    <td><?= $ach['tahun'] ?></td>
                    <td><a href="<?= base_url('dashboard/hapus_ach/' . $ach['id_achievement']) ?>" onclick="return confirm('yakin hapus ?')" class="btn btn-danger">Delete</a></td>
                    <td><a href="<?= base_url('dashboard/ubah_ach/' . $ach['id_achievement']) ?>" class="btn btn-info">Update</a></td>
                  </tr>
                <?php endforeach ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- /.content-wrapper -->


  <div class="modal fade" id="AchModal" tabindex="-1" role="dialog" aria-labelledby="AchModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="AchModalTitle">Add Achievement</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="<?= base_url('dashboard/add_achievement') ?>" method="POST">
            <div class="form-group">
              <label for="sertifikat">Nama</label>
              <input type="text" class="form-control" name="sertifikat">
            </div>
            <div class="form-group">
              <label for="lembaga">Lembaga</label>
              <input type="text" class="form-control" name="lembaga">
            </div>
            <div class="form-group">
              <label for="tahun">Tahun</label>
              <input type="number" name="tahun" class="form-control">
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-info">Save</button>
            </div>
          </form>
        </div>

      </div>
    </div>
  </div>