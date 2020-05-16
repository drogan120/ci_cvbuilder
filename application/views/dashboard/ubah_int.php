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

                      <?php foreach ($interest as $int) : ?>
                          <form action="<?= base_url('dashboard/update_interest') ?>" method="POST">
                              <div class="form-group">
                                  <input type="hidden" name="id" value="<?= $int['id_interest'] ?>">
                                  <label for="interest">Nama</label>
                                  <input type="text" name="nama" class="form-control" value="<?= $int['nama'] ?>">
                              </div>
                              <button type="submit" class="btn btn-info">Save</button>
                          </form>
                      <?php endforeach; ?>

                  </div>
              </div>
          </div>
      </section>
  </div>