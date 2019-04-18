<!DOCTYPE html>
<html>
    <head>
        <title>AddressBookApp.com</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <link rel="stylesheet" href="css/index.css">
        <script src="index.js" type="text/javascript"></script>
    </head>
    <body>
        <header class="w3-container">
            <h1> AddressBook.Com </h1>
        </Header>
        <div id="maincontainer" class="w3-container">
            <div id="data" class="w3-container">
                <div id="selection" class="w3-container">
                    <div id="selection1"><i class="fas fa-users" onclick="getPeople()"></i></div>
                    <div id="selection2"><i class="fas fa-building" onclick="getOrganisations()"></i></div>
                    <div id="selection3">PEOPLE</div>
                    <div id="selection4">ORGANISATIONS</div>
                </div>
                <ul id="datalist">
                    <?php include "getpeople.php"; ?>
                </ul>

                <button id="addcontact" onclick="getNewContactForm()">Add New Contact</button>
                <button id="addorganisation" onclick="getNewOrganisationForm()">Add New Organisation</button>
            </div>
            <div id="info">

                <?php include "getNewContactForm.php"; ?>

            </div>
        </div>
    </body>
</html>

