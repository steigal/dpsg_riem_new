<!DOCTYPE html>

<html>
<head>
  <title>Stamm Galileo Galilei Messestadt-Riem</title>
  <meta name="author" content="Maxi Steidl">
  <link rel="stylesheet" href="../../css/design.css" type="text/css">
</head>

<body oncontextmenu="return false" onselectstart="return false" ondragstart="return false">
    <div id="content">
      <p>Hier einen vorhandenen Eintrag bearbeiten/l&ouml;schen:</p>

      <form method="post" action="aktuellb_absenden.php">
      <?php
         $datei = "../aktuell.txt";
         $content = file_get_contents($datei);
         echo "<textarea name=\"eintrag\"  rows=\"25\" cols=\"60\">".$content."</textarea>";
         ?>
         <br>

       <input type="submit" name="Button" value="Absenden">

      </form>
      <br>
      <a href="content_admin.php">zur&uuml;ck</a>

    </div>
</body>
</html>