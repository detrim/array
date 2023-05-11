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
    $date=[]; 
    // foreach ($loop as $key_loop => $looping) {
    //     if (!in_array($looping['tgl'],$date)) {
    //         $date[] = $looping['tgl'];
    //     }
    // } 
    // var_dump($date);
    // $tgl = array_unique($date);
    $array = [];
    foreach ($loop as $key => $value) {
        if (!in_array($value['tgl'],$date)) {
            $date[] = $value['tgl'];
        }
    // $tgl = array_unique($value['tgl']);
        // var_dump($tgl);
        foreach ( $date as $key_distinct => $distinct) {
                if ($value['tgl']==$distinct) {
                    $array[$key_distinct]['tgl'] = $distinct;
                    $array[$key_distinct]['sales'][]=[ 'nama' =>
                        $value['nama'], 'item' => $value['items'],'solds' => $value['solds']
                    ];
                }
            }
        }
        echo '<pre>';
        print_r($array);

?>