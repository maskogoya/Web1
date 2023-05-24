<?php
    if(!defined('INDEX')) die("");

    $foto = $FILES['foto']['nama'];
    $lokasi = $FILES['foto']['tmp nama'];
    $foto = $FILES['foto']['type'];
    $foto = $FILES['foto']['size'];

    $error = "";
    if($foto == ""){
        $query = mysqli_query($con, "INSERT INTO anggota SET
        nama_anggota = '$_POST[nama]',
        jenis_kelamin = '$_POST[jk]',
        tgl_lahir = '$_POST[tanggal]',
        id_jabatan = '$_POST[jabatan]',
        keterangan = '$_POST[keterangan]',
        ");
    }else{
        if($tipefile != "image/jpeg" and $tipefile != "image/jpg"
        and $tipefile != "image/png"){
            $error = "Tipe file tidak didukung!";
        }elseif($ukuranfile >= 1000000){
            echo $ukuranfile;
            $error = "ukuran file terlalu besar (lebih dari 1MB)!";
        }else{
            move uploaded file ($lokasi, "images/".$foto);
            $query = mysqli_query($con, "INSERT INTO anggota SET
            foto = '$foto',
            nama_anggota = '$_POST[nama]',
            jenis_kelamin = '$_POST[jk]',
            tgl_lahir = '$_POST[tanggal]',
            id_jabatan = '$_POST[jabatan]',
            keterangan = '$_POST[keterangan]',
            ");
        }
    }
    

    if($error != ""){
        echo $error;
        echo "meta http-equiv='refresh' content='2;
        url=?hal=anggota tambah'";
        echo "Data berhasil disimpan";
        echo"meta http-equiv='refresh' content'1;
        url=?hal=anggota'>";
    }else{
        echo "Tidak dapat menyimpan data!<br>";
        echo mysqli_error();
    }

    ?>