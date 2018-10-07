<?php session_start(); ?>
<!DOCTYPE html>
<html  lang="en">
<head>
    <meta charset="utf-8">


    <title>Zadatak1</title>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>
<body>

<div class="container-fluid">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="index.php">Home</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <?php

                    if(isset($_SESSION['name'])){
                        echo '<a class="nav-link" href="logout">Logout</a>';
                    }else{
                        echo '<a class="nav-link" href="login">Login</a>';
                    }
                    ?>

                </li>
            </ul>
        </div>
    </nav>
</div>
<br/><br/>
    <div class="container">
        <div class="row">
        <div class="col-sm-6">
            <!-- LOGIN -->

<form method="POST" action="login">

    <div class="form-group">
    <label class="col-form-label" id="text-login">Email</label>

    <input type="email" class="form-control form-control-lg" placeholder="Email"
    name="email_log">
    </div>

    <div class="form-group">
    <label for="inputPassword" class="col-form-label" id="text-login">Password</label>

    <input type="password" class="form-control" placeholder="Password" name="password_log">
    </div>
    <button type="submit" class="btn-lg btn-primary" name="login">Sign in</button>
    <br/><br/>

</form>

        </div>
        <div class="col-sm-6">
            <!-- REGISTER -->


    <form method="POST" action="register" name="reg_form" id="reg_form">

        <label class="col-form-label">Username</label>
        <input type="text" class="form-control"
               placeholder="First Name" name="username" >
        <br/>



        <label class="col-form-label">Email</label>
        <input type="email" class="form-control" placeholder="Email Address" name="email">
        <br/>


        <label class="col-form-label">Password</label>
        <input type="password" class="form-control"
               placeholder="Password" name="pass">
        <br/>


        <label class="col-form-label">Confirm Password</label>
        <input type="password" class="form-control"
               placeholder="Password" name="confirm_pass">
        <br/>

        <button type="submit" class="btn-lg btn-primary" name="register">
            Register
        </button>

    </form>

        </div>











        </div>
    </div>


</body>
</html>