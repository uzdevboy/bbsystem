<?php
/**
 * User: Habib
 * Date: 06.02.14
 * Time: 14:43
 */
require_once "db/database.php";
require_once "system/App.php";
$site = new App();

$site->setAppTitle("BBSystem");
$site->setAppDesc("This is a Demo BBSystem");
$site->getAppTags(array("demo" , "app" ,"bb" , "system"));
?>
<html>
    <head>
        <title><?=$site->getAppTitle();?></title>
    </head>
    <body>
        <h1><?=$site->getAppTitle();?></h1>
        <h2><?=$site->getAppDesc();?></h2>
    </body>
</html>
