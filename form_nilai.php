<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum 2</title>
</head>
<body>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <form action="form_nilai.php" method="get">
        <div class="container">
            <h3 style = "padding : 30px 0;">Form Nilai Mahasiswa</h3>
            <div class="form-group row">
                <label for="nama" class="col-4 col-form-label">Nama Mahasiswa</label> 
                <div class="col-8">
                <input id="nama" name="nama" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label> 
                <div class="col-8">
                    <select id="matkul" name="matkul" class="custom-select">
                        <option value="DDP">Dasar-Dasar Pemograman</option>
                        <option value="BDI">Basis Data I</option>
                        <option value="WEB1">Pemograman Web 1</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="nilai_uts" class="col-4 col-form-label">Nilai UTS</label> 
                <div class="col-8">
                <input id="nilai_uts" name="nilai_uts" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="nilai_uas" class="col-4 col-form-label">Nilai UAS</label> 
                <div class="col-8">
                <input id="nilai_uas" name="nilai_uas" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="nilai_tugas" class="col-4 col-form-label">Nilai Tugas Praktikum</label> 
                <div class="col-8">
                <input id="nilai_tugas" name="nilai_tugas" type="text" class="form-control">
                </div>
            </div> 
            <div class="form-group row">
                <div class="offset-4 col-8">
                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
    </form>

    <!-- php -->
    <?php
    $nama_mahasiswa = $_GET['nama'];
    $mata_kuliah = $_GET['matkul'];
    $nilai_uts = $_GET['nilai_uts'];
    $nilai_uas = $_GET['nilai_uas'];
    $nilai_tugas = $_GET['nilai_tugas'];

    echo "<h3>Hasil Submit Form</h3>";
    echo '<br/> Nama Mahasiswa : ' . $nama_mahasiswa;
    echo '<br/> Mata Kuliah : ' . $mata_kuliah;
    echo '<br/> Nilai UTS : ' . $nilai_uts;
    echo '<br/> Nilai UAS : ' . $nilai_uas;
    echo '<br/> Nilai Tugas Praktikum : ' . $nilai_tugas;
    ?>
    </div>
</body>
</html>