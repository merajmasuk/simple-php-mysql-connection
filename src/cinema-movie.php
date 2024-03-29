<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type ="text/css" href="../resources/static/css/table.css">
    <title>Display Data</title>
</head>
<body>
    <div class="card">
        <?php
            $creds = parse_ini_file("../conf.d/php.ini", "r");
            $link = mysqli_connect("127.0.0.1", $creds[username], $creds[password], "cinema");

            if (!$link) {
                printf("Could not connect to database: %s\n", mysqli_connect_error());
                exit();
            }
            $query = "SELECT * FROM movie";
            $result = mysqli_query( $link, $query);

            if (!$result) {
                printf("Error in connection: %s\n", mysqli_error($link));
                exit();
            }
            echo("<h1>Table: MOVIE</h1>");
            while ( $row = mysqli_fetch_assoc( $result ) ) {
                $table[] = $row;	//add each row into the table array
            }
            if($table){
        ?>
        <table>
            <tr>
                <th id="column-first">Movie ID</th>
                <th id="column-second">Movie Title</th>
                <th id="column-third">Release Year</th>
            </tr>
        <?php
            foreach($table as $d_row) {
        ?>

            <tr>
                <td id="column-first"><?php echo($d_row["mid"]); ?></td>
                <td id="column-second"><?php echo($d_row["mtitle"]); ?></td>
                <td id="column-third"><?php echo($d_row["myear"]); ?></td>
            </tr>
        <?php

            }
        ?>
        </table>
        <?php
            }
            mysqli_close($link);
        ?>
    </div>
    <a href="home.php">Return to home</a>
</body>
</html>
