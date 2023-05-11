<?php 
$siswa = [
    ['nama' => 'Irfan', 'foto' => 'photo/irfan.jpg', 'alamat' => 'Magelang' , 'nim' => '11356'],
    ['nama' => 'Sarif', 'foto' => 'photo/sarif.jpg', 'alamat' => 'Kerawang' , 'nim' => '11256'],
    ['nama' => 'Deni', 'foto' => 'photo/deni.jpg', 'alamat' => 'Grobogan' , 'nim' => '11257'],
    ['nama' => 'Lastri', 'foto' => '', 'alamat' => 'Jepara' , 'nim' => '11400'],
]
?>
<?php 
$nim = [
    '11256' => ['kelas' => 'Informatika', 'angkatan' => '2015', 'wali' => 'Ayah Sarif', 'tgllahir' => '1-jan-1996'],
    '11356' => ['kelas' => 'Teknik Informatika', 'angkatan' => '2016','wali' => 'Ayah Irfan', 'tgllahir' => '1-nov-1997'],
    '11257' => ['kelas' => 'Sistem Informasi', 'angkatan' => '2016','wali' => 'Ayah Deni', 'tgllahir' => '1-des-1997'],
    '11658' => ['kelas' => 'Teknik Informatika', 'angkatan' => '2016','wali' => 'Ayah Dina', 'tgllahir' => '1-jul-1996'],
]
?>

<?php foreach ($siswa as $key => $value) {
    if (!isset($nim[$value['nim']])) {
        echo $nim[$value['nim']];
    }
} ?>