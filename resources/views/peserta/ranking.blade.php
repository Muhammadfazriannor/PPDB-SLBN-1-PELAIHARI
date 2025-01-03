<!-- resources/views/peserta/ranking.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ranking Peserta</title>
</head>
<body>
    <h1>Ranking Peserta Berdasarkan Prioritas</h1>
    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>Nilai</th>
                <th>Surat Dokter</th>
                <th>Zonasi</th>
                <th>Kelulusan</th>
                <th>Prioritas</th>
            </tr>
        </thead>
        <tbody>
            @foreach($peserta as $item)
                <tr>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->nilai }}</td>
                    <td>{{ $item->surat_dokter }}</td>
                    <td>{{ $item->zonasi }}</td>
                    <td>{{ $item->kelulusan }}</td>
                    <td>{{ $item->prioritas }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
