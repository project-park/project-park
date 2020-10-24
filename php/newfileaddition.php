<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add a file to project</title>
</head>

<body>
    <?php
        require 'navbar.php';
    ?>
    <div class="container center-align">
        <h2>Dummy Project Name</h2>
    </div>
    <form action="/php/savefile.php" method="POST">
        <div class="container">
            <h5>Directory in which this file will be saved</h5>
            <p>dummyproject1/html/v5/</p>
            <div class="row">
                <div class="input-field" style="width:30%">
                    <input id="add-file-name" type="text" data-length="20">
                    <label for="add-file-name">Add File Name</label>
                </div>
            </div>
            <p class="flow-text">Add code below</p>
            <div class="input-field">
                <textarea id="new_code" class="materialize-textarea" name="new_code"
                    placeholder="Sample HTML Code"></textarea>
            </div>
            <input class="btn green" type="submit" name="submit" value="Add File">
            <a href="#" class="btn red">Cancel</a>
        </div>
    </form>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>
    $(document).ready(function() {
        $('input#add-file-name').characterCounter();
    });
    </script>
    <?php
        require 'footer.php';
    ?>
</body>

</html>