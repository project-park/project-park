<?php
    if(isset($_POST['submit'])) {
        $uName = $_POST['signup_username'];
        $uEmail = $_POST['signup_usermail'];
        $uPass = $_POST['signup_password'];
        $uPassConf = $_POST['signup_conf_password'];

        if($uPass!==$uPassConf) {
            $_SESSION['ErrorType'] = "Wrong Signup Confirmation";
            header('HTTP/1.1 307 Temporary Redirect');
            header('Location:/'); 
        } else {
            require "$_SERVER[DOCUMENT_ROOT]/php/dbutility/dbconn.php";

            $sql = "SELECT * FROM user_auth WHERE user_name=\"$uName\" OR user_email=\"$uEmail\";";
            $result = mysqli_query($conn, $sql);
            if($result->num_rows==0) {
                $sql = "INSERT INTO user_auth VALUES (\"$uName\",\"$uEmail\",\"$uPass\");";
                $result = mysqli_query($conn, $sql);
                $_SESSION['user_name'] = $uName;
                $_SESSION['user_email'] = $uEmail;
                $_SESSION['user_password'] = $uPass;
                header('Location:/php/profile.php');
            } else {
                $_SESSION['ErrorType'] = "Login Credentials Exist";
                header('HTTP/1.1 307 Temporary Redirect');
                header('Location:/');
            }
        }
    } else {
        $_SESSION['ErrorType'] = "Illegal Signup Link";
        header('Location:/');
    }
?>