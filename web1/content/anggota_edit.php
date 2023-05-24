    <?php
        if(!defined('INDEX')) die("");

    $query = mysqli_query($con, "SELECT * FROM anggota WHERE id anggota='$_GET [id]'");
    $data = mysqli_fetch_array($query);
    ?>

    <h2 class="judul">Tambah Anggota</h2>
    <form method="post" action="?hal=anggota_update" enctype="multipart/form-data">
        <input type="hidden" nama="id" value="<?= $data['id_anggota']?>">

        <div class="form-group">
            <label for="foto">Foto</label>
            <div class="input">
                <input type="file" id="foto" nama="foto">
                <img src="images/<?= $data ['foto']?>" width="150">
            </div>

            <div class="form-group">
            <label for="nama">Nama</label>
            <div class="input">
                <input type="text" id="nama" nama="nama" value="<?=$data['nama_anggota'] ?>">
            </div>
        </div>

        <div class="form-group">
            <label for="jk">Jenis Kelamin</label>
            <?php
                if($data['jenis_kelamin'] == "L"){
                    $l = "checked";
                    $p = "";
                }else{
                    $l = "";
                    $p = "checked";
                }
            ?>
            <input type="radio" id="jk" value="L"<?= $l ?>> Laki-Laki

            <div class="form-group">
            <label for="tanggal">Tanggal</label>
            <div class="input">
                <input type="date" id="tanggal" nama="tanggal" value="<?=$data['tanggal_lahir'] ?>">
            </div>

            <div class="form-group">
            <label for="jabatan">Jabatan</label>
                <div class="input">
                    <select  id="jabatan" nama="jabatan">
                        <option value="">Pilih Jabatan</option> <div class="form-group">
            <label for="tanggal">Tanggal</label>
            <div class="input">
                <input type="date" id="tanggal" nama="tanggal" value="<?=$data['tanggal_lahir'] ?>">
            </div>
                        <?php
                            $queryjabatan = mysqli_query($con, "SELECT * FROM jabatan");
                            while($j = mysqli_fetch_array($queryjabatan)){
                                echo "<option value='$j[id_jabatan]'";
                                if($j['id_jabatan'] == $data['id_jabatan']) echo "selected";
                                echo ">$j[nama_jabatan]</option";
                            }
                        ?>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label for="keterangan">Keterangan</label>
                <div class="input">
                    <textarea style="width: 100%" rows="5" id="keterangan" nama="keterangan"><?= $data['keterangan'] ?></textarea>
                </div>
            </div>

            <div class="form-group">
                <input type="submit" value="simpan" class="simpan">
                <input type="reset" value="batal" class="tombol reset">
            </div>
        </div>
    </form>