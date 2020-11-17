<?php
    if(isset($_POST['submit'])) {
        $oldPass = $_POST['prev_passw'];
        $newPass = $_POST['new_passw'];
        $confPass = $_POST['conf_passw'];
        if($newPass!==$confPass) {
            $_SESSION['ErrorType'] = "Wrong Change Password Credentials(Not confirmed)";
            header('Location:/');
        } else if($_SESSION['user_password']!==$oldPass) {
            $_SESSION['ErrorType'] = "Wrong Change Password Credentials(Wrong old password)";
            header('Location:/');
        } else {
            require "$_SERVER[DOCUMENT_ROOT]/php/dbutility/dbconn.php";

            $sql = "UPDATE user_auth SET user_password=\"$newPass\" WHERE user_name=\"$_SESSION[user_name]\";";
            $result = mysqli_query($conn, $sql);
            
            $_SESSION['user_password'] = $newPass;
            header('Location:/php/profile.php');
        }
    } else {
        $_SESSION['ErrorType'] = "Illegal Change Password Link";
        header('Location:/');
    }
?>