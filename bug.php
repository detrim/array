<?php
$keys = array_keys($loop);
for($i = 0; $i < count($loop); $i++) {
    echo $keys[$i] . "{<br>";
    foreach($loop[$keys[$i]] as $key => $value) {
        echo $key . " : " . $value . "<br>";
    }
    echo "}<br>";
}
?>

<?php foreach($loop as $key => $new) { $tgl[] = $new['tgl']; } ?>
<?php $data_tgl = array_unique($tgl); ?>
<!-- hasil -->
<?php foreach ($data_tgl as $key_tgl => $value_tgl)  {?>
<table>
    <thead>
        <label> <strong> <?= $value_tgl; ?> </strong> </label>
        <tr>
            <th>Nama</th>
            <th>Items</th>
            <th>Solds</th>
        </tr>
    </thead>
    <tbody>
    <tbody>
        <?php foreach ($loop as $key => $value)  {?>
        <?php if ($value['tgl'] == $value_tgl ) { ?>
        <tr>
            <td><?= $value['nama']; ?></td>
            <td><?= $value['items']; ?></td>
            <td><?= $value['solds']; ?></td>
        </tr>
        <?php }?>
        <?php }?>
    </tbody>
</table>
<?php }?>