<?php
header('X-XSS-Protection:0'); 
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">
        <title>Form Example</title>
        <style>
            body{
                margin-top:30px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="column column-60 column-offset-20">
                    <h1>Our First Form</h1>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsam minus enim magni fugiat quos natus culpa aliquid quod eaque eum.</p>

                    <p>
                        <?php 
                        $fname = '';
                        $lname = '';  
                        ?>

                        <?php if(isset($_REQUEST['fname']) && !empty($_REQUEST['fname'])){ 
                           // $fname = htmlspecialchars($_REQUEST['fname']);
                           $fname = filter_input(INPUT_POST,'fname',FILTER_SANITIZE_STRING);
                         } ?> 
                        
                        <?php if(isset($_REQUEST['lname']) && !empty($_REQUEST['lname'])){ 
                            //$lname = htmlspecialchars($_REQUEST['lname']);
                            $lname = filter_input(INPUT_POST,'lname',FILTER_SANITIZE_STRING);
                        } ?>                 
                    </p>   
                    <P>
                        First Name: <?php echo $fname; ?><br>
                        Last Name: <?php echo $lname; ?>
                    </P>
                    

                </div>
            </div>
            <div class="row">
                <div class="column column-60 column-offset-20">
                    <form method="POST">
                        <label for="fname">First Name</label>
                        <input type="text" name="fname" id="fname" value ="<?php echo $fname; ?>">

                        <label for="lname">Last Name</label>
                        <input type="text" name="lname" id="lname" value ="<?php echo $lname; ?>">

                        <button types="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>