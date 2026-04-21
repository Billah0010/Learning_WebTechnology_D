



<?php

$cur = "";

$re = "";

$err_cur = "";

$err_re = "";
$msg = "";

if(isset($_POST['submit'])){

    $cur = trim($_POST['currentPassword']);
    
    $re = trim($_POST['retypePassword']);

    if($cur == ""){
        $err_cur = "Current Password is required!";
    } else {

        if($new == ""){
            $err_new = "New Password is required!";
        } else {

            if($new == $cur){
                $err_new = "New Password should not be same as Current Password!";
            } else {

                if($re == ""){
                    $err_re = "Retype Password is required!";
                } else {

                    if($new != $re){
                        $err_re = "New Password must match Retyped Password!";
                    } else {
                        $msg = "Password changed successfully!";
                    }
                }
            }
        }
    }
}

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <title>Registration</title>
</head>
<body>

    <form method="post" enctype="multipart/form-data">
    Name:   <input type="text" name="username" value=""/> <br>

    Email:   <input type="password" name="password" value=""/> <br>
    User Name: <input type="text" name="username" value=""/>
       
      Password:<br>
    <input type="password" name="currentPassword"><br>
    <span style="color:red;"><?php echo $err_cur; ?></span>
    <br><br>

    

    Confirm Password:<br>
    <input type="password" name="retypePassword"><br>
    <span style="color:red;"><?php echo $err_re; ?></span>
    <br><br>
                    <br><br>
                    <input type="submit" name="submit" value="Submit"/>
    </form>
</body>
</html>
