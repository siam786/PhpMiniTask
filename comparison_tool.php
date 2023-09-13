<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comparison Tool</title>
</head>

<body>
    <?php
    if(isset($_POST['submit'])){
        $number1=$_POST['number1'];
        $number2=$_POST['number2'];
        //ternary operator
        $larger=$number1>$number2 ? $number1 : $number2;
        echo "<h2>This is Larger Number: {$larger}</h2>";

    }
    ?>
    <h1>Comparison Tool</h1>
    <form action="" method="POST">
        <label for="number1">Enter Number 1</label>
        <input type="number" name="number1" id="number1" required>
        <label for="number2">Enter Number 2</label>
        <input type="number" name="number2" id="number2" required>
        <input type="submit" value="submit" name="submit">
    </form>
</body>

</html>