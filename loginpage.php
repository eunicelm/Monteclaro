<!DOCTYPE html>
<html>
<head>
    <style>
        #formlogin{
            margin: auto;
            border: 1px solid black;
            width: 250px;
            padding: 30px;
            margin-top: 200px;
            border-radius: 20px;
        }
        input{
            margin-top: 20px;
        }
        p{
            text-align: center;
        }
    </style>
</head>
<body>
    <div id="formlogin">
        <form id="login" method="post">
            Username:
            <input id="username" name="username" type="text" required><br>
            Password:
            <input id="password" name="password" type="password" required>                    
            <br>
            <input type="submit" value="Login" name="submit">
        </form>
    </div>
</body>
<?php

if (isset($_POST['submit'])) {

    if(!empty($_POST["username"]) && !empty($_POST["password"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];
        
        if($username == 'user' && $password == 'password') {
            session_start();
            echo "<p>Login Successfully!</p>";
        }
        else {
            echo "<p>Invalid Username or Password";
        }
    }
}
?>
</html>