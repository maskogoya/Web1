<?php
if(!defined('INDEX')) die("");
?>

    <h2 class="judul">Data Anggota</h2>
    <a class="tombol" href="?hal=anggota tamabah">Tambah</a>

    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Foto</th>
                <th>Nama</th>
                <th>Tanggal Lahir</th>
                <th>jabatan</th>
                <th>keterangan</th>
                <th>aksi</th>
            </tr>
        </thead>
    </table>
    <tbody>
        <?php
            $query = mysqli_query($con, "SELECT * FROM anggota LEFT JOIN
            jabatan ON anggota.id = jabatan.id ORDER BY
            anggota. id  DESC "); 
            $no = 0;
            while($data = mysqli_fetch_array($query)){
                $no++;
        ?>
                <tr>
                    <td><?= $no ?></td>
                    <td><img src="iamages/<?= $data['foto'] ?>"width="100"></td>
                    <td><?= $data['nama'] ?></td>
                    <td><?= $data['tgl_lahir'] ?></td>
                    <td><?= $data['jabatan'] ?></td>
                    <td><?= $data['keterangan'] ?></td>
                    <td>
                    <a class="tombol_edit" 
                        href=?hal=anggota_edit&id=<?= $data['id'] ?>> Edit </a>
                    <a class="tombol_hapus"
                        href=?hal=anggota_hapus&id=<?= $data['id'] ?>&foto=<?$data['foto'] ?>> hapus</a>
                    </td>
                </tr>
             <?php

        }
        ?>
    </tbody>
</table>


        <h2 class="judul">Tambah Anggota</h2>
        <a href="form.html" class="tombol">Tambah</a>
        <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Foto</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Tanggal Lahir</th>
                <th>Jabatan</th>
                <th>Keterangan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td><img src="images/mck.jpg" width="100" style="border-radius: 10px;"></td>
                <td>Maskogoya</td>
                <td>L</td>
                <td>10 Maret 1999</td>
                <td>Anggota</td>
                <td>-</td>
                <td>
                    <a class="tomboledit" href="#">Edit</a>
                    <a class="tombolhapus" href="#">Hapus</a>
                </td>
            </tr>
        </tbody>
    </table>
       
   