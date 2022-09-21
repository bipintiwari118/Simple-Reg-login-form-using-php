   <?php 
        // setcookie("email",$email,time()+600)
        // setcookie("fname",$fname,time()+600)
        // setcookie("lname",$lname,time()+600)
        // setcookie("password",$password,time()+600)
?> 
  
  
  
  
  <!DOCTYPE html>
<html lang="en">

<head>

    <title>Register</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <form action="" method="post">
        First name: <input type="text" name="fname" placeholder='First Name'><br><br>
        Last name: <input type="text" name="lname" placeholder='Last Name'><br><br>
        Email: <input type="email" name="email" placeholder='Email'><br><br>
        Password: <input type="password" name="password" placeholder='password'><br><br>
        I'm not a robot : <input required type="checkbox" name="" id=""><br><br>
        Now Register : <button>Register</button>
    </form>
    <?php

 
        if(isset($_POST["email"])){
            $fname =$_POST["fname"];
            $lname =$_POST["lname"];
            $email =$_POST["email"];
            $password =$_POST["password"];

            setcookie("email",$email,time()+600, '/');
            setcookie("fname",$fname,time()+600, '/');
            setcookie("lname",$lname,time()+600, '/');
            setcookie("password",$password,time()+600, '/');
             
        header("Location:http://localhost/Form/login.php");
        exit;
        }
        
       
        
        
    ?>
</body>

</html>