<?php
/**
 * Created by PhpStorm.
 * User: pierre
 * Date: 05/10/17
 * Time: 11:34
 */


setCookie("panier[cookie1]", 0, time()+3600);
setCookie("panier[cookie2]", 0, time()+3600);
setCookie("panier[cookie3]", 0, time()+3600);
setCookie("panier[cookie4]", 0, time()+3600);

header("location: index.php");