<?php
    if(!isset($_GET['creator'])) {
        header('Location:/');
    } else {
        $cd = $_GET['creator'];
        require "$_SERVER[DOCUMENT_ROOT]/php/dbutility/dbconn.php";
        
        $sql = "SELECT * FROM `project_structure` where res_name=\"$cd\"";
        
        $result = mysqli_query($conn, $sql);
        $result = mysqli_fetch_all($result,MYSQLI_ASSOC);
    }
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add a New Project</title>
</head>

<body>
    <?php
        require "$_SERVER[DOCUMENT_ROOT]/php/commonWidget/navbar.php";
    ?>
    <div class="container center-align">
        <h2>Add a New Project</h2>
    </div>
    <form action="/php/utils/saveproject.php" method="POST">
        
        <div class="container" style="margin-bottom: 20px;">
            <h5>Your project will be added in the list of following user: </h5>
            <div class="row">
                <div class="input-field" style="width:30%">
                    <input id="user-name" type="text" name="user" value=<?php echo "\"$cd\"";?> readonly="readonly">
                </div>
            </div>
            <div class="row">
                <div class="input-field" style="width:30%">
                    <input id="add-project-name" type="text" name="project" data-length="20" required>
                    <label for="add-project-name">Add Project Name</label>
                </div>
            </div>
            <input class="btn green" type="submit" name="submit" value="Add Project">
            <a <?php echo "href=\"./profile.php\"";?> class="btn red">Cancel</a>
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