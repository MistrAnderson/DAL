<?php
namespace ExoHttp {
    require_once "Service.php";
    require_once "Commun/Format.php";
    require_once "Commun/Database.php";
    require_once "Commun/StdLib.php";

    use ExoHttp\Database;
    use ExoHttp\Service;

    class CreateDB extends Service {
        const NEEDED_ARGS = ["table", "params"];

        function Trig() {
            $db = new Database();
            // Tests if all NEEDED_ARGS were sent in the request
            if (! StdLib::testNeededArgs(self::NEEDED_ARGS, $this)) {
                return;
            }
            echo $db->create($this->{self::NEEDED_ARGS[0]}, $this->{self::NEEDED_ARGS[1]});
        }
    }
}