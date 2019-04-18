<?php
    //READ DATA
    $data = array();
    $file = fopen("data/people.csv","r");

    while(! feof($file)){
        array_push($data, fgetcsv($file, 0, ",", "'"));
    }
    fclose($file);

    //WRITE LIST
    foreach($data as $person){
        if (isset($person[0])){
            echo "<li id='" . $person[0] . "' onclick='getPersonDetails(this.id)'>" . $person[1] . " " . $person[2] ."</li></a>";
        }
    }
?>