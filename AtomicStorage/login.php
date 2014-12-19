<?php
/**
 * Created by PhpStorm.
 * User: thomas
 * Date: 18/12/14
 * Time: 20:45
 */

ob_start();
session_start();
require_once 'dbconf.php';

$username = $_POST['name'];
$password = $_POST['password'];

userLogin($username,$password);

function userLogin($username,$password){
    if(isset($_POST['loginB'])){
        $safe_username = mysql_real_escape_string($username);

        $query = "SELECT * FROM cloudusers WHERE Username ='{$safe_username}'";

        $result = mysql_query($query);

        if($row = mysql_fetch_assoc($result)){
            $set_password = $row['Password'];

            if($password == $set_password){
                session_regenerate_id();
                echo $_SESSION['username'];
                header('location: storage-main.php');
            }
            else{
                echo "Incorrect Username Or Password";
            }
        }
        else{
            echo "Incorrect USERNAME OR PASSWORD AGAIN";
        }
    }
}


