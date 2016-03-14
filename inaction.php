<?php
ob_start('ob_gzhandler');
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <title>any i CORPORATION | in Action</title>
        <?php include("views/head.php"); ?>
            <style>
            .s2.headcon {
                clip-path: url(#clip_path-sub);
            }
            </style>
    </head>

    <body>
        <div id="wrapper">
            <div id="fullpage">
                <!-- fullpage -->
                <?php include("views/header.php"); ?>
                    <?php include("views/inac.php"); ?>
                        <?php include("views/footer.php"); ?>
                            <script src="js/owl.carousel.min.js"></script>
                            <script src="js/jquery.fullpage.js"></script>
                            <script type="text/javascript" src="js/main.js"></script>
            </div>
            <!--/ SVG /***************************** -->
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="0" height="0">
                <defs>
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
                    <clipPath id="clip_path-sub" clipPathUnits="objectBoundingBox">
                        <ellipse rx="1.2" ry="1" cx="0.5" cy="0" />
                    </clipPath>
                </defs>
            </svg>
            <!--/ End SVG /***************************** -->
    </body>

    </html>
