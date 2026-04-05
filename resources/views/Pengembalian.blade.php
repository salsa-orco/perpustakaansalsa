<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Konfirmasi Pengembalian</title>

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

.main {
  flex: 1;
  padding: 20px;
}

.header {
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.search {
  width: 60%;
  padding: 10px 20px;
  border-radius: 25px;
  border: none;
  background: #ddd;
}

.icons {
  font-size: 22px;
}

.form-box {
  margin-top: 20px;
  background: #ddd;
  padding: 25px;
  border-radius: 15px;
}

.form-title {
  font-size: 22px;
  margin-bottom: 20px;
  font-weight: bold;
}

.form-group {
  margin-bottom: 15px;
}

label {
  display: block;
  margin-bottom: 5px;
}

input {
  width: 100%;
  padding: 12px;
  border-radius: 10px;
  border: 1px solid #999;
}

.row {
  display: flex;
  gap: 15px;
}

.row .form-group {
  flex: 1;
}

.btn {
  display: block;
  margin: 20px auto 0;
  padding: 12px 30px;
  border-radius: 10px;
  border: none;
  background: #3b82f6;
  color: white;
  font-weight: bold;
  cursor: pointer;
}
</style>
</head>

<body>

<div class="main">

  <!-- HEADER -->
  <div class="header">
    <input type="text" class="search" placeholder="Search">
    <div class="icons">🔔 ✉️ 👤</div>
  </div>

  <!-- FORM -->
  <div class="form-box">
    <div class="form-title">Konfirmasi Pengembalian</div>

    <form action="{{ route('pengembalian.store') }}" method="POST">
      @csrf

      <div class="form-group">
        <label>Anggota</label>
        <input type="text" name="anggota" required>
      </div>

      <div class="form-group">
        <label>Buku</label>
        <input type="text" name="buku" required>
      </div>

      <div class="row">
        <div class="form-group">
          <label>📅 Tanggal Pinjam</label>
          <input type="date" name="tgl_pinjam" required>
        </div>

        <div class="form-group">
          <label>📅 Tanggal Kembali</label>
          <input type="date" name="tgl_kembali" required>
        </div>
      </div>

      <div class="form-group">
        <label>📅 Tanggal Dikembalikan</label>
        <input type="date" name="tgl_dikembalikan" required>
      </div>

      <button type="submit" class="btn">Proses Pengembalian</button>
    </form>
  </div>

</div>

<!-- MODAL SUCCESS -->
@if(session('success'))
<div id="successModal" style="
  position: fixed;
  top:0; left:0;
  width:100%; height:100%;
  background: rgba(0,0,0,0.3);
  display:flex;
  justify-content:center;
  align-items:center;
">

  <div style="
    background:#fff;
    width:400px;
    padding:25px;
    border-radius:12px;
    text-align:center;
    position:relative;
  ">

    <span onclick="closeModal()" style="
      position:absolute;
      right:15px;
      top:10px;
      cursor:pointer;
    ">✖</span>

    <div style="
      width:80px;
      height:80px;
      background:#4a90e2;
      border-radius:50%;
      margin:0 auto 15px;
      display:flex;
      justify-content:center;
      align-items:center;
      font-size:40px;
      color:white;
    ">
      ✔
    </div>

    <h3 style="color:#2d8cf0;">Pengembalian Berhasil !</h3>

    <p>{{ session('success') }}</p>

    <button onclick="closeModal()" style="
      background:#2d8cf0;
      color:white;
      border:none;
      padding:10px 25px;
      border-radius:6px;
      cursor:pointer;
    ">
      OK
    </button>

  </div>
</div>

<script>
function closeModal(){
  document.getElementById('successModal').style.display = 'none';
}
</script>
@endif

</body>
</html>