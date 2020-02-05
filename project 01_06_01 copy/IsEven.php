<!DOCTYPE html>
<html lang="en">
<head>

<!--
    Project 01_06_01
    
    Is Even 
    Author: Christopher Kim
    Date:   2.04.20
    Filename: IsEven.php
-->

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- I add a link for BootStrap to add style to my page. -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Is Even</title>
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-light navbar-light">
        
        <ul class="navbar-nav">

            <li class="nav-item">
                <a class="nav-link" href="InterestArray.php">Interest Array</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="DaysArray.php">Days Array</a>
            </li>

            <li class="nav-item active">
                <a class="nav-link" href="IsEven.php">Is Even</a>
            </li>

        </ul>
    </nav>
    <div class="jumbotron text-center">

        <?php

            echo "<h2>Is Even</h2>";

            $numbersArray = array(
            rand(0,999999999),
            rand(0,999999999),
            rand(0,999999999),
            rand(0,999999999),
            rand(0,999999999),
            rand(0,999999999),
            rand(0,999999999),
            rand(0,999999999),
            rand(0,999999999),
            rand(0,999999999)
            );


            if($numbersArray[0] % 2){
                echo "$numbersArray[0] ", "is an odd number<br>";
            }else{
                echo "$numbersArray[0] ", "is an even number<br>";
            }"<br>";

            if($numbersArray[1] % 2){
                echo "$numbersArray[1] ", "is an odd number<br>";
            }else{
                echo "$numbersArray[1] ", "is an even number<br>";
            };

            if($numbersArray[2] % 2){
                echo "$numbersArray[2] ", "is an odd number<br>";
            }else{
                echo "$numbersArray[2] ", "is an even number<br>";
            };

            if($numbersArray[3] % 2){
                echo "$numbersArray[3] ", "is an odd number<br>";
            }else{
                echo "$numbersArray[3] ", "is an even number<br>";
            };

            if($numbersArray[4] % 2){
                echo "$numbersArray[4] ", "is an odd number<br>";
            }else{
                echo "$numbersArray[4] ", "is an even number<br>";
            };

            if($numbersArray[5] % 2){
                echo "$numbersArray[5] ", "is an odd number<br>";
            }else{
                echo "$numbersArray[5] ", "is an even number<br>";
            };

            if($numbersArray[6] % 2){
                echo "$numbersArray[6] ", "is an odd number<br>";
            }else{
                echo "$numbersArray[6] ", "is an even number<br>";
            };

            if($numbersArray[7] % 2){
                echo "$numbersArray[7] ", "is an odd number<br>";
            }else{
                echo "$numbersArray[7] ", "is an even number<br>";
            };

            if($numbersArray[8] % 2){
                echo "$numbersArray[8] ", "is an odd number<br>";
            }else{
                echo "$numbersArray[8] ", "is an even number<br>";
            };

            if($numbersArray[9] % 2){
                echo "$numbersArray[9] ", "is an odd number<br>";
            }else{
                echo "$numbersArray[9] ", "is an even number<br>";
            };

    ?>
</div>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>