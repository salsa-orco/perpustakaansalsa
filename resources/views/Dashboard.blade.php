<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Dashboard Petugas</title>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<style>
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Segoe UI', sans-serif;
}

body {
  background: #eef1f7;
}

.container {
  display: flex;
}

/* SIDEBAR */
.sidebar {
  width: 240px;
  height: 100vh;
  background: linear-gradient(#2d2f92, #3f3fb3);
  padding: 20px;
  color: white;
}

.logo {
  text-align: center;
  font-size: 50px;
  margin-bottom: 30px;
}

.menu {
  display: block;
  width: 100%;
  padding: 12px;
  margin: 10px 0;
  border-radius: 20px;
  background: #a5c4ff;
  color: black;
  cursor: pointer;
  border: none;
  transition: 0.3s;
}

.menu:hover {
  background: #cfe0ff;
  transform: translateX(5px);
}

.menu.active {
  background: white;
  color: #2d2f92;
  font-weight: bold;
}

/* MAIN */
.main {
  flex: 1;
  padding: 20px;
}

/* HEADER */
.header {
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.search {
  width: 60%;
  padding: 10px 15px;
  border-radius: 25px;
  border: none;
  background: #ddd;
}

.icons {
  font-size: 22px;
}

/* STAT */
.stats {
  display: flex;
  gap: 15px;
  margin: 20px 0;
}

.card {
  flex: 1;
  background: #2f4b7c;
  color: white;
  padding: 15px;
  border-radius: 12px;
  text-align: center;
}

.card h3 {
  background: white;
  color: black;
  margin-top: 10px;
  padding: 5px;
  border-radius: 5px;
}

.chart-box {
  width: 100%;
  background: #dcdcdc;
  padding: 20px;
  border-radius: 15px;
}
</style>
</head>

<body>

<div class="container">

  <!-- Sidebar -->
  <div class="sidebar">
    <div class="logo">📖</div>

    <button class="menu active" data-page="dashboard">Dashboard</button>
    <button class="menu" data-page="buku">Data Buku</button>
    <button class="menu" data-page="anggota">Data Anggota</button>
    <button class="menu" data-page="peminjaman">Peminjaman</button>
    <button class="menu" data-page="pengembalian">Pengembalian</button>
    <button class="menu" data-page="denda">Denda</button>
    <button class="menu" data-page="laporan">Laporan</button>
  </div>

  <!-- Main -->
  <div class="main">
    <div id="content"></div>
  </div>

</div>

<script>
const content = document.getElementById("content");
const menus = document.querySelectorAll(".menu");

/* TEMPLATE HALAMAN */
const pages = {
  dashboard: `
    <div class="header">
      <input type="text" class="search" placeholder="Search">
      <div class="icons">🔔 ✉️ 👤</div>
    </div>

    <h2 style="margin-top:20px;">Dashboard</h2>

    <div class="stats">
      <div class="card">📘 Total Buku <h3>1000</h3></div>
      <div class="card">👤 Anggota Aktif <h3>1.250</h3></div>
      <div class="card">📚 Buku Dipinjam <h3>150</h3></div>
      <div class="card">⏰ Total Denda <h3>Rp95000</h3></div>
    </div>

    <div class="chart-box">
      <h3>Grafik Peminjaman Bulanan</h3>
      <canvas id="myChart" width="716" height="210style="display: block; box-sizing: border-box; height: 210; width: 716px;"></canvas>>
    </div>
  `,

  buku: `<h2>📚 Data Buku</h2><p>Isi data buku di sini</p>`,
  anggota: `<h2>👤 Data Anggota</h2><p>Isi data anggota di sini</p>`,
  peminjaman: `<h2>📖 Peminjaman</h2>`,
  pengembalian: `<h2>📦 Pengembalian</h2>`,
  denda: `<h2>💰 Denda</h2>`,
  laporan: `<h2>📊 Laporan</h2>`
};

/* LOAD PERTAMA */
loadPage("dashboard");

/* EVENT MENU */
menus.forEach(menu => {
  menu.addEventListener("click", function() {
    menus.forEach(m => m.classList.remove("active"));
    this.classList.add("active");

    const page = this.dataset.page;
    loadPage(page);
  });
});

/* LOAD HALAMAN */
function loadPage(page) {
  if (page === "anggota") {
    fetch("/anggota")
      .then(res => res.text())
      .then(data => {
        content.innerHTML = data;
      });

  } else if (page === "buku") {
    fetch("/DataBuku")
      .then(res => res.text())
      .then(data => {
        content.innerHTML = data;
      });

  } else if (page === "peminjaman") {
    fetch("/Peminjaman")
      .then(res => res.text())
      .then(data => {
        content.innerHTML = data;
      });

  } else if (page === "pengembalian") {
    fetch("/pengembalian")
      .then(res => res.text())
      .then(data => {
        content.innerHTML = data;
      });

  } else if (page === "denda") { // ✅ TAMBAHAN DI SINI
    fetch("/Denda")
      .then(res => res.text())
      .then(data => {
        content.innerHTML = data;
      });

  } else {
    content.innerHTML = pages[page];

    if (page === "dashboard") {
      loadChart();
    }
  }
}

/* CHART */
function loadChart() {
  const ctx = document.getElementById('myChart');

  new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ['Jan','Feb','Mar','Apr','Mei','Jun','Jul','Ags'],
      datasets: [
        {
          label: 'Peminjaman',
          data: [12,19,10,25,15,30,20,28],
          backgroundColor: '#000'
        },
        {
          label: 'Pengembalian',
          data: [8,14,12,20,10,25,18,22],
          backgroundColor: '#4cc9f0'
        }
      ]
    },
    options: {
      responsive: true,
      plugins: {
        legend: {
          position: 'top'
        }
      }
    }
  });
}
</script>

</body>
</html>