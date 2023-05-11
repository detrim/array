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
    ['11256' => ['Kelas' => 'Informatika', 'Angkatan' => '2015', 'Wali' => 'Ayah Sarif']],
    ['11356' => ['Kelas' => 'Teknik Informatika', 'Angkatan' => '2016','Wali' => 'Ayah Irfan']],
    ['11257' => ['Kelas' => 'Sistem Informasi', 'Angkatan' => '2016','Wali' => 'Ayah Deni']],
    ['11658' => ['Kelas' => 'Teknik Informatika', 'Angkatan' => '2016','Wali' => 'Ayah Dina']],
]
?>
<?php 
$nim1 = [
    '11256' => ['Kelas' => 'Informatika', 'Angkatan' => '2015', 'Wali' => 'Ayah Sarif'],
    '11356' => ['Kelas' => 'Teknik Informatika', 'Angkatan' => '2016','Wali' => 'Ayah Irfan'],
    '11257' => ['Kelas' => 'Sistem Informasi', 'Angkatan' => '2016','Wali' => 'Ayah Deni'],
    '11658' => ['Kelas' => 'Teknik Informatika', 'Angkatan' => '2016','Wali' => 'Ayah Dina'],
]
?>
<?php 

?>
<?php 
foreach ($siswa as $key => $value) {

    $ada=0;
    foreach ($nim as $key_nim => $val_nim) {
        if(isset($val_nim[$value["Nim"]])){
            echo $val_nim[$value["Nim"]]["Wali"]; 
            echo "ada";
            echo "<br>";
            $ada=1;
            break;
        }
    } 
    if($ada == 0) {
        var_dump($value);
    }
    
    // break;
//    if (isset($nim[$key][$value['Nim']])) {
//    echo $nim[$key][$value['Nim']];
//    } else{
//     // echo $nim[$key][$value['Nim']];
//     echo "no";
//    }

} ?>

<?php 
foreach ($siswa as $key => $value) {
    // $ada=0;
    // foreach ($nim as $key_nim => $val_nim) {
    //     var_dump($key_nim);
    //     if(isset($val_nim[$value["Nim"]])){
    //         echo '<span>'.$value['Nama'].'</span>';
    //         break;
    //     }
   if (isset($nim[$value['Nim']])) {
//    echo $nim[$value['Nim']]['Kelas'];
   } else{
    // echo $value['Nama']; echo '<br>';
    // echo "no";
   }
    }
    
    // }
?>