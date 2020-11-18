<?php
    if(!isset($_SESSION['user_name'])) {
        $_SESSION['ErrorType'] = "Cannot access any profile without authentication. Please Log In First";
        header('Location:/');
    }
    
    $profile = "";
    require "$_SERVER[DOCUMENT_ROOT]/php/dbutility/dbconn.php";

    if(isset($_GET['profile'])) {
        $profile = $_GET['profile'];
        $sql = "SELECT * FROM user_auth WHERE user_name=\"$profile\";";
        $result = mysqli_query($conn, $sql);
        if($result->num_rows!==1) {
            $_SESSION['ErrorType'] = "Cannot find user : $profile";
            header('Location:/');
        } else if ($result->num_rows===1 && $profile===$_SESSION['user_name']) {
            header('Location:/php/profile.php');
        }
    } else {
        $profile = $_SESSION['user_name'];
    }

    $sql = "SELECT * FROM user_projects WHERE user_name=\"$profile\"";

    $result = mysqli_query($conn, $sql);

    $projects = mysqli_fetch_all($result,MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
</head>

<body class="teal lighten-2">
    <?php
        require "$_SERVER[DOCUMENT_ROOT]/php/commonWidget/navbar.php";
    ?>
    <h2 class="center"><?php echo $profile; ?></h2>
    <h5 class="center"><u>Total Projects: <?php echo count($projects); ?></u></h5>
    <?php
        if($profile===$_SESSION['user_name']) { ?>
    <div class="center-align">
        <a <?php echo "href=\"newprojectaddition.php?creator=$profile\"";?>
            class="btn-small center waves-effect waves-dark blue darken-3 white-text">
            <i class="material-icons white-text left">
                add
            </i>
            Add New Project
        </a>
    </div>
    <?php } ?>
    <div class="container">
        <div class="row center-align">
            <?php

            $images = array('android.jpg','bootstrap.png','htmlcssjs.jpg','node.jpeg','php.jpg','react.png','swift.png');
            if(count($projects)>0) {
            $random_keys=array_rand($images,count($projects));
            shuffle($projects);
            for($i=0;$i<count($projects);$i++) { ?>

            <div class="col s12 m6 l4">
                <div class="card pink lighten-4 z-depth-5 hotshot-parent">
                    <div class="card-image hotshot-child1">
                        <img src=<?php echo "/img/".$images[$random_keys[$i]]; ?>>
                        <a class="btn-floating halfway-fab red pulse hotshot-child-icon">
                            <i class="material-icons" <?php echo "id=\"$i\""; ?>>whatshot</i>
                        </a>
                        <a href="#" class="btn-floating halfway-fab green left hotshot-child-num">
                            <?php echo $projects[$i]['project_stars'];?>
                        </a>
                    </div>
                    <div class="card-content hotshot-child2">
                        <span class="card-title"><b><?php echo $projects[$i]['project_name']?></b></span>
                        <p>One-liner description is what we all crave for:)</p>
                    </div>
                    <div class="card-action">
                        <?php if($profile !== $_SESSION['user_name']) { ?>
                        <a class="purple-text" <?php 
                            $projectLink = $projects[$i]['project_name'];
                            echo "href=\"./utils/copyProject.php?profile=$profile&project=$projectLink\""; ?>>
                            <strong>
                                Trick Project
                            </strong>
                        </a>
                        <?php } ?>
                        <?php
                            $link = urlencode($profile."+".$projects[$i]['project_name']);
                        ?>
                        <a class="purple-text" target="_blank" <?php echo "href=\"/php/recursion.php?src=$link\""; ?>>
                            <strong>
                                Show Project
                            </strong>
                        </a>
                    </div>
                </div>
            </div>

            <?php }} ?>
        </div>
    </div>
    <?php
        require "$_SERVER[DOCUMENT_ROOT]/php/commonWidget/footer.php";
    ?>
    <script>
    const iconList = document.querySelectorAll("div.hotshot-parent > div.hotshot-child1 > a.hotshot-child-icon");
    const numList = document.querySelectorAll("div.hotshot-parent > div.hotshot-child1 > a.hotshot-child-num");
    const projectList = document.querySelectorAll("div.hotshot-parent > div.hotshot-child2 > span");
    for (i = 0; i < iconList.length; i++) {
        iconList[i].addEventListener("click", () => {
            try {
                reqElement = numList[parseInt(event.target.id)];
                reqProject = projectList[parseInt(event.target.id)];
                projectName = reqProject.firstChild.innerHTML;
                const xhr = new XMLHttpRequest();
                xhr.open('GET', "./utils/addHotShot.php?profile=" + <?php echo "\"$profile\""?> + "&project=" +
                    projectName, true);
                xhr.onload = function() {
                    if (this.status === 200) {
                        console.log(this.responseXML.firstChild.firstChild.innerHTML);
                    } else {
                        console.log("Some error occured");
                    }
                }
                xhr.send();
                reqElement.innerHTML = parseInt(reqElement.innerHTML) + 1;
            } catch (err) {
                console.log("Exception Occured: " + err);
            }
        });
    }
    </script>
</body>

</html>