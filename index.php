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
        <link rel="stylesheet" href="css/skeleton.css">
        <link rel="stylesheet" href="css/style.css">
    </head>

    <body>
        <div id="wrapper">
            <?php //include("views/header.php"); ?>
                <?php include("views/content.php"); ?>
                    <?php //include("views/footer.php"); ?>
                        <script type="text/javascript" src="js/main.js"></script>
        </div>
    </body>

    </html>
