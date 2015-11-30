<?
include("views/admin_header.php");
require_once("./model/m_welcome.php");
$m_welcome = new M_welcome;
$welcome=$m_welcome->get_all_welcome()->result;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>any i CORPORATION</title>
    <meta name="generator" content="Bootply" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="css/wel/html5reset-1.6.1.css" rel="stylesheet">
    <link href="css/wel/bootstrap.min.css" rel="stylesheet">
    <!--[if lt IE 9]>
            <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    <link href="css/wel/styles.css" rel="stylesheet">
</head>

<body>
    <div class="wel-con">
        <video autoplay id="bgvid" loop>
            <!-- WCAG general accessibility recommendation is that media such as background video play through only once. Loop turned on for the purposes of illustration; if removed, the end of the video will fade in the same way created by pressing the "Pause" button  -->
            <source src="./media/video/<?echo $welcome[0]['vdo'];?>" type="video/mp4">
        </video>
         <div class="blackoverlay"></div>
        <div class="top_band">
            <img src="images/wel/landingpage-logo.png" style="width:100%">
        </div>
        <div class="cen_but">
            <h1 class="titlebu"><?echo $welcome[0]['text'];?></h1>
            <a href="./index-in.php">
                <button class="gotoindex" onClick="">Enter</button>
            </a>
        </div>
    </div>
    <!-- script references -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
    <script src="js/wel/bootstrap.min.js"></script>
    <script>
    var vid = document.getElementById("bgvid");
    var pauseButton = document.querySelector("#polina button");

    function vidFade() {
        vid.classList.add("stopfade");
    }

    vid.addEventListener('ended', function() {
        // only functional if "loop" is removed 
        vid.pause();
        // to capture IE10
        vidFade();
    });


    /* pauseButton.addEventListener("click", function() {
         vid.classList.toggle("stopfade");
         if (vid.paused) {
             vid.play();
             pauseButton.innerHTML = "Pause";
         } else {
             vid.pause();
             pauseButton.innerHTML = "Paused";
         }
     })*/
    </script>
</body>

</html>
