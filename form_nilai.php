<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum 2</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <style>
        body {
            font-family: 'Varela Round', sans-serif;
            font-size: 13px;
        }
        h6 {
            padding : 20px 0;
        }
        .font-header {
            padding: 100px 0 20px 0;
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#">Sistem Penilaian</a>
    </div>
    </nav>
    <form action="form_nilai.php" method="get">
        <div class="container">
            <h6 class="font-header">Form Nilai Mahasiswa</h6>
            <div class="form-group row">
                <label for="nama" class="col-4 col-form-label">Nama Mahasiswa</label> 
                <div class="col-8">
                <input name="nama" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label> 
                <div class="col-8">
                    <select name="matkul" class="custom-select">
                        <option value="DDP">Dasar-Dasar Pemrograman</option>
                        <option value="BDI">Basis Data I</option>
                        <option value="WEB1">Pemrograman Web 1</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="nilai_uts" class="col-4 col-form-label">Nilai UTS</label> 
                <div class="col-8">
                <input name="nilai_uts" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="nilai_uas" class="col-4 col-form-label">Nilai UAS</label> 
                <div class="col-8">
                <input name="nilai_uas" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="nilai_tugas" class="col-4 col-form-label">Nilai Tugas Praktikum</label> 
                <div class="col-8">
                <input name="nilai_tugas" type="text" class="form-control">
                </div>
            </div> 
            <div class="form-group row">
                <div class="offset-4 col-8">
                <button type="submit" value="Simpan" name="proses"class="btn btn-outline-dark">Submit</button>
                </div>
            </div>
    </form>

    <!-- php -->
    <?php
    $proses = $_GET['proses'];
    $nama_mahasiswa = $_GET['nama'];
    $mata_kuliah = $_GET['matkul'];
    $nilai_uts = $_GET['nilai_uts'];
    $nilai_uas = $_GET['nilai_uas'];
    $nilai_tugas = $_GET['nilai_tugas'];

    echo "<h6>Hasil Submit Form</h6>";
    echo 'Proses ' . $proses;
    echo '<br/> Nama Mahasiswa : ' . $nama_mahasiswa;
    echo '<br/> Mata Kuliah : ' . $mata_kuliah;
    echo '<br/> Nilai UTS : ' . $nilai_uts;
    echo '<br/> Nilai UAS : ' . $nilai_uas;
    echo '<br/> Nilai Tugas Praktikum : ' . $nilai_tugas;
    ?>

    <footer class="main-footer bg-light fixed-bottom">
        <div class="container">
            <div class="pull-left p-3">
                Develop by Zharifah Dzikra Purnomo @2023
            </div>
        </div>
    </footer>
</body>
</html>