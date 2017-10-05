<?php
/**
 * Created by PhpStorm.
 * User: pierre
 * Date: 03/10/17
 * Time: 16:16
 */

session_start();
session_destroy();
header('Location: login.php');
exit();