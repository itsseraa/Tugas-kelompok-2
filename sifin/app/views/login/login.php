<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Login - SIFIN</title>
  <link rel="stylesheet" href="<?= base_url ?>/dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo"><b>SIFIN</b> SMKN 1 Pangkalan Kerinci</div>
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Masuk untuk mengelola inventory sekolah</p>
      <?php Flasher::Message(); ?>
<form action="<?= base_url; ?>/login/prosesLogin" method="POST">
          <div class="input-group mb-3">
          <input type="text" name="username" class="form-control" placeholder="Username" required>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control" placeholder="Password" required>
        </div>
        <button type="submit" class="btn btn-primary btn-block">Login</button>
      </form>
    </div>
  </div>
</div>
</body>
</html>