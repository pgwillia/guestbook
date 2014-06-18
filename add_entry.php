<?php
$title = "Sign the Guestbook";

$file = fopen($filename, 'a') or die('unable to open file');
if (!empty( $_POST["submit"])) {
  $name = $_POST["formName"];
  $email = $_POST["formEmail"];
  $comment = $_POST["formComment"];
  $date = Date("Y-m-d h:i:s");

  if(!empty($name)) {
    if(!empty($email)) {
      $name = "<a href=\"mailto:$email\">$name</a>";
    }
  } elseif (!empty($email)) {
    $name = "<a href=\"mailto:$email\">$email</a>";
  } else {
    $name = "";
  }

  $entry = "<p class=\"greeting\">$comment - posted on $date by $name</p>\n";
  fwrite($file, $entry);

}

fclose($file);

?>
