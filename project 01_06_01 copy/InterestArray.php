<!DOCTYPE html>
<html lang="en">
<head>

    <!--
        Project 01_06_01
    
        Interest Array 
        Author: Christopher Kim
        Date:   1.31.20
        Filename: InterestArray.php
    -->

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- I add a link for BootStrap to add style to my page. -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Interest Array</title>
    <script src="modernizr.custom.65897"></script>

</head>
<body>
    <!-- This is the nav bar from Bootstrap. -->
    <nav class="navbar navbar-expand-sm bg-light navbar-light">
        
        <ul class="navbar-nav">
            <!-- I link each of the php files to the navbar items. -->
            <li class="nav-item active">
                <a class="nav-link" href="InterestArray.php">Interest Array</a>
            </li>
            
            <li class="nav-item">
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
            echo "<h2>Interest Array</h2>";

            #These are variables created to hold the interest rates.
            $interestRate1 =.0725;
            $interestRate2 =.0750; 
            $interestRate3 =.0775;
            $interestRate4 =.0800;
            $interestRate5 =.0825;
            $interestRate6 =.0850;
            $interestRate7 =.0875;

            #This is the array that is currently holding the interest rates as integers.
            $ratesArray = array(
                $interestRate1,
                $interestRate2,
                $interestRate3,
                $interestRate4,
                $interestRate5,
                $interestRate6,
                $interestRate7
            );
            
            
            echo number_format($ratesArray[0], 4)."<br>";
            echo number_format($ratesArray[1], 4)."<br>";
            echo number_format($ratesArray[2], 4)."<br>";
            echo number_format($ratesArray[3], 4)."<br>";
            echo number_format($ratesArray[4], 4)."<br>";
            echo number_format($ratesArray[5], 4)."<br>";
            echo number_format($ratesArray[6], 4)."<br>";

        ?>
</div>
</body>
</html>