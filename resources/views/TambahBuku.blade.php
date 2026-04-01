<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Buku - Perpus App</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        * {
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background-color: #eef2f7; /* Warna background aplikasi */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        /* Container Utama Modal */
        .modal-card {
            background-color: white;
            width: 550px;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            position: relative;
        }

        /* Tombol Close (X) */
        .close-btn {
            position: absolute;
            top: 20px;
            right: 20px;
            font-size: 24px;
            color: #333;
            text-decoration: none;
            cursor: pointer;
        }

        h2 {
            text-align: center;
            font-weight: 600;
            margin-bottom: 30px;
            color: #000;
        }

        /* Grid Layout untuk Form */
        .form-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }

        .input-group {
            display: flex;
            flex-direction: column;
        }

        label {
            font-size: 14px;
            margin-bottom: 8px;
            color: #333;
        }

        input, select {
            padding: 10px 15px;
            border: 1.5px solid #ccc;
            border-radius: 8px;
            font-size: 14px;
            outline: none;
            transition: border-color 0.3s;
        }

        input:focus {
            border-color: #3b82f6;
        }

        /* Footer Tombol */
        .form-footer {
            display: flex;
            justify-content: space-between;
            margin-top: 40px;
            gap: 20px;
        }

        .btn {
            flex: 1;
            padding: 12px;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: opacity 0.3s;
        }

        .btn-batal {
            background-color: #fff;
            color: #000;
            border: 1px solid #ddd;
            box-shadow: 0 2px 5px rgba(0,0,0,0.05);
        }

        .btn-simpan {
            background-color: #3b82f6; /* Warna biru seperti di gambar */
            color: white;
        }

        .btn:hover {
            opacity: 0.8;
        }
    </style>
</head>
<body>

    <div class="modal-card">
        <span class="close-btn">&times;</span>
        <h2>Tambah Buku</h2>

        <form>
            <div class="form-grid">
                <div class="input-group">
                    <label>Judul Buku</label>
                    <input type="text" placeholder="Masukkan judul">
                </div>

                <div class="input-group">
                    <label>Tahun Terbit</label>
                    <input type="number" placeholder="Contoh: 2024">
                </div>

                <div class="input-group">
                    <label>Penulis</label>
                    <input type="text" placeholder="Nama penulis">
                </div>

                <div class="input-group">
                    <label>Kategori</label>
                    <select>
                        <option value="">Pilih Kategori</option>
                        <option value="fiksi">Fiksi</option>
                        <option value="non-fiksi">Non-Fiksi</option>
                        <option value="teknologi">Teknologi</option>
                    </select>
                </div>

                <div class="input-group">
                    <label>Penerbit</label>
                    <input type="text" placeholder="Nama penerbit">
                </div>

                <div class="input-group">
                    <label>ISSN</label>
                    <input type="text" placeholder="Nomor ISSN">
                </div>

                <div class="input-group" style="grid-column: span 1;">
                    <label>Stok</label>
                    <input type="number" placeholder="0">
                </div>
            </div>

            <div class="form-footer">
                <button type="button" class="btn btn-batal">Batal</button>
                <button type="submit" class="btn btn-simpan">Simpan</button>
            </div>
        </form>
    </div>

</body>
</html>