<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Park</title>
    <style>
    body {
        background-image: url('/img/mainbg.jpg');
        background-size: 100%;
        background-repeat: no-repeat;
    }

    #h11 {
        margin-top: 6vw;
        font-size: 6vw;
    }

    #h21 {
        margin-top: 6vw;
        margin-bottom:6vw;
        font-size: 3vw;
    }

    #div1 {
        border-radius: 30px;
        margin-left: 24px;
    }

    #div2 {
        border-radius: 30px;
        padding-left:40px;
    }

    #div3 {
        border-radius: 30px;
        margin-left: 24px;
    }

    #div4 {
        border-radius: 30px;
        padding-left:40px;
    }
    </style>
    <?php
      require "$_SERVER[DOCUMENT_ROOT]/php/upper-link.php";
    ?>
</head>

<body>
    <div>
        <div class="container center-align blue-text text-accent-3">
            <h1 id="h11">Project Park</h1>
        </div>
    </div>
    <div>
        <div class="container center-align deep-orange-text">
            <h2 id="h21">Show your Projects<br>Get hotshots<br>Ace the Leaderboard</h2>
        </div>
    </div>
    <div class="row container">
        <div class="col s12 m5">
            <div id="div1" class="card blue darken-4">
                <div class="card-content purple-text text-lighten-4 center-align">
                    <span class="card-title"><strong>Top Users</strong></span>
                    <p>Access the Leaderboard of top users contributing to Project Park App</p>
                </div>
                <div id="div2" class="card-action center-align"><a target="_blank" href="/php/topusers.php">Go To Leaderboard</a></div>
            </div>
        </div>
        <div class="col s12 m5 offset-m1">
            <div id="div3" class="card blue darken-4">
                <div class="card-content purple-text text-lighten-4 center-align">
                    <span class="card-title"><strong>Top Projects</strong></span>
                    <p>Have a look at the hottest projects trending on the Project Park App</p>
                </div>
                <div id="div4" class="card-action center-align"><a target="_blank" href="/php/topprojects.php">Go To Leaderboard</a></div>
            </div>
        </div>
    </div>
</body>

</html>