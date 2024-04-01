<?php
namespace ExoHttp {
    require_once "Service.php";
    require_once "Commun/Format.php";
    require_once "Commun/Database.php";

    use PDO;

    class TestDB extends Service {
        function Trig() {
            $db = new Database();
            $arr = array("couleur");
            echo $db->read("1", $arr);
        }
    }
}