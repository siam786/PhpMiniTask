<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Even Odd Checker</title>
</head>

<body>
    <?php
    if(isset($_POST['submit'])){
        $number=$_POST['number'];
        if($number%2==0){
            echo "<h1>Even Number!</h1>";
        }else{
            echo "<h1>Odd Number!</h1>";
        }
    }
    ?>
    <h1>Even Odd Checker</h1>
    <form action="" method="POST">
        <label for="inputBtn"> Enter a number</label>
        <input type="number" name="number" id="number" required>
        <button type="submit" value="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
</body>

</html>