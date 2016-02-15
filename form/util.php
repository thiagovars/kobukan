<?php

class Util {
  public static function converteData($data, $paramDB = true) {

    if (empty($data)) {
      return "";
    }
    $aData = explode('/', $data);
    if ($paramDB) {
      return "DATE_FORMAT('$aData[0]-$aData[1]-$aData[2]', 'd%-%m-%Y')";
    } else {
      return "$aData[0]/$aData[1]/$aData[2]";
    }
  }

}
?>