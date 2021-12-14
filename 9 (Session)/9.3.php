<?php
session_start(
    [
        'cookie_lifetime' => 3600, //60 min
]);
$error = false;
// session_destroy();

if(isset($_POST['username']) && isset($_POST['password'])){
    if($_POST['username'] && 'a51e47f646375ab6bf5dd2c42d3e6181' == md5($_POST['password'])){
        $_SESSION['loggedin'] = true;
    }else{
        $error = true;
        $_SESSION['loggedin'] = false;
    }
}

if(isset($_POST['logout'])){
    $_SESSION['loggedin'] = false;
    session_destroy();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="//cdn.rawgit.com/necolas/normalize.css/master/normalize.css">
    <link rel="stylesheet" href="//cdn.rawgit.com/milligram/milligram/master/dist/milligram.min.css">
    <title>Session</title>
    <style>
        body{
            margin-top: 30px;
        }
    </style>
</head>
<body>
    <div class="contailer">
        <div class="row">
            <div class="column column-60 column-offset-20">
                <h2>Simple Auth</h2>
            </div>    
        </div>

        <div class="row">
            <div class="column column-60 column-offset-20">
                <?php
                // echo md5("rabbit")."<br/>";
                if($_SESSION['loggedin'] == true){
                    echo "Hello Admin,Welcome";
                }else{
                    echo "Hello Stranger,Login Below";
                }
                ?>
                <h2>Hello Stranger, Login Below</h2>
            </div>    
        </div>

        <div class="row">
            <div class="column column-60 column-offset-20">
                <?php
                if($error){
                    echo "<blockquote>Invalid Username or Password</blockquote>";
                } 
                if($_SESSION['loggedin'] == false):    
                ?>
                <form method="POST">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username">
                    
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password">
                    
                    <button type="submit" class="button-primary" name="submit">Log in</button>
                </form>
                <?php 
                else:
                ?>
                <form action="/9.3.php?logout=true" method="POST">
                    <input type="hidden" name="logout" value="1">
                    <button type="submit" class="button-primary" name="submit">Logout</button>
                </form>
                <?php
                endif;
                ?>
            </div>    
        </div>



    </div>


    
    
</body>
</html>