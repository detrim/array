<?php 
class Siswa{
    public static $siswa = [
        ['nama' => 'Irfan', 'foto' => 'photo/irfan.jpg', 'alamat' => 'Magelang' , 'nim' => '11356'],
        ['nama' => 'Sarif', 'foto' => 'photo/sarif.jpg', 'alamat' => 'Kerawang' , 'nim' => '11256'],
        ['nama' => 'Deni', 'foto' => 'photo/deni.jpg', 'alamat' => 'Grobogan' , 'nim' => '11257'],
        ['nama' => 'Lastri', 'foto' => '', 'alamat' => 'Jepara' , 'nim' => '11400'],
    ];

    public static function get_siswa(){
        return self::$siswa;
    }
}

?>