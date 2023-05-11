<?php include('./academic.php') ?>
<?php include('./imsorry.php') ?>

<?php 
$siswa = [
    ['Nama' => 'Irfan', 'Foto' => 'foto/irfan.jpg', 'Alamat' => 'Magelang' , 'Nim' => '11356'],
    ['Nama' => 'Sarif', 'Foto' => 'foto/sarif.jpg', 'Alamat' => 'Kerawang' , 'Nim' => '11256'],
    ['Nama' => 'Deni', 'Foto' => 'foto/deni.jpg', 'Alamat' => 'Grobogan' , 'Nim' => '11257'],
    ['Nama' => 'Lastri', 'Foto' => 'foto/lastri.jpg', 'Alamat' => 'Jepara' , 'Nim' => '11400'],
];
?>




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
        <?php foreach ($nim as $key => $value) :?>
        <?php foreach($value as $key_value => $val):?>
        <?php foreach ($siswa as $key_sis => $val_sis) :?>
        <tr>
            <?php if ($val_sis['Nim'] == $key_value) {?>
            <td><?= $val_sis['Nama']; ?></td>
            <td> <?php if ( $val_sis['Foto'] == null) {
                echo '<img src="foto/smile/smile.jpg" width="70" height="90" />';
                }else{
                    echo '<img src="'.$val_sis['Foto'].'" width="70" height="90" />';
                } ?> </td>
            <td><?= $val_sis['Alamat']; ?></td>
            <td><?= $val_sis['Nim']; ?></td>
            <td><?= $val['Kelas']; ?></td>
            <td><?= $val['Angkatan']; ?></td>
            <td><?= $val['Wali']; ?></td>
            <?php } ?>
        </tr>
        <?php endforeach; ?>
        <?php endforeach; ?>
        <?php endforeach; ?>
    </tbody>
</table>