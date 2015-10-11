<?php
ob_start('ob_gzhandler');
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script type="text/javascript" src="js/jquery-1.11.3.min.js?v=1001"></script>
        <link href='//fonts.googleapis.com/css?family=Raleway:400,300,600' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/owl.carousel.css">
        <link rel="stylesheet" href="css/owl.theme.css">
        <link rel="stylesheet" href="css/skeleton.css">
        <link rel="stylesheet" href="css/style.css">
    </head>

    <body>
        <div id="wrapper">
            <?php include("views/header.php"); ?>
                <?php include("views/content.php"); ?>
                    <?php include("views/footer.php"); ?>
                        <script src="js/owl.carousel.min.js"></script>
                        <script type="text/javascript" src="js/main.js"></script>
        </div>
        <!--/ SVG /***************************** -->
        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="0" height="0">
            <defs>
                <clipPath id="clip_path-head" clipPathUnits="objectBoundingBox">
                    <ellipse rx=".9" ry="1" cx="0.5" cy="0" />
                </clipPath>
                <clipPath id="clip_path" clipPathUnits="objectBoundingBox">
                    <ellipse rx="1.3" ry="1" cx="0.5" cy="0" />
                </clipPath>
            </defs>
        </svg>
        <!--/ End SVG /***************************** -->
    </body>

    </html>
