<div class="content-wrapper">

  <section class="content-header">
    <div class="container-fluid">
      <h1><?= $data['title']; ?></h1>
    </div>
  </section>

  <section class="content">
    <div class="card card-primary">

      <div class="card-header">
        <h3 class="card-title"><?= $data['title']; ?></h3>
      </div>

      <form action="<?= base_url; ?>/lokasi/simpanLokasi"
            method="POST">

        <div class="card-body">
          <div class="form-group">
            <label>Nama Lokasi</label>

            <input
              type="text"
              class="form-control"
              name="nama_lokasi"
              placeholder="Masukkan nama lokasi..."
              maxlength="100"
              required>
          </div>
        </div>

        <div class="card-footer">
          <button type="submit" class="btn btn-primary">
            <i class="fas fa-save"></i> Simpan
          </button>

          <a href="<?= base_url; ?>/lokasi"
             class="btn btn-secondary">
            Kembali
          </a>
        </div>

      </form>

    </div>
  </section>
</div>