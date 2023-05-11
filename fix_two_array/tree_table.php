<?php $loop = [ 
    [ 'tgl' => '1-mei-2023' ,'nama' => 'Irfan' , 'items' => 'Banana' , 'solds' => '2'],
    [ 'tgl' => '4-mei-2023' ,'nama' => 'Deni' , 'items' => 'Banana' , 'solds' => '10'],
    [ 'tgl' => '7-mei-2023' ,'nama' => 'Rizky' , 'items' => 'Rice' , 'solds' => '2'],
    [ 'tgl' => '11-mei-2023' ,'nama' => 'Yulian' , 'items' => 'Buku' , 'solds' => '4'],
    [ 'tgl' => '7-mei-2023' ,'nama' => 'Rizky' , 'items' => 'Rica' , 'solds' => '2'],
    [ 'tgl' => '12-mei-2023' ,'nama' => 'Yulian' , 'items' => 'Buku' , 'solds' => '2'],
    [ 'tgl' => '1-mei-2023' ,'nama' => 'Irfan' , 'items' => 'Rice' , 'solds' => '1'],
    [ 'tgl' => '11-mei-2023' ,'nama' => 'Irfan' , 'items' => 'Rice' , 'solds' => '1'],
    [ 'tgl' => '4-mei-2023' ,'nama' => 'Irfan' , 'items' => 'Rice' , 'solds' => '4'],
    [ 'tgl' => '1-mei-2023' ,'nama' => 'Sarif' , 'items' => 'Rice' , 'solds' => '2'],
    [ 'tgl' => '4-mei-2023' ,'nama' => 'Sarif' , 'items' => 'Rice' , 'solds' => '5'],
    [ 'tgl' => '1-mei-2023' ,'nama' => 'Irfan' , 'items' => 'Rice' , 'solds' => '3'],
    [ 'tgl' => '1-mei-2023' ,'nama' => 'Deni' , 'items' => 'Rice' , 'solds' => '1'],
    ] ?>


<?php 
    $date=[]; 
    $array = [];
    foreach ($loop as $key => $value) {
            if (!in_array($value['tgl'],$date) || in_array($value['tgl'],$date)) {
                $date[$value['tgl']] = $value['tgl'];
                $array[$date[$value['tgl']]]['sales'][]=['nama' => $value['nama'], 'item' => $value['items'],'solds' => $value['solds']];
            }  
        }
        echo '<pre>';
        print_r($array);
        $arr = $array;    
?>

<table border="1">
    <thead>
        <tr>
            <th>Tanggal</th>
            <th>Nama</th>
            <th>Item</th>
            <th>Solds</th>
        </tr>
    </thead>
    <tbody>
        <?php 
        $count = '';
        foreach ($arr as $key => $value) :
        $count =  count($value['sales']);
?>
        <tr>
            <td rowspan="<?= $count ?>"><?= $key; ?></td>
            <?php foreach ($value['sales'] as $key_sales => $value_sales) :?>
            <td><?= $value_sales['nama']; ?></td>
            <td><?= $value_sales['item']; ?></td>
            <td><?= $value_sales['solds']; ?></td>
        </tr>
        <?php endforeach; ?>
        <?php endforeach; ?>
    </tbody>
</table>