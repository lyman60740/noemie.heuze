<?php
if(isset($_POST['email']) && isset($_POST['objet']) && isset($_POST['message'])) {
  $to = 'lym_60740@hotmail.fr';
  $subject = $_POST['objet'];
  $message = $_POST['message'];
  $headers = 'From: ' . $_POST['email'] . "\r\n" .
             'Reply-To: ' . $_POST['email'] . "\r\n" .
             'X-Mailer: PHP/' . phpversion();

  mail($to, $subject, $message, $headers);
  
  // Redirection vers une page de confirmation
  header('Location: confirmation.html');
  exit;
}
?>
