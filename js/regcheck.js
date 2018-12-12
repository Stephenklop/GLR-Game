function validateForm() { return false;
  var teamName = document.forms["register"]["teamName"].value;
  var captain = document.forms["register"]["teamCaptain"].value;
  var teamlid1 = document.forms["register"]["teamLid1"].value;
  var teamlid2 = document.forms["register"]["teamLid2"].value;
  var teamlid3 = document.forms["register"]["teamLid3"].value;
  var teamlid4 = document.forms["register"]["teamLid4"].value;
  var logo = document.forms["register"]["logo"].value;
  var studnmr1 = document.forms["register"]["studnmr1"].value;
  var studnmr2 = document.forms["register"]["studnmr2"].value;
  var studnmr3 = document.forms["register"]["studnmr3"].value;
  var studnmr4 = document.forms["register"]["studnmr4"].value;
  var studnmr5 = document.forms["register"]["studnmr5"].value;
  var error = 0

  if(teamName == "") {
    window.alert("Vul een geldige team naam in!");
    document.getElementById('teamCaptain').classList.add("error");
    return false
  }

  if(captain == "") {
    window.alert("Vul een geldige captain naam in!");
    return false;
  }

  if(teamlid1 == "") {
    window.alert("Vul een geldige naam in!");
    return false;
  }

  if(teamlid2 == "") {
    window.alert("Vul een geldige naam in!");
    return false;
  }

  if(teamlid3 == "") {
    window.alert("Vul een geldige naam in!");
    return false;
  }

  if(teamlid4 == "") {
    window.alert("Vul een geldige naam in!");
    return false;
  }

  if(logo == "") {
    window.alert("Upload een geldig logo!");
    return false;
  }

  if(studnmr1 == "") {
    window.alert("Vul een geldige studentnummer in!");
    return false;
  }

  if(studnmr2 == "") {
    window.alert("Vul een geldige studentnummer in!");
    return false;
  }

  if(studnmr3 == "") {
    window.alert("Vul een geldige studentnummer in!");
    return false;
  }

  if(studnmr4 == "") {
    window.alert("Vul een geldige studentnummer in!");
    return false;
  }

  if(studnmr5 == "") {
    window.alert("Vul een geldige studentnummer in!");
    return false;
  }

}
