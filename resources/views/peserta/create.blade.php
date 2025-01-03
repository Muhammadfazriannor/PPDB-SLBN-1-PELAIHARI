<!-- resources/views/peserta/create.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Peserta</title>
</head>
<body>
    <h1>Tambah Peserta</h1>

    <form action="{{ route('peserta.store') }}" method="POST">
        @csrf
        <label for="nama">Nama:</label>
        <input type="text" name="nama" id="nama" required><br>

        <label for="nilai">Nilai:</label>
        <input type="number" name="nilai" id="nilai" required><br>

        <label for="surat_dokter">Surat Dokter:</label>
        <input type="number" name="surat_dokter" id="surat_dokter" required><br>

        <label for="zonasi">Zonasi:</label>
        <input type="number" name="zonasi" id="zonasi" required><br>

        <label for="kelulusan">Kelulusan:</label>
        <input type="number" name="kelulusan" id="kelulusan" required><br>

        <button type="submit">Simpan</button>
    </form>

    <a href="{{ route('peserta.index') }}">Kembali</a>
</body>
</html>
