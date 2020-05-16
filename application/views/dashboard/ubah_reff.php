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
                      <form action="<?= base_url('dashboard/update_refference') ?>" method="POST">
                          <?php foreach ($refference as $reff) : ?>
                              <div class="form-group">
                                  <label for="nama">Nama</label>
                                  <input type="text" class="form-control" name="nama" value="<?= $reff['nama'] ?>">
                                  <input type="hidden" name="id" value="<?= $reff['id_refference'] ?>">
                              </div>
                              <div class="form-group">
                                  <label for="email">Email</label>
                                  <input type="email" class="form-control" name="email" value="<?= $reff['email'] ?>">
                              </div>
                              <div class=" form-group">
                                  <label for="status">Status</label>
                                  <input type="text" name="status" class="form-control" value="<?= $reff['status'] ?>">
                              </div>
                              <div class=" form-group">
                                  <label for="phone">Telepon</label>
                                  <input type="text" name="phone" class="form-control" value="<?= $reff['phone'] ?>">
                              </div>
                              <button type=" submit" class="btn btn-info">Save</button>
                          <?php endforeach; ?>

                      </form>

                  </div>
              </div>
          </div>
      </section>
  </div>
  <!-- /.content-wrapper -->