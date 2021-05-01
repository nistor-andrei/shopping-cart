<?php
namespace Controller;


class SessionCart{
    public static  function  sessionStart(){
        session_start();
    }
    public static function setData($key,$valoare){
        $_SESSION[$key]=$valoare;
    }
    public static function sessionDestroy(){
        session_destroy();
    }
    public static function getData($key){
        return $_SESSION[$key];
    }
}