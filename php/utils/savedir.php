<?php
    if(isset($_POST['submit'])) {
        $parent = str_replace('=>','+',($_POST['parent-dir']));
        require "$_SERVER[DOCUMENT_ROOT]/php/dbutility/dbconn.php";
        $child = $parent."+".$_POST['sub-dir'];
        $sql = "INSERT INTO project_structure VALUES (\"$parent\",\"$child\",\"dir\");";
        $result = mysqli_query($conn, $sql);
        $parent = urlencode($parent);
        header("Location:/php/recursion.php?src=$parent");
    } else {
        echo "<h2>Invalid request</h2>";
    }
?>