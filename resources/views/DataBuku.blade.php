<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Data Buku</title>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: Arial, sans-serif;
    }

    body {
        display: flex;
        background: #f0f2f5;
    }

    /* SIDEBAR */
    .sidebar {
        width: 230px;
        height: 100vh;
        background: #2f2a8c;
        color: white;
        padding: 20px;
    }

    .logo {
        text-align: center;
        margin-bottom: 20px;
        font-size: 40px;
    }

    .menu button {
        width: 100%;
        margin: 8px 0;
        padding: 10px;
        border: none;
        border-radius: 20px;
        background: #d9e6ff;
        color: #000;
        cursor: pointer;
        font-weight: bold;
    }

    .menu button:hover {
        background: #bcd4ff;
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
        margin-bottom: 20px;
    }

    .header h2 {
        font-size: 24px;
    }

    .icons span {
        margin-left: 15px;
        font-size: 20px;
        cursor: pointer;
    }

    /* SEARCH + BUTTON */
    .top-bar {
        display: flex;
        justify-content: space-between;
        margin-bottom:20px;
    }

    .search {
        width: 60%;
        padding: 10px;
        border-radius: 20px;
        border: 1px solid #ccc;
    }

    .btn {
        padding: 10px 15px;
        border: none;
        background: #1e88e5;
        color: white;
        border-radius: 8px;
        cursor: pointer;
    }

    .btn:hover {
        background: #1565c0;
    }

    /* TABLE */
    table {
        width: 100%;
        border-collapse: collapse;
        background: white;
    }

    th, td {
        border: 1px solid #ccc;
        padding: 10px;
        text-align: center;
    }

    th {
        background: #eee;
    }

    .book-info {
        display: flex;
        align-items: center;
        gap: 10px;
        text-align: left;
    }

    .book-info img {
        width: 50px;
        height: 70px;
        object-fit: cover;
    }

    .status {
        padding: 5px 10px;
        background: #2ecc71;
        color: white;
        border-radius: 10px;
        font-size: 12px;
    }
</style>
</head>
<body>

<!-- SIDEBAR -->


<!-- MAIN CONTENT -->
<div class="main">
    <div class="header">
        <h2>Daftar Buku</h2>
        <div class="icons">
            <span>🔔</span>
            <span>✉️</span>
            <span>👤</span>
        </div>
    </div>

    <div class="top-bar">
    <input type="text" class="search" placeholder="Search...">
    <button class="btn" onclick="window.location.href='/TambahBuku'">
        + Tambah Buku
    </button>
</div>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Buku</th>
                <th>Kategori</th>
                <th>Stok</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>
                    <div class="book-info">
                        <img src="https://via.placeholder.com/50x70" alt="">
                        <div>
                            <b>Simple Book Bahasa Jepang</b><br>
                            <small>Rukmono Danang Nugroho</small>
                        </div>
                    </div>
                </td>
                <td>Pembelajaran</td>
                <td>25</td>
                <td><span class="status">Tersedia</span></td>
            </tr>

            <tr>
                <td>2</td>
                <td>
                    <div class="book-info">
                        <img src="c:\Users\ok\Downloads\Sastra-removebg-preview.png alt="">
                        <div>
                            <b>Tulisan Sastra</b><br>
                            <small>Tanderlova</small>
                        </div>
                    </div>
                </td>
                <td>Novel</td>
                <td>15</td>
                <td><span class="status">Tersedia</span></td>
            </tr>

            <tr>
                <td>3</td>
                <td>
                    <div class="book-info">
                        <img src="https://via.placeholder.com/50x70" alt="">
                        <div>
                            <b>Perintis Fantastis Bukan Pewaris</b><br>
                            <small>Byzka Wibisono</small>
                        </div>
                    </div>
                </td>
                <td>Pembelajaran</td>
                <td>10</td>
                <td><span class="status">Tersedia</span></td>
            </tr>
        </tbody>
    </table>
</div>

</body>
</html>