
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type ="text/css" href="../resources/static/css/style.css">
    <title>View</title>
</head>


<body>
    <div class="card">
        <div>
            <h1>Welcome to Cinema Database</h1>
            <h2>Please select one of the options to view data</h2>
        </div>
        <div>
            <div>
                <button id="half" onclick="Fun(1)">View movies</button>
                <button id="half" onclick="Fun(2)">View persons</button>
                <button id="half" onclick="Fun(3)">View Roles</button>
                <button id="half" onclick="Fun(4)">View all</button>
            </div>
        </div>
    </div>
    <script>
        function Fun(opt) {
            if (opt == 1) {
                window.location.href = "cinema-movie.php"
            }
            if (opt == 2) {
                window.location.href = "cinema-role.php"
            }
            if (opt == 3) {
                window.location.href = "cinema-person.php"
            }
            if (opt == 4) {
                window.location.href = "ALLINFO.php"
            }
        }
    </script>

</body>
</html>
