<?php $hasil = [ 
    [ 'tgl' => '01-01-2023' ,'nama' => 'Agus' , 'buah' => 'Pisang' ],
    [ 'tgl' => '01-01-2023' ,'nama' => 'Budi' , 'buah' => 'Mangga' ],
    [ 'tgl' => '05-01-2023' ,'nama' => 'Agus' , 'buah' => 'Jeruk' ],
    [ 'tgl' => '03-01-2023' ,'nama' => 'Agus' , 'buah' => 'Pisang'],
    [ 'tgl' => '04-01-2023' ,'nama' => 'Budi' , 'buah' => 'Jeruk'],
    [ 'tgl' => '01-01-2023' ,'nama' => 'Agus' , 'buah' => 'Durian'],
    [ 'tgl' => '06-01-2023' ,'nama' => 'Budi' , 'buah' => 'Pisang'],
    [ 'tgl' => '06-01-2023' ,'nama' => 'Budi' , 'buah' => 'Mangga'],
    [ 'tgl' => '06-01-2023' ,'nama' => 'Budi' , 'buah' => 'Jeruk'],
    ] ?>

<?php 
    $tanggal = [];
    $output = [];

    foreach ($hasil as $key_hasil => $value_hasil) {
        if (!in_array($value_hasil['tgl'], $tanggal)) {
            $tanggal[] = $value_hasil['tgl'];
        }
        foreach ($tanggal as $key_tanggal => $tanggal_distinct) {
            if ($value_hasil['tgl'] == $tanggal_distinct) {
                $output[$key_tanggal]['tgl'] = $tanggal_distinct;
                $output[$key_tanggal]['sales'][] = ['nama' => $value_hasil['nama'], 'buah' => $value_hasil['buah']];
            }
        }
    }
    echo '<pre>';
    print_r($output);

    ?>