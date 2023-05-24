<?php
if(!defined('INDEX')) die("");

$halaman = array("dashboard",
"anggota", 
"anggota_tambah", 
"anggota_insert",
"anggota_edit", 
"anggota_update", 
"anggota_hapus",
"jabatan", 
"jabatan_tambah", 
"jabatan_insert", 
"jabatan_edit", 
"jabatan_update", 
"jabatan_hapus");

if(isset($_GET['hal'])) $hal = $_GET['hal'];
else $hal = "dashboard";

foreach($halaman as $h) {
    if($hal == $h) {
        include "content/$h.php";
        break;
        }
    }
?>