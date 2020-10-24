<?php
    session_start();
    //mysql db connection
    /*
    $uName = $_POST['username'];
        $uPassCode = $_POST['passcode'];
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "test";
        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 
        $sql = "SELECT * FROM userauth WHERE uName = \"$uName\" and uPassCode = \"$uPassCode\" ";
        $result = $conn->query($sql);
        if($result->num_rows > 0) {
            echo "<center style=\"background-color: lightgreen\">Successful Login.
            <br>
            User Credentials:
            <br>
            Username: $uName & UserPassCode = $uPassCode</center>";
        } else {
            echo "<center style=\"background-color: red\">
            Unsuccessful Login.<br>
            Wrong Credentials.</center>";
        }
    */
    if(isset($_POST['submit'])) {
        /*
        $uName = $_POST['username'];
        $uPassword = $_POST['password'];
        //create db connection
        $dbhost = "db4free.net";
        $dbusername = "proadmin";
        $dbpassword = "ProjectPark";
        $dbname = "projectparkdb";
        $conn = new mysqli($dbhost, $dbusername, $dbpassword, $dbname);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 
        echo "SELECT * FROM user_auth WHERE uName = \"$uName\" and user_name = \"$uPassword\" ";
        */
        $uName = $_POST['username'];
        $uPassword = $_POST['password'];
    
        //create db connection
        $dbserver = "localhost";
        $dbusername = "root";
        $dbpassword = "";
        $dbname = "sql12368322";
        $conn = new mysqli($dbserver, $dbusername, $dbpassword, $dbname);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 
        /*
        $sql = "SELECT * FROM user_auth WHERE user_name = \"$uName\" and user_password = \"$uPassword\"";
        */
        $sql = "SELECT user_name, COUNT(user_projects) as total_pro FROM user_projects GROUP BY user_name";
        echo $sql;
        $result = $conn->query($sql);
        print_r($result);
        echo "<br>";
        if($result->num_rows > 0 ) {
            $rank = 1;
            while($try = $result->fetch_assoc()) {
                //echo $try['user_name']." ".$try['total_pro']."<br>"; 
                ?>



                <tr>
                    <td><?php echo $rank?></td>
                    <td><?php echo $try['user_name']?></td>
                    <td><?php echo $try['total_pro']?></td>
                </tr>



        <?php        
                $rank++;
            }
            ?>
        } else {
            echo "Failure";
        }
    } else {
        echo '<html>';
        echo '<head><title>LogIn Illegal Entry</title></head>';
        echo '<body style="background:blue;">';
        echo '<h2 style="color: white;">Sorry, but you came to this page through an illegal link.</h2>';
        echo '</body></html>';
    }
?>