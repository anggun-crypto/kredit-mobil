<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['hitung'])) {
    $harga     = (float) $_POST['harga'];
    $dp_persen = (float) $_POST['dp'];
    $tenor_thn = (int) $_POST['tenor'];

    $bunga_persen = 20; // bunga tetap 20% dari harga mobil
    $bunga_rp     = $harga * ($bunga_persen / 100);
    $dp_rp        = $harga * ($dp_persen / 100);
    $tenor_bulan  = $tenor_thn * 12;

    $total_bayar  = ($harga + $bunga_rp) - $dp_rp;
    $angsuran_bln = $total_bayar / $tenor_bulan;

    $_SESSION['hasil'] = [
        'harga'        => $harga,
        'dp_persen'    => $dp_persen,
        'dp_rp'        => $dp_rp,
        'tenor_thn'    => $tenor_thn,
        'tenor_bulan'  => $tenor_bulan,
        'bunga_persen' => $bunga_persen,
        'bunga_rp'     => $bunga_rp,
        'angsuran_bln' => $angsuran_bln,
    ];
}

header('Location: ../pages/kredit.php');
exit;