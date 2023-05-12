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

      orgAlert(args + " " + result[1]);
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
    <title>Reflected1</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body style="padding: 20px">

  <h1>Reflected XSS</h1>
    <div id="info">
      <p>
        This input field has no filtering at all, everything you input will be reflected.
      </p>
    </div>

  <div>
      <?php
      if (isset($_GET['submit1'])){
        echo "Sorry ".$_GET['level_one']." was not found.".'<br />';
      }
      ?>
      <form id="form1" action="" method="GET">
        <input type="text" name="level_one" value="">
        <input type="submit" name="submit1" value="Search">
      </form>
    </div>
    <script src="myScript.js"></script
  </body>
</html>
