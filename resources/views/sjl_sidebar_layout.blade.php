<head>
  <link rel="stylesheet" href="{{ asset('css/main.css') }}">
  <link rel="stylesheet" href="{{ asset('css/landing.css') }}">
  
  <style>
    .sidebar{
      width:220px;flex-shrink:0;background:#fff;
      border-right:1.5px solid var(--g-light);
      display:flex;flex-direction:column;
    }
    .sb-logo{
      padding:20px 18px 16px;
      font-family:'Cormorant Garamond',serif;font-size:18px;font-weight:600;
      color:var(--tx);border-bottom:1px solid var(--g-light);
    }
    .sb-logo span{color:var(--g);}
    .sb-section{padding:14px 12px 6px;font-size:10px;letter-spacing:.09em;color:var(--ts);}
    .sb-item{
      display:flex;align-items:center;gap:10px;
      padding:9px 14px;margin:1px 8px;border-radius:10px;
      font-size:13px;font-weight:500;color:var(--tm);
      cursor:pointer;border:none;background:none;
      font-family:'DM Sans',sans-serif;width:calc(100% - 16px);text-align:left;
      transition:background .15s,color .15s;
    }
    .sb-item i{font-size:17px;flex-shrink:0;}
    .sb-item:hover{background:var(--g-pale);color:var(--g-dark);}
    .sb-item.active{background:var(--g-light);color:var(--g-dark);font-weight:600;}
    .sb-item.active i{color:var(--g);}
    .sb-divider{height:1px;background:var(--g-light);margin:8px 14px;}
    .sb-bottom{margin-top:auto;padding:12px;}
    .sb-user{
      display:flex;align-items:center;gap:10px;
      padding:10px 12px;border-radius:10px;
      background:var(--g-pale);cursor:pointer;
    }
    .sb-avatar{
      width:30px;height:30px;border-radius:50%;
      background:var(--g);color:#fff;
      display:flex;align-items:center;justify-content:center;
      font-size:12px;font-weight:600;flex-shrink:0;
    }
    .sb-user-name{font-size:12px;font-weight:600;color:var(--tx);}
    .sb-user-role{font-size:11px;color:var(--ts);}
    
    .main{flex:1;overflow:hidden;display:flex;flex-direction:column;}
    
    /* ── PAGE: CATAT ── */
    .catat-wrap{
      display:grid;grid-template-columns:1fr 1fr;
      height:600px;
    }
    .catat-left{
      padding:22px;border-right:1.5px solid var(--g-light);
      display:flex;flex-direction:column;gap:16px;overflow-y:auto;
      background:#fff;
    }
    .catat-right{
      padding:22px;display:flex;flex-direction:column;gap:14px;
      background:var(--bg-card);overflow-y:auto;
    }
    .tabs{display:flex;gap:0;border-bottom:2px solid var(--g-light);}
    .tab{
      padding:7px 18px;font-size:13px;font-weight:500;color:var(--tm);
      cursor:pointer;border:none;background:none;border-bottom:2.5px solid transparent;
      margin-bottom:-2px;font-family:'DM Sans',sans-serif;transition:color .15s;
    }
    .tab.active{color:var(--g-dark);border-bottom-color:var(--g);}
    .tab:hover:not(.active){color:var(--tx);}
    
    .cat-lbl{font-size:10px;letter-spacing:.09em;color:var(--ts);}
    .cat-grid{display:grid;grid-template-columns:repeat(5,1fr);gap:8px;}
    .cat-item{display:flex;flex-direction:column;align-items:center;gap:5px;cursor:pointer;}
    .cat-icon{
      width:46px;height:46px;border-radius:50%;background:var(--bg);
      border:2px solid var(--bd);display:flex;align-items:center;justify-content:center;
      font-size:20px;transition:border-color .15s,background .15s;
    }
    .cat-item.active .cat-icon{border-color:var(--g);background:var(--g-light);}
    .cat-item:hover .cat-icon{border-color:var(--g-mid);}
    .cat-name{font-size:10px;color:var(--tm);text-align:center;max-width:48px;overflow:hidden;text-overflow:ellipsis;white-space:nowrap;}
    .cat-item.active .cat-name{color:var(--g-dark);font-weight:600;}
    
    .note-row{
      display:flex;align-items:center;gap:8px;
      padding:9px 12px;border-radius:10px;background:var(--bg);border:1.5px solid var(--bd);
    }
    .note-row input{flex:1;border:none;background:transparent;font-family:'DM Sans',sans-serif;font-size:13px;color:var(--tx);outline:none;}
    .note-row input::placeholder{color:var(--ts);}
    
    .amount-box{
      background:var(--g);border-radius:14px;padding:18px 20px;
    }
    .amount-box .albl{font-size:10px;color:rgba(255,255,255,.7);letter-spacing:.06em;margin-bottom:4px;}
    .amount-box .aval{font-family:'Cormorant Garamond',serif;font-size:34px;font-weight:600;color:#fff;min-height:42px;}
    .amount-box .acur{font-size:12px;color:rgba(255,255,255,.6);margin-top:2px;}
    .amount-box .acat{
      display:inline-flex;align-items:center;gap:5px;margin-top:8px;
      padding:4px 10px;border-radius:8px;background:rgba(255,255,255,.18);
      font-size:12px;color:#fff;
    }
    
    .date-row{display:flex;gap:6px;flex-wrap:wrap;}
    .dchip{
      display:flex;align-items:center;gap:5px;padding:6px 12px;
      border-radius:12px;border:1.5px solid var(--bd);background:var(--bg);
      font-size:12px;color:var(--tm);cursor:pointer;font-family:'DM Sans',sans-serif;
      outline:none;transition:border-color .15s;
    }
    .dchip:hover{border-color:var(--g-mid);color:var(--g-dark);}
    .dchip.on{border-color:var(--g);background:var(--g-pale);color:var(--g-dark);font-weight:600;}
    
    .numpad{display:grid;grid-template-columns:repeat(4,1fr);gap:6px;}
    .nk{
      padding:13px 6px;border-radius:10px;border:1.5px solid var(--bd);
      background:var(--bg);font-family:'DM Sans',sans-serif;font-size:15px;
      font-weight:500;color:var(--tx);cursor:pointer;text-align:center;
      transition:background .12s,border-color .12s;outline:none;
    }
    .nk:hover{background:var(--g-light);border-color:var(--g-mid);}
    .nk:active{background:var(--g-mid);color:#fff;}
    .nk.op{color:var(--g-dark);font-weight:700;}
    .nk.del{color:#c0565f;}
    
    .save-btn{
      width:100%;padding:13px;border-radius:12px;background:var(--g);
      color:#fff;border:none;font-family:'DM Sans',sans-serif;
      font-size:14px;font-weight:600;cursor:pointer;outline:none;
      display:flex;align-items:center;justify-content:center;gap:7px;
      transition:background .15s;
    }
    .save-btn:hover{background:var(--g-dark);}
    .save-btn:active{background:#1e3d28;}
    
    .page-header{
      background:#fff;border-bottom:1.5px solid var(--g-light);
      padding:14px 24px;display:flex;align-items:center;gap:10px;
    }
    .page-header h2{font-size:15px;font-weight:600;color:var(--tx);}
    .page-header p{font-size:12px;color:var(--ts);margin-top:1px;}
  </style>
</head>

<body>
  <div class="app">
  
    <!-- MAIN -->
    <main class="main">
  
      <!-- PAGE: CATAT PENGELUARAN -->
      <div class="page" id="page-catat">
        <div class="page-header">
          <i class="ti ti-pencil-plus" style="font-size:20px;color:var(--g)" aria-hidden="true"></i>
          <div>
            <h2>Catat pengeluaran</h2>
            <p>Pilih kategori, masukkan jumlah, lalu simpan</p>
          </div>
        </div>
        <div class="catat-wrap">
          <div class="catat-left">
            <div style="display:flex;align-items:center;justify-content:space-between;">
              <div class="tabs">
                <button class="tab active" onclick="setTab(this)">Pengeluaran</button>
                <button class="tab" onclick="setTab(this)">Pemasukan</button>
                <button class="tab" onclick="setTab(this)">Transfer</button>
              </div>
              <div style="display:flex;align-items:center;gap:6px;padding:5px 11px;border-radius:12px;border:1.5px solid var(--bd);background:var(--g-pale);font-size:12px;font-weight:500;color:var(--g-dark);cursor:pointer;">
                📒 Umum <i class="ti ti-chevron-down" style="font-size:11px" aria-hidden="true"></i>
              </div>
            </div>
  
            <div>
              <p class="cat-lbl" style="margin-bottom:10px">PILIH KATEGORI</p>
              <div class="cat-grid" id="cat-grid">
                <div class="cat-item active" onclick="selectCat(this,'Makan','🍴')"><div class="cat-icon">🍴</div><div class="cat-name">Makan</div></div>
                <div class="cat-item" onclick="selectCat(this,'Minuman','🥤')"><div class="cat-icon">🥤</div><div class="cat-name">Minuman</div></div>
                <div class="cat-item" onclick="selectCat(this,'Transport','🚌')"><div class="cat-icon">🚌</div><div class="cat-name">Transport</div></div>
                <div class="cat-item" onclick="selectCat(this,'Sehari-hari','🧴')"><div class="cat-icon">🧴</div><div class="cat-name">Sehari-hari</div></div>
                <div class="cat-item" onclick="selectCat(this,'Sosial','💬')"><div class="cat-icon">💬</div><div class="cat-name">Sosial</div></div>
                <div class="cat-item" onclick="selectCat(this,'Sayuran','🥦')"><div class="cat-icon">🥦</div><div class="cat-name">Sayuran</div></div>
                <div class="cat-item" onclick="selectCat(this,'Buah','🍐')"><div class="cat-icon">🍐</div><div class="cat-name">Buah</div></div>
                <div class="cat-item" onclick="selectCat(this,'Daging','🍗')"><div class="cat-icon">🍗</div><div class="cat-name">Daging</div></div>
                <div class="cat-item" onclick="selectCat(this,'Camilan','🍬')"><div class="cat-icon">🍬</div><div class="cat-name">Camilan</div></div>
                <div class="cat-item" onclick="selectCat(this,'Hadiah','🎁')"><div class="cat-icon">🎁</div><div class="cat-name">Hadiah</div></div>
                <div class="cat-item" onclick="selectCat(this,'Telepon','📱')"><div class="cat-icon">📱</div><div class="cat-name">Telepon</div></div>
                <div class="cat-item" onclick="selectCat(this,'Digital','📷')"><div class="cat-icon">📷</div><div class="cat-name">Digital</div></div>
                <div class="cat-item" onclick="selectCat(this,'Pendidikan','📚')"><div class="cat-icon">📚</div><div class="cat-name">Pendidikan</div></div>
                <div class="cat-item" onclick="selectCat(this,'Kebugaran','🏋️')"><div class="cat-icon">🏋️</div><div class="cat-name">Kebugaran</div></div>
                <div class="cat-item" onclick="selectCat(this,'Olahraga','🏓')"><div class="cat-icon">🏓</div><div class="cat-name">Olahraga</div></div>
                <div class="cat-item" onclick="selectCat(this,'Hiburan','🎮')"><div class="cat-icon">🎮</div><div class="cat-name">Hiburan</div></div>
                <div class="cat-item" onclick="selectCat(this,'Kesehatan','💊')"><div class="cat-icon">💊</div><div class="cat-name">Kesehatan</div></div>
                <div class="cat-item" onclick="selectCat(this,'Belanja','🛍️')"><div class="cat-icon">🛍️</div><div class="cat-name">Belanja</div></div>
                <div class="cat-item" onclick="selectCat(this,'Tagihan','📄')"><div class="cat-icon">📄</div><div class="cat-name">Tagihan</div></div>
                <div class="cat-item" onclick="selectCat(this,'Lainnya','✨')"><div class="cat-icon">✨</div><div class="cat-name">Lainnya</div></div>
              </div>
            </div>
  
            <div class="note-row">
              <i class="ti ti-pencil" style="font-size:15px;color:var(--ts)" aria-hidden="true"></i>
              <input type="text" id="note-input" placeholder="Tambahkan catatan..." />
              <i class="ti ti-camera" style="font-size:15px;color:var(--ts)" aria-hidden="true"></i>
            </div>
          </div>
  
          <div class="catat-right">
            <div class="amount-box">
              <div class="albl">JUMLAH</div>
              <div class="aval" id="amount-display">0</div>
              <div class="acur">IDR</div>
              <div class="acat" id="cat-badge">🍴 Makan</div>
            </div>
  
            <div>
              <p class="cat-lbl" style="margin-bottom:8px">TANGGAL</p>
              <div class="date-row">
                <button class="dchip on" id="chip-today" onclick="setDate('today')">
                  <i class="ti ti-calendar" style="font-size:12px" aria-hidden="true"></i> Hari ini
                </button>
                <button class="dchip" id="chip-yesterday" onclick="setDate('yesterday')">Kemarin</button>
                <button class="dchip" id="chip-custom" onclick="setDate('custom')">
                  <i class="ti ti-calendar-event" style="font-size:12px" aria-hidden="true"></i> Pilih tanggal
                </button>
              </div>
            </div>
  
            <div class="numpad">
              <button class="nk del" onclick="pressKey('del')"><i class="ti ti-backspace" aria-hidden="true"></i></button>
              <button class="nk op" onclick="pressKey('/')">÷</button>
              <button class="nk op" onclick="pressKey('*')">×</button>
              <button class="nk op" onclick="pressKey('-')">−</button>
              <button class="nk" onclick="pressKey('7')">7</button>
              <button class="nk" onclick="pressKey('8')">8</button>
              <button class="nk" onclick="pressKey('9')">9</button>
              <button class="nk op" onclick="pressKey('+')">+</button>
              <button class="nk" onclick="pressKey('4')">4</button>
              <button class="nk" onclick="pressKey('5')">5</button>
              <button class="nk" onclick="pressKey('6')">6</button>
              <button class="nk" onclick="pressKey('000')">000</button>
              <button class="nk" onclick="pressKey('1')">1</button>
              <button class="nk" onclick="pressKey('2')">2</button>
              <button class="nk" onclick="pressKey('3')">3</button>
              <button class="nk op" onclick="pressKey(',')">,</button>
              <button class="nk" style="grid-column:span 2;font-size:12px;color:var(--tm);" onclick="setDate('today')">Hari ini</button>
              <button class="nk" onclick="pressKey('0')">0</button>
              <button class="nk op" onclick="pressKey('.')">.</button>
            </div>
  
            <button class="save-btn" onclick="submitEntry()">
              <i class="ti ti-check" style="font-size:17px" aria-hidden="true"></i> Simpan pengeluaran
            </button>
          </div>
        </div>
      </div>
  
      <!-- PAGE: OTHER (placeholder) -->
      <div class="page" id="page-dashboard">
        <div class="page-header">
          <i class="ti ti-layout-dashboard" style="font-size:20px;color:var(--g)" aria-hidden="true"></i>
          <div><h2>Dashboard</h2><p>Ringkasan keuangan bulan ini</p></div>
        </div>
        <div style="padding:32px;text-align:center;color:var(--ts);">
          <i class="ti ti-layout-dashboard" style="font-size:48px;display:block;margin:0 auto 12px;" aria-hidden="true"></i>
          <p style="font-size:14px;">Halaman dashboard tersedia di percakapan sebelumnya.</p>
          <button class="btn-green" style="margin-top:16px;" onclick="sendPrompt('Tampilkan halaman dashboard hijau soft')">Buka dashboard ↗</button>
        </div>
      </div>
      <div class="page" id="page-tabungan">
        <div class="page-header">
          <i class="ti ti-wallet" style="font-size:20px;color:var(--g)" aria-hidden="true"></i>
          <div><h2>Buku tabungan</h2><p>Kelola tujuan tabunganmu</p></div>
        </div>
        <div style="padding:32px;text-align:center;color:var(--ts);">
          <i class="ti ti-wallet" style="font-size:48px;display:block;margin:0 auto 12px;" aria-hidden="true"></i>
          <p style="font-size:14px;">Halaman buku tabungan belum dibuat.</p>
          <button class="btn-green" style="margin-top:16px;" onclick="sendPrompt('Buat halaman buku tabungan dengan sidebar hijau soft')">Buat halaman ini ↗</button>
        </div>
      </div>
      <div class="page" id="page-rekap">
        <div class="page-header">
          <i class="ti ti-chart-bar" style="font-size:20px;color:var(--g)" aria-hidden="true"></i>
          <div><h2>Rekapan</h2><p>Laporan pengeluaran per kategori dan bulan</p></div>
        </div>
        <div style="padding:32px;text-align:center;color:var(--ts);">
          <i class="ti ti-chart-bar" style="font-size:48px;display:block;margin:0 auto 12px;" aria-hidden="true"></i>
          <p style="font-size:14px;">Halaman rekapan belum dibuat.</p>
          <button class="btn-green" style="margin-top:16px;" onclick="sendPrompt('Buat halaman rekapan pengeluaran dengan sidebar hijau soft')">Buat halaman ini ↗</button>
        </div>
      </div>

    </main>
  </div>
</body>

<script>
let raw='', activeCat='Makan', activeCatEmoji='🍴';

function showPage(id) {
  document.querySelectorAll('.page').forEach(p=>p.classList.remove('active'));
  document.querySelectorAll('.sb-item').forEach(b=>b.classList.remove('active'));
  document.getElementById('page-'+id).classList.add('active');
  const navEl = document.getElementById('nav-'+id);
  if(navEl) navEl.classList.add('active');
}

function setTab(el){
  el.closest('.tabs').querySelectorAll('.tab').forEach(t=>t.classList.remove('active'));
  el.classList.add('active');
}

function selectCat(el,name,emoji){
  document.querySelectorAll('.cat-item').forEach(c=>c.classList.remove('active'));
  el.classList.add('active');
  activeCat=name; activeCatEmoji=emoji;
  document.getElementById('cat-badge').textContent=emoji+' '+name;
}

function pressKey(k){
  if(k==='del'){raw=raw.slice(0,-1);}
  else if(k==='000'){if(raw&&raw!=='0')raw+='000';}
  else if(k===','||k==='.'){if(!raw.includes(','))raw+=',';}
  else if(['/','-','*','+'].includes(k)){return;}
  else{raw=(raw==='0'||!raw)?k:raw+k;}
  document.getElementById('amount-display').textContent=raw?Number(raw.replace(',','.')).toLocaleString('id-ID'):0;
}

function setDate(type){
  ['today','yesterday','custom'].forEach(id=>{
    const el=document.getElementById('chip-'+id);
    if(el)el.classList.remove('on');
  });
  const t=document.getElementById('chip-'+type);
  if(t)t.classList.add('on');
}

function submitEntry(){
  const amt=document.getElementById('amount-display').textContent;
  const note=document.getElementById('note-input').value;
  if(amt==='0'){alert('Masukkan jumlah pengeluaran terlebih dahulu.');return;}
  sendPrompt('Simpan pengeluaran: '+activeCatEmoji+' '+activeCat+' — Rp '+amt+(note?' · '+note:''));
}
</script>
