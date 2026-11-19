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

      <form role="form" action="<?= base_url; ?>/user/simpanUser" method="POST">
        <div class="card-body">

          <div class="form-group">
            <label>Nama Lengkap</label>
            <input
              type="text"
              class="form-control"
              name="nama_lengkap"
              placeholder="Masukkan nama lengkap..."
              maxlength="100"
              required>
          </div>

          <div class="form-group">
            <label>Username</label>
            <input
              type="text"
              class="form-control"
              name="username"
              placeholder="Masukkan username..."
              maxlength="50"
              required>
          </div>

          <div class="form-group">
            <label>Password</label>
            <input
              type="password"
              class="form-control"
              name="password"
              placeholder="Masukkan password..."
              required>
          </div>

          <div class="form-group">
            <label>Role</label>
            <select class="form-control" name="role" required>
              <option value="">-- Pilih Role --</option>
              <option value="admin">Admin</option>
              <option value="petugas">Petugas</option>
              <option value="pimpinan">Pimpinan</option>
            </select>
          </div>

          <div class="form-group">
            <label>Status Aktif</label>
            <select class="form-control" name="is_active" required>
              <option value="1" selected>Aktif</option>
              <option value="0">Tidak Aktif</option>
            </select>
          </div>

        </div>

        <div class="card-footer">
          <button type="submit" class="btn btn-primary">
            <i class="fas fa-save"></i> Simpan
          </button>

          <a href="<?= base_url; ?>/user" class="btn btn-secondary">
            Kembali
          </a>
        </div>
      </form>
    </div>
  </section>
</div>