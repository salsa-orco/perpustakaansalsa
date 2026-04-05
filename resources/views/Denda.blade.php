<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Pembayaran Denda</title>

<style>
* {
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family: 'Segoe UI', sans-serif;
}

body {
    display:flex;
    background:#e9edf5;
}

/* MAIN */
.main {
    flex:1;
    padding:30px;
    display:flex;
    flex-direction:column;
    align-items:center; /* 🔥 biar center */
}

/* HEADER */
.header {
    width:80%;
    display:flex;
    justify-content:space-between;
    align-items:center;
    margin-bottom:25px;
}

.search {
    width:400px;
    padding:12px;
    border-radius:25px;
    border:1px solid #ccc;
    background:#f9f9f9;
}

.icons span {
    margin-left:15px;
    font-size:20px;
    cursor:pointer;
}

/* CARD */
.card {
    width:80%; /* 🔥 ini bikin mirip figma */
    background:#ffffff;
    padding:25px;
    border-radius:15px;
    box-shadow:0 10px 25px rgba(0,0,0,0.08);
}

/* TITLE */
.title {
    font-size:26px;
    font-weight:bold;
    margin-bottom:20px;
    color:#222;
}

/* TABLE */
table {
    width:100%;
    border-collapse:collapse;
}

th {
    background:#f1f3f7;
    color:#333;
    font-weight:bold;
}

th, td {
    padding:15px;
    text-align:center;
    border:1px solid #ddd;
}

td {
    background:#fff;
}

/* BUTTON */
.btn {
    padding:8px 18px;
    border:none;
    border-radius:20px;
    background:#2f80ed;
    color:white;
    cursor:pointer;
    transition:0.3s;
}

.btn:hover {
    background:#1c60c9;
}

/* TEXT */
.red {
    color:red;
    font-weight:bold;
}
</style>

</head>
<body>

<div class="main">

    <!-- HEADER -->
    <div class="header">
        <input type="text" class="search" placeholder="Search">
        <div class="icons">
            <span>🔔</span>
            <span>✉️</span>
            <span>👤</span>
        </div>
    </div>

    <!-- CARD -->
    <div class="card">

        <div class="title">Pembayaran Denda</div>

        <table>
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Waktu Terlambat</th>
                    <th>Total Denda</th>
                    <th>Tanggal Kembali</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>
            @foreach($denda as $d)
            <tr>
                <td>{{ $d['nama'] }}</td>
                <td class="red">{{ $d['terlambat'] }}</td>
                <td>{{ $d['total'] }}</td>
                <td>{{ $d['status'] }}</td>
                <td>
                    <button class="btn">Verifikasi</button>
                </td>
            </tr>
            @endforeach
            </tbody>

        </table>

    </div>

</div>

</body>
</html>