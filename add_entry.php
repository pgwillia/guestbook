<?php
$guestbook = "";
$title = "Sign the Guestbook";

if (!empty( $_POST["submit"])) {
  $name = $_POST["formName"];
  $email = $_POST["formEmail"];
  $comment = $_POST["formComment"];
  $date = Date("Y-m-d h:i:s");

  $sql = "insert into guestbook values(0, '$name', '$email', '$comment', '$date')";
  mysql_query($sql);
  $response = mysql_affected_rows();

  if($response > 0) {
    $return = "Your guestbook entry was successfully added.";
  } else {
    $return = "Something went wrong.  Your guestbook entry was not added.";
  } 

  $guestbook .= "<span class=\"return\">$return</span><br />";
}
?>
