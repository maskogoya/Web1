<?php
    if(!defined('INDEX')) die("");

    $query = mysqli_query($con, "insert into jabatan set nama_jabatan = '$_POST[nama]'");


    if($query){
        echo "Data berhasil disimpan!";
        echo "<meta htt-equiv='refresh' content='1;
        url=?hal=jabatan'>";
          }else{
            echo "tidak dapat menyimpan data!<br>";
            echo mysqli_error();
          }  
        ?>