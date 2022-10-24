<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Query Page</title>
</head>
<body>
    <div class = "container">
        <div class = "header">
            <h2>Input query</h2>
        </div>
        <form action = "output.php" method = "post">

            <div>
                <label for = "timestamp">Timestamp</label>
                <input type = "text" name = "timestamp">
            </div>
            <div>
                <label for = "meterid">meter id</label>
                <input type = "number" name = "meterid">
            </div>
            <button type = "submit"> Submit</button>
        </form>
    </div>
</body>
</html>
