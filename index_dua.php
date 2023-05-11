<?php $data = [ 
    [ 'kota' => 'Jakarta' ,'sales' => 'Mr 1' , 'income' => '100'],
    [ 'kota' => 'Jakarta' ,'sales' => 'Mr d' , 'income' => '200'],
    [ 'kota' => 'Jakarta' ,'sales' => 'Mr c' , 'income' => '300'],
    [ 'kota' => 'Jogja' ,'sales' => 'Mr x' , 'income' => '400'],
    [ 'kota' => 'Jogja' ,'sales' => 'Mr y' , 'income' => '500'],
    [ 'kota' => 'Semarang' ,'sales' => 'Mr 2' , 'income' => '600'],
    [ 'kota' => 'Bandung' ,'sales' => 'Mr u' , 'income' => '600'],
    [ 'kota' => 'Bandung' ,'sales' => 'Mr n' , 'income' => '700'],
    ] ?>

<?php $kota = [] ?>

<?php foreach($data as $key => $new) 
{
    $kota[] = $new['kota'];
}
?>
<?php $data_kota = array_unique($kota); ?>

<!-- hasil -->
<style>
table,
td,
th {
    border: 1px solid;
    width: 200px;
}
</style>
<?php foreach ($data_kota as $key_kota => $value_kota)  {?>
<table>
    <thead>
        <label> <strong> <?= $value_kota; ?> </strong> </label>
        <tr>
            <th>Sales</th>
            <th>Income</th>
        </tr>
    </thead>
    <tbody>
    <tbody>
        <?php foreach ($data as $key => $value)  {?>
        <?php if ($value['kota'] == $value_kota ) { ?>
        <tr>
            <td><?= $value['sales']; ?></td>
            <td><?= $value['income']; ?></td>
        </tr>
        <?php }?>
        <?php }?>
    </tbody>
</table>
<?php }?>