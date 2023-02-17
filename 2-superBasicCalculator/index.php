<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Super Basic Calculator</title>
</head>

<body>
    <h1>SUM</h1>
    <form action="index.php">
        <input type="number" name="sumNum1">
        +
        <input type="number" name="sumNum2">
        <button type="submit">total</button>
    </form>

    ANSWER : <?php echo $_GET["sumNum1"] + $_GET["sumNum2"] ?>

    <br>
    <hr>

    <h1>SUBTRACTION</h1>
    <form action="index.php">
        <input type="number" name="subtractionNum1">
        -
        <input type="number" name="subtractionNum2">
        <button type="submit">total</button>
    </form>

    ANSWER : <?php echo $_GET["subtractionNum1"] - $_GET["subtractionNum2"] ?>

    <br>
    <hr>

    <h1>MUNTIPLICATION</h1>
    <form action="index.php">
        <input type="number" name="multiplicationNum1">
        x
        <input type="number" name="multiplicationNum2">
        <button type="submit">total</button>
    </form>

    ANSWER : <?php echo $_GET["multiplicationNum1"] * $_GET["multiplicationNum2"] ?>

    <br>
    <hr>

    <h1>DIVISION</h1>
    <form action="index.php">
        <input type="number" name="divisionNum1">
        /
        <input type="number" name="divisionNum2">
        <button type="submit">total</button>
    </form>

    ANSWER : <?php echo $_GET["divisionNum1"] / $_GET["divisionNum2"] ?>

</body>

</html>