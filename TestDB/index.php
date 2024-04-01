<?php
namespace ExoHttp {
    // Refactor the string to match the class
    $str = str_replace("/index.php", "", $_SERVER['SCRIPT_NAME']);
    $str_again = str_replace("/API", "", $str);

    $class = str_replace("/", "", $str_again);

    //dynamically require the file needed
    require_once "../".$class.".php";

    $className = "\\ExoHttp\\".$class;
    new $className;
}