<!DOCTYPE html>
<html>

<head>
    <title>Data Dosen</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h2 class="my-4">Data Dosen</h2>
        <a href="/export-dosens" class="btn btn-success my-3">Export Excel</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Dosen</th>
                    <th>NPP</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($dosens as $dosen)
                    <tr>
                        <td>{{ $dosen->id }}</td>
                        <td>{{ $dosen->nama_dosen }}</td>
                        <td>{{ $dosen->npp }}</td>
                        <td>{{ $dosen->email }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
