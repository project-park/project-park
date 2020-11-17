<?php
    if(!isset($_GET['src'])) {
        header('Location:/');
    } else {
        $cd = htmlspecialchars($_GET['src']);
        require "$_SERVER[DOCUMENT_ROOT]/php/dbutility/dbconn.php";
        
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
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add a file to project</title>
</head>

<body>
    <?php
        require "$_SERVER[DOCUMENT_ROOT]/php/commonWidget/navbar.php";
    ?>
    <div class="container center-align">
    <h2><?php echo $projectName;?></h2>
    </div>
    <form action="/php/utils/savefile.php" method="POST">
        <div class="container" style="margin-bottom:20px;">
        <h5>Directory in which this file will be saved</h5>
            <div class="row">
                <div class="input-field" style="width:30%">
                    <input id="dir-name" type="text" name="parent-dir" value=<?php echo "\"".str_replace("+","=>",$cd)."\"";?> readonly="readonly">
                </div>
            </div>
            <div class="row">
                <div class="input-field" style="width:30%">
                    <input id="add-file-name" type="text" data-length="20" name="file-name" required>
                    <label for="add-file-name">Add File Name</label>
                </div>
            </div>
            <p class="flow-text">Add code below</p>
            <div class="input-field">
                <textarea id="new_code" class="materialize-textarea" name="new-code"
                    placeholder="Sample HTML Code" required></textarea>
            </div>
            <input class="btn green" type="submit" name="submit" value="Add File">
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
        require "$_SERVER[DOCUMENT_ROOT]/php/commonWidget/footer.php";
    ?>
</body>

</html>