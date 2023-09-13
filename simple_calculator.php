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
        $result=0;
       
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
            
            echo "<h2 id='result'>Result: $result</h2>";
       
 
    }
    ?>
    <!-- Build a PHP calculator named simple_calculator.php that performs basic arithmetic operations. Provide input fields -->
    <!-- for two numbers and a dropdown to select the operation (addition, subtraction, multiplication, division). Display
    the result of the chosen operation.
</body> -->
    <h1>Simple Calculator</h1>
    <form id="form" method="POST">
        <input type="number" name="num1" placeholder="Enter first number" required><br>
        <input type="number" name="num2" placeholder="Enter second number" required><br>
        <select name="operation">
            <option value="add">+</option>
            <option value="sub">-</option>
            <option value="mul">*</option>
            <option value="div">/</option>
        </select><br>
        <input id="showBtn" type="submit" name="submit" value="Submit">
    </form>
    <!-- <script>
    let result = document.getElementById("result");
    let showBtn = document.getElementById("showBtn");
    let form = document.getElementById("form");
    form.addEventListener("submit", function(event) {
        event.preventDefault()
    })
    result.style.display = "none";
    showBtn.onclick = function() {
        result.style.display = "block";

    } -->
    </script>

</html>