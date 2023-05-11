<?php 
$siswa = [
    ['Nama' => 'Irfan', 'Foto' => 'foto/irfan.jpg', 'Alamat' => 'Magelang' , 'Nim' => '11356'],
    ['Nama' => 'Sarif', 'Foto' => 'foto/sarif.jpg', 'Alamat' => 'Kerawang' , 'Nim' => '11256'],
    ['Nama' => 'Deni', 'Foto' => 'foto/deni.jpg', 'Alamat' => 'Grobogan' , 'Nim' => '11257'],
    ['Nama' => 'Lastri', 'Foto' => '', 'Alamat' => 'Jepara' , 'Nim' => '11400'],
]
?>
<?php 
$nim = [
    '11256' => ['Kelas' => 'Informatika', 'Angkatan' => '2015', 'Wali' => 'Ayah Sarif'],
    '11356' => ['Kelas' => 'Teknik Informatika', 'Angkatan' => '2016','Wali' => 'Ayah Irfan'],
    '11257' => ['Kelas' => 'Sistem Informasi', 'Angkatan' => '2016','Wali' => 'Ayah Deni'],
    '11658' => ['Kelas' => 'Teknik ', 'Angkatan' => '2016','Wali' => 'Ayah Dina'],
    '11678' => ['Kelas' => 'Teknik ', 'Angkatan' => '2016','Wali' => 'Ayah Fina'],
]
?>

<?php 
foreach ($siswa as $key => $value) {
    if (isset($nim[$value['Nim']])) {
        echo $nim[$value['Nim']]['Kelas']; echo '<br>';
    }else{
        // echo $nim['kelas']; echo '<br>';
    }
}

// foreach ($nim as $key_nim => $val_nim) {
//     foreach ($siswa as $key => $value) {
//         if ($key_nim == $value['Nim']) {
//             echo $key_nim; echo '<br>';
//             break;
//         }else{
//             // echo $val_nim['Kelas']; echo '<br>';
//         }
//     }
// }



?>