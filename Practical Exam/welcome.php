<?php 
    $message = "Welcome ";
    session_start();
    $name = $_SESSION['user'];
    $fname = $_SESSION['fname'];
    $lname = $_SESSION['lname'];
    $email = $_SESSION['email'];

    echo "<script type='text/javascript'>alert('$message + $name');</script>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Main Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
        <h1>Welcome <?php echo $name; ?></h1>
        <br>
        <h3>Your Information:</h3>
        <h5>Firstname: <?php echo $fname; ?> </h5>
        <h5>Lastname: <?php echo $lname; ?></h5>
        <h5>Email: <?php echo $email; ?></h5>
        <a href='logout.php' class="form-control">Click here to log out</a>
</body>
</html>