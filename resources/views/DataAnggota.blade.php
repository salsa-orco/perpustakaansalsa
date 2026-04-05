<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Data Anggota</title>

<style>
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Segoe UI', sans-serif;
}

body {
  display: flex;
  background: #eef1f7;
}

/* SIDEBAR */
.sidebar {
  width: 220px;
  height: 100vh;
  background: linear-gradient(#2d2f92, #3f3fb3);
  padding: 20px;
  color: white;
}

.logo {
  text-align: center;
  font-size: 50px;
  margin-bottom: 20px;
}

.menu {
  display: block;
  width: 100%;
  padding: 12px;
  margin: 10px 0;
  border-radius: 20px;
  background: #a5c4ff;
  border: none;
  cursor: pointer;
  transition: 0.3s;
}

.menu:hover {
  transform: translateX(5px);
  background: #cfe0ff;
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

.header h2 {
  font-size: 24px;
}

.icons {
  font-size: 22px;
}

/* TOP BAR */
.top-bar {
  display: flex;
  justify-content: space-between;
  margin: 20px 0;
}

.search {
  width: 60%;
  padding: 12px 20px;
  border-radius: 25px;
  border: none;
  background: #ddd;
}

.btn {
  background: #3b82f6;
  color: white;
  padding: 10px 20px;
  border-radius: 10px;
  border: none;
  cursor: pointer;
}

/* TABLE */
.table-box {
  background: #dcdcdc;
  padding: 20px;
  border-radius: 10px;
}

table {
  width: 100%;
  border-collapse: collapse;
  background: #eee;
}

th, td {
  border: 1px solid #999;
  padding: 15px;
  text-align: center;
}

th {
  background: #ccc;
}

/* PROFILE */
.profile {
  display: flex;
  flex-direction: column;
  align-items: center;
}

.profile img {
  width: 60px;
  border-radius: 10px;
  margin-bottom: 5px;
}

/* STATUS */
.status {
  background: #4ade80;
  color: black;
  padding: 5px 15px;
  border-radius: 20px;
  display: inline-block;
  font-weight: bold;
}
</style>
</head>

<body>

<!-- SIDEBAR -->

<!-- MAIN -->
<div class="main">

  <!-- HEADER -->
  <div class="header">
    <h2>Data Anggota</h2>
    <div class="icons">🔔 ✉️ 👤</div>
  </div>

  <!-- SEARCH + BUTTON -->
  <div class="top-bar">
    <input type="text" class="search" placeholder="Search">
    <button class="btn" onclick="window.location.href='/TambahAnggota'">
        + Tambah Anggota
    </button>
  </div>

  <!-- TABLE -->
  <div class="table-box">
    <table>
      <thead>
        <tr>
          <th>Anggota</th>
          <th>Email</th>
          <th>Status</th>
          <th>Bayar denda</th>
        </tr>
      </thead>

      <tbody>
        <tr>
          <td>
            <div class="profile">
              <img src="https://i.pravatar.cc/60?img=1">
              <span>Alzean</span>
            </div>
          </td>
          <td>Alzean@gmail.com</td>
          <td><span class="status">Aktif</span></td>
          <td>Rp60.000</td>
        </tr>

        <tr>
          <td>
            <div class="profile">
              <img src="https://i.pravatar.cc/60?img=5">
              <span>Gracyla</span>
            </div>
          </td>
          <td>Dimsum@gmail.com</td>
          <td><span class="status">Aktif</span></td>
          <td>-</td>
        </tr>

      </tbody>
    </table>
  </div>

</div>

</body>
</html>