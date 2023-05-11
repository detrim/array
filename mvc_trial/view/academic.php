<?php foreach ($nim_if as $key_siswa => $value_siswa) : ?>
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