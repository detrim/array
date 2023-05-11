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


<?php $kota = '' ?>
<?php 
foreach ($data as $key => $value) {
    if ($kota == $value['kota']) {
       echo '<span>'.$value['sales'].'</span>  <span>'.$value['income'].'</span> <br>' ;
    } else {
        $kota = $value['kota'];
        echo '<h1>'.$kota.'</h1>';
        echo '<span>'.$value['sales'].'</span>  <span>'.$value['income'].'</span> <br>' ;
    }
    
}

?>