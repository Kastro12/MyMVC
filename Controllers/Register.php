<?php

class Register extends Controller
{

    public static function doSomething()
    {
        // print_r( self::query("select * from users"));

        $regularChar = "/[^a-z]/";

        if(isset($_POST['register']) &&
            $_POST['username'] &&
            $_POST['email'] &&
            $_POST['pass'] &&
            $_POST['confirm_pass'])
        {
           if($_POST['pass']!==$_POST['confirm_pass'])
           {
               echo "<script>alert('Password and Confirm password  do not match!');</script>";
               return false;
           }


           $username = $_POST['username'];
           $email = $_POST['email'];
           $pass = $_POST['pass'];
            $time = date("Y-m-d H:i:s");


           if(strlen($pass) < 5 or strlen($pass) > 15)
           {
   echo "<script>alert('Password should be between 5 and 15 characters');</script>";
   return false;
           }

    $emailQuery =
        self::query("select username from users where email='$email'");

    $emailConut  = count($emailQuery);

    if($emailConut > 0)
    {
    echo "<script>alert('Warning: An account with this email already exists!');</script>";
    return false;
    }


    $options =['cost'=>11, 'salt'=>mcrypt_create_iv(22, MCRYPT_DEV_URANDOM)];
    $hashPass = password_hash($pass,  PASSWORD_BCRYPT, $options);
            $hash = substr( $hashPass, 0, 60 );

    $insert =self::query("INSERT INTO users SET 
        username = '$username',
        email = '$email',
        register_time = '$time',
        password = '$hash'
        ");

    if($insert){
        echo "<script>alert('Registration unsuccessful!');</script>";
        return false;
    }else{
        echo "<script>alert('Registration successful!!!');</script>";
    }

        }


    }

}


?>