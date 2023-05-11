<?php $data = [ 
    [ 'kota' => 'Jakarta' ,'sales' => 'Mr 1' , 'income' => '100'],
    [ 'kota' => 'Jakarta' ,'sales' => 'Mr d' , 'income' => '200'],
    [ 'kota' => 'Jakarta' ,'sales' => 'Mr c' , 'income' => '300'],
    [ 'kota' => 'Jogja' ,'sales' => 'Mr x' , 'income' => '400'],
    [ 'kota' => 'Jogja' ,'sales' => 'Mr y' , 'income' => '500'],
    [ 'kota' => 'Semarang' ,'sales' => 'Mr 2' , 'income' => '600'],
    [ 'kota' => 'Bandung' ,'sales' => 'Mr u' , 'income' => '600'],
    [ 'kota' => 'Bandung' ,'sales' => 'Mr n' , 'income' => '700'],
    [ 'kota' => 'Bandung' ,'sales' => 'Mr b' , 'income' => '800'],
    ] ?>


<?php $kota = '' ?>
<style>
table,
td,
th {
    border: 1px solid;

}
</style>
<?php 
foreach ($data as $key => $value) {
    if ($kota != $value['kota']) {
        $kota = $value['kota'];
        echo '<h1>'.$kota.'</h1>
        <table>
                <thead>
                        <tr>
                                <th>Kota</th>
                                <th>Sales</th>
                                <th>Income</th>
                        </tr>
                </thead>
                <tbody>
        ';
    }
    echo ' <tr>';
                            foreach ($value as $k => $v) {
                               echo "<td>$v</td>";
                            }
      echo'</tr>' ;
           if (isset($data[$key+1]['kota'])) {
                if ($kota != $data[$key+1]['kota'] || $kota == '' ) {
                        echo '</tbody>
                        </table>
                        ';
                    }
           }
}

?>