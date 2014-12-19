<?php
/**
 * Created by PhpStorm.
 * User: thomas
 * Date: 17/12/14
 * Time: 21:17
 */
define("DB_TYPE","mysql");
define("DB_HOST","StudentCloud.db.11698469.hostedresource.com");
define("DB_NAME","StudentCloud");
define("DB_USER","StudentCloud");
define("DB_PWD","CMT3313db!");
mysql_connect(DB_HOST,DB_USER,DB_PWD) || die('SQL DATABASE FUCKED UP');
mysql_select_db(DB_NAME);

//echo 'it did not fuck up \o/';

