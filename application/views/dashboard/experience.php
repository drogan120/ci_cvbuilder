  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">


    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Experience</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url('dashboard') ?>">Home</a></li>
              <li class="breadcrumb-item active">Experience</li>
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
            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#ExperienceModal">
              Add
            </button>
          </div>
          <div class="container">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Tingkat</th>
                  <th>Tahun</th>
                  <th>Kota</th>
                  <th colspan="2">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php $no = 1; ?>
                <?php foreach ($experience as $exp) : ?>
                  <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $exp['nama'] ?></td>
                    <td><?= $exp['jabatan'] ?></td>
                    <td><?= $exp['sejak'] ?></td>
                    <td><?= $exp['sampai'] ?></td>
                    <td><a href="<?= base_url('dashboard/hapus_exp/' . $exp['id_experience']) ?>" onclick="return confirm('yakin hapus ?')"" class=" btn btn-danger">Hapus</a></td>
                    <td><a href="<?= base_url('dashboard/ubah_exp/' . $exp['id_experience']) ?>" class="btn btn-info">Update</a></td>
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

  <div class="modal fade" id="ExperienceModal" tabindex="-1" role="dialog" aria-labelledby="ExperienceModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="ExperienceModalTitle">Add Experience</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="<?= base_url('dashboard/add_experience') ?>" method="POST">
            <div class="form-group">
              <label for="sekolah">Nama Instansi</label>
              <input type="text" class="form-control" name="instansi">
            </div>
            <div class="form-group">
              <label for="jabatan">Jabatan</label>
              <input type="text" class="form-control" name="jabatan">
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="sejak">Sejak</label>
                  <input type="text" class="form-control" name="sejak" placeholder="<?= date('Y-m-d') ?>">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="sampai">Sampai</label>
                  <input type="text" class="form-control" name="sampai" placeholder="<?= date('Y-m-d') ?>">
                </div>
              </div>
            </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-info" name="exp">Save</button>
        </div>
        </form>
      </div>
    </div>
  </div>