<?php

namespace App\Localclasses;

class Util {
    function removeNonNumericChars($inputStr) {
        return preg_replace("/[^0-9]/", "", $inputStr);
    }
}