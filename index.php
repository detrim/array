<?php $data = [ 
    [ 'tgl' => '1-mei-2023' ,'nama' => 'Irfan' , 'items' => 'Banana' , 'solds' => '2'],
    [ 'tgl' => '4-mei-2023' ,'nama' => 'Deni' , 'items' => 'Banana' , 'solds' => '10'],
    [ 'tgl' => '7-mei-2023' ,'nama' => 'Rizky' , 'items' => 'Rice' , 'solds' => '2'],
    [ 'tgl' => '10-mei-2023' ,'nama' => 'Yulian' , 'items' => 'Buku' , 'solds' => '4'],
    [ 'tgl' => '11-mei-2023' ,'nama' => 'Rizky' , 'items' => 'Rica' , 'solds' => '2'],
    [ 'tgl' => '12-mei-2023' ,'nama' => 'Yulian' , 'items' => 'Buku' , 'solds' => '2'],
    [ 'tgl' => '1-mei-2023' ,'nama' => 'Irfan' , 'items' => 'Rice' , 'solds' => '1'],
    ] ?>


<?php foreach($data as $key => $new) 
{
    $tgl[] = $new['tgl'];
}
?>
<?php $data_tgl = array_unique($tgl); ?>

<!-- hasil -->
<style>
table,
td,
th {
    border: 1px solid;
}
</style>
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
        <?php foreach ($data as $key => $value)  {?>
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