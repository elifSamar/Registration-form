<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign up</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <!-- START SIGN UP FORM -->
    <div class="signup">
      <h2 class="text-center">
        S<span>amara</span>
        <img src="images/imageicon.jpg">
      </h2>
      <div class="container">
        <div class="row">
          <div class="imageform col-md-6">
            <img src="images/imageform.jpeg" alt="imageform" class="pull-right img-responsiveidth" >
          </div>
          <div class="contentform col-md-6 col-xs-12">
            <form>
              <h4>Start sharing your recipes in three steps.</h4>
               <div class="form-group">
                  <input type="text"     placeholder="Name (5 letter at least)" name="name" class="form-control plur-me" >
                  <i class="fa  fa-check-circle"></i>
                  <span class="alerts">* Name must be larger than 5 letters</span>
                </div>
               <div class="form-group">
                  <input type="password" id="password" placeholder="Password (8 letter at least)" name="password" class="form-control password">
                  <span class="alerts">* Weak password.</span>
                  <span class="show">Show password</span>
                </div>
               <div class="form-group">
                  <input type="email"    placeholder="Email" name="email" class="form-control  emails" >
                  <i class="fa  fa-check-circle"></i>
                  <span class="alerts">* Email is not valid.</span>

                </div>
              <input type="submit"    value="Create your brand" class="btn btn-success" >
              <p class="pull-right">Already have an account | <a href="loginform.php"> Login</a></p>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- END SIGN UP FORM -->
    <script src="js/jquery.js"></script>
    <script src="js/pwstrength-bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
  </body>
</html>
<?php
