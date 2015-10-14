<?php
ob_start('ob_gzhandler');
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <title>any i | in action</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script type="text/javascript" src="js/jquery-1.11.3.min.js?v=1001"></script>
        <link href='//fonts.googleapis.com/css?family=Raleway:400,300,600' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/font-awesome.min.css?v=1001">
        <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
        <script type="text/javascript" src="js/enquire.min.js"></script>
        <script type="text/javascript" src="js/hammer.min.js"></script>
        <link rel="stylesheet" href="css/skeleton.css">
        <link rel="stylesheet" href="css/jquery.fullpage.css">
        <link rel="stylesheet" href="css/owl.carousel.css">
        <link rel="stylesheet" href="css/owl.theme.css">
        <link rel="stylesheet" href="css/style.css">
    </head>

    <body>
        <div id="wrapper">
        <div id="fullpage"><!-- fullpage -->
            <?php include("views/header.php"); ?>
                 <?php include("views/inac.php"); ?>
                    <?php include("views/footer.php"); ?>
                        <script src="js/jquery.fullpage.js"></script>
                        <script src="js/owl.carousel.min.js"></script>
                        <script src="js/jquery.superslides.js"></script>
                        <script type="text/javascript" src="js/main.js"></script>
        </div>
        <!--/ SVG /***************************** -->
        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="0" height="0">
            <defs>
               
            </defs>
        </svg>
        <!--/ End SVG /***************************** -->
    </body>

    </html>
