<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sisa Jejak Uang - Landing Page</title>
    <link rel="stylesheet" href="{{ asset('css/landing.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>
<body>
    <!-- PAGE: LANDING / BERANDA -->
    <div class="page active" id="page-landing">
       <nav class="sjl-nav">
    <div class="sjl-logo">Sisa <span>Jejak</span> Uang</div>
    <button class="sjl-login" onclick="sendPrompt('Tampilkan halaman utama dashboard hijau soft')">
      <i class="ti ti-user" style="font-size:14px" aria-hidden="true"></i> Masuk
    </button>
  </nav>
  
      <div class="landing-hero">
        <div class="hero-badge">
          <i class="ti ti-sparkles" style="font-size:13px" aria-hidden="true"></i> Gratis · Sederhana · Jujur
        </div>
        <h1>Uangmu punya <em>cerita.</em><br>Sudahkah kamu mencatatnya?</h1>
        <p>Sisa Jejak Uang membantu kamu memahami ke mana perginya setiap rupiah — tanpa repot, tanpa pusing, setiap hari.</p>
        <div class="hero-cta-row">
          <button class="btn-white" onclick="showPage('catat')">Mulai catat sekarang</button>
          <button class="btn-outline-white" onclick="showPage('dashboard')">Lihat dashboard ↗</button>
        </div>
      </div>

      <div class="sjl-stats">
    <div><div class="snum">100%</div><div class="slbl">Gratis selamanya</div></div>
    <div><div class="snum">3</div><div class="slbl">Fitur utama</div></div>
    <div><div class="snum">∞</div><div class="slbl">Buku tabungan</div></div>
  </div>

  <section class="sjl-features">
    <p class="sec-tag">FITUR UNGGULAN</p>
    <h2 class="sec-title">Semua yang kamu butuhkan<br>untuk mengatur keuangan</h2>
    <div class="feat-grid">
      <div class="feat-card">
        <div class="feat-icon fi-a"><i class="ti ti-receipt" aria-hidden="true"></i></div>
        <h3>Pencatatan pengeluaran</h3>
        <p>Catat setiap transaksi dengan cepat. Kategori, nominal, tanggal — semua tersimpan rapi.</p>
      </div>
      <div class="feat-card">
        <div class="feat-icon fi-b"><i class="ti ti-wallet" aria-hidden="true"></i></div>
        <h3>Buku tabungan</h3>
        <p>Kelompokkan uangmu per tujuan — dana darurat, liburan, atau keperluan harian.</p>
      </div>
      <div class="feat-card">
        <div class="feat-icon fi-c"><i class="ti ti-chart-bar" aria-hidden="true"></i></div>
        <h3>Rekapan pengeluaran</h3>
        <p>Lihat ringkasan bulanan dan pahami pola pengeluaranmu dengan tampilan yang jelas.</p>
      </div>
    </div>
  </section>

  <section class="sjl-hooks">
    <p class="sec-tag" style="text-align:center">KENAPA HARUS SEKARANG?</p>
    <h2 class="sec-title" style="text-align:center; font-size:22px; margin-bottom:0">Tiga alasan untuk mulai hari ini</h2>
    <div class="hook-grid">
      <div class="hook-item">
        <div class="hook-dot"><i class="ti ti-coin" aria-hidden="true"></i></div>
        <div><strong>Tanpa sadar, uang sudah habis</strong><p>Kamu baru gajian, tapi akhir bulan selalu kurang. Mulai lacak ke mana uangmu pergi.</p></div>
      </div>
      <div class="hook-item">
        <div class="hook-dot"><i class="ti ti-star" aria-hidden="true"></i></div>
        <div><strong>Impianmu butuh rencana</strong><p>Mau nabung buat motor, laptop, atau liburan? Pisahkan tujuan dengan buku tabungan.</p></div>
      </div>
      <div class="hook-item">
        <div class="hook-dot"><i class="ti ti-leaf" aria-hidden="true"></i></div>
        <div><strong>Kebiasaan kecil, dampak besar</strong><p>Mencatat 30 detik sehari lebih efektif dari spreadsheet yang tidak pernah dibuka.</p></div>
      </div>
    </div>
  </section>

  <div class="footer-cta">
    <div class="divider"></div>
    <h2>Mulai dari sekarang,<br>satu catatan saja.</h2>
    <p>Gratis selamanya · Tidak perlu kartu kredit</p>
    <button class="btn-p" style="font-size:14px;padding:13px 36px;" onclick="sendPrompt('Daftarkan akun baru')">Buat akun gratis →</button>
  </div>
    </div>
</body> 