<?php

$cur = "";
$new = "";
$re = "";

$err_cur = "";
$err_new = "";
$err_re = "";
$msg = "";

if(isset($_POST['submit'])){

    $cur = trim($_POST['currentPassword']);
    $new = trim($_POST['newPassword']);
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
<html>
<head>
    <title>Change Password</title>
</head>
<body>

<form method="post">

    <h2>Change Password</h2>

    Current Password:<br>
    <input type="password" name="currentPassword"><br>
    <span style="color:red;"><?php echo $err_cur; ?></span>
    <br><br>

    New Password:<br>
    <input type="password" name="newPassword"><br>
    <span style="color:red;"><?php echo $err_new; ?></span>
    <br><br>

    Retype Password:<br>
    <input type="password" name="retypePassword"><br>
    <span style="color:red;"><?php echo $err_re; ?></span>
    <br><br>

    <input type="submit" name="submit" value="Submit">

</form>

<br>
<span style="color:green;"><?php echo $msg; ?></span>

</body>
</html>