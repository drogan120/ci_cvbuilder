  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">


      <section class="content-header">
          <div class="container-fluid">
              <div class="row mb-2">
                  <div class="col-sm-6">
                      <h1>Generate</h1>
                  </div>
                  <div class="col-sm-6">
                      <ol class="breadcrumb float-sm-right">
                          <li class="breadcrumb-item"><a href="<?= base_url('dashboard') ?>">Home</a></li>
                          <li class="breadcrumb-item active">Generate</li>
                      </ol>
                  </div>
              </div>
          </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">

          <div class="card">
              <div class="card-body">
                  <div class="row">
                      <div class="col-md-2">
                          <div class="p-3 mb-2 bg-primary text-white">.bg-primary</div>
                          <div class="p-3 mb-2 bg-secondary text-white">.bg-secondary</div>
                          <div class="p-3 mb-2 bg-success text-white">.bg-success</div>
                          <div class="p-3 mb-2 bg-danger text-white">.bg-danger</div>
                          <div class="p-3 mb-2 bg-warning text-dark">.bg-warning</div>
                          <div class="p-3 mb-2 bg-info text-white">.bg-info</div>
                          <div class="p-3 mb-2 bg-light text-dark">.bg-light</div>
                          <div class="p-3 mb-2 bg-dark text-white">.bg-dark</div>
                          <div class="p-3 mb-2 bg-white text-dark">.bg-white</div>
                      </div>
                      <div class="col-md-10">
                          <div class="row">
                              <div class="col-sm">
                                  <div class="card">
                                      <div class="card-body">
                                          <form action="<?= base_url('generate/type1') ?>" method="post">
                                              <div class="form-group">
                                                  <label for="bg-warna">Samping kiri</label>
                                                  <select name="bg-warna" id="warna" class="form-control">
                                                      <option>----- pilih warna ------</option>
                                                      <option value="bg-primary">Biru</option>
                                                      <option value="bg-secondary">abu abu</option>
                                                      <option value="bg-success">hijau</option>
                                                      <option value="bg-danger">merah</option>
                                                      <option value="bg-warning">kuning</option>
                                                      <option value="bg-info">biru muda</option>
                                                      <option value="bg-light">putih</option>
                                                      <option value="bg-dark">hitam</option>
                                                      <option value="bg-white">putih</option>
                                                  </select>
                                              </div>
                                              <div class="form-group">
                                                  <label for="side-warna">Warna text samping kiri</label>
                                                  <select name="side-warna" id="warna" class="form-control">
                                                      <option>----- pilih warna ------</option>
                                                      <option value="text-primary">Biru</option>
                                                      <option value="text-secondary">abu abu</option>
                                                      <option value="text-success">hijau</option>
                                                      <option value="text-danger">merah</option>
                                                      <option value="text-warning">kuning</option>
                                                      <option value="text-info">biru muda</option>
                                                      <option value="text-light">putih</option>
                                                      <option value="text-dark">hitam</option>
                                                      <option value="text-white">putih</option>
                                                  </select>
                                              </div>
                                              <div class="form-group">
                                                  <label for="bg-big-warna">Warna utama kanan</label>
                                                  <select name="bg-big-warna" id="warna" class="form-control">
                                                      <option>----- pilih warna ------</option>
                                                      <option value="bg-primary">Biru</option>
                                                      <option value="bg-secondary">abu abu</option>
                                                      <option value="bg-success">hijau</option>
                                                      <option value="bg-danger">merah</option>
                                                      <option value="bg-warning">kuning</option>
                                                      <option value="bg-info">biru muda</option>
                                                      <option value="bg-light">putih</option>
                                                      <option value="bg-dark">hitam</option>
                                                      <option value="bg-white">putih</option>
                                                  </select>
                                              </div>
                                              <div class="form-group">
                                                  <label for="text-warna">Warna Text kanan</label>
                                                  <select name="text-warna" id="warna" class="form-control">
                                                      <option>----- pilih warna ------</option>
                                                      <option value="text-primary">Biru</option>
                                                      <option value="text-secondary">abu abu</option>
                                                      <option value="text-success">hijau</option>
                                                      <option value="text-danger">merah</option>
                                                      <option value="text-warning">kuning</option>
                                                      <option value="text-info">biru muda</option>
                                                      <option value="text-light">putih</option>
                                                      <option value="text-dark">hitam</option>
                                                      <option value="text-white">putih</option>
                                                  </select>
                                              </div>
                                              <button type="submit" class="btn btn-info">TYPE 1</button>
                                          </form>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-sm">
                                  <div class="card">
                                      <div class="card-body">
                                          <form action="<?= base_url('generate/type2') ?>" method="post">
                                              <div class="form-group">
                                                  <label for="bg-warna">Samping kiri</label>
                                                  <select name="bg-warna" id="warna" class="form-control">
                                                      <option>----- pilih warna ------</option>
                                                      <option value="bg-primary">Biru</option>
                                                      <option value="bg-secondary">abu abu</option>
                                                      <option value="bg-success">hijau</option>
                                                      <option value="bg-danger">merah</option>
                                                      <option value="bg-warning">kuning</option>
                                                      <option value="bg-info">biru muda</option>
                                                      <option value="bg-light">putih</option>
                                                      <option value="bg-dark">hitam</option>
                                                      <option value="bg-white">putih</option>
                                                  </select>
                                              </div>
                                              <div class="form-group">
                                                  <label for="side-warna">Warna text samping kiri</label>
                                                  <select name="side-warna" id="warna" class="form-control">
                                                      <option>----- pilih warna ------</option>
                                                      <option value="text-primary">Biru</option>
                                                      <option value="text-secondary">abu abu</option>
                                                      <option value="text-success">hijau</option>
                                                      <option value="text-danger">merah</option>
                                                      <option value="text-warning">kuning</option>
                                                      <option value="text-info">biru muda</option>
                                                      <option value="text-light">putih</option>
                                                      <option value="text-dark">hitam</option>
                                                      <option value="text-white">putih</option>
                                                  </select>
                                              </div>
                                              <div class="form-group">
                                                  <label for="bg-big-warna">Warna utama kanan</label>
                                                  <select name="bg-big-warna" id="warna" class="form-control">
                                                      <option>----- pilih warna ------</option>
                                                      <option value="bg-primary">Biru</option>
                                                      <option value="bg-secondary">abu abu</option>
                                                      <option value="bg-success">hijau</option>
                                                      <option value="bg-danger">merah</option>
                                                      <option value="bg-warning">kuning</option>
                                                      <option value="bg-info">biru muda</option>
                                                      <option value="bg-light">putih</option>
                                                      <option value="bg-dark">hitam</option>
                                                      <option value="bg-white">putih</option>
                                                  </select>
                                              </div>
                                              <div class="form-group">
                                                  <label for="text-warna">Warna Text kanan</label>
                                                  <select name="text-warna" id="warna" class="form-control">
                                                      <option>----- pilih warna ------</option>
                                                      <option value="text-primary">Biru</option>
                                                      <option value="text-secondary">abu abu</option>
                                                      <option value="text-success">hijau</option>
                                                      <option value="text-danger">merah</option>
                                                      <option value="text-warning">kuning</option>
                                                      <option value="text-info">biru muda</option>
                                                      <option value="text-light">putih</option>
                                                      <option value="text-dark">hitam</option>
                                                      <option value="text-white">putih</option>
                                                  </select>
                                              </div>
                                              <button type="submit" class="btn btn-info">TYPE 2</button>
                                          </form>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-sm">
                                  <div class="card">
                                      <div class="card-body">
                                          <form action="<?= base_url('generate/type3') ?>" method="post">
                                              <div class="form-group">
                                                  <label for="bg-warna-atas">Background Atas</label>
                                                  <select name="bg-warna-atas" id="warna" class="form-control">
                                                      <option>----- pilih warna ------</option>
                                                      <option value="bg-primary">Biru</option>
                                                      <option value="bg-secondary">abu abu</option>
                                                      <option value="bg-success">hijau</option>
                                                      <option value="bg-danger">merah</option>
                                                      <option value="bg-warning">kuning</option>
                                                      <option value="bg-info">biru muda</option>
                                                      <option value="bg-light">putih</option>
                                                      <option value="bg-dark">hitam</option>
                                                      <option value="bg-white">putih</option>
                                                  </select>
                                              </div>
                                              <div class="form-group">
                                                  <label for="text-warna-atas">Warna text atas</label>
                                                  <select name="text-warna-atas" id="warna" class="form-control">
                                                      <option>----- pilih warna ------</option>
                                                      <option value="text-primary">Biru</option>
                                                      <option value="text-secondary">abu abu</option>
                                                      <option value="text-success">hijau</option>
                                                      <option value="text-danger">merah</option>
                                                      <option value="text-warning">kuning</option>
                                                      <option value="text-info">biru muda</option>
                                                      <option value="text-light">putih</option>
                                                      <option value="text-dark">hitam</option>
                                                      <option value="text-white">putih</option>
                                                  </select>
                                              </div>
                                              <div class="form-group">
                                                  <label for="bg-warna-bawah">background bawah</label>
                                                  <select name="bg-warna-bawah" id="warna" class="form-control">
                                                      <option>----- pilih warna ------</option>
                                                      <option value="bg-primary">Biru</option>
                                                      <option value="bg-secondary">abu abu</option>
                                                      <option value="bg-success">hijau</option>
                                                      <option value="bg-danger">merah</option>
                                                      <option value="bg-warning">kuning</option>
                                                      <option value="bg-info">biru muda</option>
                                                      <option value="bg-light">putih</option>
                                                      <option value="bg-dark">hitam</option>
                                                      <option value="bg-white">putih</option>
                                                  </select>
                                              </div>
                                              <div class="form-group">
                                                  <label for="text-warna-bawah">Warna Text bawah</label>
                                                  <select name="text-warna-bawah" id="warna" class="form-control">
                                                      <option>----- pilih warna ------</option>
                                                      <option value="text-primary">Biru</option>
                                                      <option value="text-secondary">abu abu</option>
                                                      <option value="text-success">hijau</option>
                                                      <option value="text-danger">merah</option>
                                                      <option value="text-warning">kuning</option>
                                                      <option value="text-info">biru muda</option>
                                                      <option value="text-light">putih</option>
                                                      <option value="text-dark">hitam</option>
                                                      <option value="text-white">putih</option>
                                                  </select>
                                              </div>
                                              <button type="submit" class="btn btn-info">TYPE 3</button>
                                          </form>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-sm">
                                  <div class="card">
                                      <div class="card-body">
                                          <form action="<?= base_url('generate/type4') ?>" method="post">
                                              <div class="form-group">
                                                  <label for="bg-warna-atas">Background Atas</label>
                                                  <select name="bg-warna-atas" id="warna" class="form-control">
                                                      <option>----- pilih warna ------</option>
                                                      <option value="bg-primary">Biru</option>
                                                      <option value="bg-secondary">abu abu</option>
                                                      <option value="bg-success">hijau</option>
                                                      <option value="bg-danger">merah</option>
                                                      <option value="bg-warning">kuning</option>
                                                      <option value="bg-info">biru muda</option>
                                                      <option value="bg-light">putih</option>
                                                      <option value="bg-dark">hitam</option>
                                                      <option value="bg-white">putih</option>
                                                  </select>
                                              </div>
                                              <div class="form-group">
                                                  <label for="text-warna-atas">Warna text atas</label>
                                                  <select name="text-warna-atas" id="warna" class="form-control">
                                                      <option>----- pilih warna ------</option>
                                                      <option value="text-primary">Biru</option>
                                                      <option value="text-secondary">abu abu</option>
                                                      <option value="text-success">hijau</option>
                                                      <option value="text-danger">merah</option>
                                                      <option value="text-warning">kuning</option>
                                                      <option value="text-info">biru muda</option>
                                                      <option value="text-light">putih</option>
                                                      <option value="text-dark">hitam</option>
                                                      <option value="text-white">putih</option>
                                                  </select>
                                              </div>
                                              <div class="form-group">
                                                  <label for="bg-warna-bawah">background bawah</label>
                                                  <select name="bg-warna-bawah" id="warna" class="form-control">
                                                      <option>----- pilih warna ------</option>
                                                      <option value="bg-primary">Biru</option>
                                                      <option value="bg-secondary">abu abu</option>
                                                      <option value="bg-success">hijau</option>
                                                      <option value="bg-danger">merah</option>
                                                      <option value="bg-warning">kuning</option>
                                                      <option value="bg-info">biru muda</option>
                                                      <option value="bg-light">putih</option>
                                                      <option value="bg-dark">hitam</option>
                                                      <option value="bg-white">putih</option>
                                                  </select>
                                              </div>
                                              <div class="form-group">
                                                  <label for="text-warna-bawah">Warna Text bawah</label>
                                                  <select name="text-warna-bawah" id="warna" class="form-control">
                                                      <option>----- pilih warna ------</option>
                                                      <option value="text-primary">Biru</option>
                                                      <option value="text-secondary">abu abu</option>
                                                      <option value="text-success">hijau</option>
                                                      <option value="text-danger">merah</option>
                                                      <option value="text-warning">kuning</option>
                                                      <option value="text-info">biru muda</option>
                                                      <option value="text-light">putih</option>
                                                      <option value="text-dark">hitam</option>
                                                      <option value="text-white">putih</option>
                                                  </select>
                                              </div>
                                              <button type="submit" class="btn btn-info">TYPE 4</button>
                                          </form>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </section>
  </div>
  <!-- /.content-wrapper -->