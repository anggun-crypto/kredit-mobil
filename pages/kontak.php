<?php $activePage = 'kontak'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Kontak - KreditMobil.id</title>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>

<?php include 'partial-navbar.php'; ?>

<div class="page-banner">
  <h1>Hubungi Kami</h1>
  <p>Tim kami siap membantu pertanyaan seputar kredit mobil Anda</p>
  <div class="breadcrumb"><a href="beranda.php">Beranda</a> / Kontak</div>
</div>

<section class="kontak-section">
  <div>
    <div class="kontak-info-card">
      <div class="icon-box">📍</div>
      <div>
        <h4>Alamat Kantor</h4>
        <p>Jl. Contoh Alamat No. 123, Kota Anda</p>
      </div>
    </div>
    <div class="kontak-info-card">
      <div class="icon-box">📞</div>
      <div>
        <h4>Telepon</h4>
        <p>(021) 1234-5678</p>
      </div>
    </div>
    <div class="kontak-info-card">
      <div class="icon-box">✉</div>
      <div>
        <h4>Email</h4>
        <p>info@kreditmobil.id</p>
      </div>
    </div>
  </div>

  <div class="form-card">
    <h3 style="margin-bottom: 18px; color: var(--navy);">Kirim Pesan</h3>
    <form method="POST" action="">
      <div class="form-group">
        <label>Nama Lengkap</label>
        <input type="text" placeholder="Nama Anda" required>
      </div>
      <div class="form-group">
        <label>Email</label>
        <input type="email" placeholder="Email Anda" required>
      </div>
      <div class="form-group">
        <label>Pesan</label>
        <textarea rows="4" placeholder="Tulis pesan Anda..." required></textarea>
      </div>
      <button type="submit" class="btn-primary full">Kirim Pesan</button>
    </form>
  </div>
</section>

<?php include 'partial-footer.php'; ?>