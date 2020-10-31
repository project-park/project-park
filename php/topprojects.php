<?php
    require "$_SERVER[DOCUMENT_ROOT]/php/dbconn.php";

    $sql = "SELECT * FROM user_projects ORDER BY project_stars DESC LIMIT 5";

    $result = mysqli_query($conn, $sql);

    $rows = mysqli_fetch_all($result,MYSQLI_ASSOC);
?>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Top Projects</title>
</head>

<body>
    <?php
        require "$_SERVER[DOCUMENT_ROOT]/php/navbar.php";
    ?>

    <div class="container">
        <h5 style="padding:10px; margin-top:50px; margin-bottom:100px;" class="blue darken-4 white-text center-align">
            The projects are sorted according to the total number of hotshots they got from authenticated users till
            now.</h5>
        <table class="centered highlight responsive striped light-green lighten-5" style="margin-bottom: 100px;">
            <thead class="green lighten-5 teal-text">
                <tr>
                    <th>Rank</th>
                    <th>Project Name</th>
                    <th>Project Creator</th>
                    <th>Total Hotshots Earned</th>
                </tr>
            </thead>

            <tbody>
                <?php
                    for($i=0;$i<count($rows);$i++) { ?>

                <tr>
                    <td><?php echo ($i+1);                      ?></td>
                    <td>
                        <?php
                        $userName = $rows[$i]['user_name'];
                        $projectName = $rows[$i]['project_name']; 
                        $link = urlencode($userName."+".$projectName);
                        echo "<a target=\"_blank\" href=\"/php/recursion.php?src=$link\">$projectName</a>"?>
                    </td>
                    <td>
                        <?php echo "<a target=\"_blank\" href=\"/php/profile.php?profile=$userName\">$userName</a> "; ?>
                    </td>
                    <td><?php echo $rows[$i]['project_stars'];  ?></td>

                    <?php
                    }  ?>

            </tbody>
        </table>
    </div>
    <?php
        require "$_SERVER[DOCUMENT_ROOT]/php/footer.php";
    ?>
</body>

</html>