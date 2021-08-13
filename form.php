<?php

//penampungan nilai variable

$nim = $_POST['tnim'];
$nama = $_POST['tname'];
$jurusan = $_POST['tjurusan'];
$nilai_tugas = $_POST['ttugas'];
$nilai_quis = $_POST['tquis'];
$nilai_uts = $_POST['tuts'];
$nilai_uas = $_POST['tuas'];
$proses = $_POST['tproses'];
$total_nilai = $_POST['ttotal'];
$total_grade = $_POST['tgrade'];



?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Membuat Rekapan Nilai Mahasiswa</title>
</head>

<body>

    <h5 class="text-center">Data Rekapan Nilai Mahasiwa</h5>

    <div class="container">
        <table class="table" border="0" align="center">
            <tr>
                <td>Nim</td>
                <td>:</td>
                <td>
                    <input type="text" name="tnim" class="form-control" size="10">
                </td>
            </tr>

            <tr>
                <td>Nama</td>
                <td>:</td>
                <td>
                    <input type="text" name="tnama" class="form-control">
                </td>
            </tr>

            <tr>
                <td>Jurusan</td>
                <td>:</td>
                <td>
                    <input type="text" name="tjurusan" class="form-control">
                </td>
            </tr>
            <tr>
                <td>Nilai Tugas</td>
                <td>:</td>
                <td>
                    <input type="text" name="ttugas" class="form-control">
                </td>
            </tr>

            <tr>
                <td>Nila Quis</td>
                <td>:</td>
                <td>
                    <input type="text" name="tquis" class="form-control">
                </td>
            </tr>

            <tr>
                <td>Nilai UTS</td>
                <td>:</td>
                <td>
                    <input type="text" name="tuts" class="form-control">
                </td>
            </tr>
            <tr>
                <td>Nilai UAS</td>
                <td>:</td>
                <td>
                    <input type="text" name="tuas" class="form-control">
                </td>
            </tr>

            <tr>
                <td></td>
                <td></td>
                <td>
                    <input type="submit" name="tproses" value="Proses" class="btn btn-danger mt-3">
                </td>
            </tr>

            <tr>
                <td><p>Nilai</p></td>
                <td>:</td>
                <td>
                    <input type="text" name="ttotal" class="form-control">
                </td>
            </tr>

            <tr>
                <td>Grade</td>
                <td>:</td>
                <td>
                    <input type="text" name="tgrade" class="form-control">
                </td>
            </tr>
        </table>
    </div>

</body>

</html>