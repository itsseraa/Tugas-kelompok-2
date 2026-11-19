<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid"><h1><?= $data['title']; ?></h1></div>
  </section>

  <section class="content">
    <div class="card card-primary">
      <div class="card-header"><h3 class="card-title"><?= $data['title']; ?></h3></div>
      <form role="form" action="<?= base_url; ?>/kategori/updateKategori" method="POST">
        <input type="hidden" name="id_kategori" value="<?= $data['kategori']['id_kategori']; ?>">
        <div class="card-body">
          <div class="form-group">
            <label>Nama Kategori</label>
            <input type="text" class="form-control" name="nama_kategori" value="<?= $data['kategori']['nama_kategori']; ?>" required>
          </div>
        </div>
        <div class="card-footer">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>
  </section>
</div>