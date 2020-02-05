<!DOCTYPE html>
<html lang="en">
<head>

    <!--
        Project 01_06_01
    
        Days Array 
        Author: Christopher Kim
        Date:   02.03.20
        Filename: DaysArray.php
    -->

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- I add a link for BootStrap to add style to my page. -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Days Array</title>
    <script src="modernizr.custom.65897.js"></script>
</head>
<body>
    <!-- This is the nav bar from Bootstrap. -->
    <nav class="navbar navbar-expand-sm bg-light navbar-light">
        
        <ul class="navbar-nav">
            <!-- I link each of the php files to the navbar items. -->
            <li class="nav-item">
                <a class="nav-link" href="InterestArray.php">Interest Array</a>
            </li>
            
            <li class="nav-item active">
                <a class="nav-link" href="DaysArray.php">Days Array</a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link" href="IsEven.php">Is Even</a>
            </li>
        
        </ul>
    </nav>
    <!-- This is where the php code itself is styled. It is centered and the font and size changes, -->
    <div class="jumbotron text-center">
        <?php
            #This is the big bold text near the top of the page.
            echo "<h2>Days Of The Week</h2>";

            #This is the array that is currently holding the days of the week as strings.
            $days = array(
                "Monday, ", 
                "Tuesday, ", 
                "Wednesday, ",
                "Thursday, ", 
                "Friday, ", 
                "Saturday, ", 
                "Sunday."
            );

            #Here I am combining a string and calling each array value (index).
            echo "The days of the week in English are: ", $days[0] , $days[1] , $days[2] , $days[3] , $days[4] , $days[5] , $days[6], "<br>";

            #Here I reassign each array index to the days of the week in French.
            $days[0] = "Dimanche, ";
            $days[1] = "Lundi, ";
            $days[2] = "Mardi, ";
            $days[3] = "Mercredi, ";
            $days[4] = "Jeudi, ";
            $days[5] = "Vendredi, ";
            $days[6] = "Samedi.";

            #I do the same thing as before but the difference is I introduce each array index as French words.
            echo "The days of the week in French are: ", $days[0] , $days[1] , $days[2] , $days[3] , $days[4] , $days[5] , $days[6], "<br>";

        ?>
</div>
</body>
</html>