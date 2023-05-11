<?php 
$nim = [
    ['11256' => ['Kelas' => 'Informatika', 'Angkatan' => '2015', 'Wali' => 'Ayah Sarif']],
    ['11356' => ['Kelas' => 'Teknik Informatika', 'Angkatan' => '2016','Wali' => 'Ayah Irfan']],
    ['11257' => ['Kelas' => 'Sistem Informasi', 'Angkatan' => '2016','Wali' => 'Ayah Deni']],
    ['11658' => ['Kelas' => 'Teknik Informatika', 'Angkatan' => '2016','Wali' => 'Ayah Dina']],
]
?>

<?php foreach ($nim as $key => $value) {
    foreach($value as $key_value => $val){
        // echo '<span>'.$key_value.'</span> &nbsp;';
        // echo '<span>'.$val['Kelas'].'</span> &nbsp;';
        // echo '<span>'.$val['Angkatan'].'</span> &nbsp;';
        // echo '<span>'.$val['Wali'].'</span><br>';
    }
} ?>