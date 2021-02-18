<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>File Upload</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Josefin Sans', sans-serif;
        }
        body{
            background-color: #151320;
            display: grid;
            place-items: center center;
            align-items: center;
            color: white;


        }
        input[type="file"]{
            display: none;

        }
        label{
            color: white;
            height: 60px;
            width: 200px;
            background-color: #1c1b29 ;
            position: absolute;
            margin: auto;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            transition: 0.5s;
            border-radius: 5px;

        }
        .material-icons{

            margin-right: 10px;
        }
        label:hover{
            background-color: white;
            color: black;
        }
        input[type="submit"]{
            padding: 5px 5px ;
            background-color: transparent;
            color: white;
            border-radius: 5px;
            margin-top: 370px;
            margin-bottom: 30px;


        }



    </style>
</head>
<body>
    <form action="file_upload.php" method="post" enctype="multipart/form-data">
    <input type="file" name="the_file" id="file">
    <label for="file">
        <span class="material-icons">
            add_photo_alternate
            </span>
        Choose a Photo
    </label>
    <input type="submit" name="submit" value="Upload!">
    </form>



</body>
</html>
<?php
    $currentDirectory = getcwd();
    $uploadDirectory = "/uploads/";

    $errors = []; // Store errors here

    $fileExtensionsAllowed = ['jpeg','jpg','png','php']; // These will be the only file extensions allowed

    $fileName = $_FILES['the_file']['name'];
    $fileSize = $_FILES['the_file']['size'];
    $fileTmpName  = $_FILES['the_file']['tmp_name'];
    $fileType = $_FILES['the_file']['type'];
    $fileExtension = strtolower(end(explode('.',$fileName)));

    $uploadPath = $currentDirectory . $uploadDirectory . basename($fileName);
    $upload1 = $uploadDirectory . basename($fileName);

    if (isset($_POST['submit'])) {

      if (! in_array($fileExtension,$fileExtensionsAllowed)) {
        $errors[] = "This file extension is not allowed. Please upload a JPEG or PNG file";
      }

      if ($fileSize > 4000000) {
        $errors[] = "File exceeds maximum size (4MB)";
      }

      if (empty($errors)) {
        $didUpload = move_uploaded_file($fileTmpName, $uploadPath);

        if ($didUpload) {

          echo "The file http://localhost:8888/bugs$upload1 has been uploaded";


        } else {
          echo "                                                    ";
          echo "An error occurred. Please contact the administrator.";

        }
      } else {
        foreach ($errors as $error) {
          echo $error . "These are the errors" . "\n";
        }
      }

    }
?>
