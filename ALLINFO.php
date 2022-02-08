<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type ="text/css" href="resources/static/css/table.css">
    <title>Display Data</title>
</head>
<body>
    <div  class="card">
        <?php
            $creds = parse_ini_file("php.ini", "r"); 
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
                <th id="column-first">MOVIE ID</th>
                <th id="column-second">MOVIE NAME</th>
                <th id="column-third">RELEASE YEAR</th>
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
    </div>
    <div  class="card">
        <?php
            }

            $query1 = "SELECT * FROM person";
            $result1 = mysqli_query( $link, $query1);

            if (!$result1) {
                printf("Error in connection: %s\n", mysqli_error($link));
                exit();
            }
            echo("<h1>Table: PERSON</h1>");
            while ( $row1 = mysqli_fetch_assoc( $result1 ) ) {
                $table1[] = $row1;	//add each row into the table array
            }
            if($table1){
        ?>
        <table>
            <tr>
                <th id="column-first">Person ID</th>
                <th id="column-second">Person Name</th>
                <th id="column-third">Person DOB</th>
            </tr>
        <?php
            foreach($table1 as $d_row1) {    
        ?>
            <tr>
                <td id="column-first"><?php echo($d_row1["pid"]); ?></td>
                <td id="column-second"><?php echo($d_row1["pname"]); ?></td>
                <td id="column-third"><?php echo($d_row1["pdob"]); ?></td>
            </tr>         
        <?php	

            }	

        ?>
        </table>
    </div>
    <div  class="card">
        <?php
            }

            $query2 = "SELECT * FROM role";
            $result2 = mysqli_query( $link, $query2);

            if (!$result2) {
                printf("Error in connection: %s\n", mysqli_error($link));
                exit();
            }
            echo("<h1>Table: ROLE</h1>");
            while ( $row2 = mysqli_fetch_assoc( $result2 ) ) {
                $table2[] = $row2;	//add each row into the table array
            }
            if($table2){
        ?>
        <table>
            <tr>
                <th id="column-first">MOVIE ID</th>
                <th id="column-second">Person ID</th>
                <th id="column-third">Part</th>
            </tr>
        <?php
            foreach($table2 as $d_row2) {
        ?>
            <tr>
                <td id="column-first"><?php echo($d_row2["mid"]); ?></td>
                <td id="column-second"><?php echo($d_row2["pid"]); ?></td>
                <td id="column-third"><?php echo($d_row2["part"]); ?></td>
            </tr>         
        <?php	

            }	

        ?>
        </table>
    </div>
    <?php
        }
        mysqli_close($link);
    ?>
</body>
</html>
