<?php 
class Nim{
    public static $nim = [
        '11256' => ['kelas' => 'Informatika', 'angkatan' => '2015', 'wali' => 'Ayah Sarif', 'tgllahir' => '1-jan-1996', 'salary' => '6'],
        '11356' => ['kelas' => 'Teknik Informatika', 'angkatan' => '2016','wali' => 'Ayah Irfan', 'tgllahir' => '1-nov-1997', 'salary' => '6'],
        '11257' => ['kelas' => 'Sistem Informasi', 'angkatan' => '2016','wali' => 'Ayah Deni', 'tgllahir' => '1-des-1997' , 'salary' => '6'],
        '11658' => ['kelas' => 'Teknik Informatika', 'angkatan' => '2016','wali' => 'Ayah Dina', 'tgllahir' => '1-jul-1996',  'salary' => '6'],
    ];

    public static function get_nim(){
        return self::$nim;
    }
}
?>