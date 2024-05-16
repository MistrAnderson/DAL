<?php
namespace ExoHttp {
    // Refactor the string to match the class
    // VERY HARD CODED, NEEDS TO BE CHANGED
    $str = str_replace("/index.php", "", $_SERVER['SCRIPT_NAME']);
    $str_again = str_replace("/DAL", "", $str);

    $class = str_replace("/", "", $str_again);
    
    //dynamically require the file needed
    require_once dirname(__FILE__)."/../".$class.".php";

    $className = "\\ExoHttp\\".$class;
    new $className;
}
