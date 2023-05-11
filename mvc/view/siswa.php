<table border="1" width="300px">
    <thead align="left">
        <tr>
            <th width="100px">Nim
            <td><?= $value_siswa['nim']; ?></td>
            </th>
        </tr>
        <tr>
            <th width="100px">Nama
            <td><?= $value_siswa['nama']; ?></td>
            </th>
        </tr>
        <tr>
            <th width="100px">Foto
            <td><?php if ( $value_siswa['foto'] == null ) {
                echo '<img src="./photo/smile/smile.jpg" width="70" height="90" />';
                }else{
                    echo '<img src="'.$value_siswa['foto'].'" width="70" height="90" />';
                } ?></td>
            </th>
        </tr>
        <tr>
            <th width="100px">Alamat
            <td><?= $value_siswa['alamat']; ?></td>
            </th>
        </tr>
        </tr>
    </thead>
</table>
<br>