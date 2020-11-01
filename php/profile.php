<?php
    if(!isset($_SESSION['user_name'])) {
        $_SESSION['ErrorType'] = "Cannot access any profile without authentication. Please Log In First";
        header('Location:/');
    }
    
    $profile = "";
    require "$_SERVER[DOCUMENT_ROOT]/php/dbconn.php";

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
        require "$_SERVER[DOCUMENT_ROOT]/php/navbar.php";
    ?>
    <h2 class="center"><?php echo $profile; ?></h2>
    <h5 class="center"><u>Total Projects: <?php echo count($projects); ?></u></h5>
    <div class="container">
        <div class="row center-align">
            <?php

            $images = array('android.jpg','bootstrap.png','htmlcssjs.jpg','node.jpeg','php.jpg','react.png','swift.png');
            if(count($projects)>0) {
            $random_keys=array_rand($images,count($projects));
            shuffle($projects);
            for($i=0;$i<count($projects);$i++) { ?>

            <div class="col s12 m6 l4">
                <div class="card pink lighten-4 z-depth-5  ">
                    <div class="card-image">
                        <img src=<?php echo "/img/".$images[$random_keys[$i]]; ?> alt="ballu ji ki image">
                        <a href="#" class="btn-floating red pulse halfway-fab">
                            <i class="material-icons ">whatshot</i>
                        </a>
                        <a href="#" style="" class="btn-floating green halfway-fab left">
                            <?php echo $projects[$i]['project_stars'];?>
                        </a>
                    </div>
                    <div class="card-content">
                        <span class="card-title"><b><?php echo $projects[$i]['project_name']?></b></span>
                        <p>One-liner description is what we all crave for:)</p>
                    </div>
                    <div class="card-action">
                        <a class="purple-text" href="#">
                            <strong>
                                Trick Project
                            </strong>
                        </a>
                        <?php
                            $link = urlencode($profile."+".$projects[$i]['project_name']);
                        ?>
                        <a class="purple-text" target="_blank" 
                        <?php echo "href=\"/php/recursion.php?src=$link\""; ?>>
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
        require "$_SERVER[DOCUMENT_ROOT]/php/footer.php";
    ?>
</body>

</html>