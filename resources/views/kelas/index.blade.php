<!DOCTYPE html>
<html>

<head>
    <title>Data Kelas</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h2 class="my-4">Data Kelas</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nama Kelas</th>
                    <th>Nama Dosen</th>
                    <th>Nama Mahasiswa</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($kelas as $kls)
                    <tr>
                        <td>{{ $kls->nama_kelas }}</td>
                        <td>{{ $kls->dosen->nama_dosen }}</td>
                        <td>
                            @foreach ($kls->mahasiswas as $mahasiswa)
                                {{ $mahasiswa->nama }}<br>
                            @endforeach
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
