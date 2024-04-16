<?php

$sql = 'SELECT * FROM voyage WHERE YEAR(occured_on) = ' . $year;
$statement = $pdo->query($sql);
$results = $statement->fetchAll();

?>
<h2><?php echo $year;?></h2>
<!-- First Photo Grid-->
<div class="w3-row-padding w3-padding-16 w3-center" id="food">
    <?php
    for ($i = 0; $i < 4; ++$i) {
        echo '<div class="w3-quarter">
        <img src="https://picsum.photos/200/300?random='.$i.'" alt="Sandwich" style="width:100%">
        <h3>' . $results[$i]['label'] . '</h3>
        <p>' . $results[$i]['description'] . '</p>
    </div>';
    }
    ?>
</div>

<!-- Second Photo Grid-->
<div class="w3-row-padding w3-padding-16 w3-center">
    <?php
    for ($i = 4; $i < 8; ++$i) {
        echo '<div class="w3-quarter">
        <img src="https://picsum.photos/200/300?random=' . $i . '" alt="Sandwich" style="width:100%">
        <h3>' . $results[$i]['label'] . '</h3>
        <p>' . $results[$i]['description'] . '</p>
    </div>';
    }
    ?>
</div>