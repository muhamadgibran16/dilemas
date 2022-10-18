<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Membuat formulir data diri</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    <div class="container-sm pt-5 pb-5">
        <div class="card">
            <div class="card-body">
                <h1 class="display-6 pt-5 text-center">Data Mahasiswa</h1>
                <hr class="featurette-divider">
                <table class="table table-dark table-striped mt-5">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">NIM</th>
                            <th scope="col">Kelas</th>
                            <th scope="col">Tanggal Lahir</th>
                            </th>
                            <th scope="col">Tempat Lahir</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Jenis Kelamin</th>
                            <th scope="col">Agama</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td><?php echo $name; ?></td>
                            <td><?php echo $nim; ?></td>
                            <td><?php echo $kelas; ?></td>
                            <td><?php echo $tgl; ?></td>
                            <td><?php echo $tempat; ?></td>
                            <td><?php echo $alamat; ?></td>
                            <td><?php echo $jeniskel; ?></td>
                            <td><?php echo $agama; ?></td>

                        </tr>
                        <!-- <tr>
                            <th scope="row">2</th>
                            <td><?php echo $name; ?></td>
                            <td><?php echo $nim; ?></td>
                            <td><?php echo $kelas; ?></td>
                            <td><?php echo $tgl; ?></td>
                            <td><?php echo $tempat; ?></td>
                            <td><?php echo $alamat; ?></td>
                            <td><?php echo $jeniskel; ?></td>
                            <td><?php echo $agama; ?></td>

                        </tr> -->

                    </tbody>
                </table>

            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>