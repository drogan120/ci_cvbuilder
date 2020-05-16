  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">


      <section class="content-header">
          <div class="container-fluid">
              <div class="row mb-2">
                  <div class="col-sm-6">
                      <h1>Update Education</h1>
                  </div>
                  <div class="col-sm-6">
                      <ol class="breadcrumb float-sm-right">
                          <li class="breadcrumb-item"><a href="<?= base_url('dashboard') ?>">Home</a></li>
                          <li class="breadcrumb-item active">Update Education</li>
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
                      <form action="<?= base_url('dashboard/update_education') ?>" method="POST">
                          <?php foreach ($education as $edu) : ?>
                              <div class="form-group">
                                  <label for="sekolah">Nama Sekolah</label>
                                  <input type="text" class="form-control" name="sekolah" value="<?= $edu['nama'] ?>">
                                  <input type="hidden" name="id" value="<?= $edu['id_education'] ?>">
                              </div>
                              <div class="form-group">
                                  <label for="kota">Nama Kota</label>
                                  <input type="text" class="form-control" name="kota" value="<?= $edu['kota'] ?>">
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
                                          <input type="text" class="form-control" min="4" max="4" name="sejak" value="<?= $edu['sejak'] ?>">
                                      </div>
                                  </div>
                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <label for="sampai">Sampai</label>
                                          <input type="text" class="form-control" min="4" max="4" name="sampai" value="<?= $edu['sampai'] ?>">
                                      </div>
                                  </div>
                              </div>
                          <?php endforeach; ?>
                  </div>
                  <button type="submit" class="btn btn-info" name="education">Save</button>

                  </form>

              </div>
          </div>
  </div>
  </section>
  </div>
  <!-- /.content-wrapper -->