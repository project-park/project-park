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
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add a dir to project</title>
</head>

<body>
    <?php
        require "$_SERVER[DOCUMENT_ROOT]/php/navbar.php";
    ?>
    <div class="container center-align">
        <h2><?php echo $projectName;?></h2>
    </div>
    <form action="/php/savedir.php" method="POST">
        
        <div class="container" style="margin-bottom: 20px;">
            <h5>Directory in which this sub-dir will be saved</h5>
            <div class="row">
                <div class="input-field" style="width:30%">
                    <input id="dir-name" type="text" name="parent-dir" value=<?php echo "\"".str_replace("+","=>",$cd)."\"";?> readonly="readonly">
                </div>
            </div>
            <div class="row">
                <div class="input-field" style="width:30%">
                    <input id="add-sub-dir-name" type="text" name="sub-dir" data-length="20" required>
                    <label for="add-sub-dir-name">Add sub-directory Name</label>
                </div>
            </div>
            <input class="btn green" type="submit" name="submit" value="Add Dir">
            <a <?php echo "href=\"./recursion.php?src=".urlencode($cd)."\"";?> class="btn red">Cancel</a>
        </div>
    </form>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>
    $(document).ready(function() {
        $('input#add-file-name').characterCounter();
    });
    </script>
    <?php
        require "$_SERVER[DOCUMENT_ROOT]/php/footer.php";
    ?>
</body>

</html>