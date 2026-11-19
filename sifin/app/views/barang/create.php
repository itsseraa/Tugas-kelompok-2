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
      <form role="form" action="<?= base_url; ?>/barang/simpanBarang" method="POST">
        <div class="card-body">
          <div class="form-group">
            <label>Kode Barang</label>
            <input type="text" class="form-control" name="kode_barang" placeholder="Masukkan kode barang..." required>
          </div>
          <div class="form-group">
            <label>Nama Barang</label>
            <input type="text" class="form-control" name="nama_barang" placeholder="Masukkan nama barang..." required>
          </div>
          <div class="form-group">
  <label>Kategori</label>
  <select name="id_kategori" class="form-control" required>
    <option value="">-- Pilih Kategori --</option>
    <?php foreach ($data['kategori'] as $k): ?>
      <option value="<?= $k['id_kategori'] ?>"><?= $k['nama_kategori'] ?></option>
    <?php endforeach; ?>
  </select>
</div>
<div class="form-group">
  <label>Supplier</label>
  <select name="id_supplier" class="form-control" required>
    <option value="">-- Pilih Supplier --</option>
    <?php foreach ($data['supplier'] as $s): ?>
      <option value="<?= $s['id_supplier'] ?>"><?= $s['nama_supplier'] ?></option>
    <?php endforeach; ?>
  </select>
</div>
<div class="form-group">
  <label>Lokasi</label>
  <select name="id_lokasi" class="form-control" required>
    <option value="">-- Pilih Lokasi --</option>
    <?php foreach ($data['lokasi'] as $l): ?>
      <option value="<?= $l['id_lokasi'] ?>"><?= $l['nama_lokasi'] ?></option>
    <?php endforeach; ?>
  </select>
</div>
          <div class="form-group">
            <label>Stok</label>
            <input type="number" class="form-control" name="stok" placeholder="Masukkan stok..." required>
          </div>
          <div class="form-group">
            <label>Stok Minimum</label>
            <input type="number" class="form-control" name="stok_minimum" placeholder="Masukkan stok minimum..." required>
          </div>
          <div class="form-group">
            <label>Harga</label>
            <input type="number" class="form-control" name="harga" placeholder="Masukkan harga..." required>
          </div>
          <div class="form-group">
            <label>Satuan</label>
            <input type="text" class="form-control" name="satuan" placeholder="Masukkan satuan..." required>
          </div>
          
        </div>
        <div class="card-footer">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>
  </section>
</div>