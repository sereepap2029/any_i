<?php
ob_start('ob_gzhandler');
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <title>any i | advisor</title>
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
                 <?php include("views/adv.php"); ?>
                    <?php include("views/footer.php"); ?>
                        <script src="js/jquery.fullpage.js"></script>
                        <script src="js/owl.carousel.min.js"></script>
                        <script src="js/jquery.superslides.js"></script>
                        <script type="text/javascript" src="js/main.js"></script>
        </div>
         <!--/ SVG /***************************** -->
        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="0" height="0">
            <defs>
                <clipPath id="clip_path-head" clipPathUnits="objectBoundingBox">
                    <ellipse rx=".9" ry="1" cx="0.5" cy="0" />
                </clipPath>
                <clipPath id="clip_path" clipPathUnits="objectBoundingBox">
                    <ellipse rx="1.5" ry="1" cx="0.5" cy="0" />
                </clipPath>
                <clipPath id="clip_path-s3" clipPathUnits="objectBoundingBox">
                    <ellipse rx="2.2" ry="1" cx="0.5" cy="0" />
                </clipPath>
                <clipPath id="clip_path-s5" clipPathUnits="objectBoundingBox">
                    <ellipse rx="2.7" ry="1" cx="0.5" cy="0" />
                </clipPath>
                <clipPath id="clip_path-s6" clipPathUnits="objectBoundingBox">
                    <ellipse rx="1.8" ry="1" cx="0.5" cy="0" />
                </clipPath>
                <clipPath id="clip_tag" clipPathUnits="objectBoundingBox">
                    <polygon points="1 0,0.75 0.5,1 1,0 1,0 0.5,0 0"> </polygon>
                </clipPath>
                <clipPath id="clip_path-s4-img" clipPathUnits="objectBoundingBox">
                    <ellipse rx="1.6" ry="1" cx="0.5" cy="0" />
                </clipPath>
            </defs>
        </svg>
        <!--/ End SVG /***************************** -->
    </body>

    </html>
