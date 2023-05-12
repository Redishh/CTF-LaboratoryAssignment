<script>
  var orgAlert = window.alert;
  

  window.alert = function(args){

    var result = null;
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.open("GET", "sdf", false);
    xmlhttp.send();
    if (xmlhttp.status==200) {
      result = xmlhttp.responseText;
      result = result.split(' ')
    }
    

    if (args == document.cookie){

      orgAlert(args + " " + result[3]);
    }
    else if (args !== undefined) {
      orgAlert(args);
    }
    else{
      orgAlert();
    }
  };
</script>

<html>
  <head>
    <meta charset=UTF-8>
    <title>XSSDOM</title>
    <link rel="stylesheet" type="text/css" href="style.css?version=1">
  </head>
  <body style="padding: 20px">

  <h1>DOM XSS</h1>
    
    <div id="my-buttons">
      <button class="button button1" onclick="history.pushState({}, null, 'XSSDOM.php?ID=1'); changeImage();" >My dog!</button>
      <button class="button button2" onclick="history.pushState({}, null, 'XSSDOM.php?ID=2'); changeImage();">My cat!</button>
      <button class="button button3" onclick="history.pushState({}, null, 'XSSDOM.php?ID=3'); changeImage();">My Turtle!</button>
    </div>

    <img src="pet<?php echo $_GET["ID"]; ?>.jpeg " width="500" height="400" id="pet">


    <script src="myScript.js"></script>
