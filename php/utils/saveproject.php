<?php
    if(isset($_POST['submit'])) {
        $user = $_POST['user'];
        $project = $_POST['project'];
        require "$_SERVER[DOCUMENT_ROOT]/php/dbutility/dbconn.php";
        $sql = "INSERT INTO user_projects VALUES (\"$user\",\"$project\",0);";
        $result = mysqli_query($conn, $sql);
        header("Location:/php/profile.php");
    } else {
        echo "<h2>Invalid request</h2>";
    }
?>