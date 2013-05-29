<!DOCTYPE html>

<html>
<head>
  <title>Stamm Galileo Galilei Messestadt-Riem</title>
  <meta name="author" content="Maxi Steidl">
  <link rel="stylesheet" href="../../css/design.css" type="text/css">
  <style type="text/css">
  .newsbox{
    height:              150px;
    width:               600px;
    border:              1px black dashed;
    display:             block;
    margin:              0 auto;
    margin-top:          30px;
    overflow:            auto;
  }

  .date{
    height:              30px;
    width:               100px;
    margin:              0;
    background:          none;
    text-align:          right;
    float:               right;
    font-size:           12px;
  }

  .text{
    margin:              0;
    margin-left:         3px;
  }

  h1{
    font-size:           19px;
    margin:              0;
    padding:             0;
  }
  </style>
</head>

<body oncontextmenu="return false" onselectstart="return false" ondragstart="return false">
<div id="content">
 <?php
         $datenbank = "../aktuell.txt";
         $daten = $_POST["eintrag"];
         $datei = fopen($datenbank,"w");
         fwrite($datei, $daten);
         fclose($datei);
         echo("Änderung erfolgreich!".$daten);
 ?>
 <br>
 <a href="content_admin.php">zur&uuml;ck</a>
</div>
</body>
</html>