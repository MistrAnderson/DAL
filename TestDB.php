<?php
namespace ExoHttp {
    require_once "Service.php";
    require_once "Commun/Format.php";
    require_once "Commun/Database.php";

    class TestDB extends Service {
        function Trig() {
            $arr = array("couleur", "feur", "jure");
            $formatArr = Format::ArrRefactor($arr, "WHERE ", "`%s`", "FEUR");
            echo $formatArr;
        }
    }
}
