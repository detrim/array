<?php 

include('data/d_siswa.php');
include('data/d_nim.php');
$siswa = Siswa::get_siswa();
$nim = Nim::get_nim();

foreach ($siswa as $key_siswa => $value_siswa) {
    include('view/siswa.php');
    
    if (isset($nim[$value_siswa['nim']])) {
        include('view/academic.php');
    }else{
        include('view/noacademic.php');
    }
}
?>