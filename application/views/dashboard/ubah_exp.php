  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">


      <section class="content-header">
          <div class="container-fluid">
              <div class="row mb-2">
                  <div class="col-sm-6">
                      <h1>Dashboard</h1>
                  </div>
                  <div class="col-sm-6">
                      <ol class="breadcrumb float-sm-right">
                          <li class="breadcrumb-item"><a href="<?= base_url('dashboard') ?>">Home</a></li>
                          <li class="breadcrumb-item active">Dashboard</li>
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
                      <form action="<?= base_url('dashboard/update_experience') ?>" method="POST">
                          <?php foreach ($experience as $exp) : ?>
                              <div class="form-group">
                                  <label for="sekolah">Nama Instansi</label>
                                  <input type="text" class="form-control" name="instansi" value="<?= $exp['nama'] ?>">
                                  <input type="hidden" name="id" value="<?= $exp['id_experience'] ?>">
                              </div>
                              <div class="form-group">
                                  <label for="jabatan">Jabatan</label>
                                  <input type="text" class="form-control" name="jabatan" value="<?= $exp['jabatan'] ?>">
                              </div>
                              <div class="row">
                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <label for="sejak">Sejak</label>
                                          <input type="text" class="form-control" name="sejak" value="<?= $exp['sejak'] ?>">
                                      </div>
                                  </div>
                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <label for="sampai">Sampai</label>
                                          <input type="text" class="form-control" name="sampai" value="<?= $exp['sampai'] ?>">
                                      </div>
                                  </div>
                              </div>
                  </div>
              <?php endforeach; ?>
              <button type="submit" class="btn btn-info" name="exp">Save</button>

              </form>

              </div>
          </div>
  </div>
  </section>
  </div>
  <!-- /.content-wrapper -->