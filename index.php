<?php

  if (isset($_POST['submit'])) {

    $from = $_POST['email'];
    $to = 'php@edwinchen.co';
    $subject = 'Email signup';
    $body = 'Please sign me up to the mailing list';

    // if email has not been entered
    if(!$_POST['email']) {
      $emailError = '<div class="text-danger"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> &nbsp;Please enter a valid email adress</div>';
    }

    if(!$emailError) {
      if (mail ($to, $subject, $body, $from)) {
        $result = '<div class="text-success"><i class="fa fa-check" aria-hidden="true"></i> &nbsp;Thank you we wi\'ll keep you updated</div>';
      } else {
        $result = '<div class="text-danger"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> &nbsp;Sorry. There has been an error, please try again.</div>'
      }
    }

  }

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Just+Another+Hand" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>

    <section id="logo">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <img src="img/my-logo.png" alt="Logo" class="img-fluid">
          </div>
        </div>
      </div>
    </section>

    <section id="intro">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <p>We're working hard, we'll be ready to launch in...</p>
          </div>
        </div>
      </div>
    </section>

    <section id="counter">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="countdown"></div>
          </div>
        </div>
      </div>
    </section>

    <section id="icons">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <ul class="list-inline">
            <a href="http://www.twitter.com" target="_blank"><li class="list-inline-item"><i class="fa fa-twitter-square fa-3x twitter" aria-hidden="true"></i></li></a>
            <a href="http://www.facebook.com" target="_blank"><li class="list-inline-item"><i class="fa fa-facebook-square fa-3x facebook" aria-hidden="true"></i></li></a>
            <a href="http://www.google.com" target="_blank"><li class="list-inline-item"><i class="fa fa-google-plus-square fa-3x google-plus" aria-hidden="true"></i></li></a>
            <a href="http://www.instagram.com" target="_blank"><li class="list-inline-item"><i class="fa fa-instagram fa-3x instagram" aria-hidden="true"></i></li></a>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <section id="signup">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <form method="post" action="#signup" class="form-inline" role="form">
              <input type="email" class="form-control form-control-sm" name="email" placeholder="Enter your email">
              <button type="submit" class="btn btn-signup btn-sm" name="submit" value="send">Find out more</button>
            </form>

            <?php echo $emailError; ?>
            <?php echo $result; ?>

          </div>
        </div>
      </div>
    </section>

    <!-- jQuery first, then Tether, then Bootstrap JS. -->
  <script src="js/jquery-3.1.1.min.js"></script>
  <script src="js/tether.min.js"></script>
  <script src="js/bootstrap-min.js"></script>

  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
  <script src="js/jquery.countdown.js"></script>

  <script type="text/javascript">
    $(function() {
        $('.countdown').countdown({
            date: "June 7, 2087 15:03:26"
        });
      });
  </script>

</body>
</html>