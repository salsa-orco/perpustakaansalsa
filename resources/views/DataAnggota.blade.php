<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Dashboard Perpus</title>

<style>
* {
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family: Arial, sans-serif;
}

body {
    display:flex;
    background:#eef1f7;
}

/* SIDEBAR */
.sidebar {
    width:220px;
    height:100vh;
    background:#2f2a8c;
    padding:20px;
    color:white;
}

.logo {
    font-size:40px;
    text-align:center;
    margin-bottom:20px;
}

.menu button {
    width:100%;
    padding:10px;
    margin:8px 0;
    border:none;
    border-radius:20px;
    background:#cfe2ff;
    cursor:pointer;
    font-weight:bold;
}

.menu button:hover {
    background:#a9c9ff;
}

/* MAIN */
.main {
    flex:1;
    padding:20px;
}

/* HEADER */
.header {
    display:flex;
    justify-content:space-between;
    margin-bottom:20px;
}

.header h2 {
    font-size:24px;
}

/* TABLE */
.table-box {
    background:white;
    padding:15px;
    border-radius:10px;
}

table {
    width:100%;
    border-collapse:collapse;
}

th, td {
    border:1px solid #ccc;
    padding:10px;
    text-align:center;
}

th {
    background:#eee;
}

/* STATUS */
.status {
    padding:5px 10px;
    border-radius:10px;
    color:white;
}

.aktif { background:green; }
.nonaktif { background:red; }

/* BUTTON */
.btn {
    padding:5px 10px;
    border:none;
    border-radius:5px;
    cursor:pointer;
}

.btn-bayar {
    background:#1e88e5;
    color:white;
}
</style>
</head>

<body>

<!-- SIDEBAR -->

<!-- MAIN -->
<div class="main">

    <div class="header">
        <h2>Data Anggota</h2>
        <div>🔔 ✉️ 👤</div>
    </div>

</div>

    <div class="table-box">
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Anggota</th>
                    <th>Email</th>
                    <th>Status</th>
                    <th>Denda</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>1</td>
                    <td>Andi Saputra</td>
                    <td>andi@gmail.com</td>
                    <td><span class="status aktif">Aktif</span></td>
                    <td>Rp 10.000</td>
                    <td><button class="btn btn-bayar">Bayar</button></td>
                </tr>

                <tr>
                    <td>2</td>
                    <td>Siti Nurhaliza</td>
                    <td>siti@gmail.com</td>
                    <td><span class="status nonaktif">Terlambat</span></td>
                    <td>Rp 25.000</td>
                    <td><button class="btn btn-bayar">Bayar</button></td>
                </tr>

                <tr>
                    <td>3</td>
                    <td>Budi Santoso</td>
                    <td>budi@gmail.com</td>
                    <td><span class="status aktif">Aktif</span></td>
                    <td>Rp 0</td>
                    <td>-</td>
                </tr>
            </tbody>
        </table>
    </div>

</div>

</body>
</html>