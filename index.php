<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form action="">
    <input type="text" name="num1" placeholder="Number 1" />
    <input type="text" name="num2" placeholder="Number 2" />
    <select name="operator" id="">
        <option value="None">None</option>
        <option value="Add">Add</option>
        <option value="Subtract">Subtract</option>
        <option value="Multiply">Multiply</option>
        <option value="Divide">Divide</option>
    </select>
    <br />
    <button type="submit" name="submit" value="submit">Calculate</button>
</form>
<p>
    The answer is:
</p>

<!-- Start Hypertext Preprocessor -->
<?php
    // Check if the submit-button has been clicked
    if ( isset($_GET['submit']) ) {
        // Get information from URL
        $result1 = $_GET['num1'];
        $result2 = $_GET['num2'];
        $operator = $_GET['operator'];

        switch ($operator) {
            case "None": 
                echo "You need to select a method!";
            break;
            case "Add": 
                echo $result1 + $result2;
            break;
            case "Subtract": 
                echo $result1 - $result2;
            break;
            case "Multiply": 
                echo $result1 * $result2;
            break;
            case "Divide": 
                echo $result1 / $result2;
            break;

        }
    }
?>
<!-- End PHP -->

</body>
</html>