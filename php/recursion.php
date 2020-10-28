<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Structure</title>
</head>

<body>
    <?php
        require "$_SERVER[DOCUMENT_ROOT]/php/navbar.php";
    ?>
    <div class="container left-align">
        <h3 class="blue-text">
            Project-name
        </h3>
    </div>
    <hr>
    <div class="container">
        <ul class="collection with-header">
            <li class="collection-header light-blue lighten-5">
                <span>Project Directory</span>
            </li>
            <li class="collection-item "><i class="material-icons blue-text  left">folder</i>Folders</li>
            <li class="collection-item"><i class="material-icons blue-text left">folder</i>Folders</li>
            <li class="collection-item"><i class="material-icons blue-text left">folder</i>Folders</li>
            <li class="collection-item"><i class="material-icons yellow-text left">insert_drive_file</i>items</li>
            <li class="collection-item"><i class="material-icons yellow-text left">insert_drive_file</i>items</li>
            <li class="collection-item"><i class="material-icons yellow-text left">insert_drive_file</i>items</li>
            <li class="collection-item"><i class="material-icons yellow-text left">insert_drive_file</i>items</li>
        </ul>
    </div>
    <div class="container right-align">
        <a href="#" class="btn-small waves-effect waves-dark blue lighten-3 black-text"><i
                class="material-icons black-text left">add</i>Add New File</a>
    </div>
    <?php
        require "$_SERVER[DOCUMENT_ROOT]/php/footer.php";
    ?>
</body>

</html>