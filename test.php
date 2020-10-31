<?php
    $cd = "kanishk+pro1+dir1+dir1.1+dir1.1.2+file.fe";
    echo $cd."<br>";
    $firstPlusIndex = strpos($cd,"+");
    $secondPlusIndex = strpos($cd,"+",$firstPlusIndex+1);
    $lastPlusIndex = strrpos($cd,"+");
    $projectOwner = substr($cd,0,$firstPlusIndex);
    $projectName = substr($cd,$firstPlusIndex+1,$secondPlusIndex-$firstPlusIndex-1);
    $deepestFolder = substr($cd,$lastPlusIndex+1);
    $projectLink = str_replace("+","=>",substr($cd,$firstPlusIndex+1));
    echo "First occurence of + : ".$firstPlusIndex."<br>";
    echo "Second occurence of + : ".$secondPlusIndex."<br>";
    echo "Last occurence of + : ".$lastPlusIndex."<br>";
    echo "For ownerName : ".$projectOwner."<br>";
    echo "For projectName : ".$projectName."<br>";
    echo "For deepestFolder : ".$deepestFolder."<br>";
    echo "Project Link : ".$projectLink."<br>";




    require "$_SERVER[DOCUMENT_ROOT]/php/dbconn.php";
    $inp = "kanishk+pro1";
    $sql = "SELECT * FROM `project_structure` where res_name=\"$inp\"";
    echo $sql."<br>";
    $result = mysqli_query($conn,$sql);
    print_r($result);
    echo "<br>";
    $result = mysqli_fetch_all($result,MYSQLI_ASSOC);
    print_r($result);
    echo "<br>";
    for($i = 0;$i<count($result);$i++) {
        $link = urlencode($result[$i]['child_name']); 
        echo "<a href=\"/php/recursion.php?src=$link\">".$result[$i]['child_name']." : ".$result[$i]['res_type']."</a><br>";
    }
?>