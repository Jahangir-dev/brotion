<?php

namespace App\Helpers;

use Exception;

class MessageType
{
    public static function textMessage(){
        return 1;
    }
    public static function imageMessage(){
        return 2;
    }
    public static function voiceMessage(){
        return 3;
    }
    public static function linkMessage(){
        return 4;
    } 
    public static function FileMessage(){
        return 5;
    }

}