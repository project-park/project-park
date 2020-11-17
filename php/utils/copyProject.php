<?php
    $ownerName = $_GET['profile'];
    $projectName = $_GET['project'];
    $copierName = $_SESSION['user_name'];
    $parent = $ownerName."+".$projectName;
    $parentCopy = $copierName."+".$projectName;
    $queue[] = $parent;
    require "$_SERVER[DOCUMENT_ROOT]/php/dbutility/dbconn.php";
    $sql = "INSERT INTO user_projects VALUES(\"$copierName\",\"$projectName\",0);";
    mysqli_query($conn, $sql);
    while(count($queue)) {
        $tempFront = array_shift($queue);
        $sql = "SELECT * FROM project_structure WHERE res_name = \"$tempFront\"";
        $result = mysqli_query($conn, $sql);
        $result = mysqli_fetch_all($result,MYSQLI_ASSOC);
        for($i=0;$i<count($result);$i++) {
            $tempParentName = $result[$i]['res_name'];
            $tempChildName = $result[$i]['child_name'];
            $tempChildType = $result[$i]['res_type'];
            $firstPlusIndex = strpos($tempChildName,"+");
            $tempCopyParentName = $copierName.substr($tempParentName, $firstPlusIndex);
            $tempCopyChildName = $copierName.substr($tempChildName, $firstPlusIndex);
            if($tempChildType==="dir") {
                $queue[] = $tempChildName;
                $sql = "INSERT INTO project_structure VALUES(\"$tempCopyParentName\",\"$tempCopyChildName\",\"dir\");";
                mysqli_query($conn, $sql);
            } else {
                $sql = "INSERT INTO project_structure VALUES(\"$tempCopyParentName\",\"$tempCopyChildName\",\"file\");";
                mysqli_query($conn, $sql);
                copy("./../../files/".$tempChildName,"./../../files/".$tempCopyChildName);
            }
        }
    }
    $parentCopy = urlencode($parentCopy);
    header("Location:/php/recursion.php?src=$parentCopy");
?>