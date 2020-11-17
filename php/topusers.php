<?php
    require "$_SERVER[DOCUMENT_ROOT]/php/dbutility/dbconn.php";
    
    $sql = "SELECT user_name,count(*) as total_projects FROM user_projects GROUP BY user_name ORDER BY total_projects DESC LIMIT 5;";

    $result = mysqli_query($conn,$sql);
    
    $rows = mysqli_fetch_all($result,MYSQLI_ASSOC);    
?>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Top Users</title>
</head>

<body>
    <?php
    require "$_SERVER[DOCUMENT_ROOT]/php/commonWidget/navbar.php";
    ?>
    <div class="container">
        <h5 style="padding:10px; margin-top:50px; margin-bottom:100px;" class="blue darken-4 white-text center-align">
            The data is sorted according to the total projects an individual user contributed to project-park app till
            now.</h5>
        <table border="2" style="margin-bottom:100px;" class="centered responsive-table striped">
            <thead>
                <tr>
                    <th>Rank</th>
                    <th>Username</th>
                    <th>Total Projects</th>
                </tr>
            </thead>

            <tbody>
                <?php

                    for($i=0;$i<count($rows);$i++) { ?>
                <tr>
                    <td><?php echo ($i+1);   ?></td>
                    <td>
                        <?php echo '<a target="_blank" href="'."/php/profile.php?profile=".$rows[$i]['user_name'].'">'.$rows[$i]['user_name'].'</a>'?>
                    </td>
                    <td><?php echo $rows[$i]['total_projects'];  ?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <?php
        require "$_SERVER[DOCUMENT_ROOT]/php/commonWidget/footer.php";
    ?>
</body>

</html>