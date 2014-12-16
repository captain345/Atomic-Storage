<?php
/**
 * Created by PhpStorm.
 * User: Thomas
 * Date: 16/12/2014
 * Time: 18:14
 */

?>

<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Atomic Sign In</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href = "css/bootstrap.min.css" rel="stylesheet">
    <link href = "css/styles.css" rel="stylesheet">

    <script src="js/jquery-2.1.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <meta name="theme-color" content="#262626">

</head>
<body>


<div class="navbar navbar-inverse navbar-static-top">
    <!-- okay above me is the navbar being made -->

    <div class="container">

        <!-- here we have the title being set i should hopefully be able to change the font and size later on -->
        <a class="navbar-brand" href="#"  style="margin-top:-5px">
            <img src="Image/32x32.png" alt="">
        </a>
        <a href="index.html" class="navbar-brand">Atomic Storage</a>

        <button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">

            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>

        </button>

        <!-- This will let me set the buttons on the top right of the navbar -->

        <div class="collapse navbar-collapse navHeaderCollapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Options <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Option 1</a></li>
                        <li><a href="#">Option 2</a></li>
                    </ul>
                </li>
                <li class="active"><a href="#">Sign In</a></li>
            </ul>
        </div>
    </div>
</div>

<!-- Start coding under here once you've copied the file-->

</body>
</html>