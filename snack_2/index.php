<?php
    if (isset($_GET['firstName']) && 
        isset($_GET['email']) &&
        isset($_GET['age']) ) {
        $name = $_GET['firstName'];
        $mail = $_GET['email'];
        $age = $_GET['age'];
    } 
    else {
        $name = '';
        $mail = '';
        $age = '';
    };

    $pos_at = strpos($mail, '@');
    $pos_dot = strpos($mail, '.', $pos_at);

    if ($pos_at && $pos_dot && (strlen($name)>3) && is_numeric($age) ) {
        $message = 'login successful';
    }
    else {
        $message = 'login unsuccessful';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 2</title>
</head>
<body>
    <h1>Snack 2</h1>
    <form action="" method="get">
        <label for="userFirstName">First name:</label>
        <input type="text" name="firstName" id="userFirstName">
        <label for="userEmail">Email:</label>
        <input type="text" name="email" id="userEmail">
        <label for="userAge">Age:</label>
        <input type="text" name="age" id="userAge">
        <button>Submit</button>
    </form>
    <h1><?php echo $message ?></h1>
</body>
</html>