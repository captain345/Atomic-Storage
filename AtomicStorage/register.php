<?php
/**
 * Created by PhpStorm.
 * User: thomas
 * Date: 17/12/14
 * Time: 21:15
 */
session_start();
require_once 'dbconf.php';

    $username = $_POST['name'];
    $password = $_POST['password'];
    $passwordConfirm = $_POST['passwordConfirm'];
    $email = $_POST['email'];



    if(isset($_POST['registerButton'])){

            if($password != $passwordConfirm){
                echo 'Passwords do not match';
            }
            else{
                $userCheck = mysql_query("SELECT Username FROM users WHERE Username='$username'");
                if(mysql_num_rows($userCheck)){
                    echo 'username already exists';
                }
                else{
                    $result = mysql_query("INSERT INTO users (Username, Password) VALUES('$username','$password')");

                    $location = 'uploads/'.$username;
                    mkdir($location, 0644);
                    session_regenerate_id();
                    $_SESSION['username'] = $username;
                    session_write_close();
                    header('Location: storage-main.php');

                    echo 'this shit worked yo';

                }
            }


    }

