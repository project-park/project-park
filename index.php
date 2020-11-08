<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Park</title>
    <?php
      require "$_SERVER[DOCUMENT_ROOT]/php/upper-link.php";
    ?>
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
        margin-bottom: 6vw;
        font-size: 3vw;
    }

    #div1 {
        border-radius: 30px;
        margin-left: 24px;
    }

    #div2 {
        border-radius: 30px;
        padding-left: 40px;
    }

    #div3 {
        border-radius: 30px;
        margin-left: 24px;
    }

    #div4 {
        border-radius: 30px;
        padding-left: 40px;
    }

    #div5 {
        margin-top: 18vw;
    }

    #div6 {
        margin-top: 8vw;
    }

    #div7 {
        margin-top: 8vw;
    }

    #login-modal,
    #signup-modal {
        background-image: url('/img/hero.png');
        background-size: cover;
    }
    </style>
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
                <div id="div2" class="card-action center-align"><a target="_blank" href="/php/topusers.php">Go To
                        Leaderboard</a></div>
            </div>
        </div>
        <div class="col s12 m5 offset-m2">
            <div id="div3" class="card blue darken-4">
                <div class="card-content purple-text text-lighten-4 center-align">
                    <span class="card-title"><strong>Top Projects</strong></span>
                    <p>Have a look at the hottest projects trending on the Project Park App</p>
                </div>
                <div id="div4" class="card-action center-align"><a target="_blank" href="/php/topprojects.php">Go To
                        Leaderboard</a></div>
            </div>
        </div>
    </div>
    <div class="section">
        <div id="div5" class="row container">
            <div class="col s12 l4">
                <img class="responsive-img" src="/img/dummyProject.png" />
            </div>
            <div class="col s12 l7 offset-l1">
                <h3 class="indigo-text text-darken-3">Project Heirarchy</h3>
                <p class="flow-text">Visualize your project as a file heirarchy system</p>
            </div>
        </div>
        <div id="div6" class="row container">
            <div class="col s12 l4 push-l8">
                <img class="responsive-img" src="/img/dummyProject.png" />
            </div>
            <div class="col s12 l7 pull-l4 right-align">
                <h3 class="indigo-text text-darken-3">Runtime View(Beta)</h3>
                <p class="flow-text">View file content for certain files(html,css,js,text,etc.)</p>
            </div>
        </div>
        <div id="div7" class="row container">
            <div class="col s12 l4">
                <img class="responsive-img" src="/img/dummyProject.png" />
            </div>
            <div class="col s12 l7 offset-l1">
                <h3 class="indigo-text text-darken-3">Project Hotshots(Beta-AJAX)</h3>
                <p class="flow-text">A sign to appreciate project owner's skills</p>
            </div>
        </div>
    </div>
    <hr style="height:2px;border-width:0;color:gray;background-color:gray">
    <div class="section row container">
        <div class="col s5 card pink center-align lighten-3">
            <p><strong>
                    If you are new to project-park, then do
                    <em><a class="blue-text text-darken-4 modal-trigger modal-close" href="#signing">Sign Up</a></em>
                    for uploading projects online for free
                </strong></p>
        </div>
        <div class="push-s2 col s5 card pink center-align lighten-3">
            <p><strong>
                    If you are an existing member, then do
                    <em><a href="#logging" class="blue-text text-darken-4 modal-trigger">Login</a></em>
                    and continue your daily tasks
                </strong></p>
        </div>
    </div>


    <div class="modal" id="logging">
        <div class="modal-content" id="login-modal">
            <form action="/php/login.php" method="POST">
                <div class="container center-align">
                    <h2>Login</h2>
                    <div class="input-field">
                        <input id="login-username" type="text" name="login_username" required>
                        <label for="login-username" class="black-text">Username</label>
                    </div>
                    <div class="input-field">
                        <input id="login-password" type="password" name="login_password" required>
                        <label for="login-password" class="black-text">Password</label>
                    </div>
                    <input class="blue btn" type="submit" name="submit" value="Log In">
                </div>
            </form>
        </div>
    </div>

    <div class="modal" id="signing">
        <div class="modal-content" id="signup-modal">
            <form action="/php/signup.php" method="POST">
                <div class="container center-align">
                    <h2>Sign Up</h2>
                    <div class="input-field">
                        <input id="signup-username" type="text" name="signup_username" required>
                        <label for="signup-username" class="black-text">Username</label>
                    </div>
                    <div class="input-field">
                        <input id="signup-email" type="email" name="signup_usermail" required>
                        <label for="signup-email" class="black-text">User E-mail</label>
                    </div>
                    <div class="input-field">
                        <input id="signup-password" type="password" name="signup_password" required>
                        <label for="signup-password" class="black-text">Password</label>
                    </div>
                    <div class="input-field">
                        <input id="confirm-password" type="password" name="signup_conf_password" required>
                        <label for="confirm-password" class="black-text">Confirm Password</label>
                    </div>
                    <input class="blue btn" type="submit" name="submit" value="Sign Up">
                </div>
            </form>
        </div>
    </div>

    <?php
        require "$_SERVER[DOCUMENT_ROOT]/php/lower-link.php";
    ?>
    <script>
    $(document).ready(function() {
        $('.modal').modal();
        <?php
            if(isset($_SESSION["ErrorType"])) {
                echo "alert(\"$_SESSION[ErrorType]\");";
                unset($_SESSION["ErrorType"]);
            }
        ?>
    });
    </script>
</body>

</html>