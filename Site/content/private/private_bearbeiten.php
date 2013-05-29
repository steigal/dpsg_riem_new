<!DOCTYPE html>

<html>
<head>
  <title>Stamm Galileo Galilei Messestadt-Riem</title>
  <meta name="author" content="Maxi Steidl">
  <link rel="stylesheet" href="../../css/design.css" type="text/css">

  <?php
  $uebergabe = $_GET["var"];
  $g = $_GET["g"];
  if($g == 1)
  {
         $datei = "../".$uebergabe.".txt";
  }
  if($g == 0)
  {
         $datei = "../content_".$uebergabe.".html";
  }
  if($uebergabe == "download")
  {
         $datei = "../download/content_download.html";
  }
  if($uebergabe == "groups")
  {
         $datei = "../groups/content_".$g.".html";
  }
  if($uebergabe == "design")
  {
         $datei = "../../css/design".$g.".css";
  }
  ?>

</head>

<body oncontextmenu="return false" onselectstart="return false" ondragstart="return false">
    <div id="content">
      <p>Hier die Downloads bearbeiten/l&ouml;schen:</p>

      <form method="post" action="<?php echo "bearbeiten_absenden.php?var=".$uebergabe."&g=".$g; ?>">
      Dateiname: <input type="text" name="ueber"  style="width:300px;" value="<?php echo $datei; ?>"><br>
      <?php
         $content = file_get_contents($datei);
         echo "<textarea name=\"eintrag\" rows=\"25\" cols=\"95\">".$content."</textarea>";
         ?>
         <br>

       <input type="submit" name="Button" value="Absenden">

      </form>
      <br>
      <a href="content_admin.php">zur&uuml;ck</a>

    </div>
</body>
</html>