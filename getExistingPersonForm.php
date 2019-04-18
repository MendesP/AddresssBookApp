<?php

    if(!isset($id)){
       if(isset($_GET["id"])){
           $id = $_GET["id"];
       }
    }


    if(isset($id)){

        //READ PERSON DATA
        $file = fopen("data/people.csv","r");
        $contact;


        while(! feof($file)){
            $line = fgetcsv($file, 0, ",", "'");
            if($line[0] == $id){
                $contact = $line;
                break;
            }
        }
   
        if(isset($contact)){
            echo "<form action='editPersonDetails.php' method='get'>";
            echo "<h2 id=info_title>EXISTING CONTACT</h2>";

            echo "<label id='lbl_organisations' for='organisation'>Organisation:</label>";
            echo "<select name='organisation' class='input_field'>";

            //READ DATA
            $file = fopen("data/organisations.csv","r");

            while(! feof($file)){
                $organisation = fgetcsv($file, 0, ",", "'");
                if (isset($organisation)){
                    if(strcmp($organisation[1], $contact[10]) == 0){
                        echo "<option value='" . $organisation[1] . "' selected>" . $organisation[1] . "</option>";
                    }
                    else{
                        echo "<option value='" . $organisation[1] . "'>" . $organisation[1] . "</option>";
                    }
                }
            }

            fclose($file);
            echo "</select>";


            echo "<label id='lbl_fname' for='fname'>First name:</label>";
            echo "<label id='lbl_surname' for='surname'>Surname:</label>";
            echo "<input name='fname' id='fname' class='input_field' placeholder='First name' value='" . $contact[1] . "'>";
            echo "<input name='surname' id='surname' class='input_field' placeholder='Surname' value='" . $contact[2] . "'>";
            echo "<label id='lbl_address' for='address'>Address:</label>";
            echo "<label id='lbl_city' for='city'>City:</label>";
            echo "<label id='lbl_postcode' for='postcode'>Postcode:</label>";
            echo "<input name='address' id='address' class='input_field' placeholder='Street address' value='" . $contact[4] . "'>";
            echo "<input name='city' id='city' class='input_field' placeholder='City' value='" . $contact[5] . "'>";
            echo "<input name='postcode' id='postcode' class='input_field' placeholder='Postcode' value='" . $contact[6] . "'>";
            echo "<label id='lbl_email' for='email'>Email:</label>";
            echo "<label id='lbl_wphone' for='wphone'>Work phone:</label>";
            echo "<label id='lbl_mphone' for='mphone'>Mobile phone:</label>";
            echo "<input name='email' id='email' class='input_field' placeholder='Email address' value='" . $contact[3] . "'>";
            echo "<input name='wphone' id='wphone' class='input_field' placeholder='Work phone' value='" . $contact[7] . "'>";
            echo "<input name='mphone' id='mphone' class='input_field' placeholder='Mobile phone' value='" . $contact[8] . "'>";
            echo "<label for='notes'>Contact notes:</label>";
            echo "<textarea name='notes' rows='3' cols='50'>" . $contact[9] . "</textarea>";


            echo "<input type='hidden' name='id' value='". $contact[0] ."' />";

            echo "<input type='submit' value='Save changes' id='btn_save'>";

            
            echo "</form>";

            echo "<a  id='btn_deleteContact' href='deleteContact.php?id=". $contact[0] ."'>Delete contact</a>";

        }
    }
    
?>