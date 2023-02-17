<!DOCTYPE html>
<html lang="pt-Br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Getting Input from User</title>
</head>

<body>
    <form action="index.php" method="get">
        Name:
        <input type="text" name="username" />
        <br>

        Email:
        <input type="text" name="email" />
        <br>

        Password:
        <input type="password" name="password" />
        <br>

        <button type="submit">Submit</button>
    </form>

    <br>

    Your Username --> <?php echo $_GET["username"] ?>
    <hr>
    <br>


    Your Email --> <?php echo $_GET["email"] ?>
    <hr>
    <br>


    Your password --> <?php echo $_GET["password"] ?>
</body>

</html>