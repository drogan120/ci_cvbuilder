  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">


    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Reffrence</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url('dashboard') ?>">Home</a></li>
              <li class="breadcrumb-item active">Refference</li>
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
            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#RefferenceModal">
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
                <?php foreach ($refference as $reff) : ?>
                  <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $reff['nama'] ?></td>
                    <td><?= $reff['email'] ?></td>
                    <td><?= $reff['status'] ?></td>
                    <td><?= $reff['phone'] ?></td>
                    <td><a href="<?= base_url('dashboard/hapus_reff/' . $reff['id_refference']) ?>" onclick="return confirm('yakin hapus ?')"" class=" btn btn-danger">Delete</a></td>
                    <td><a href="<?= base_url('dashboard/ubah_reff/' . $reff['id_refference']) ?>" class="btn btn-info">Update</a></td>
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


  <div class="modal fade" id="RefferenceModal" tabindex="-1" role="dialog" aria-labelledby="RefferenceModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="RefferenceModalTitle">Add Refference</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="<?= base_url('dashboard/add_refference') ?>" method="POST">
            <div class="form-group">
              <label for="nama">Nama</label>
              <input type="text" class="form-control" name="nama">
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" name="email">
            </div>
            <div class="form-group">
              <label for="status">Status</label>
              <input type="text" name="status" class="form-control">
            </div>
            <div class="form-group">
              <label for="phone">Telepon</label>
              <input type="text" name="phone" class="form-control">
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-info">Save</button>
            </div>
          </form>
        </div>

      </div>
    </div>
  </div>