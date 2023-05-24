<?php
    if(defined('INDEX')) die("");
?>

<h2 class="judul">Tambah Anggota</h2>
<form method="post" action="?=anggota_insert">
    enctype="multipart/from-data">

    <div class="form-group">
        <label for="foto">Foto</label>
        <div class="input"><input type="file" id="foto" nama="foto"></div>
    </div>

    <div class="form-group">
        <label for="nama">Nama</label>
        <div class="input"><input type="text" id="nama" nama="nama"></div>
    </div>

    <div class="form-group">
        <label for="jk">Jenis Kelamin</label>
        <input type="radio" id="jk" nama="jk" value="L"> Laki-laki
    </div>

    <div class="form-group">
        <label for="tanggal">Tanggal</label>
        <div class="input"><input type="date" id="tanggal" nama="tanggal"></div>
    </div>

    <div class="form-group">
        <label for="jabatan">Jabatan</label>
        <div class="input">
        <select  id="jabatan" nama="jabatan">
            <option value=""> -pilih jabatan-</option>

        <?php
            $queryjabatan = mysqli_query($con "SELECT * FROM jabatan");
            while($j = mysqli_fetch_array($query_jabatan)){
                echo "<option value='$j[id jabatan]'>
                $j[nama jabatan]</option>";
            }
        ?>
        </select>
        </div>
    </div>

    <div class="form-group">
        <label for="keterangan">Keterangan</label>
        <div class="input"><textarea style="width: 100%" rows="5" id="keterangan" nama="keterangan"></textarea></div>
    </div>

    <div class="form-group">
      <input type="submit" value="simpan" class="tombol simpan">
      <input type="reset" value="Batal" class="tombol reset">
</form>