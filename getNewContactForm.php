<H2 id=info_title>NEW CONTACT</H2>

<form action='addNewContact.php' method='get'>
    <label id='lbl_organisations' for='organisation'>Organisation:</label>
    <select name='organisation' class='input_field'>

<?php
//READ DATA
$file = fopen("data/organisations.csv","r");

while(! feof($file)){
    $organisation = fgetcsv($file, 0, ",", "'");
    if (isset($organisation)){
        echo "<option value='" . $organisation[1] . "'>" . $organisation[1] . "</option>";
    }
}
fclose($file);
?>

        <option value='None' selected>None</option>
    </select>
    <label id='lbl_fname' for='fname'>First name:</label>
    <label id='lbl_surname' for='surname'>Surname:</label>
    <input name='fname' id='fname' class='input_field' placeholder='First name'>
    <input name='surname' id='surname' class='input_field' placeholder='Surname'>
    <label id='lbl_address' for='address'>Address:</label>
    <label id='lbl_city' for='city'>City:</label>
    <label id='lbl_postcode' for='postcode'>Postcode:</label>
    <input name='address' id='address' class='input_field' placeholder='Street address'>
    <input name='city' id='city' class='input_field' placeholder='City'>
    <input name='postcode' id='postcode' class='input_field' placeholder='Postcode'>
    <label id='lbl_email' for='email'>Email:</label>
    <label id='lbl_wphone' for='wphone'>Work phone:</label>
    <label id='lbl_mphone' for='mphone'>Mobile phone:</label>
    <input name='email' id='email' class='input_field' placeholder='Email address'>
    <input name='wphone' id='wphone' class='input_field' placeholder='Work phone'>
    <input name='mphone' id='mphone' class='input_field' placeholder='Mobile phone'>
    <label for='notes'>Contact notes:</label>
    <textarea name='notes' rows='3' cols='50'></textarea>


    <input type='submit' value='Add contact' id='btn_save'>
</form>

