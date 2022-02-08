<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type ="text/css" href="resources/static/css/style.css">
    <title>Insert</title>
</head>
<main>
    <div class="card">
        <div>
            <h1>Welcome to Cinema Database</h1>
            <h2>Please select one option to insert data</h2>
        </div>
        <div>
            <div>
                <button id="half" onclick="Fun(1)">Insert Movie</button>
                <button id="half" onclick="Fun(2)">Insert Person</button>
                <button id="half" onclick="Fun(3)">Insert Role</button>
            </div>
        </div>
    </div>
    <script>
        function Fun(opt) {
            if (opt == 1) {
                window.location.href = "Movietable.php"
            }
            if (opt == 2) {
                window.location.href = "Persontable.php"
            }
            if (opt == 3) {
                window.location.href = "Roletable.php"
            }
        }
    </script>

</main>

</html>
