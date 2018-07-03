<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tamara Kung</title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet"><!-- font -->

    <link href="css/bootstrap.min.css" rel="stylesheet"><!-- bootstrap -->
    <link href="custom.css" rel="stylesheet"><!-- custom css -->

  </head>
  <body>

    <!-- NAVIGATION BAR -->

<?php include ("header.php");?>

    <!-- BODY -->

    <div class="container-fluid text-center">
      <div class="row">
        <div class="col-sm-12 signup-splash">
          <h1>Mailing List</h1>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-sm-12 text-center">

          <h1>Sign Up</h1><br>
          <p>Subscribe for personalized updates from yours truly</p>

          <form class="signup-form" action="signup-process.php" method="post">
            <div>
              <input name="fname" class="fname" type="text" placeholder="First Name" required/><br>
            </div>
            <div>
              <input name="lname" class="lname" type="text" placeholder="Last Name" required/><br>
            </div>
            <div>
              <input name="email" class="email" type="text" placeholder="Email" required/><br>
            </div>
            <button type="submit" class="btn_email">Sign me up!</button>
          </form>

        </div>
      </div>
    </div>




        <!-- FOOTER -->

<?php include ("footer.php");?>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
