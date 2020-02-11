<?php
$to = "loganjvickery@gmail.com";
$subject = "New msg from loganjvickery.com!";
$body = "\n";
$body .= $_POST['name'];
$body .= "\n\n";
$body .= $_POST['company'];
$body .= "\n\n";
$body .= $_POST['email'];
$body .= "\n\n";
$body .= $_POST['phone'];
$body .= "\n\n";
$body .= $_POST['msg'];
$body .= "\n\n";

if (isset($_POST['send'])) {
  $valid = array($_POST['name'],$_POST['email'],$_POST['msg']);
  $isValid = "no";
  for ($i = 0; $i < count($valid);$i++) {
      echo('hit');
      if($valid[$i] == false) {
        $isValid = "no";
        echo($valid . "is not valid");
      } else {
        $isValid = "yes";
      }
  }
  if ($isValid == "yes") {
    if (mail($to, $subject, $body)) {
      header('location:http://loganjvickery.com/thanks.html ');
    } else {
     echo("<p>Message delivery failed...</p>");
    }
  }
}
?>
