<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade Calculation</title>
    <style>
    .green {
        color: green
    }

    .pink {

        color: pink
    }

    .orange {
        color: orange
    }

    .red {
        color: red
    }
    </style>
</head>

<body>

    <?php 
    if(isset($_POST['calculate'])){
        $score1=$_POST['score1'];
        $score2=$_POST['score2'];
        $score3=$_POST['score3'];
        $average=($score1+$score2+$score3)/3;
        $round_no=round($average,2);
        if($round_no>=90){
            $grade = 'A';
            $color='green';
        }elseif($round_no>=80){
            $grade = 'B';
            $color='pink';
        }elseif($round_no>=70){
            $grade = 'C';
            $color='orange';
        }elseif($round_no>=60){
            $grade = 'D';
            $color='red';
        }else{
            $grade = 'F';
            $color='red';
        }   

        
        echo "<h2 id='average'>Average Score: $round_no <br> </h2>";
        echo "<h2 id='grade' class='$color'>Grade: $grade</h2>";
        
    }
    ?>
    <h1>Grade Calculation</h1>
    <form action="" method="POST">
        <label for="score1">Test Score 1</label>
        <input type="number" name="score1" id="score1" required>
        <br>
        <label for="score2">Test Score 2</label>
        <input type="number" name="score2" id="score2" required>

        <br>
        <label for="score3">Test Score 3</label>
        <input type="number" name="score3" id="score3" required>

        <input type="submit" name="calculate" value="Calculate">

    </form>

    <!--    <script>
    let averageElement = document.getElementById('average')
    let resultElement = document.getElementById('grade');
    averageElement.style.display = 'none';
    resultElement.style.display = 'none';
    //select submit button
    let showAverageGrade = () => {
        averageElement.style.display = 'block'
        resultElement.style.display = 'block'
    }


    let submit = document.querySelector('input[type="submit"]');
    setTimeout(() => {
        submit.addEventListener('click', showAverageGrade)
    }, 8000);
    </script> -->
</body>

</html>