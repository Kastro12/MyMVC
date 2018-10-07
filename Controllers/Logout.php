<?php

class Logout extends Controller
{

    public static function doSomething()
    {

        session_destroy();
        header("/index.php");
    }
}

?>