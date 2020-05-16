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
                      <form action="<?= base_url('dashboard/update_organisasi') ?>" method="POST">
                          <?php foreach ($organisasi as $organ) : ?>
                              <div class="form-group">
                                  <label for="nama">Nama Organisasi</label>
                                  <input type="text" class="form-control" name="nama" value="<?= $organ['nama'] ?>">
                                  <input type="hidden" name="id" value="<?= $organ['id_organisasi'] ?>">
                              </div>
                              <div class="form-group">
                                  <label for="tahun">Tahun</label>
                                  <input type="text" class="form-control" min="4" max="4" name="tahun" value="<?= $organ['tahun'] ?>">
                              </div>
                  </div>

              <?php endforeach; ?>
              <button type=" submit" class="btn btn-info" name="exp">Save</button>

              </form>

              </div>
          </div>
  </div>
  </section>
  </div>
  <!-- /.content-wrapper -->