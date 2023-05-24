<?php
if(!defined('INDEX')) die("");
?> 

<h2 class="judul">Data jabatan</h2>
<a class="tombol" href="?hal=jabatan_tambah">Tambah</a>

<table class="table">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama jabatan</th>
            <th>Aksi</th>
        </tr>
    </thead>
</table>
<tbody>
    <?php
        $query  = mysqli_query($con, "SELECT * FROM jabatan ORDER BY
        id DESC");
        $no = 0;
        while($data = mysqli_fetch_array($query)){
            $no++;
    ?>
            <tr>
                <td><?= $no ?></td>
                <td><?= $data['nama'] ?></td>
                <td><?= $data['jabatan'] ?></td>
                <td>
                        <a class="tombol edit "
                            href="?hal=jabatan_edit&id= <?= $data['id'] ?>"> Edit
                        </a>
                        <a class="tombol hapus"
                             href="?hal=jabatan_hapus&id=<? $data['id'] ?>"> hapus
                         </a>
                 </td>
            </tr>
  <?php 
     } 
    ?>
    </tbody>
 </table>

