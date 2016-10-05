<?php
session_start();
$song = $_SESSION['file'];
$new = pathinfo($song, PATHINFO_FILENAME) . "_200.mp3";
$nfile = pathinfo($song, PATHINFO_DIRNAME). '/' . $new;
$cmd = "sox " . $song . " " . $nfile . " speed 2";
if ($song) {
  if (!file_exists($nfile)){
    if(!shell_exec($cmd))
      echo "<a href=\"http://baptiste.lol/proj/ul/".$new."\">clic</a>";
    else
      echo "erreur shell exec";
  }
  else
    echo "<a href=\"http://baptiste.lol/proj/ul/".$new."\">clic</a>";
} else
  echo "no song found\n"
?>
