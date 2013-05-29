<!DOCTYPE html>

<html>
<head>
  <title>Stamm Galileo Galilei Messestadt-Riem</title>
  <meta name="author" content="Maxi Steidl">
  <link rel="stylesheet" href="../../css/design.css" type="text/css">
</head>

<body oncontextmenu="return false" onselectstart="return false" ondragstart="return false">
<div id="content">
 <?php

         $uebergabe = $_GET["var"];
         $datei = $_POST["ueber"];
         $datei_old = "old/content_".$uebergabe."_old.html";
         $old = file_get_contents($datei);

         $handle = fopen($datei_old,"w");
         fwrite($handle, $old);
         fclose($handle);
         echo ("Alte Datei gespeichert in ".$datei_old."<br>");


         $daten = $_POST["eintrag"];
         $handle = fopen($datei,"w");
         fwrite($handle, $daten);
         fclose($handle);
         echo("Änderung erfolgreich!".$daten);
 ?>
 <br>
 <a href="content_admin.php">zur&uuml;ck</a>
</div>
</body>
</html>