<?php $loop = [ 
    [ 'tgl' => '1-mei-2023' ,'nama' => 'Irfan' , 'items' => 'Banana' , 'solds' => '2'],
    [ 'tgl' => '4-mei-2023' ,'nama' => 'Deni' , 'items' => 'Banana' , 'solds' => '10'],
    [ 'tgl' => '7-mei-2023' ,'nama' => 'Rizky' , 'items' => 'Rice' , 'solds' => '2'],
    [ 'tgl' => '11-mei-2023' ,'nama' => 'Yulian' , 'items' => 'Buku' , 'solds' => '4'],
    [ 'tgl' => '7-mei-2023' ,'nama' => 'Rizky' , 'items' => 'Rica' , 'solds' => '2'],
    [ 'tgl' => '12-mei-2023' ,'nama' => 'Yulian' , 'items' => 'Buku' , 'solds' => '2'],
    [ 'tgl' => '1-mei-2023' ,'nama' => 'Irfan' , 'items' => 'Rice' , 'solds' => '1'],
    [ 'tgl' => '11-mei-2023' ,'nama' => 'Irfan' , 'items' => 'Rice' , 'solds' => '1'],
    ] ?>

<?php 
    foreach ($loop as $key_loop => $looping) {
        $date[] = $looping['tgl']; 
        $distinct = array_unique($date);
        $val_distinct = array_values($distinct);} 
        foreach ($loop as $key => $value) {
                var_dump($value['tgl']);
                if ($value['tgl']==$distinct) {
                    $array[]['tgl'][$distinct]['sales'][]=[
                        $value['nama'],$value['items'],$value['solds']
                    ];
                }
            }
            echo '<pre>';
            var_dump($array,$distinct);

?>