<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Top Projects</title>
</head>

<body>
    <?php
        require 'navbar.php';
    ?>
    <div class="container">
        <h5 style="padding:10px; margin-top:50px; margin-bottom:100px;" class="blue darken-4 white-text center-align">
            The projects are sorted according to the total number of hotshots they got from authenticated users till now.</h5>
        <table class="centered highlight responsive striped light-green lighten-5"
            style="margin-bottom: 100px;">
            <thead class="green lighten-5 teal-text">
                <tr>
                    <th>Rank</th>
                    <th>ProjectName</th>
                    <th>Creator</th>
                    <th>Total Hotshots Earned</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>1</td>
                    <td>Project_1</td>
                    <td>User_1</td>
                    <td>5</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Project_2</td>
                    <td>User_2</td>
                    <td>4</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Project_3</td>
                    <td>User_3</td>
                    <td>3</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Project_4</td>
                    <td>User_4</td>
                    <td>2</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Project_5</td>
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