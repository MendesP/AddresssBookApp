<?php

if(isset($_GET)){
    $data = array();

    $file = fopen("data/organisations.csv","r");
    $id;
    while( false !== ( $line = fgetcsv($file, 0, ",", "'"))){
        $id = $line[0];
    }
    //NEW ID
    $data[0] = $id + 1;

    $data[1] = $_GET["oname"];
    $data[2] = $_GET["oaddress"];
    $data[3] = $_GET["ocity"];
    $data[4] = $_GET["opostcode"];
    $data[5] = $_GET["email"];
    $data[6] = $_GET["phone"];

    fclose($file);

    $file = fopen("data/organisations.csv","a");
    fputcsv($file, $data, ",","'");
    fclose($file);

    header("Location: index.php");
}

?>