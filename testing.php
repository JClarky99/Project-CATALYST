<!DOCTYPE html>
<html>
<head>
    <title>PHP Test</title>
</head>
<body>
    <h1>PHP Test</h1>
    <p>This is a test PHP script.</p>
    <?php
    // Output current date and time
    echo "<p>Current date and time: " . date("Y-m-d H:i:s") . "</p>";
    
    // Perform a simple calculation
    $num1 = 10;
    $num2 = 5;
    $sum = $num1 + $num2;
    echo "<p>Sum of $num1 and $num2 is: $sum</p>";
    ?>
</body>
</html>
