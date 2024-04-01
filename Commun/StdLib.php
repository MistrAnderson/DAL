<?php
namespace ExoHttp {
    class StdLib{
        static function testNeededArgs($arrOfArgs, $classInstance) {
            foreach ($arrOfArgs as $arg) {
                if (!isset($classInstance->{$arg})) {
                    echo json_encode(['error' => 'Missing '.$arg.' in JSON data']);
                    return false;
                }
            }
            return true;
        }
    }
}