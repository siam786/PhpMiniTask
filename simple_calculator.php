<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
</head>

<body>
    <?php
    if(isset($_POST['submit'])){
        $num1=$_POST['num1'];
        $num2=$_POST['num2'];
        $operation=$_POST['operation'];
        if($operation=='add'){
            $result=$num1+$num2;
        }
        elseif($operation=='sub'){
      
            $result=$num1-$num2;
            
        }
        elseif($operation=='mul'){
            $result=$num1*$num2;
        }
        elseif($operation=='div'){
            $result=$num1/$num2;
        }
        echo "<h2>Result: $result</h2>";
    }
    ?>
    <!-- Build a PHP calculator named simple_calculator.php that performs basic arithmetic operations. Provide input fields -->
    <!-- for two numbers and a dropdown to select the operation (addition, subtraction, multiplication, division). Display
    the result of the chosen operation.
</body> -->
    <h1>Simple Calculator</h1>
    <form action="" method="POST">
        <input type="number" name="num1" placeholder="Enter first number" required><br>
        <input type="number" name="num2" placeholder="Enter second number" required><br>
        <select name="operation">
            <option value="add">+</option>
            <option value="sub">-</option>
            <option value="mul">*</option>
            <option value="div">/</option>
        </select><br>
        <input type="submit" name="submit" value="Submit">


    </form>

</html>