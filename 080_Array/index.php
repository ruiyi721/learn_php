<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- query string, query parameters -->
    <form method="get" action="hello.php">
        Your name : <input type="text" name="txtUserName">
        <input type="submit" name="btnOK" value="OK">
        <br>
        <a href="hello.php?txtUserName=dora">more...</a>
    </form>
</body>
</html>