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
                      <form action="<?= base_url('dashboard/update_achievement') ?>" method="POST">
                          <?php foreach ($achievement as $ach) : ?>
                              <div class="form-group">
                                  <label for="sertifikat">Nama</label>
                                  <input type="text" class="form-control" name="sertifikat" value="<?= $ach['nama'] ?>">
                                  <input type="hidden" name="id" value="<?= $ach['id_achievement'] ?>">
                              </div>
                              <div class="form-group">
                                  <label for="lembaga">Lembaga</label>
                                  <input type="text" class="form-control" name="lembaga" value="<?= $ach['lembaga'] ?>">
                              </div>
                              <div class="form-group">
                                  <label for="tahun">Tahun</label>
                                  <input type="number" name="tahun" class="form-control" min="4" max="4" value="<?= $ach['tahun'] ?>">
                              </div>

                              <button type="submit" class="btn btn-info">Save</button>

                          <?php endforeach; ?>
                      </form>

                  </div>
              </div>
          </div>
      </section>
  </div>
  <!-- /.content-wrapper -->