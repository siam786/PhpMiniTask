<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather Report</title>
</head>

<body>
    <?php
    if(isset($_POST['submit'])){
        $weather = $_POST['weather'];
        if($weather=="freezing"){
            echo "<h3>It is freezing</h3>";
        }
        else if($weather=="cool"){
            echo "<h3>It is cool</h3>";
        }
        else if($weather=="warm"){
            echo "<h3>It is warm</h3>";
        }
    }
    ?>
    <h1>Weather Report</h1>
    <form action="" method="POST">
        <label for="Select Weather">
            <select name="weather" id="weather">
                <option value="freezing">Freezing</option>
                <option value="cool">Cool</option>
                <option value="warm">Warm</option>
            </select>
            <input type="submit" value="submit" name="submit">

        </label>
    </form>
</body>

</html>