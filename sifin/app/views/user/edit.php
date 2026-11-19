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

      <form action="<?= base_url; ?>/user/updateUser" method="POST">

        <div class="card-body">

          <input
            type="hidden"
            name="id_user"
            value="<?= htmlspecialchars((string) $data['user']['id_user']); ?>">

          <div class="form-group">
            <label>Nama Lengkap</label>
            <input
              type="text"
              class="form-control"
              name="nama_lengkap"
              value="<?= htmlspecialchars($data['user']['nama_lengkap'], ENT_QUOTES, 'UTF-8'); ?>"
              maxlength="100"
              placeholder="Masukkan nama lengkap..."
              required>
          </div>

          <div class="form-group">
            <label>Username</label>
            <input
              type="text"
              class="form-control"
              name="username"
              value="<?= htmlspecialchars($data['user']['username'], ENT_QUOTES, 'UTF-8'); ?>"
              maxlength="50"
              placeholder="Masukkan username..."
              required>
          </div>

          <div class="form-group">
            <label>Role</label>
            <select class="form-control" name="role" required>
              <option value="admin"
                <?= $data['user']['role'] === 'admin' ? 'selected' : ''; ?>>
                Admin
              </option>

              <option value="petugas"
                <?= $data['user']['role'] === 'petugas' ? 'selected' : ''; ?>>
                Petugas
              </option>

              <option value="pimpinan"
                <?= $data['user']['role'] === 'pimpinan' ? 'selected' : ''; ?>>
                Pimpinan
              </option>
            </select>
          </div>

          <div class="form-group">
            <label>Status Aktif</label>
            <select class="form-control" name="is_active" required>
              <option value="1"
                <?= $data['user']['is_active'] == 1 ? 'selected' : ''; ?>>
                Aktif
              </option>

              <option value="0"
                <?= $data['user']['is_active'] == 0 ? 'selected' : ''; ?>>
                Tidak Aktif
              </option>
            </select>
          </div>

          <p class="text-muted">
            Password tidak diubah melalui form ini.
          </p>

        </div>

        <div class="card-footer">
          <button type="submit" class="btn btn-primary">
            <i class="fas fa-save"></i> Simpan Perubahan
          </button>

          <a href="<?= base_url; ?>/user" class="btn btn-secondary">
            Kembali
          </a>
        </div>

      </form>

    </div>
  </section>

</div>