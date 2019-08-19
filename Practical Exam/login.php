<?php
    
    $mess= "";
    if(isset($_POST['login'])){
        session_start();
        $_SESSION['user'] = htmlentities($_POST['username']);
        $_SESSION['pword'] = htmlentities($_POST['password']);
        if(!empty($_POST['username']) && !empty($_POST['password'])){
            if($_SESSION['user'] === $_POST['username'] && $_SESSION['pword'] == $_POST['password']){
                header('Location:welcome.php');
            }
        }else {
            $mess= "Please enter a valid username and password!";
        }
    }
    if(isset($_POST['signup'])){
        header ('Location: signup.php');
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']?>">
        <div class="jumbotron jumbotron-fluid" >
            <div class="container">
                <div class="form-group">
                    <h1>Login Form</h1>
                    <label>Username</label>
                    <input type="text" name="username" class="form-control" />
                </div>
                <div class="form-group">
                    <label>Password: </label>
                    <input type="password" name="password" class="form-control" />
                </div>
                <br>
                <div class= "form-group">
                    <button type="submit" class="form-control" name="login">Login</button>
                    <br>
                    <button type="submit" class="form-control" name="signup">Signup</button>
                </div>
                <p style="color:red"> <?php echo $mess; ?></p>
            </div>
        </div>
    </form>
</body>
</html>