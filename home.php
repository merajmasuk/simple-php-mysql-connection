<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type ="text/css" href="resources/static/css/style.css">
    <!--<link rel="stylesheet" type ="text/css" href="resources/static/css/nav.css">-->
    <title>Cinema Database</title>
</head>
<body>
    <!--<div>
        <header style="width: 100%">
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="insert.php">Insert</a></li>
                <li><a href="view.php">View</a></li>
            <ul>
        </header>
    </div>-->
    <div class="card">
        <div>
            <h1>Welcome to Cinema Database</h1>
            <h2>Choose any of the option below</h2>
        </div>
        <div>
            <div>
                <button id="half" onclick="choose(1)">Insert</button>
                <button id="half" onclick="choose(2)">View</button>
            </div>
        </div>
    </div>
    <script>
        function choose(opt) {
            if (opt == 1) {
                window.location.href = "insert.php"
            }
            if (opt == 2) {
                window.location.href = "view.php"
            }
        }
    </script>

</body>

</html>
