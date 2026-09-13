<?php $activePage = 'beranda'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Beranda - KreditMobil.id</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>

<?php include 'partial-navbar.php'; ?>

<section class="hero">
  <div class="hero-bg">
    <img id="hero-img" src="../assets/img/hero-1.png" alt="Slider mobil">
    <div class="hero-overlay"></div>
  </div>

  <div class="hero-content">
    <span class="hero-badge">🚗 Partner Kredit Mobil Terpercaya #1</span>
    <h1>Temukan &amp; Kredit<br>Mobil Impian Anda</h1>
    <p class="hero-desc">Ribuan pilihan mobil baru & bekas dengan simulasi cicilan transparan, proses cepat, dan bunga bersaing.</p>

    <div class="hero-search">
      <div class="search-field">
        <label>Merek Mobil</label>
        <select>
          <option>Semua Merek</option>
          <option>Mercedes-Benz</option>
          <option>Audi</option>
          <option>BMW</option>
          <option>Porsche</option>
        </select>
      </div>
      <div class="search-field">
        <label>Rentang Harga</label>
        <select>
          <option>Semua Harga</option>
          <option>&lt; Rp200 Juta</option>
          <option>Rp200 - 500 Juta</option>
          <option>&gt; Rp500 Juta</option>
        </select>
      </div>
      <a href="kredit.php" class="btn-primary search-btn">Cari Mobil</a>
    </div>
  </div>

  <div class="hero-dots">
    <span class="dot active" onclick="gantiSlide(0)"></span>
    <span class="dot" onclick="gantiSlide(1)"></span>
    <span class="dot" onclick="gantiSlide(2)"></span>
  </div>
</section>

<div class="quick-bar">
  <div class="quick-item"><strong>5.000+</strong><span>Mobil Terjual</span></div>
  <div class="quick-item"><strong>20%</strong><span>Bunga Flat</span></div>
  <div class="quick-item"><strong>1 Hari</strong><span>Proses Approval</span></div>
  <div class="quick-item"><strong>20+</strong><span>Kota Tersedia</span></div>
</div>

<section class="brand-strip">
  <p class="brand-strip-label">Dipercaya oleh berbagai merek mobil ternama</p>
  <div class="brand-logos">
    <span>MERCEDES-BENZ</span>
    <span>AUDI</span>
    <span>BMW</span>
    <span>PORSCHE</span>
    <span>TOYOTA</span>
    <span>HONDA</span>
  </div>
</section>

<section class="mobil-section">
  <div class="section-head">
    <div>
      <span class="eyebrow">Pilihan Terbaik</span>
      <h2>Rekomendasi Mobil Untuk Anda</h2>
    </div>
    <a href="kredit.php" class="link-arrow">Simulasi Kredit →</a>
  </div>

  <div class="mobil-grid">
    <div class="mobil-card">
      <div class="mobil-img">
        <img src="../assets/img/mobil-1.png" alt="Mercedes-Benz GLE">
        <span class="badge">Populer</span>
      </div>
      <div class="mobil-info">
        <h3>Mercedes-Benz GLE</h3>
        <p class="mobil-spec">SUV &middot; Automatic &middot; Diesel</p>
        <div class="mobil-bottom">
          <span class="mobil-harga">Mulai Rp1,2 M</span>
          <a href="kredit.php" class="btn-outline">Simulasi</a>
        </div>
      </div>
    </div>

    <div class="mobil-card">
      <div class="mobil-img">
        <img src="../assets/img/mobil-2.png" alt="BMW i4">
        <span class="badge new">Baru</span>
      </div>
      <div class="mobil-info">
        <h3>BMW i4</h3>
        <p class="mobil-spec">Sedan &middot; Electric &middot; AWD</p>
        <div class="mobil-bottom">
          <span class="mobil-harga">Mulai Rp1,4 M</span>
          <a href="kredit.php" class="btn-outline">Simulasi</a>
        </div>
      </div>
    </div>

    <div class="mobil-card">
      <div class="mobil-img">
        <img src="../assets/img/mobil-3.png" alt="Audi A7">
        <span class="badge">Populer</span>
      </div>
      <div class="mobil-info">
        <h3>Audi A7</h3>
        <p class="mobil-spec">Sedan &middot; Automatic &middot; Bensin</p>
        <div class="mobil-bottom">
          <span class="mobil-harga">Mulai Rp980 Jt</span>
          <a href="kredit.php" class="btn-outline">Simulasi</a>
        </div>
      </div>
    </div>

    <div class="mobil-card">
      <div class="mobil-img">
        <img src="../assets/img/mobil-4.png" alt="Porsche 911">
        <span class="badge">Limited</span>
      </div>
      <div class="mobil-info">
        <h3>Porsche 911</h3>
        <p class="mobil-spec">Coupe &middot; Automatic &middot; Bensin</p>
        <div class="mobil-bottom">
          <span class="mobil-harga">Mulai Rp2,8 M</span>
          <a href="kredit.php" class="btn-outline">Simulasi</a>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="testimoni">
  <div class="section-head center">
    <span class="eyebrow">Testimoni</span>
    <h2>Apa Kata Pelanggan Kami</h2>
  </div>
  <div class="testimoni-grid">
    <div class="testimoni-card">
      <p>"Proses pengajuan kreditnya cepat banget, simulasinya juga jelas jadi tidak ada biaya tersembunyi."</p>
      <div class="testimoni-user">
        <div class="avatar-circle">A</div>
        <div><strong>Andi Pratama</strong><span>Jakarta</span></div>
      </div>
    </div>
    <div class="testimoni-card">
      <p>"Tim sangat membantu memilihkan tenor yang pas dengan budget bulanan saya. Recommended!"</p>
      <div class="testimoni-user">
        <div class="avatar-circle">S</div>
        <div><strong>Sinta Dewi</strong><span>Bandung</span></div>
      </div>
    </div>
    <div class="testimoni-card">
      <p>"Website-nya enak dipakai, langsung bisa hitung-hitung cicilan sebelum datang ke kantor."</p>
      <div class="testimoni-user">
        <div class="avatar-circle">R</div>
        <div><strong>Rian Saputra</strong><span>Surabaya</span></div>
      </div>
    </div>
  </div>
</section>

<section class="promo">
  <div class="promo-inner">
    <div>
      <h2>Ajukan Kredit Mobil<br>Sekarang Juga</h2>
      <p>Proses cepat, syarat mudah, tim kami siap membantu Anda memilih mobil terbaik sesuai budget.</p>
      <a href="kredit.php" class="btn-primary">Mulai Simulasi</a>
    </div>
    <div class="promo-badge">
      <strong>20%</strong>
      <span>Bunga Flat Semua Tipe Mobil</span>
    </div>
  </div>
</section>

<?php include 'partial-footer.php'; ?>