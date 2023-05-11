<?php include('./academic.php') ?>
<?php 
$siswa = [
    ['Nama' => 'Irfan', 'Foto' => 'foto/irfan.jpg', 'Alamat' => 'Magelang' , 'Nim' => '11356'],
    ['Nama' => 'Sarif', 'Foto' => 'foto/sarif.jpg', 'Alamat' => 'Kerawang' , 'Nim' => '11256'],
    ['Nama' => 'Deni', 'Foto' => 'foto/deni.jpg', 'Alamat' => 'Grobogan' , 'Nim' => '11257'],
    ['Nama' => 'Lastri', 'Foto' => '', 'Alamat' => 'Jepara' , 'Nim' => '11400'],
]
?>
<h1>Data Siswa Lengkap</h1>
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
        <?php foreach ($siswa as $key_siswa => $value_siswa) : ?>
        <?php if (isset($nim[$value_siswa['Nim']])) { ?>
        <tr>
            <td> <?= $value_siswa['Nama']; ?> </td>
            <td> <?php if ( $value_siswa['Foto'] == null ) {
                echo '<img src="foto/smile/smile.jpg" width="70" height="90" />';
                }else{
                    echo '<img src="'.$value_siswa['Foto'].'" width="70" height="90" />';
                } ?> </td>
            <td> <?= $value_siswa['Alamat']; ?> </td>
            <td> <?= $value_siswa['Nim']; ?> </td>
            <td> <?= $nim[$value_siswa['Nim']]['Kelas']; ?> </td>
            <td> <?= $nim[$value_siswa['Nim']]['Angkatan']; ?> </td>
            <td> <?= $nim[$value_siswa['Nim']]['Wali']; ?> </td>
            <?php } ?>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php include('./imsorry.php') ?>