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


                <?php
                if(isset($_SESSION['name'])){
                    echo '<li class="nav-item">';
                    echo '<a class="nav-link" href="users">List all users</a>';
                    echo '</li>';
                    echo '<li class="nav-item">';
                    echo '<a class="nav-link" href="logout">Logout</a>';
                    echo '</li>';
                }
                else {
                    echo '<li class="nav-item">';
                   echo '<a class="nav-link" href="login">Login</a>';
                    echo '</li>';
                }
                ?>


        </ul>
    </div>
</nav>
</div>
<div class="container">
<br/><br/><center>


        <?php
        if(isset($_SESSION['name'])){
            echo '<h3>Hello &quot;'.$_SESSION["name"].' &quot;</h3>';
        }
        else {
            echo '<h3>HOME PAGE</h3>';
        }
        ?>


    </center>

    <div class="container">
        <div class="row">

        </div>
    </div>



</div>

</body>
</html>


