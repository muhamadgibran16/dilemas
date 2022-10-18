<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
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
            <h1 class="display-6 mt-5 text-center">Formulir Data Diri</h1>
            <form class="py-5 px-5" method="POST" action="<?php echo base_url() . 'Profil/view_profile' ?>">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="name"
                        placeholder="Name">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Nim</label>
                    <input type="number" class="form-control" id="exampleFormControlInput1" name="nim"
                        placeholder="NIM">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Kelas</label>
                    <select class="form-select" name="kelas" aria-label="Default select example">
                        <option selected> </option>
                        <option value="12.1A.21">12.1A.21</option>
                        <option value="12.2A.21">12.2A.21</option>
                        <option value="12.3A.21">12.3A.21</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Tanggal Lahir</label>
                    <input type="date" class="form-control" id="exampleFormControlInput1" name="tgl"
                        placeholder="Tanggal Lahir">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Tempat Lahir</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="tempat"
                        placeholder="Tempat Lahir">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" name="alamat" rows="2"
                        placeholder="Alamat"></textarea>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1 me-3" class="form-label">Jenis Kelamin : </label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="jeniskel" value="Laki-Laki"
                            id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Laki-Laki
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="jeniskel" value="Perempuan"
                            id="flexRadioDefault2">
                        <label class="form-check-label" for="flexRadioDefault2">
                            Perempuan
                        </label>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Agama</label>
                    <select class="form-select" name="agama" aria-label="Default select example">
                        <option selected> </option>
                        <option value="Islam">Islam</option>
                        <option value="Kristen">Kristen</option>
                        <option value="Khatolik">Khatolik</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Budha">Budha</option>
                    </select>
                </div>
                <div class="d-grid gap-2 mt-5">
                    <button type="submit" name="submit" class="btn btn-warning btn-md btn-login"
                        id="btn">Submit</button>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>