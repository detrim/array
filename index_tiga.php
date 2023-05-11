<?php
$hasil_s=
[
    [ 'tgl'=>'01-01-2023', 'sales'=>[
        ['nama'=> 'agus',  'buah'=>[ 'pisang', 'durian' ] ],
        ['nama'=> 'budi',  'buah'=>[ 'mangga'] ],
    ],
    ],

    [ 'tgl'=>'05-01-2023', 'sales'=>[
        ['nama'=> 'agus',  'buah'=>[  'jeruk']  ],
        ['nama'=> 'budi',  'buah'=>[ 'mangga'] ],
    ],
    ],

    [ 'tgl'=>'03-01-2023', 'sales'=>[
        ['nama'=> 'agus',  'buah'=>[  'pisang'] ],
        ],
    ],
    [ 'tgl'=>'04-01-2023', 'sales'=>[
        ['nama'=> 'budi',  'buah'=>[  'jeruk'] ],
    ],
    ],
    [ 'tgl'=>'06-01-2023', 'sales'=>[
        ['nama'=> 'budi',  'buah'=>[ 'mangga', 'jeruk'] ],
],

],
]

?>
<?php echo '<prev>';  print_r($hasil_s[0][0]) ?>



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

<?php $tgl = [] ?>

<?php foreach($hasil as $key => $new) 
{
    $tgl[] = $new['tgl'];
}
?>
<?php $hasil_tgl = array_unique($tgl); ?>

<?php foreach ($hasil_tgl as $key1 => $value1)  {?>
<table class="table" style="margin-bottom:10px;">
    <thead>
        <label> <strong> <?= $value1; ?> </strong> </label>
        <tr>
            <th>Sales</th>
            <th>Buah</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($hasil as $key => $value)  {?>
        <?php if ($value['tgl'] == $value1 ) { ?>
        <tr>
            <td><?= $value['nama']; ?></td>
            <td><?= $value['buah']; ?></td>
        </tr>
        <?php }?>
        <?php }?>
    </tbody>
</table>
<?php }?>