<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Age</title>
</head>
<body>
    <?php
    $age = $_POST['age'];
    if ($age < 100) {
        echo "<h2>You are 70 years old.</h2>";
    } else {
        echo "<script>alert('Invalid Input');</script>";
        echo "<style>input { border: 1px solid red; }</style>";
        echo "<p>Please go back and enter an age less than 100.</p>";
    }?>
</body>
</html>