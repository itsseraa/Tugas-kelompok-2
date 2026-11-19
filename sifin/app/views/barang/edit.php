<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1><?= $data['title']; ?></h1>
        </div>
      </div>
    </div>
  </section>

  <section class="content">
    <div class="row">
      <div class="col-sm-12">
        <?php Flasher::Message(); ?>
      </div>
    </div>

    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title"><?= $data['title']; ?></h3>
      </div>

      <form role="form" action="<?= base_url; ?>/barang/updateBarang" method="POST">
        <input type="hidden" name="id_barang" value="<?= $data['barang']['id_barang']; ?>">

        <div class="card-body">

          <div class="form-group">
            <label>Kode Barang</label>
            <input type="text" class="form-control" name="kode_barang"
                   value="<?= htmlspecialchars($data['barang']['kode_barang']); ?>" required>
          </div>

          <div class="form-group">
            <label>Nama Barang</label>
            <input type="text" class="form-control" name="nama_barang"
                   value="<?= htmlspecialchars($data['barang']['nama_barang']); ?>" required>
          </div>

          <div class="form-group">
            <label>Kategori</label>
            <select name="id_kategori" class="form-control" required>
              <option value="">-- Pilih Kategori --</option>
              <?php foreach ($data['kategori'] as $k): ?>
                <option value="<?= $k['id_kategori'] ?>"
                  <?= ($k['id_kategori'] == $data['barang']['id_kategori']) ? 'selected' : ''; ?>>
                  <?= $k['nama_kategori'] ?>
                </option>
              <?php endforeach; ?>
            </select>
          </div>

          <div class="form-group">
            <label>Supplier</label>
            <select name="id_supplier" class="form-control">
              <option value="">-- Pilih Supplier --</option>
              <?php foreach ($data['supplier'] as $s): ?>
                <option value="<?= $s['id_supplier'] ?>"
                  <?= ($s['id_supplier'] == $data['barang']['id_supplier']) ? 'selected' : ''; ?>>
                  <?= $s['nama_supplier'] ?>
                </option>
              <?php endforeach; ?>
            </select>
          </div>

          <div class="form-group">
            <label>Lokasi</label>
            <select name="id_lokasi" class="form-control">
              <option value="">-- Pilih Lokasi --</option>
              <?php foreach ($data['lokasi'] as $l): ?>
                <option value="<?= $l['id_lokasi'] ?>"
                  <?= ($l['id_lokasi'] == $data['barang']['id_lokasi']) ? 'selected' : ''; ?>>
                  <?= $l['nama_lokasi'] ?>
                </option>
              <?php endforeach; ?>
            </select>
          </div>

          <div class="form-group">
            <label>Stok</label>
            <input type="number" class="form-control" name="stok"
                   value="<?= $data['barang']['stok']; ?>" readonly>
            <small class="text-muted">
              Stok hanya bisa diubah melalui transaksi Barang Masuk / Barang Keluar.
            </small>
          </div>

          <div class="form-group">
            <label>Stok Minimum</label>
            <input type="number" class="form-control" name="stok_minimum"
                   value="<?= $data['barang']['stok_minimum']; ?>" required>
          </div>

          <div class="form-group">
            <label>Harga</label>
            <input type="number" step="0.01" class="form-control" name="harga"
                   value="<?= $data['barang']['harga']; ?>" required>
          </div>

          <div class="form-group">
            <label>Satuan</label>
            <input type="text" class="form-control" name="satuan"
                   value="<?= htmlspecialchars($data['barang']['satuan']); ?>" required>
          </div>
          <div class="form-group">
            <label>User ID</label>
            <input type="text" class="form-control" name="id_user"
                   value="<?= htmlspecialchars($data['barang']['id_user']); ?>">
          </div>

        </div>

        <div class="card-footer">
          <button type="submit" class="btn btn-primary">Submit</button>
          <a href="<?= base_url; ?>/barang" class="btn btn-secondary">Batal</a>
        </div>
      </form>
    </div>
  </section>
</div>