<?php
$sql = "select name, email, comment, DATE_FORMAT(dateAdded, '%y-%m-%d %H:%i') dateAdded from guestbook";
$response = mysql_query($sql);
$guestbook .= "<hr size=\"1\">";

while($get_row = mysql_fetch_array($response)) {
  $name = $get_row["name"];
  $email = $get_row["email"];
  $comment = $get_row["comment"];
  $date = $get_row["dateAdded"];

  if(!empty($name)) {
    if(!empty($email)) {
      $name = "<a href=\"mailto:$email\">$name</a>";
    }
  } elseif (!empty($email)) {
    $name = "<a href=\"mailto:$email\">$email</a>";
  } else {
    $name = "";
  }

  $guestbook .= "<p class=\"greeting\">$comment - posted on $date by $name>";
}

mysql_free_result($get_rs);
?>
