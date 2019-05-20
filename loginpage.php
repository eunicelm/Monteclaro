<!DOCTYPE html>
<html>
<head>
    <style>
        #formlogin{
            margin: auto;
            border: 1px solid #737373;
            width: 250px;
            padding: 30px;
            margin-top: 200px;
            border-radius: 20px;
            background-color: #ffcccc;
        }
        input{
            margin-top: 20px;
        }
        p{
            text-align: center;
        }
        #submit{
            display: flex; 
            justify-content: center;
        }
        #submitbutton{
            padding: 5px;
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
            <div id="submit">
            <input type="submit" value="LOGIN" name="submit"
            id="submitbutton">
            </div>
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