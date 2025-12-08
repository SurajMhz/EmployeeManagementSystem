<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>

<body>
    <h1>Welcome to Dashboard</h1>
    <!-- $_PHP_SELF-- Outdated. -->
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>"  method="get" enctype="multipart/form-data">
        <label for="">Send your picture</label>
        <input type="file" name="fileupload" />
        <br>
        <button>Send</button>
    </form>
    <h1>File details</h1>
    <?php

    if(isset($_FILES['fileupload'])){
    //returns file name.
    echo "File Name: ".$_FILES['fileupload']['name']."</br>";
    // returns MIME type of the file.
    
    echo "File Type: ". $_FILES['fileupload']['type']."</br>";
    //returns size of the file (in bytes).
    echo "File Size: ". $_FILES['fileupload']['size']."</br>";
    }
    ?>
</body>

</html>