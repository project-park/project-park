<?php
    if(!isset($_GET['src'])) {
        header('Location:/');
    } else {
        $cd = htmlspecialchars($_GET['src']);
        require "$_SERVER[DOCUMENT_ROOT]/php/dbconn.php";
        
        $sql = "SELECT * FROM `project_structure` where res_name=\"$cd\"";
        
        $result = mysqli_query($conn, $sql);
        $result = mysqli_fetch_all($result,MYSQLI_ASSOC);
        
        $firstPlusIndex = strpos($cd,"+");
        $secondPlusIndex = strpos($cd,"+",$firstPlusIndex+1);
        $lastPlusIndex = strrpos($cd,"+");
        $projectOwner = substr($cd,0,$firstPlusIndex);
        $projectName = "";
        if($secondPlusIndex=="") {
            $projectName = substr($cd,$firstPlusIndex+1);
        } else {
            $projectName = substr($cd,$firstPlusIndex+1,$secondPlusIndex-$firstPlusIndex-1);
        }
        $deepestRes = substr($cd,$lastPlusIndex+1);
        $projectLink = str_replace("+","=>",substr($cd,$firstPlusIndex+1));
        /*
        echo "First occurence of + : ".$firstPlusIndex."<br>";
        echo "Second occurence of + : ".$secondPlusIndex."<br>";
        echo "Last occurence of + : ".$lastPlusIndex."<br>";
        echo "For ownerName : ".$projectOwner."<br>";
        echo "For projectName : ".$projectName."<br>";
        echo "For deepestRes : ".$deepestRes."<br>";
        echo "Project Link : ".$projectLink."<br>";
        */
    }
?>
<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Structure</title>
</head>

<body>
    <?php
        require "$_SERVER[DOCUMENT_ROOT]/php/navbar.php";
    ?>
    <div class="container left-align">
        <h3 class="indigo-text">
            <?php echo "Project : $projectName by <a target=\"_blank\" style=\"color:red;\" href=\"/php/profile.php?profile=$projectOwner\">$projectOwner</a>";?>
        </h3>
    </div>
    <hr>
    <div style="padding: 1% 10%;" class="container">
        <ul class="collection with-header">
            <li class="collection-header light-blue lighten-5">
                <span><?php echo "Project Directory: $projectLink";?></span>
            </li>
            <?php 
                for($i=0;$i<count($result);$i++) {
                    $resType = $result[$i]['res_type'];
                    $childName = $result[$i]['child_name'];
                    $send = urlencode($childName);
                    $lastPIndex = strrpos($childName,"+");
                    $childAlias = substr($childName,$lastPIndex+1);
                    if($resType == "dir") {
                        echo "<li class=\"collection-item\"><i class=\"material-icons blue-text left\">folder</i><a href=\"/php/recursion.php?src=$send\">$childAlias</a></li>";
                    } else {
                        echo "<li class=\"collection-item\"><i class=\"material-icons yellow-text left\">insert_drive_file</i><a href=\"/php/recursion.php?src=$send\">$childAlias</a></li>";
                    }
                }
                $sql = "SELECT * from `project_structure` WHERE child_name = \"$cd\";";
                $result = mysqli_query($conn, $sql);
                $result = mysqli_fetch_all($result, MYSQLI_ASSOC);
                
                if(count($result) and $result[0]['res_type']=="file") {
                    $filePath = "$_SERVER[DOCUMENT_ROOT]/files/$cd";
                    if(file_exists($filePath)) {
                        echo "<h6 class=\"center-align\">File size: ".filesize($filePath)."</h6>";
                        if(filesize($filePath)) {
                            echo "<div class=\"container\">Raw version(with htmlspecialchars)</div>";
                            $handle = fopen($filePath, 'r');
                            echo "<div class=\"container\" style=\"padding: 10px; border: 1px solid purple;\">";
                            while(!feof($handle)) {
                                echo htmlspecialchars(fgets($handle))."<br>"; ;
                            }
                            echo "</div>";
                            fclose($handle);

                            echo "<div class=\"container\">Formatted version(without htmlspecialchars)</div>";

                            $handle = fopen($filePath, 'r');
                            echo "<div class=\"container\" style=\"margin-bottom: 10px; padding: 10px; border: 1px solid purple;\">";
                            while(!feof($handle)) {
                                echo fgets($handle)."<br>";
                            }
                            echo "</div>";
                            fclose($handle);
                        }
                    } else {
                        echo "File Does Not Exist on Server: $cd";
                    }
                }
            ?>
        </ul>
    </div>
    <div class="container center-align">
        <a href="#" style="margin-bottom: 50px;" class="btn-small waves-effect waves-dark blue lighten-3 black-text">
            <i class="material-icons black-text left">
                add
            </i>
            Add New File
        </a>
        <a href="#" style="margin-bottom: 50px;" class="btn-small waves-effect waves-dark blue lighten-3 black-text">
            <i class="material-icons black-text left">
                add
            </i>
            Add New Directory
        </a>
    </div>
    <?php
        require "$_SERVER[DOCUMENT_ROOT]/php/footer.php";
    ?>
</body>

</html>