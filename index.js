function getPeople()
{
    xmlhttp = new XMLHttpRequest();
    xmlhttp.open("GET", "getpeople.php", false);
    xmlhttp.send(null);
    document.getElementById("datalist").innerHTML = xmlhttp.responseText;
}

function getOrganisations()
{
    xmlhttp = new XMLHttpRequest();
    xmlhttp.open("GET", "getorganisations.php", false);
    xmlhttp.send(null);
    document.getElementById("datalist").innerHTML = xmlhttp.responseText;
}

function getNewContactForm(){
    xmlhttp = new XMLHttpRequest();
    xmlhttp.open("GET", "getnewcontactform.php", false);
    xmlhttp.send(null);
    document.getElementById("info").innerHTML = xmlhttp.responseText;
}

function getNewOrganisationForm(){
    xmlhttp = new XMLHttpRequest();
    xmlhttp.open("GET", "getneworganisationform.php", false);
    xmlhttp.send(null);
    document.getElementById("info").innerHTML = xmlhttp.responseText;
}

function getPersonDetails(id){
    xmlhttp = new XMLHttpRequest();
    xmlhttp.open("GET", "getExistingPersonForm.php?id=" + id, false);
    xmlhttp.send(null);
    document.getElementById("info").innerHTML = xmlhttp.responseText;
}

function getOrganisationDetails(id){
    xmlhttp = new XMLHttpRequest();
    xmlhttp.open("GET", "getExistingOrganisationForm.php?id=" + id, false);
    xmlhttp.send(null);
    document.getElementById("info").innerHTML = xmlhttp.responseText;
}



