<?php
if(defined('INDEX')) die("");

if(file_exists("images/$_GET[foto]"))
unlink("images/$GET[foto]");
$query = mysqli_query($con, "DELETE FROM anggota WHERE
id_anggota='$_GET[id]'");

    if(query) {
        echo "Data berhasil dihapus!";
        echo "meta http-equiv='refresh' content='1;
        url=?hal=anggota'>";
        }else{
            echo "Tidat dapat menyimpan data!<br>";
            echo mysqli_error();
        }
    ?>