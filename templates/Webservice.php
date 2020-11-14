<?php
  $to = $_POST['to'];
  $from = $_POST['from'];
  $date = $_POST['date'];
  $subject = $_POST['subject'];
  $message_id = $_POST['message_id'];
  $message = $_POST["message"];
 
  $body = "To view this email with images, click below. \n\n $message";
  $headers = "From: $from";

  mail ($to, $from, $date, $subject, $message_id, $body, $headers,);
  
  echo "Message Sent! <a href='index.html'>Click here</a> to send another email";
?>
