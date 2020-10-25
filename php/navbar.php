<?php
    session_start();
    require "$_SERVER[DOCUMENT_ROOT]/php/upper-link.php";
?>
<link rel="stylesheet" href="/css/navbar.css">
<nav class="nav-wraper blue-grey darken-3">
    <div class="container">
        <a href="/" class="brand-logo">Project Park</a>
        <a href="#" class="sidenav-trigger" data-target="mobile-links">
            <i class="material-icons">menu</i>
        </a>
        <ul class="right hide-on-med-and-down">
            <li><a href="/" class="waves-effect">Home</a></li>
            <li><a href="/php/topprojects.php" class="waves-effect">Top Projects</a></li>
            <li><a href="/php/topusers.php" class="waves-effect">Top Users</a></li>

            <?php
            if(!isset($_SESSION['user_name'])) { ?>
            <li><a href="#logging" class="waves-effect modal-trigger">Login</a></li>
            <?php } ?>

            <li>
                <a href="#" class="btn-floating grey darken-4 z-depth-0 pulse">
                    <i class="material-icons ">notifications</i>
                </a>
            </li>
            <li>
                <a href="#" class="btn-floating grey darken-4  z-depth-0">
                    <i class="material-icons">person</i>
                </a>
            </li>
            <li>
                <a style="position:relative; left:-30px; top:5px;" href="#" class="dropdown-trigger"
                    data-target='dropdown1'>
                    <i class="large material-icons">arrow_drop_down</i>
                </a>
            </li>
        </ul>
    </div>
</nav>

<ul class="sidenav" id="mobile-links">
    <li>
        <div class="user-view">
            <div class="background">
                <img src="/img/ballu ji.jpg">
            </div>
            <a href="#"><img class="circle" src="/img/himanshu.jpg"></a>
            <a href="#"><span class="white-text name">Himanshu Yadav</span></a>
            <a href="#"><span class="white-text email">himanshu@gmail.com</span></a>
        </div>
    </li>
    <li><a style="position:relative; top:-8px;" href="/" class="brand-logo blue white-text">Project Park</a></li>
    <li><a class="subheader">Social & Community</a></li>
    <li><a href="/" class="waves-effect">Home</a></li>
    <li><a href="/php/topprojects.php" class="waves-effect">Top Projects</a></li>
    <li><a href="/php/topusers.php" class="waves-effect">Top Users</a></li>

    <?php
            if(!isset($_SESSION['user_name'])) { ?>
    <li><a href="#logging" class="waves-effect modal-trigger">Login</a></li>
    <?php } ?>

    <li><a href="#" class="waves-effect">Notifications</a></li>
    <li>
        <div class="divider"></div>
    </li>
    <li><a class="subheader" class="waves-effect">Your Account</a></li>

    <?php
    if(isset($_SESSION['user_name'])) { ?>
    <li><a href="/php/profile.php" class="waves-effect">Your Profile</a></li>
    <?php } ?>

    <li><a href="#" class="waves-effect">Help</a></li>

    <?php
    if(isset($_SESSION['user_name'])) { ?>
    <li><a href="#settings" class="waves-effect modal-trigger">Settings</a></li>
    <li><a href="/php/logout.php" class="waves-effect">Log out</a></li>
    <?php } ?>

</ul>

<ul class="dropdown-content" id="dropdown1">

    <?php
    if(isset($_SESSION['user_name'])) { ?>
    <li><a href="/php/profile.php">Your profile</a></li>
    <?php } ?>

    <li><a href="#">Help</a></li>

    <?php
    if(isset($_SESSION['user_name'])) { ?>
    <li><a href="#settings" class="modal-trigger">Settings</a></li>
    <li><a href="/php/logout.php">Log out</a></li>
    <?php } ?>
</ul>

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
                <input class="blue waves-effect waves-light btn" type="submit" name="submit" value="Log In">
            </div>
        </form>
        <div class="container center-align">
            <p><strong>
                    If you are new to project-park, then do
                    <em><a class="blue-text text-darken-4 modal-trigger modal-close" href="#signing">Sign Up</a></em>
                    for uploading projects online for free
                </strong></p>
        </div>
    </div>
</div>

<div class="modal" id="signing">
    <div class="modal-content" id="signup-modal">
        <form action="/php/signup.php" method="POST">
            <div class="container center-align">
                <h2>Sign In</h2>
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
                    <input id="confirm-password" type="password" name="signup-conf-password" required>
                    <label for="confirm-password" class="black-text">Confirm Password</label>
                </div>
                <input class="blue waves-effect waves-light btn" type="submit" name="submit" value="Sign In">
            </div>
        </form>
    </div>
</div>

<div class="modal" id="settings">
    <div class="modal-content" id="setting-modal">
        <form action="changepassword.php" method="POST">
            <div class="container center-align">
                <h2 class>Change password</h2>
                <div class="input-field">
                    <input id="prev_passw" name="prev_passw" type="password" required>
                    <label for="prev_passw">Previous Password</label>
                </div>
                <div class="input-field">
                    <input id="new_passw" name="new_passw" type="password" required>
                    <label for="new_passw">New Password</label>
                </div>
                <div class="input-field">
                    <input id="conf_passw" name="conf_passw" type="password" required>
                    <label for="conf_passw">Confirm Password</label>
                </div>
                <input class="btn blue" type="submit" name="submit" value="send request">
                <button class="modal-close btn waves-effect waves-light red">CANCEL</button>
            </div>
    </div>
    </form>
</div>

<?php
require "$_SERVER[DOCUMENT_ROOT]/php/lower-link.php";
?>


<script>
$(document).ready(function() {
    $('.sidenav').sidenav({
        draggable: true
    });
    $('.dropdown-trigger').dropdown({
        constrainWidth: false,
        coverTrigger: false,
        inDuration: 1000,
        outDuration: 1000
    });
    $('.modal').modal();
});
</script>