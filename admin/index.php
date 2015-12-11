<?
session_start();
session_destroy();
?>
    <!DOCTYPE html>
    <html>

    <head>
        <title>Admin Login</title>
        <!-- Bootstrap -->
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
        <link href="assets/styles.css" rel="stylesheet" media="screen">
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
        <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>

    <body id="login">

        <div class="container">
            <div class="span12">
                <div class="span4">
                </div>
                <div class="span4" style="margin:0px">
                    <div style="width:271px;margin:0px auto">
                      <img src="./images/logo.png" width="100%">
                    </div>
                </div>
                <div class="span4">
                </div>
            </div>
            <div class="span12">
            <form class="form-signin" method="post" action="main.php">
                <h2 class="form-signin-heading">Please sign in</h2>
                <input type="text" class="input-block-level" placeholder="username" name="username">
                <input type="password" class="input-block-level" placeholder="Password" name="password">
                <button class="btn btn-large btn-danger" type="submit">Sign in</button>
            </form>
            </div>
        </div>
        <!-- /container -->
        <script src="vendors/jquery-1.9.1.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
    </body>

    </html>
