<?php

namespace App\Helpers;

class StringUtils
{

  // other methods

  public static function is_english($str)
  {
     if (strlen($str) != strlen(utf8_decode($str))) {
         return false;
     } else {
         return true;
     }
  }

}