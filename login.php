<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman Login</title>

    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap/css/style.css" rel="stylesheet">
  </head>
  
  <body>
    <div class="col-md-4 col-md-offset-4 form-login">
    
    <?php
    /* handle error */
    if (isset($_GET['error'])) : ?>
        <div class="alert alert-warning alert-dismissible" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <strong>Warning !</strong> <?=base64_decode($_GET['error']);?>
        </div>
    <?php endif;?>

        <div class="outter-form-login">
        <div class="logo-login">
            <em class="glyphicon glyphicon-user"></em>
        </div>
            <form action="check-login.php" class="inner-login" method="post" >
            <h3 class="text-center title-login">L O G I N</h3>
                <div class="form-group">
                    <input type="text" class="form-control" name="username" placeholder="Username" autocomplete="off">
                </div>

                <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="Password" autocomplete="off">
                </div>
                
                <input type="submit" class="btn btn-block btn-custom-green" value="LOGIN" />
                
                <div class="text-center forget">
                    <p><a href="https://www.youtube.com/watch?v=XUhVCoTsBaM"> Anda Lupa Password ? </p>
                    <p><a href="register.php">Sign Up</a></p>
                </div>
            </form>
        </div>
    </div>

    <script src="bootstrap/js/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>