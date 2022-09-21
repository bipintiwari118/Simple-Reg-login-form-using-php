
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="" method="post">
    E-mail:<input type="email" name="email"><br><br>
    password: <input type="password" name="password"><br><br>
    <button>Login</button>
    </form>
    <?php
    if( isset( $_POST['email'] ) ){
        $email = $_POST['email'];
        $password = $_POST['password'];

        if( $email == $_COOKIE['email'] && $password == $_COOKIE['password'] ){
            echo "Login Successfully";
        }else{
            echo "Invalid User Details";
        }
    }
    
    
    ?>
</body>
</html>



