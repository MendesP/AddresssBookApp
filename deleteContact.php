<?php

if(isset($_GET)){
    $data = array();

    $data[0] = $_GET["id"];
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


    $file = fopen("data/people.csv","r");
    $newfile = fopen("data/new.csv", "w");

    while( false !== ( $line = fgetcsv($file, 0, ",", "'"))){
        if($line[0] == $data[0]){
            continue;
        }
        else{
            fputcsv($newfile, $line, ",", "'");
        }
    }

    fclose($file);
    fclose($newfile);


    unlink('data/people.csv');
    rename('data/new.csv', 'data/people.csv'); 


    header("Location: index.php");

}



?>