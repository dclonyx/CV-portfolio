<?php
if (isset($_GET["table"])){

    // echo '<h2>Table de ' . $_GET["table"]. ' :</h2>';

    $table = $_GET["table"];
    for ($x = 0; $x <= 30; $x++) {
        $total = $table * $x;
        echo $table. ' X ' . $x .' = '. $total.'<br>';
    }
}
?>