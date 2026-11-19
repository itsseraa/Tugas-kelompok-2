<div class="content-wrapper">

  <section class="content-header">
    <div class="container-fluid">
      <h1><?= $data['title']; ?></h1>
    </div>
  </section>

  <section class="content">
    <div class="card">

      <div class="card-header">
        <h3 class="card-title">Data User</h3>

        <div class="card-tools">
          <a href="<?= base_url; ?>/user/tambah"
             class="btn btn-primary btn-sm">
            Tambah User
          </a>
        </div>
      </div>

      <div class="card-body">

        <!-- Form Pencarian -->
        <form action="<?= base_url; ?>/user/cari"
              method="POST"
              class="form-inline mb-3">

          <input
            type="text"
            name="key"
            class="form-control"
            placeholder="Cari user..."
            value="<?= htmlspecialchars($data['key'] ?? '', ENT_QUOTES, 'UTF-8'); ?>"
            style="width: 350px;">

          <button type="submit" class="btn btn-outline-secondary">
            Cari Data
          </button>

          <a href="<?= base_url; ?>/user"
             class="btn btn-outline-danger">
            Reset
          </a>
        </form>

        <!-- Tabel User -->
        <div class="table-responsive">
          <table class="table table-bordered table-hover">

            <thead>
              <tr>
                <th style="width: 40px;">#</th>
                <th>ID User</th>
                <th>Nama Lengkap</th>
                <th>Username</th>
                <th>Role</th>
                <th>Status Aktif</th>
                <th style="width: 130px;">Action</th>
              </tr>
            </thead>

            <tbody>
              <?php if (!empty($data['user'])) : ?>

                <?php $no = 1; ?>
                <?php foreach ($data['user'] as $user) : ?>

                  <tr>
                    <td><?= $no++; ?></td>
                    <td><?= htmlspecialchars((string) $user['id_user']); ?></td>
                    <td><?= htmlspecialchars($user['nama_lengkap'], ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?= htmlspecialchars($user['username'], ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?= htmlspecialchars($user['role'], ENT_QUOTES, 'UTF-8'); ?></td>

                    <td>
                      <?php if ($user['is_active'] == 1) : ?>
                        <span class="badge badge-success">Aktif</span>
                      <?php else : ?>
                        <span class="badge badge-danger">Tidak Aktif</span>
                      <?php endif; ?>
                    </td>

                    <td>
                      <a href="<?= base_url; ?>/user/edit/<?= $user['id_user']; ?>"
                         class="btn btn-info btn-sm">
                        Edit
                      </a>

                      <a href="<?= base_url; ?>/user/hapus/<?= $user['id_user']; ?>"
                         class="btn btn-danger btn-sm"
                         onclick="return confirm('Yakin ingin menghapus user ini?')">
                        Hapus
                      </a>
                    </td>
                  </tr>

                <?php endforeach; ?>

              <?php else : ?>

                <tr>
                  <td colspan="7" class="text-center">
                    Belum ada data user.
                  </td>
                </tr>

              <?php endif; ?>
            </tbody>

          </table>
        </div>

      </div>
    </div>
  </section>
</div>