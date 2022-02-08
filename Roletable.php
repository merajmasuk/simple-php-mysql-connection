<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type ="text/css" href="resources/static/css/style.css">
    <title>Role table</title>
</head>
<body>
    <?php if ($_SERVER['REQUEST_METHOD'] === 'GET') : ?>
    <div class="contact-title">
        <h1>Welcome to Role Table</h1>
        <h2>Please Insert data</h2>
    </div>
    <div class="screen">
        <div class="screen__content">
            <form form action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post" class="login">
                <div class="login__field">
                    <input type="number_format" name="mid" class ="login__input" required="required" placeholder="Enter Movie ID" />
                    
                </div>
                <div class="login__field">
                <input type="number_format" name="pid" class ="login__input" required="required" placeholder="Enter Person ID" />
                    
                </div>
                <div class="login__field">
                    <input type="text" name="part" class ="login__input" required="required" placeholder="Enter Role A/D" />
                </div>
                <button class="button login__submit">
                    <span class="button__text">INSERT</span>
                </button>				
            </form>
            
        </div>
    </div>

    <?php else : ?>

    <?php
        //Example of fetching data from a database
        //Display is output into an HTML table


        //Make a connection to the database
        //databasehostname is usually "localhost"
        $creds = parse_ini_file("php.ini", "r"); 
        $link = mysqli_connect("127.0.0.1", $creds[username], $creds[password], "cinema");

        //Check the connection
        if (!$link) {
            printf("Could not connect to database: %s\n", mysqli_connect_error());
            exit();
        }

        $mid = htmlspecialchars($_POST['mid']);
        $pid = htmlspecialchars($_POST['pid']);
        $part = htmlspecialchars($_POST['part']);

                
        $sql = "INSERT INTO role (mid, pid, part) VALUES ('$mid', '$pid', '$part')";


        if (mysqli_query($link, $sql)) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $link->error;
        }
    ?>
    
    <br>
    <button id="half" onclick="choose(1)">Try again</button>
    <button id="half" onclick="choose(2)">Go home</button>
    
    <?php

        $link->close();
    ?>
    
    <?php endif ?>
    
    
    <script>
        function choose(opt) {
            if (opt == 1) {
                window.location.href = "Roletable.php"
            }
            if (opt == 2) {
                window.location.href = "home.php"
            }
        }
    </script>
</body>

</html>
