<!DOCTYPE html>
<html>

<head>
    <title>Data Mahasiswa</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h2 class="my-4">Data Mahasiswa</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>NIM</th>
                    <th>Tahun Masuk</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($mahasiswas as $mahasiswa)
                    <tr>
                        <td>{{ $mahasiswa->id }}</td>
                        <td>{{ $mahasiswa->nama }}</td>
                        <td>{{ $mahasiswa->nim }}</td>
                        <td>{{ $mahasiswa->tahun_masuk }}</td>
                    </tr>
                @endforeach

                {{-- disini untuk implement yang dari route --}}
                <a href="/export-mahasiswas" class="btn btn-success my-3">Export Excel Mahasiswa</a>

            </tbody>
        </table>
    </div>
</body>

</html>
