<?php $activePage = 'tentang'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Tentang Perusahaan - KreditMobil.id</title>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>

<?php include 'partial-navbar.php'; ?>

<div class="page-banner">
  <h1>Tentang Perusahaan</h1>
  <p>Kenali lebih dekat siapa kami dan bagaimana kami melayani Anda</p>
  <div class="breadcrumb"><a href="beranda.php">Beranda</a> / Tentang Perusahaan</div>
</div>

<section class="tentang" style="margin-top: 60px;">
  <div class="tentang-gambar">
    <img src="../assets/img/kantor.jpeg" alt="Gambar perusahaan">
    <div class="tentang-float">
      <strong>10+</strong>
      <span>Tahun Melayani Pelanggan</span>
    </div>
  </div>
  <div class="tentang-text">
    <span class="eyebrow">Tentang Kami</span>
    <h2>Partner Terpercaya untuk Kredit Mobil Anda</h2>
    <p>Kami adalah penyedia layanan kredit dan rental mobil terpercaya, melayani ribuan pelanggan
    dengan proses pengajuan yang mudah, transparan, dan didukung tim profesional selama bertahun-tahun.</p>
    <ul class="check-list">
      <li>✔ Proses pengajuan cepat dan online</li>
      <li>✔ Simulasi angsuran transparan tanpa biaya tersembunyi</li>
      <li>✔ Pilihan tenor fleksibel 1 - 5 tahun</li>
    </ul>
    <div class="stats-row">
      <div class="stat"><strong>10+</strong><span>Tahun Pengalaman</span></div>
      <div class="stat"><strong>5000+</strong><span>Pelanggan Puas</span></div>
      <div class="stat"><strong>20+</strong><span>Kota Terjangkau</span></div>
    </div>
  </div>
</section>

<section class="promo" style="margin: 100px auto 60px;">
  <div class="promo-inner">
    <div>
      <h2>Siap Memiliki Mobil<br>Impian Anda?</h2>
      <p>Coba simulasi kredit mobil kami dan rasakan kemudahan prosesnya.</p>
      <a href="kredit.php" class="btn-primary">Mulai Simulasi</a>
    </div>
  </div>
</section>

<?php include 'partial-footer.php'; ?>