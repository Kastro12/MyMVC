<?php

class Users extends Controller
{

    public static function doSomething()
    {

      if(!isset($_SESSION['name']))
      {
          header("Location:login");
      }


      $allUsers = self::query('select * from users order by register_time desc ');

            $_SESSION['users']=$allUsers;

    }
}

?>