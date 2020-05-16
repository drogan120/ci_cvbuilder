  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">


    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Education</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url('dashboard') ?>">Home</a></li>
              <li class="breadcrumb-item active">Education</li>
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
            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#EducationModal">
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
                  <th colspan="2">Action</th>

                </tr>
              </thead>
              <tbody>

                <?php $no = 1; ?>
                <?php foreach ($education as $sekolah) : ?>
                  <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $sekolah['nama'] ?></td>
                    <td><?= $sekolah['tingkat'] ?></td>
                    <td><?= $sekolah['sejak'] ?> - <?= $sekolah['sampai'] ?></td>
                    <td><?= $sekolah['kota'] ?></td>
                    <td><a href="<?= base_url('dashboard/hapus_edu/' . $sekolah['id_education']) ?>" onclick="return confirm('yakin hapus ?')" class="btn btn-danger">Hapus</a></td>
                    <td><a href="<?= base_url('dashboard/ubah_edu/' . $sekolah['id_education']) ?>" class="btn btn-info">Update</a></td>
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


  <!-- Modal -->
  <div class="modal fade" id="EducationModal" tabindex="-1" role="dialog" aria-labelledby="EducationModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="EducationModalTitle">Add Education</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="<?= base_url('dashboard/add_education') ?>" method="POST">
            <div class="form-group">
              <label for="sekolah">Nama Sekolah</label>
              <input type="text" class="form-control" name="sekolah">
            </div>
            <div class="form-group">
              <label for="kota">Nama Kota</label>
              <input type="text" class="form-control" name="kota">
            </div>
            <div class="form-group">
              <label for="tingkat">Tingkat</label>
              <select name="tingkat" class="form-control">
                <option>-----PILIH-----</option>
                <option value="SD">SD</option>
                <option value="SMP">SMP</option>
                <option value="SMA">SMA</option>
                <option value="D1">D1</option>
                <option value="D2">D2</option>
                <option value="D3">D3</option>
                <option value="D4">D4</option>
                <option value="S1">S1</option>
                <option value="S2">S2</option>
                <option value="S3">S3</option>
              </select>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="sejak">Sejak</label>
                  <input type="text" class="form-control" name="sejak" placeholder="<?= date('Y') ?>">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="sampai">Sampai</label>
                  <input type="text" class="form-control" name="sampai" placeholder="<?= date('Y') ?>">
                </div>
              </div>
            </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-info" name="education">Save</button>
        </div>
        </form>
      </div>
    </div>
  </div>