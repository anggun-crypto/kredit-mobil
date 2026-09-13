<?php
session_start();
$activePage = 'kredit';
$hasil = $_SESSION['hasil'] ?? null;

$harga_val = $hasil['harga'] ?? '';
$dp_val    = $hasil['dp_persen'] ?? 20;
$tenor_val = $hasil['tenor_thn'] ?? 3;
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Simulasi Kredit Mobil - KreditMobil.id</title>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>

<?php include 'partial-navbar.php'; ?>

<div class="page-banner">
  <h1>Simulasi Kredit Mobil</h1>
  <p>Geser slider dan pilih tenor untuk melihat estimasi angsuran Anda</p>
  <div class="breadcrumb"><a href="beranda.php">Beranda</a> / Simulasi Kredit</div>
</div>

<section class="kalkulator-v2">
  <div class="simulasi-wrap">

    <!-- ===== PANEL KIRI: FORM ===== -->
    <div class="simulasi-left">
      <div class="tab-pills">
        <span class="tab-pill active">Kredit Mobil</span>
        <span class="tab-pill">Kredit Mobil Bekas</span>
        <span class="tab-pill">Kredit Motor</span>
        <span class="tab-pill">Kredit Multiguna</span>
      </div>

      <form method="POST" action="../proses/hitung.php" id="form-kredit">

        <div class="form-group harga-group">
          <label>Harga Mobil</label>
          <input type="number" name="harga" id="input-harga" placeholder="Contoh: 100000000" required
            value="<?php echo htmlspecialchars($harga_val); ?>">
        </div>

        <div class="slider-group">
          <div class="slider-head">
            <span>Uang Muka (DP)</span>
            <span class="slider-value" id="dp-value"><?php echo $dp_val; ?>%</span>
          </div>
          <input type="range" id="dp-range" min="10" max="60" step="10" value="<?php echo $dp_val; ?>" class="range-input">
          <div class="range-scale"><span>10</span><span>20</span><span>30</span><span>40</span><span>50</span><span>60</span></div>
          <!-- select asli wajib sesuai ketentuan PDF, tetap dikirim saat submit -->
          <select name="dp" id="dp-select" class="sr-only" required>
            <?php foreach ([10,20,30,40,50,60] as $dp): ?>
              <option value="<?php echo $dp; ?>" <?php echo $dp == $dp_val ? 'selected' : ''; ?>><?php echo $dp; ?>%</option>
            <?php endforeach; ?>
          </select>
        </div>

        <div class="slider-group">
          <div class="slider-head">
            <span>Suku Bunga (Flat)</span>
            <span class="slider-value fixed">20%</span>
          </div>
          <input type="range" min="0" max="40" value="20" class="range-input disabled" disabled>
          <p class="slider-note">Bunga bersifat tetap 20% dari harga mobil dan tidak dapat diubah.</p>
        </div>

        <div class="tenor-group">
          <label>Tenor Pinjaman</label>
          <div class="tenor-buttons">
            <?php for ($i = 1; $i <= 5; $i++): ?>
              <label class="tenor-btn <?php echo $i == $tenor_val ? 'active' : ''; ?>">
                <input type="radio" name="tenor" value="<?php echo $i; ?>" <?php echo $i == $tenor_val ? 'checked' : ''; ?> required>
                <?php echo $i; ?> Tahun
              </label>
            <?php endfor; ?>
          </div>
        </div>

        <button type="submit" name="hitung" class="btn-primary full">Hitung Sekarang</button>
      </form>
    </div>

    <!-- ===== PANEL KANAN: HASIL / PREVIEW ===== -->
    <div class="simulasi-right">
      <div class="summary-card">
        <div class="summary-top">
          <div><strong id="preview-dp">Rp0</strong><span>Uang Muka</span></div>
          <div><strong id="preview-pinjaman">Rp0</strong><span>Jumlah Pinjaman</span></div>
        </div>
        <hr class="dashed">
        <div class="summary-main">
          <span>Perkiraan Cicilan Bulanan</span>
          <strong id="preview-angsuran">Rp0</strong>
        </div>
        <button type="submit" form="form-kredit" name="hitung" class="btn-primary full">Ajukan Simulasi</button>

        <div class="summary-notes">
          <p>*Simulasi ini merupakan estimasi awal berdasarkan data yang Anda masukkan.</p>
          <p>*Total pembayaran belum termasuk biaya administrasi, asuransi, dan provisi.</p>
          <p>*Bunga bersifat flat 20% dari harga mobil sesuai ketentuan yang berlaku.</p>
        </div>
      </div>
    </div>

  </div>
</section>

<?php include 'partial-footer.php'; ?>