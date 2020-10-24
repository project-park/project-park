<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Top Users</title>
</head>

<body>
    <?php
    require 'navbar.php';
    ?>
    <div class="container">
        <h5 style="padding:10px; margin-top:50px; margin-bottom:100px;" class="blue darken-4 white-text center-align">
            The data is sorted according to the total projects an individual user contributed to project-park app till now.</h5>
        <table border="2" style="margin-bottom:100px;" class="centered responsive-table striped">
            <thead>
                <tr>
                    <th>RANK</th>
                    <th>USERNAME</th>
                    <th>TOTAL PROJECTS</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>1</td>
                    <td>User_1</td>
                    <td>5</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>User_2</td>
                    <td>4</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>User_3</td>
                    <td>3</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>User_4</td>
                    <td>2</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>User_5</td>
                    <td>1</td>
                </tr>
            </tbody>
        </table>
    </div>
    <?php
        require 'footer.php';
    ?>
</body>

</html>