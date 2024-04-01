<?php
namespace ExoHttp {
    class Format {
        static function ArrRefractor($arr, $prefix="", $dataType="`%s`", $suffix=",") {
            $format = $prefix.$dataType.$suffix;
            $endFormat = $prefix.$dataType;
            $formattedArr = "";
            for ($i = 0; $i < count($arr)-1; $i++) {
                // format the key of the array
                $formattedArr .= sprintf($format, ($arr[$i]));
            }
            // Do not add the suffix after the last key
            $formattedArr .= sprintf($endFormat, $arr[count($arr)-1]);
            return $formattedArr;
        }
    }
}