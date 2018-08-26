<!DOCTYPE html>
<html>
<head>
  <title>Nathan Holdom</title>
  <meta charset="UTF-8">
  <link rel="shortcut icon" href="../images/icon.jpg"/>
  <link rel="stylesheet" type="text/css" href="../css/page.css">
  <link rel="stylesheet" type="text/css" href="contact.css">
  <link rel="stylesheet" type="text/css" href="../css/fonts.css">
</head>
<body>
  <div class="header">
    <div class="navbar" id='nav'>
      <ul>
        <li><a href="../homepage.html">Nathan Holdom</a></li>
        <li><a href="../homepage.html#bout">About</a></li>
        <li><a href="projects.html">Projects</a></li>
        <li><a href="photography.html">Photography</a></li>
        <li><a href="contact.html">Contact</a></li>
      </ul>
    </div>
  </div>

  <?php include('form_process.php'); ?>
  <div class="container">
    <form id="contact" action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
      <h3>Quick Contact</h3>
      <h4>Contact us today, and get reply with in 24 hours!</h4>
      <fieldset>
        <input placeholder="Your name" type="text" tabindex="1" name='name' value="<?= $name ?>" autofocus>
        <span class="error"><?= $name_error ?></span>
      </fieldset>
      <fieldset>
        <input placeholder="Your Email Address" type="text" name='email' value="<?= $email ?>" tabindex="2">
        <span class="error"><?= $email_error ?></span>
      </fieldset>
      <fieldset>
        <input placeholder="Your Phone Number" type="text" name='phone' value="<?= $phone ?>" tabindex="3">
        <span class="error"><?= $phone_error ?></span>
      </fieldset>
      <fieldset>
        <textarea placeholder="Type your Message Here...." type="text" name='message' value="<?= $message ?>" tabindex="5"></textarea>
      </fieldset>
      <fieldset>
        <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
      </fieldset>
    </form>


  </div>

  <div class="findMe">
    <h3>Where to find me</h3>
    <ul class="socialIcons">
      <li><a href="https://www.instagram.com/nathanmlh/"><img src="../images/instagram.png"/></a></li>
      <li><a href="https://github.com/nathanmlh"><img src="../images/github.png"/></a></li>
      <li><a href="https://www.linkedin.com/in/nathan-holdom-77b611149/"><img src="../images/linkedin.png"/></a></li>
    </ul>
    <h4>Shoot me a message for business inquiries, or just to talk!</h4>
  </div>
</body>
</html>
