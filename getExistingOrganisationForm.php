<?php



if(!isset($id)){
    if(isset($_GET["id"])){
        $id = $_GET["id"];
    }
 }


 if(isset($id)){

     //READ PERSON DATA
     $file = fopen("data/organisations.csv","r");
     $organisation;


     while(! feof($file)){
         $line = fgetcsv($file, 0, ",", "'");
         if($line[0] == $id){
             $organisation = $line;
             break;
         }
     }

     fclose($file);

     if(isset($organisation)){


        echo "<h2 id='info_title'>EXISTING ORGANISATION</h2>";
        echo "<form action='editOrganisationDetails.php' method='get'>";
        echo "<label id='lbl_oname' for='oname'>Organisation name:</label><br>";
        echo "<input name='oname' id='oname' class='input_field' placeholder='Organisation name' value='" . $organisation[1] . "'><br>";
        echo "<label id='lbl_oaddress' for='oaddress'>Address:</label>";
        echo "<label id='lbl_ocity' for='ocity'>City:</label>";
        echo "<label id='lbl_opostcode' for='opostcode'>Postcode:</label><br>";
        echo "<input name='oaddress' id='oaddress' class='input_field' placeholder='Street address' value='".$organisation[3]  ."'>";
        echo "<input name='ocity' id='ocity' class='input_field' placeholder='City' value='" . $organisation[4]  . "'>";
        echo "<input name='opostcode' id='opostcode' class='input_field' placeholder='Postcode' value='". $organisation[5] ."'><br>";
        echo "<label id='lbl_oemail' for='oemail'>Email:</label>";
        echo "<label id='lbl_phone' for='oemail'>Phone:</label><br>";
        echo "<input name='email' id='email' class='input_field' placeholder='Email address' value='". $organisation[2] ."'>";
        echo "<input name='phone' id='phone' class='input_field' placeholder='Organisation phone' value='". $organisation[6] ."'><br>";


        echo "<input type='hidden' name='id' value='". $organisation[0] ."'/>";
        echo "<input type='submit' value='Save changes' id='btn_save'>";
        echo "</form>";

        echo "<a  id='btn_deleteContact' href='deleteOrganisation.php?id=". $organisation[0] ."'>Delete organisation</a>";

     }
 }






?>