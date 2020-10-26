<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    Starting project here
    <?php
        echo "Hello World";
        if(isset($_POST['email'])) {
          echo "$_POST[login_username]";
          echo "$_POST[login_password]";
        }
  ?>
</body>

</html>