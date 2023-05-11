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
    $array = [];
    foreach ($loop as $key => $value) {
        if (!in_array($value['tgl'],$date)) {
            $date[$value['tgl']] = $value['tgl'];
            // $value_date = array_values($date);
            // echo $date;
            // exit;
        }
        
// var_dump($value['tgl']);
        if ($value['tgl']==$date[$value['tgl']] ) {
            // echo "data";
            // $value['sales'][]= $value;
                        // $array[$date[$value['tgl']] ]['tgl'] = $date[$value['tgl']] ;
                        $array[$date[$value['tgl']] ]['sales'][]=[ 'nama' => $value['nama'], 'item' => $value['items'],'solds' => $value['solds']];
                    }
                }
        // foreach ( $date as $key_distinct => $distinct) {
        //         if ($value['tgl']==$distinct) {
        //             $array[$key_distinct]['tgl'] = $distinct;
        //             $array[$key_distinct]['sales'][]=[ 'nama' =>
        //                 $value['nama'], 'item' => $value['items'],'solds' => $value['solds']
        //             ];
        //         }
        //     }
        // }
        // echo '<pre>';
        // print_r(array_values($date));
        // echo '<pre>';
        // var_dump( $date);
        // echo '<pre>';
        // print_r($date);
        echo '<pre>';
        print_r($array);

?>