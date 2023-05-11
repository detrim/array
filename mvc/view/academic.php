<table border="1" width="300px">
    <thead>
        <?php foreach ($nim[$value_siswa['nim']] as $key_nim => $value_nim) : ?>
        <tr align="left">
            <th style="text-transform: capitalize;"><?= $key_nim; ?>
            <td><?= $value_nim; ?></td>
            </th>
        </tr>
        <?php endforeach; ?>
    </thead>
</table>
<br>
<br>