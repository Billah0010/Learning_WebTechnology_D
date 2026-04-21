<?php

if(isset($_POST['submit'])){

    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username == "" || $password == ""){
        echo "null username/password!";
    }
    elseif(strlen($username) < 2){
        echo "more than 2 character";
    }
    else{

        $valid = true;

        for($i = 0; $i < strlen($username); $i++){
            $ch = $username[$i];

            if(
                ($ch >= 'a' && $ch <= 'z') ||
                ($ch >= 'A' && $ch <= 'Z') ||
                ($ch >= '0' && $ch <= '9') ||
                $ch == '.' ||
                $ch == '-' ||
                $ch == '_'
            ){
                // valid character
            }
            else{
                $valid = false;
                break;
            }
        }

        if(!$valid){
            echo "Username can contain only letters, numbers, ., - or _";
        }
        elseif(strlen($password) < 8){
            echo "Password must not be less than 8 characters!";
        }
        else{

            $char = false;

            for($i = 0; $i < strlen($password); $i++){
                $ch = $password[$i];

                if($ch == '@' || $ch == '#' || $ch == '$' || $ch == '%'){
                    $char = true;
                    break;
                }
            }

            if(!$char){
                echo "Password must contain at least one special character (@, #, $, %)!";
            }
            else{
                echo "valid user!";
            }
        }
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
</head>
<body>

    <form method="post" enctype="multipart/form-data">
        Username:   <input type="text" name="username" value=""/> <br>
        Password:   <input type="password" name="password" value=""/> <br>
                 <input type="checkbox" name="remember" value=""/> Remember Me
                    <br><br>
                    <input type="submit" name="submit" value="Submit"/>
    </form>
</body>
</html>