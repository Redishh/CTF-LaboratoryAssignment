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

      orgAlert(args + " " + result[2]);
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
    <title>Reflecteddoc</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body style="padding: 20px">

  <h1>Reflected XSS 2</h1>



    <?php
      if(isset($_GET['submit3'])){
        echo "<script>document.write('" . $_GET['level_three'] . "');</script>";
      }
    ?>

    <form action="" method="GET">
      <input type="text" id="level_three" name="level_three" value="">
      <input type="submit" name="submit3" value="Search">
    </form>

    <script src="myScript.js"></script>

  </body>
</html>
