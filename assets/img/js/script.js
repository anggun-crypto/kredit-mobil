const heroImages = [
  "../assets/img/hero-1.png",
  "../assets/img/hero-2.png",
  "../assets/img/hero-3.png"
];
function gantiSlide(index) {
  const img = document.getElementById("hero-img");
  if (!img) return;
  img.src = heroImages[index];
  document.querySelectorAll(".dot").forEach((dot, i) => {
    dot.classList.toggle("active", i === index);
  });
}

function formatRupiah(num) {
  num = Math.round(num) || 0;
  return "Rp" + num.toLocaleString('id-ID');
}

function hitungPreview() {
  const hargaInput  = document.getElementById('input-harga');
  const dpRange     = document.getElementById('dp-range');
  const dpSelect    = document.getElementById('dp-select');
  const dpValueTag  = document.getElementById('dp-value');
  const tenorInputs = document.querySelectorAll('input[name="tenor"]');
  const previewDp   = document.getElementById('preview-dp');
  const previewPinjaman = document.getElementById('preview-pinjaman');
  const previewAngsuran = document.getElementById('preview-angsuran');

  if (!hargaInput || !dpRange) return;

  const harga = parseFloat(hargaInput.value) || 0;
  const dpPersen = parseInt(dpRange.value);

  if (dpSelect) dpSelect.value = dpPersen;
  if (dpValueTag) dpValueTag.textContent = dpPersen + "%";

  let tenorTahun = 0;
  tenorInputs.forEach(input => {
    if (input.checked) tenorTahun = parseInt(input.value);
    const parentBtn = input.closest('.tenor-btn');
    if (parentBtn) parentBtn.classList.toggle('active', input.checked);
  });

  const bungaPersen = 20;
  const bungaRp     = harga * (bungaPersen / 100);
  const dpRp        = harga * (dpPersen / 100);
  const tenorBulan  = tenorTahun * 12;
  const totalBayar  = (harga + bungaRp) - dpRp;
  const angsuran    = tenorBulan > 0 ? totalBayar / tenorBulan : 0;

  if (previewDp) previewDp.textContent = formatRupiah(dpRp);
  if (previewPinjaman) previewPinjaman.textContent = formatRupiah(totalBayar);
  if (previewAngsuran) previewAngsuran.textContent = formatRupiah(angsuran);
}

document.addEventListener('DOMContentLoaded', () => {
  const hargaInput  = document.getElementById('input-harga');
  const dpRange     = document.getElementById('dp-range');
  const tenorInputs = document.querySelectorAll('input[name="tenor"]');

  if (hargaInput) hargaInput.addEventListener('input', hitungPreview);
  if (dpRange) dpRange.addEventListener('input', hitungPreview);
  tenorInputs.forEach(input => input.addEventListener('change', hitungPreview));

  hitungPreview();
});