<?php

namespace App\Helpers;

class StatusType
{
    public static function sent(){
        return 1;
    }
    public static function delivered(){
        return 2;
    }
    public static function read(){
        return 3;
    }
     public static function recieved(){
        return 4;
    }
 

}