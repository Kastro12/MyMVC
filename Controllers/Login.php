<?php

class Login extends Controller
{

    public static function doSomething()
    {
      // print_r( self::query("select * from users"));

        if(isset($_SESSION['name']))
        {
            header("Location:index.php");
        }

        if(isset($_POST['login']) && $_POST['email_log'] && $_POST['password_log'])
        {
            $email = $_POST['email_log'];
            $pass = $_POST['password_log'];

         $emailFromBase = self::query("SELECT * FROM `users` WHERE `email`= '$email'");

            $emailCount = count($emailFromBase);

            if($emailCount < 1)
            {
    echo "<script>alert('An account with this email does not exist!');</script>";
                return false;
            }

     //   $users = self::query("SELECT * FROM users");

            foreach ($emailFromBase as $user) {

           //     var_dump($user['password']);die;
           //     var_dump($pass);die;

                if(password_verify($pass, $user['password'])){

                    $_SESSION['name']=$user['username'];
                    $_SESSION['email']=$user['email'];
                    header("Location:index.php");
                }else
                {
                    echo "<script>alert('Wrong password!');</script>";
                    return false;
                }

            }



        }

    }

}



?>