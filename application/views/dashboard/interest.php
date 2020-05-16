  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">


      <section class="content-header">
          <div class="container-fluid">
              <div class="row mb-2">
                  <div class="col-sm-6">
                      <h1>Interest</h1>
                  </div>
                  <div class="col-sm-6">
                      <ol class="breadcrumb float-sm-right">
                          <li class="breadcrumb-item"><a href="<?= base_url('dashboard') ?>">Home</a></li>
                          <li class="breadcrumb-item active">Interest</li>
                      </ol>
                  </div>
              </div>
          </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">

          <div class="card">
              <div class="card-body">
                  <div class="container">
                      <div class="float-right mt-1 mb-1 mr-2">
                          <button type="button" class="btn btn-info" data-toggle="modal" data-target="#InterestModal">
                              Add
                          </button>
                      </div>
                      <table class="table table-bordered">
                          <thead>
                              <tr>
                                  <th width="5%">No</th>
                                  <th>Nama</th>
                                  <th colspan="2" width="20%">Action</th>
                              </tr>
                          </thead>
                          <tbody>
                              <?php $no = 1 ?>
                              <?php foreach ($interest as $int) : ?>
                                  <tr>
                                      <td><?= $no++; ?></td>
                                      <td><?= $int['nama']; ?></td>
                                      <td><a href="<?= base_url('dashboard/hapus_int/' . $int['id_interest']) ?>" class="btn btn-danger" onclick="return confirm('yakin hapus ?')">Delete</a></td>
                                      <td><a href="<?= base_url('dashboard/ubah_int/' . $int['id_interest']) ?>" class="btn btn-info">Update</a></td>
                                  </tr>
                              <?php endforeach; ?>
                          </tbody>
                      </table>
                  </div>
              </div>
          </div>
      </section>
  </div>
  <!-- /.content-wrapper -->

  <div class="modal fade" id="InterestModal" tabindex="-1" role="dialog" aria-labelledby="InterestModalTitle" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="InterestModalTitle">Add Interest</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body">
                  <form action="<?= base_url('dashboard/add_Interest') ?>" method="POST">
                      <div class="form-group">
                          <label for="interest">Nama</label>
                          <input type="text" class="form-control" name="interest">
                      </div>
              </div>
              <div class="modal-footer">
                  <button type="submit" class="btn btn-info" name="exp">Save</button>
              </div>
              </form>
          </div>
      </div>
  </div>