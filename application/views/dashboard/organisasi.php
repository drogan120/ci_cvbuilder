  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">


      <section class="content-header">
          <div class="container-fluid">
              <div class="row mb-2">
                  <div class="col-sm-6">
                      <h1>organisasi</h1>
                  </div>
                  <div class="col-sm-6">
                      <ol class="breadcrumb float-sm-right">
                          <li class="breadcrumb-item"><a href="<?= base_url('dashboard') ?>">Home</a></li>
                          <li class="breadcrumb-item active">Organization</li>
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
                      <button type="button" class="btn btn-info" data-toggle="modal" data-target="#organisasiModal">
                          Add
                      </button>
                  </div>
                  <div class="container">
                      <table class="table table-bordered">
                          <thead>
                              <tr>
                                  <th>No</th>
                                  <th>Nama</th>
                                  <th>Tahun</th>
                                  <th colspan="2">Action</th>

                              </tr>
                          </thead>
                          <tbody>

                              <?php $no = 1; ?>
                              <?php foreach ($organisasi as $organi) : ?>
                                  <tr>
                                      <td><?= $no++ ?></td>
                                      <td><?= $organi['nama'] ?></td>
                                      <td><?= $organi['tahun'] ?></td>
                                      <td><a href="<?= base_url('dashboard/hapus_organisasi/' . $organi['id_organisasi']) ?>" onclick="return confirm('yakin hapus ?')" class="btn btn-danger">Hapus</a></td>
                                      <td><a href="<?= base_url('dashboard/ubah_organisasi/' . $organi['id_organisasi']) ?>" class="btn btn-info">Update</a></td>
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
  <div class="modal fade" id="organisasiModal" tabindex="-1" role="dialog" aria-labelledby="organisasiModalTitle" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="organisasiModalTitle">Add organisasi</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body">
                  <form action="<?= base_url('dashboard/add_organisasi') ?>" method="POST">
                      <div class="form-group">
                          <label for="nama">Nama Organisasi</label>
                          <input type="text" class="form-control" name="nama">
                      </div>
                      <div class="form-group">
                          <label for="tahun">Tahun</label>
                          <input type="text" class="form-control" min="4" max="4" name="tahun">
                      </div>
              </div>

              <div class="modal-footer">
                  <button type="submit" class="btn btn-info" name="organisasi">Save</button>
              </div>
              </form>
          </div>
      </div>
  </div>