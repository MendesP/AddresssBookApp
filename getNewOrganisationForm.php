
<h2 id='info_title'>NEW ORGANISATION</h2>
<form action="addNewOrganisation.php" method="get">
    <label id='lbl_oname' for='oname'>Organisation name:</label><br>
    <input name='oname' id='oname' class='input_field' placeholder='Organisation name'><br>
    <label id='lbl_oaddress' for='oaddress'>Address:</label>
    <label id='lbl_ocity' for='ocity'>City:</label>
    <label id='lbl_opostcode' for='opostcode'>Postcode:</label><br>
    <input name='oaddress' id='oaddress' class='input_field' placeholder='Street address'>
    <input name='ocity' id='ocity' class='input_field' placeholder='City'>
    <input name='opostcode' id='opostcode' class='input_field' placeholder='Postcode'><br>
    <label id='lbl_oemail' for='oemail'>Email:</label>
    <label id='lbl_phone' for='oemail'>Phone:</label><br>
    <input name='email' id='email' class='input_field' placeholder='Email address'>
    <input name='phone' id='phone' class='input_field' placeholder='Organisation phone'><br>
    <input type='submit' value='Add organisation' id='btn_save'>
</form>

