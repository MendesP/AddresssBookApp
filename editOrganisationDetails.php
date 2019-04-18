<?php
    if(isset($_GET)){
        $data = array();
    
        $data[0] = $_GET["id"];
        $data[1] = $_GET["oname"];
        $data[2] = $_GET["email"];
        $data[3] = $_GET["oaddress"];
        $data[4] = $_GET["ocity"];
        $data[5] = $_GET["opostcode"];
        $data[6] = $_GET["phone"];
    
    
        $file = fopen("data/organisations.csv","r");
        $newfile = fopen("data/new.csv", "w");
    

        $old_org_name;

        while( false !== ( $line = fgetcsv($file, 0, ",", "'"))){
            if($line[0] == $data[0]){
                $old_org_name = $line[1];
                fputcsv($newfile, $data, ",","'");
            }
            else{
                fputcsv($newfile, $line, ",", "'");
            }
        }
    
        fclose($file);
        fclose($newfile);
    
        unlink('data/organisations.csv');
        rename('data/new.csv', 'data/organisations.csv'); 
    

        //CHANGE ORGANISATION NAME IN PEOPLE.CSV
        if(isset($old_org_name)){
            $file = fopen("data/people.csv","r");
            $newfile = fopen("data/new.csv", "w");

            while( false !== ( $line = fgetcsv($file, 0, ",", "'"))){
                if($line[10] == $old_org_name){
                    $line[10] = $data[1];
                    fputcsv($newfile, $line, ",","'");
                }
                else{
                    fputcsv($newfile, $line, ",", "'");
                }
            }

            unlink('data/people.csv');
            rename('data/new.csv', 'data/people.csv'); 
        }
        

        header("Location: index.php");
    
    }



?>