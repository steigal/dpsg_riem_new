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
         $timestamp = time();
         $eintrag = nl2br($_POST["eintrag"]);
         $date = date("d.m.Y",$timestamp);
         $daten ="
<span class=\"newsbox\">
    <p class=\"date\">".$date."</p>
    <p class=\"text\">
     <h1>".$_POST["ueber"]."</h1>
     ".$eintrag."
     </p>
</span>
";
         $datenbank = "../aktuell.txt";
         $old = file_get_contents($datenbank);
         $datei = fopen($datenbank,"w");
         $new = $daten.$old;
         fwrite($datei, $new);
         fclose($datei);
         echo("Einfügen erfolgreich!".$new);
 ?>
 <a href="content_admin.php">zur&uuml;ck</a>
</div>
</body>
</html>