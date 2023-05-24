<?php
    if(!defined('INDEX')) die("");

    $query = mysqli_query($con "SELECT * FROM jabatan WHERE id jabatan='$_GET[id]'");
    $data = mysqli_fetch_array($query);
    ?>

    <h2 class="judul">Edit jabatan </h2>
    <form method="post" action="?hal=jabatan_update">
    <input type="hidden" nama="id" value="<?= $data['id jabatan']?>">

        <div class="form-group">
        <label for="nama">Nama</label>
        <div class="input">
            <input type="text" id="nama" nama="nama" value="<?=$data['nama jabatan'] ?>">
        </div>
        </div>
        <div class="from-group">
            <input type="submit" value="simpan" class="tombol simpan">
            <input type="reset" value="batal" class="tombol reset">
        </div>
    </form>
    