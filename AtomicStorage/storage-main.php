
<!DOCTYPE html>
<html>
<?php

        require_once("settings.php");
        $message = "";

        //has the user uploaded something?
        if(isset($_FILES['file'])){
            $target_path = Settings::$uploadFolder;
            $target_path = $target_path.time()."_".basename($_FILES['file']['name']);

            //try to move the uploaded folder into the designated folder
            if(move_uploaded_file($_FILES['file']['tmp_name'],$target_path)){
                $message = "The File ".basename($_FILES['file']['name'])." has been uploaded";
            }else{
                $message = "There was an error uploading the file, Please try again";
            }

            if(strlen($message) > 0){
                $message= '<p class="error">'.$message.'</p>';

            }
        }

        //list uploaded files
        $uploaded_files="";

        //open directory for reading
        $dh = opendir(Settings::$uploadFolder);

        //LOOP Through the files
        while(($file = readdir($dh)) !==false){
            if($file != '.' && $file != '..'){
                $filename = Settings::$uploadFolder.$file;
                $parts = explode("_",$file);

                $size = formatBytes(filesize($filename));
                $added = date("m/d/y", $parts[0]);
                $origName = $parts[1];

                $filetype = getFileType(substr($file,strlen($file) -3));
                $uploaded_files .= "<li class=\"$filetype\"><a href=\"$filename\">$origName</a> $size - $added</li>\n";

            }
        }
        closedir($dh);
        if(strlen($uploaded_files)==0){
            $uploaded_files = "<li><em>No files found</em></li>";
        }


        function getFileType($extension){
            $images = array('jpg', 'gif', 'png', 'bmp');
            $docs   = array('txt', 'rtf', 'doc');
            $apps   = array('zip', 'rar', 'exe');

            if(in_array($extension, $images)) return "Images";
            if(in_array($extension, $docs)) return "Documents";
            if(in_array($extension, $apps)) return "Applications";
            return "";
        }

        function formatBytes($bytes, $precision = 2) {
            $units = array('B', 'KB', 'MB', 'GB', 'TB');

            $bytes = max($bytes, 0);
            $pow = floor(($bytes ? log($bytes) : 0) / log(1024));
            $pow = min($pow, count($units) - 1);

            $bytes /= pow(1024, $pow);

            return round($bytes, $precision) . ' ' . $units[$pow];
        }

?>
    <head lang="en">
        <meta charset="UTF-8">
        <title>Atomic: Your Files</title>

            <meta name="viewport" content="width=device-width, initial-scale=1.0">

            <link href = "css/bootstrap.min.css" rel="stylesheet">
            <link href = "css/styles.css" rel="stylesheet">
            <link href = "css/jasny-bootstrap.min.css" rel="stylesheet">

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
                <li><a href="#">Sign In</a></li>
            </ul>
        </div>
    </div>
    </div>
    <!-- Start coding under here once you've copied the file-->

    <div class="container">
        <div class="row">
            <div class="col-lg-2">

            </div>
            <div class="col-lg-10">
                <div>
                    <ul class="nav nav-tabs">
                        <li role="presentation" class="active"><a href="#">Home</a></li>
                        <li role="presentation"><a href="#">Documents</a></li>
                        <li role="presentation"><a href="#">Images</a></li>
                        <li role="presentation"><a href="#">Applications</a></li>
                        <li role="presentation"><a href="#">Other</a></li>
                        <li role="presentation"><a href="#">Trash</a></li>
                    </ul>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3">

                <div class="container">
                    <div class="btn-group">
                        <button type="button" class="btn btn-default btn-lg dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                            Options <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" role="menu">
                            <li><a class="btn-file" href="#">Upload File<input type="file"></a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                        </ul>
                    </div>
                </div>
            </div>
                <div class="col-lg-7">

                </div>
            </div>
        </div>
    </body>
</html>