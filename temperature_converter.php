<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperature Converter</title>
</head>

<body>
    <?php
    if (isset($_POST['submit'])) {
        $temperature = $_POST['temperature'];
        $conversion = $_POST['conversion'];
        $result = 0;
        if ($conversion == "c_to_f") {
            $result = ($temperature * 9 / 5) + 32;
            $Round_no=round($result,2);
            echo "<h2>Result: $temperature °C = $Round_no °F</h2>";
        } elseif ($conversion == "f_to_c") {
            $result = ($temperature - 32) * 5 / 9;
            $Round_no=round($result,2);
            echo "<h2>Result: $temperature °F = $Round_no °C</h2>";
        }
    }
    ?>
    <!-- HTML Form -->
    <h1>Temperature Converter</h1>
    <form method="POST" action="">
        <label for="temperature">Enter Temperature</label>
        <input type="number" name="temperature" required>
        <br>
        <label for="conversion">Select Conversion</label>
        <select name="conversion" id="conversion" required>
            <option value="c_to_f">Celsius to Fahrenheit</option>
            <option value="f_to_c">Fahrenheit to Celsius</option>
        </select>
        <br>
        <input type="submit" name="submit" value="Convert">
    </form>
</body>

</html>