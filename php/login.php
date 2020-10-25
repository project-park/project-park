<?php
    session_start();
    if(isset($_POST['submit'])) {
        $uName = $_POST['login_username'];
        $uPass = $_POST['login_password'];

        require "$_SERVER[DOCUMENT_ROOT]/php/dbconn.php";

        $sql = "SELECT * FROM user_auth WHERE user_name=\"$uName\" AND user_password=\"$uPass\"";

        $result = mysqli_query($conn, $sql);
        
        if($result->num_rows==1) {
            
            $detail = mysqli_fetch_all($result,MYSQLI_ASSOC);
            
            print_r($detail);
            $_SESSION['user_name'] = $detail[0]['user_name'];
            $_SESSION['user_email'] = $detail[0]['user_email'];
            $_SESSION['user_password'] = $detail[0]['user_password'];
            header('Location:/php/profile.php');
        } else {
            header('HTTP/1.1 307 Temporary Redirect');
            header('Location:/');
        }
    } else {
        header('Location:/');
    }
?>