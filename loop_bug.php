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
$date = [];
        foreach ($loop as $key => $value) {
            if (!in_array($value['tgl'],$date)) {
                $date[] = $value['tgl'];
            } 
        }   
    print_r(array_values($date));

        $date_distinct = array_values($date);
        // echo '<h1>'.$date_distinct.'</h1>';
                  
        foreach ( $date as $key_distinct => $distinct) {
            // echo '<h1>'.$distinct.'</h1>
            // <table>
            //     <thead>
            //             <tr>
            //                     <th>Nama</th>
            //                     <th>Items</th>
            //                     <th>Solds</th>
            //             </tr>
            //     </thead>
            //     '; 
                if ($value['tgl']==$distinct) {
                    echo '
                    <tbody>
                    <tr>
                            <td>'.$value['nama'].'</td>
                            <td>'.$value['items'].'</td>
                            <td>'.$value['solds'].'</td>
                    </tr>
                    ';
                } 
            }
            echo '
            </tbody>
            </table>
        ';
        //  }

?>