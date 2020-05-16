  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">


      <section class="content-header">
          <div class="container-fluid">
              <div class="row mb-2">
                  <div class="col-sm-6">
                      <h1>Bahasa</h1>
                  </div>
                  <div class="col-sm-6">
                      <ol class="breadcrumb float-sm-right">
                          <li class="breadcrumb-item"><a href="<?= base_url('dashboard') ?>">Home</a></li>
                          <li class="breadcrumb-item active">bhszation</li>
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
                      <button type="button" class="btn btn-info" data-toggle="modal" data-target="#BahasaModal">
                          Add
                      </button>
                  </div>
                  <div class="container">
                      <table class="table table-bordered">
                          <thead>
                              <tr>
                                  <th>No</th>
                                  <th>Nama</th>
                                  <th>Scale</th>
                                  <th>Status</th>
                                  <th colspan="2">Action</th>

                              </tr>
                          </thead>
                          <tbody>

                              <?php $no = 1; ?>
                              <?php foreach ($bahasa as $bhs) : ?>
                                  <tr>
                                      <td><?= $no++ ?></td>
                                      <td><?= $bhs['nama'] ?></td>
                                      <td><?= $bhs['scale'] ?></td>
                                      <td><?= $bhs['status'] ?></td>
                                      <td><a href="<?= base_url('dashboard/hapus_bahasa/' . $bhs['id_bahasa']) ?>" onclick="return confirm('yakin hapus ?')" class="btn btn-danger">Hapus</a></td>
                                      <td><a href="<?= base_url('dashboard/ubah_bahasa/' . $bhs['id_bahasa']) ?>" class="btn btn-info">Update</a></td>
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
  <div class="modal fade" id="BahasaModal" tabindex="-1" role="dialog" aria-labelledby="BahasaModalTitle" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="BahasaModalTitle">Add Bahasa</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body">
                  <form action="<?= base_url('dashboard/add_bahasa') ?>" method="POST">
                      <div class="form-group">
                          <label for="nama">Bahasa</label>
                          <input type="text" class="form-control" name="nama">
                      </div>
                      <div class="form-group">
                          <label for="scale">Scale</label>
                          <input type="text" class="form-control" min="4" max="4" name="scale">
                      </div>
                      <div class="form-group">
                          <label for="status">Status</label>
                          <input type="text" class="form-control" min="4" max="4" name="status">
                      </div>
              </div>

              <div class="modal-footer">
                  <button type="submit" class="btn btn-info" name="Bahasa">Save</button>
              </div>
              </form>
          </div>
      </div>
  </div>