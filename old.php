<?php foreach ($nim_if as $key_siswa => $value_siswa) : ?>
<table border="1" width="400px">
    <thead>
        <tr>
            <th>Nama</th>
            <th>Foto</th>
            <th>Alamat</th>
            <th>Nim</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><?= $value_siswa['nama']; ?></td>
            <td><?php if ( $value_siswa['foto'] == null ) {
                echo '<img src="./photo/smile/smile.jpg" width="70" height="90" />';
                }else{
                    echo '<img src="'.$value_siswa['foto'].'" width="70" height="90" />';
                } ?></td>
            <td><?= $value_siswa['alamat']; ?></td>
            <td><?= $value_siswa['nim']; ?></td>
        </tr>
    </tbody>
</table>
<br>
<table border="1" width="400px">
    <thead>
        <tr>
            <th>Kelas</th>
            <th>Angkatan</th>
            <th>Wali</th>
            <th>Tanggal Lahir</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><?= $value_siswa['kelas']; ?></td>
            <td><?= $value_siswa['angkatan']; ?></td>
            <td><?= $value_siswa['wali']; ?></td>
            <td><?= $value_siswa['tgllahir']; ?></td>
        </tr>
    </tbody>
</table>
<br>
<br>
<?php endforeach; ?>