<?php
    if(isset($_POST['submit'])) {
        require "$_SERVER[DOCUMENT_ROOT]/php/dbconn.php";
        $parentName = str_replace('=>','+',($_POST['parent-dir']));
        $childName = $parentName."+".$_POST['file-name'];
        $childData = $_POST['new-code'];
        $sql = "INSERT INTO project_structure VALUES (\"$parentName\",\"$childName\",\"file\");";
        $result = mysqli_query($conn, $sql);
        $parentName = urlencode($parentName);
        $childName = "$_SERVER[DOCUMENT_ROOT]/files/".$childName;
        $handle = fopen($childName,'w');
        fwrite($handle,$childData);
        fclose($handle);
        header("Location:/php/recursion.php?src=$parentName");
    } else {
        echo "<h2>Invalid request</h2>";
    }
?>