<?php

$id_catatan = $_GET['id_catatan'];
include 'koneksi.php';
$sql = "SELECT*FROM catatan WHERE id_catatan='$id_catatan'";
$query = mysqli_query($koneksi, $sql);
$value = mysqli_fetch_array($query);
?>

<div class="card">
    <div class="card-header">
    <a href="user.php" class="btn btn-primary btn-icon-split">
                                        <span class="icon text-white-50">
                                            <i class="fa fa-arrow-left"></i>
                                        </span>
                                        <span class="text">Kembali</span>
                                    </a>
    </div>
    <div class="card-body"> 
    <form action="simpan_edit_catatan.php" method="post">
        <input type="hidden" name="id_catatan" value="<?= $id_catatan?>">
        <div class="form-group">
            <label>Pilih Tanggal</label>
            <input value="<?= $value['tanggal']?>" name="tanggal" type="date" required class="form-control" placeholder="hari/Bulan/Tahun">
        </div>
        <div class="form-group">
            <label>Pilih Jam</label>
            <input value="<?= $value['waktu']?>" name="waktu" type="time" required class="form-control" placeholder="Masukan Jam">
        </div>
        <div class="form-group">
            <label>Pilih Lokasi</label>
            <input value="<?= $value['lokasi']?>" name="lokasi" type="text" required class="form-control" placeholder="Masukan Lokasi">
        </div>
        <div class="form-group">
            <label>Suhu Tubuh</label>
            <input value="<?= $value['suhu']?>" name="suhu" type="text" required class="form-control" placeholder="Masukan Suhu Tubuh">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> SIMPAN </button>
            <button type="reset" class="btn btn-warning"><i class="fa fa-trash"></i> KOSONGKAN </button>
        </div>
    </form>
    </div>
</div>