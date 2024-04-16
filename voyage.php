<?php

$sql = 'SELECT * FROM voyage WHERE YEAR(occured_on) = ' . $year;
$statement = $pdo->query($sql);
$results = $statement->fetchAll();
?>

<h2><?php echo $year; ?></h2>
<?php
$i=0;
$max = count($results);
while($i < $max) {

    echo PHP_EOL.'<div class="w3-row-padding w3-padding-16 w3-center" id="food">';
    
    for ($j=0; $j<4; ++$j) {
        
        if($i >= $max) {
            continue;
        }

        $voyage = $results[$i];
        include('voyage_card.php');
        ++$i;
    }

    echo '</div>';
}
?>
