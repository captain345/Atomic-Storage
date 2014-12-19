
<!DOCTYPE html>
<html>
    <head lang="en">
        <meta charset="UTF-8">
        <title>Atomic: Your Files</title>

            <meta name="viewport" content="width=device-width, initial-scale=1.0">

            <link href = "css/bootstrap.min.css" rel="stylesheet">
            <link href = "css/styles.css" rel="stylesheet">
            <link href = "css/jasny-bootstrap.min.css" rel="stylesheet">

            <script src="js/jquery-2.1.1.min.js"></script>
            <script src="js/bootstrap.js"></script>
            <script src="js/jasny-bootstrap.min.js"></script>
            <script src="js/showHide.js"></script>
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
                <li><a href="index.html">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Options <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="storage-main.php">File storage Testing</a></li>
                        <li><a href="#">Option 2</a></li>
                    </ul>
                </li>
                <li><a href="login.html">Sign In</a></li>
            </ul>
        </div>
    </div>
    </div>
    <!-- Start coding under here once you've copied the file-->

    <div class="container">
        <div class="col-lg-3">
            <div class="fileinput fileinput-new" data-provides="fileinput">
                <form action="storage-main.php" method="POST" enctype="multipart/form-data">
                    <span class="btn btn-default btn-file"><span class="fileinput-new">Select file</span><span class="fileinput-exists">Change</span><input type="file" value="upload file" name="uploadFile"></span>
                    <span class="fileinput-filename"></span>
                    <a href="#" class="close fileinput-exists" data-dismiss="fileinput" style="float: none">&times;</a>
                    <button class="btn btn-default btn-file">Start Upload<input type="submit" name="submit" value="upload"></button>
                </form>
            </div>

            <!--<button class="btn btn-default btn-file">Start Upload<input type="submit"></button>-->

            <div class="list-group">
                <a class="list-group-item active">All Files</a>
                <a class="list-group-item">Documents</a>
                <a class="list-group-item">Pictures</a>
                <a class="list-group-item">Applications</a>
                <a class="list-group-item">Other</a>
            </div>
        </div>
        <div class="col-lg-9">
            <div class="panel panel-default">
                <div class="panel-body text-center">
                    Your Files
                </div>
                <div class="panel-footer">
                    Panel footer
                </div>
            </div>
        </div>
    </div>
    </body>
</html>