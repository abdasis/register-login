<?php

class Input{
    public static function get($nama)
    {
        if (isset($_POST[$nama])) {
            return $_POST[$nama];
        }else if (isset($_GET[$nama])) {
            return $_GET[$nama];
        }else{
            return false;
        }
    }
}