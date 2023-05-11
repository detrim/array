<?php foreach ($value_siswa as $key => $value) {
    $$key = $value;
    // var_dump($foto);
} ?>
<?php 
$urutan = ['rudi', 'wati', 'dona', 'budi'];

foreach ($urutan as $key => $value) {
    $$value =$key*100;
}
?>
<?= $rudi; ?>
<?= $wati; ?>
<?= $dona; ?>
<?= $budi; ?>
<table border="1" width="300px">
    <thead align="left">
        <tr>
            <th width="100px">Nim
            <td><?= $nim; ?></td>
            </th>
        </tr>
        <tr>
            <th width="100px">Nama
            <td><?= $nama; ?></td>
            </th>
        </tr>
        <tr>
            <th width="100px">Foto
                <?= file_exists($foto); ?>
            <td><?php if ( file_exists($foto)  ) {
                echo '<img src="'.$foto.'" width="70" height="90" />';
                }else{
                    echo '<img src="./photo/smile/smile.jpg" width="70" height="90" />';  
                } ?></td>
            </th>
        </tr>
        <tr>
            <th width="100px">Alamat
            <td><?= $alamat; ?></td>
            </th>
        </tr>
        </tr>
    </thead>
</table>
<br>