<?php
session_start();
/**
*   All rights reserved to :
*   Developer : Mohamed ESSAIDI - www.EssaidiM.com
*   contact@essaidim.com
*   13/02/2015
*   -----------------------
*/
include('config.php');
include('functions.php');

$page = "index";
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 

    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <title>???? ??????? ???????</title>
    <meta name="description" content="???? ??????? ???????" />
    <meta name="keywords" content="???? ??????? ???????" />
    <meta name="author" content="EssaidiM.com" />
    <link rel="shortcut icon" href="images/favico.ico">

    <!-- Bootstrap files -->
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.rtl.css" />

    <!-- Style files -->
    <link href='http://fonts.googleapis.com/css?family=Raleway:200,400,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="css/socicon.css" />
</head>
<body data-spy="scroll" data-target="#main-navbar" class="text-right rtl">
    
    <?php include("header.php"); ?>
    <div id="container">
        <div class="container">
            <div>
                <?php echoMessage(); ?>
                <h3>???? ?? ???</h3>
                <form method="post" action="do.php?action=search">
                    <div class="row">
                        <div class="col-sm-5 col-sm-offset-1">
                            <label>?????</label>
                            <input type="text" name="name" placeholder="??? ?????"/>
                        </div>
                        <div class="col-sm-5">
                            <label>?????? ??????????</label>
                            <input type="text" name="email" placeholder="?????? ??????????"/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-5 col-sm-offset-1">
                            <label>????? ????? ??????</label>
                            <input type="text" name="old_address" placeholder="???? ????? ????? ?????? ?????"/>
                        </div>
                        <div class="col-sm-5">
                            <label>??? ?????? ??????</label>
                            <input type="text" name="old_number" placeholder="???? ??? ?????? ?????? ?????"/>
                        </div>
                    </div>
                    <div class="button-container">
                        <button type="submit" name="submit"><span class="glyphicon glyphicon-search"></span> ???</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <?php include('footer.php'); ?>
    
    <!-- Latest compiled and minified JavaScript -->
    <script src="js/jquery.js"></script>
    <script src="http://code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>