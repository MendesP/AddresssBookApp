<?php
    //READ DATA
    $data = array();
    $file = fopen("data/organisations.csv","r");

    while(! feof($file)){
        array_push($data, fgetcsv($file, 0, ",", "'"));
    }
    fclose($file);

    //WRITE LIST
    foreach($data as $organisation){
        if (isset($organisation[0])){
            echo "<li id='" . $organisation[0] . "' onclick='getOrganisationDetails(this.id)'>" . $organisation[1] . "</li>";
        }
    }
?>