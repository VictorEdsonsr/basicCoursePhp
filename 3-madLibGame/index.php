<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mad Lib Game</title>
</head>

<body>

    <form action="index.php" method="get">
        Verb:
        <input type="text" name="verb" />
        <br>

        Adverb:
        <input type="text" name="adverb" />
        <br>

        Adjective:
        <input type="text" name="adjective" />
        <br>

        <button type="submit">Submit</button>
    </form>

    <?php
    $verb = $_GET["verb"];
    $adverb = $_GET["adverb"];
    $adjective = $_GET["adjective"];

    echo "I $adverb $verb That I Am Up to No $adjective";
    ?>
</body>


</html>