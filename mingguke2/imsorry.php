<?php include('./academic.php') ?>

<?php 
$siswa = [
    ['Nama' => 'Irfan', 'Foto' => 'foto/irfan.jpg', 'Alamat' => 'Magelang' , 'Nim' => '11356'],
    ['Nama' => 'Sarif', 'Foto' => 'foto/sarif.jpg', 'Alamat' => 'Kerawang' , 'Nim' => '11256'],
    ['Nama' => 'Deni', 'Foto' => 'foto/deni.jpg', 'Alamat' => 'Grobogan' , 'Nim' => '11257'],
    ['Nama' => 'Lastri', 'Foto' => '', 'Alamat' => 'Jepara' , 'Nim' => '11400'],
]
?>

<h1>Data Siswa Tidak Lengkap</h1>
<table border="1">
    <thead>
        <tr>
            <th>Nama</th>
            <th>Foto</th>
            <th>Alamat</th>
            <th>Nim</th>
            <th>Kelas</th>
            <th>Angkatan</th>
            <th>Wali</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($siswa as $key => $value) :?>
        <?php if (!isset($nim[$value['Nim']])) { ?>
        <tr>
            <td> <?= $value['Nama']; ?> </td>
            <td> <?php if( $value['Foto'] == null) {
                    echo '<img src="foto/smile/smile.jpg" width="70" height="90" />';
                    }else{
                        echo '<img src="'.$value['Foto'].'" width="70" height="90" />';
                    } ?> </td>
            <td> <?= $value['Alamat']; ?> </td>
            <td> <?= $value['Nim']; ?> </td>
            <td colspan="3"> Maaf data belum di input </td>
        </tr>
        <?php } ?>
        <?php endforeach; ?>
    </tbody>
</table>