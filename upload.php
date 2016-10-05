<?php
$uploaddir = '/var/www/html/proj/ul/';
$uploadfile = str_replace(' ', '_', $uploaddir.basename($_FILES['upload']['name']));
session_start();

$_SESSION['file'] = $uploadfile;
$_SESSION['effect'] = $_POST['effect'];
$head = "Location:" . $_SESSION['effect'] . ".php";

echo '<pre>';

if ($_FILES['upload']['type'] == "audio/mp3") {
  if (move_uploaded_file($_FILES['upload']['tmp_name'], $uploadfile))
      Header($head);
  else
      echo "échec\n";
} else {
  echo "mauvais type de fichier\n";
}

echo 'débogage';

print_r($_FILES);

echo '</pre>';
?>
