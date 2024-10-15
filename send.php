<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

<?php
if(!empty($_POST["send"])) {
	$userName = $_POST["userName"];
  $userEmail = $_POST["userEmail"];
	$userPhone = $_POST["userPhone"];
	$userMessage = $_POST["userMessage"];
	$toEmail = "thasbigabanu2001@gmail.com";
  
	$mailHeaders = "Name: " . $userName .
	"\r\n Email: ". $userEmail  . 
	"\r\n Phone: ". $userPhone  . 
	"\r\n Message: " . $userMessage . "\r\n";

	if(mail($toEmail, $userName, $mailHeaders)) {
	    $message = "Your contact information is received successfully.";
	}
}
?>



<div class="form-box">
  <h1>Contact Form</h1>
  <form name="contactFormEmail" method="post">
    <div class="form-group mb-3">
      <label for="name">Name</label>
      <input class="form-control" type="text" name="userName" required id="userName">
    </div>
    <div class="form-group mb-3">
      <label for="email">Email</label>
      <input class="form-control" type="email" name="userEmail" required id="userEmail">
    </div>
    <div class="form-group mb-3">
      <label for="email">Phone</label>
      <input class="form-control" type="text" name="userPhone" required id="userPhone">
    </div>
    <div class="form-group mb-3">
      <label for="message">Message</label>
      <textarea class="form-control" name="userMessage" required id="userMessage"></textarea>
    </div>
      <input class="btn btn-primary" type="submit" name="send" value="Submit">
      <?php if (! empty($message)) {?>
      <div class='success'>
        <strong><?php echo $message; ?>	</strong>
      </div>
      <?php } ?>
  </form>
</div>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>
