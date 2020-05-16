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
                      <form action="<?= base_url('dashboard/update_skills') ?>" method="POST">
                          <?php foreach ($skills as $skill) : ?>
                              <div class="form-group">
                                  <label for="nama">Nama</label>
                                  <input type="text" class="form-control" name="nama" value="<?= $skill['nama'] ?>">
                                  <input type="hidden" name="id" value="<?= $skill['id_skills'] ?>">
                              </div>
                              <div class="form-group">
                                  <label for="tingkat">Tingkat 1-100</label>
                                  <input type="number" name="tingkat" class="form-control" value="<?= $skill['scale'] ?>">
                              </div>
                              <div class=" form-group">
                                  <label for="pengalaman">Pengalaman dalam tahun</label>
                                  <input type="number" name="pengalaman" class="form-control" value="<?= $skill['pengalaman'] ?>">
                              </div>
                          <?php endforeach; ?>
                          <button type=" submit" class="btn btn-info" name="save">Save</button>

                      </form>

                  </div>
              </div>
          </div>
      </section>
  </div>
  <!-- /.content-wrapper -->