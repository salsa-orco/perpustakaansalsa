<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Tambah Anggota</title>

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

.icons {
  font-size: 22px;
}

/* FORM BOX */
.form-box {
  margin-top: 20px;
  background: #ddd;
  padding: 20px;
  border-radius: 15px;
  box-shadow: 0 5px 10px rgba(0,0,0,0.1);
}

.form-title {
  font-size: 18px;
  margin-bottom: 15px;
  font-weight: bold;
}

/* GRID FORM */
.form-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 15px;
}

.form-group {
  display: flex;
  flex-direction: column;
}

.form-group.full {
  grid-column: span 2;
}

input {
  padding: 10px;
  border-radius: 10px;
  border: 1px solid #999;
}

/* UPLOAD BOX */
.upload-box {
  border: 2px dashed #999;
  border-radius: 10px;
  padding: 20px;
  text-align: center;
  background: #eee;
  font-size: 12px;
}

/* BUTTON */
.buttons {
  display: flex;
  justify-content: flex-end;
  gap: 10px;
  margin-top: 15px;
}

.btn {
  padding: 8px 20px;
  border-radius: 8px;
  border: none;
  cursor: pointer;
}

.btn-back {
  background: #ccc;
}

.btn-save {
  background: #3b82f6;
  color: white;
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

  <!-- FORM -->
  <div class="form-box">

    <div class="form-title">👤 + Tambah Anggota</div>

    <form>
      <div class="form-grid">

        <div class="form-group full">
          <label>Nama</label>
          <input type="text">
        </div>

        <div class="form-group">
          <label>Email</label>
          <input type="email">
        </div>

        <div class="form-group">
          <label>No Telephone</label>
          <input type="text" placeholder="+62">
        </div>

        <div class="form-group">
          <label>Jenis Kelamin</label>
          <input type="text">
        </div>

        <div class="form-group">
          <label>Alamat</label>
          <input type="text">
        </div>

        <div class="form-group">
          <label>Foto Profile</label>
          <div class="upload-box">
            ⬆️ Upload foto anggota<br>
            Drag & drop atau pilih foto
          </div>
        </div>

        <div class="form-group">
          <label>Status Anggota</label>
          <input type="text">
        </div>

      </div>

      <div class="buttons">
        <button type="button" class="btn btn-back">Kembali</button>
        <button type="submit" class="btn btn-save">Simpan</button>
      </div>

    </form>

  </div>

</div>

</body>
</html>