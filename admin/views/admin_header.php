<?
session_start();
require_once("../model/m_user.php");
$m_user = new M_user;
$user_data=null;
if (isset($_POST['username'])) {
    $user_data=$m_user->login_user($_POST['username'],$_POST['password']);
    if ($user_data['username']) {
        $_SESSION['username']=$user_data['username'];
    }
}else{
    if (isset($_SESSION['username'])) {
        $user_data=$m_user->get_user_by_usn($_SESSION['username']);
    }
}
//print_r($_SESSION);
if (!isset($user_data['username'])) {
    ?>
    <script type="text/javascript">
    window.open("./index.php","_self");
    </script>
    <?
}
?>
<!DOCTYPE html>
<html class="no-js">
    
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>any i Admin </title>
        <!-- Bootstrap -->
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
        <link href="vendors/easypiechart/jquery.easy-pie-chart.css" rel="stylesheet" media="screen">
        <link href="assets/styles.css" rel="stylesheet" media="screen">
        <link href="css/jquery-ui.css" rel="stylesheet" media="screen">
        <link href="css/jquery-ui.structure.css" rel="stylesheet" media="screen">
        <link href="css/jquery-ui.theme.css" rel="stylesheet" media="screen">
        <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <script src="vendors/modernizr-2.6.2-respond-1.1.0.min.js"></script>
        <script src="vendors/jquery-1.9.1.min.js"></script>
        <script src="js/jquery-ui.js"></script>
    </head>
    
    <body>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container-fluid">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                    </a>
                    <a class="brand" href="#" style="padding:2px"><img src="./images/logo.png" width="130px"></a>
                    <div class="nav-collapse collapse">
                        <ul class="nav pull-right" style="font-size:16px;margin-top:2%">
                            <li class="dropdown">
                                <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">Home Banner <i class="caret"></i>

                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a tabindex="-1" href="banner_add.php">add</a>
                                    </li>
                                    <li>
                                        <a tabindex="-1" href="main.php">List</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">Advisor <i class="caret"></i>

                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a tabindex="-1" href="advisor_add.php">add</a>
                                    </li>
                                    <li>
                                        <a tabindex="-1" href="advisor_list.php">List</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">any i in action <i class="caret"></i>

                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a tabindex="-1" href="in_action_add.php">add</a>
                                    </li>
                                    <li>
                                        <a tabindex="-1" href="in_action_list.php">List</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="">
                                <a href="business_partner.php">Business Partner</a>
                            </li>
                            <li class="">
                                <a href="welcome_page.php">Edit welcome page</a>
                            </li>
                            <li class="">
                                <a href="encore_edit.php">Edit Benefit section</a>
                            </li>
                            <li class="">
                                <a href="contact_edit.php">Edit Contact</a>
                            </li>
                        </ul>
                    </div>
                    <!--/.nav-collapse -->
                </div>
            </div>
        </div>