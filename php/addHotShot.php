<?php
    $profile = $_GET['profile'];
    $project = $_GET['project'];
    require "$_SERVER[DOCUMENT_ROOT]/php/dbconn.php";
    $sql = "UPDATE user_projects SET project_stars = project_stars+1 WHERE user_name = \"$profile\" AND project_name = \"$project\";";
    $result = mysqli_query($conn, $sql);
    header('Content-Type: text/xml');
    echo '<?xml version="1.0" encoding="UTF-8"?>';
    echo '<body>';
    echo '<response>';
    if($result) {
        echo "Operation Successful";
    } else {
        echo "Operation Unsuccessful";
    }
    echo '</response>';
    echo '</body>';
?>