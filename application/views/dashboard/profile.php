  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">


    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Profile</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url('dashboard') ?>">Home</a></li>
              <li class="breadcrumb-item active">Profile</li>
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
            <div class="row">
              <div class="col-md-8">
                <?php foreach ($profiles as $prof) : ?>
                  <?php if (empty($prof['id_profile'])) { ?>
                    <div class='text-center mt-5'>
                      <a href='<?= base_url('dashboard/create_profile') ?>' class='btn btn-info'>Create</a>
                    </div>
                  <?php } else { ?>
                    <form action="<?= base_url('dashboard/set_profile') ?>" method="POST" enctype="multipart/form-data">
                      <div class="form-group">
                        <label for="nama">Name *</label>
                        <input type="hidden" name="id_profile" value="<?= $prof['id_profile'] ?>">
                        <input type="text" name="nama" class="form-control" value="<?= $prof['nama_lengkap'] ?>">
                      </div>
                      <div class="form-group">
                        <label for="tempat_tgl_lahir">City, Date Of Birth *</label>
                        <input type="text" name="tempat_tgl_lahir" class="form-control" value="<?= $prof['tempat_tgl_lahir'] ?>">
                      </div>
                      <div class="form-group">
                        <label for="tahun_lahir">Email *</label>
                        <input type="email" name="email" class="form-control" value="<?= $prof['email'] ?>">
                      </div>
                      <div class="form-group">
                        <label for="tahun_lahir">Phone *</label>
                        <input type="text" name="telepon" class="form-control" value="<?= $prof['telepon'] ?>">
                      </div>
                      <div class="form-group">
                        <label for="deskripsi">Description *</label>
                        <textarea name="deskripsi" id="deskripsi" class="form-control" cols="5" rows="5"><?= $prof['deskripsi']; ?></textarea>
                      </div>
                      <div class="form-group">
                        <label for="alamat">Address *</label>
                        <textarea name="alamat" id="alamat" class="form-control" cols="3" rows="3"><?= $prof['alamat']; ?></textarea>
                      </div>
              </div>
              <div class="col-md-4">
                <div class="img-thumbnail mt-4">
                  <img src="<?= base_url('assets/img/foto_profile/') . $prof['foto_profile'] ?>" class="img-fluid">
                </div>
                <div class="form-group">
                  <label for="foto">Foto *</label>
                  <input type="file" name="foto" class="form-control-file">
                </div>
                <button type="reset" class="btn btn-danger">Reset</button>
                <button type="submit" class="btn btn-info">Update</button>
                </form>
              </div>
            </div>
          </div>
        <?php } ?>
      <?php endforeach; ?>
        </div>
      </div>
    </section>
  </div>

  <!-- /.content-wrapper -->