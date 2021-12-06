<?php
include_once "functions.php";
$fruits = ["mango","apple","watermelon","Banana","orange","pineapple"];
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
           <h2>Select</h2>
           <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptate, dignissimos recusandae? Architecto vero asperiores quis deserunt pariatur quaerat vitae dolores dolorem consequatur, maxime temporibus, impedit aut delectus a provident minima!
           </p>

           <p>
               <?php
            //   $sfruits = $_POST['fruits']; // we get warning 

            // $sfruits = $_POST['fruits'] ?? array(); // we don't get any warning because here empty array also checked

            $sfruits = filter_input(INPUT_POST,'fruits',FILTER_SANITIZE_STRING,FILTER_REQUIRE_ARRAY);
               
            if(count($sfruits)>0){
                echo "You have selected: ".join(", ",$sfruits);
            }
            ?>
           </p>
       </div>
    </div>

        

<div class="row">
    <div class="column column-60 column-offset-20">
        <form method="POST">
            <label for="fruits">Select some fruits</label>

            <select style="height:200px"; name="fruits[]" id="fruits" select multiple>
                <option value="" disabled selected>Select Some Fruits</option>
                <?php displayOptions($fruits,$sfruits); ?>
                <!-- <option value="mango">Mango</option>
                <option value="orange">Orange</option> -->
            </select>

            <button type='submit'>Submit</button>
                        
        </form>
    </div>
</div>
</div>
</body>
</html>