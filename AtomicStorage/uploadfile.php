<?php
/**
 * Created by PhpStorm.
 * User: thomas
 * Date: 18/12/14
 * Time: 21:59
 */
ob_start();
@session_start();
$name = $_FILES['uploadFile']['name'];
$tmp_name = $_FILES['uploadFile']['tmp_name'];
$username = $_SESSION['username'];

if(isset($_POST['submit'])){
    if(isset($name)){
        if(!empty($name)){

            $location='uploads/'.$username;

            if(move_uploaded_file($tmp_name,$location.$name)){
                echo "uploaded";
                echo $name;
            }
            else{
                echo "error uploading file please try again";
            }
        }
    }
}