<?php

require("config.php");
require("database.php");
require("controller.php");
require("model.php");
require("functions.php");
require("mail.php");
require("app.php");

spl_autoload_register(function($class_name){
    require MODELS.ucfirst($class_name).".php";
}); 


?>