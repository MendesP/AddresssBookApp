<?php

if(isset($_GET)){
    $data = array();

    $file = fopen("data/people.csv","r");
    $id;
    while( false !== ( $line = fgetcsv($file, 0, ",", "'"))){
        $id = $line[0];
    }
    //NEW ID
    $data[0] = $id + 1;

    $data[1] = $_GET["fname"];
    $data[2] = $_GET["surname"];
    $data[3] = $_GET["email"];
    $data[4] = $_GET["address"];
    $data[5] = $_GET["city"];
    $data[6] = $_GET["postcode"];
    $data[7] = $_GET["wphone"];
    $data[8] = $_GET["mphone"];
    $data[9] = $_GET["notes"];
    $data[10] = $_GET["organisation"];

    fclose($file);

    $file = fopen("data/people.csv","a");
    fputcsv($file, $data, ",","'");
    fclose($file);

    header("Location: index.php");

}

?>