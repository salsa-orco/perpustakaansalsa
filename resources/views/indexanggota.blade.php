<h2>👤 Data Anggota</h2>

<table border="1" cellpadding="10" cellspacing="0" style="width:100%; border-collapse: collapse;">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Status</th>
            <th>Denda</th>
        </tr>
    </thead>
    <tbody>
        @foreach($anggotas as $index => $anggota)
        <tr>
            <td>{{ $index + 1 }}</td>
            <td>{{ $anggota->nama }}</td>
            <td>{{ $anggota->email }}</td>
            <td>{{ $anggota->status }}</td>
            <td>Rp {{ number_format($anggota->denda,0,',','.') }}</td>
        </tr>
        @endforeach
    </tbody>
</table>