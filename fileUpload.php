<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="fileUpload.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="file">
        <input type="submit" value="Upload">
    </form>
    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $file = $_FILES["file"];
            $fileName = $file["name"];
            $fileType = $file["type"];
            $fileSize = $file["size"];
            $fileTmpName = $file["tmp_name"];
            $fileError = $file["error"];
            if($fileError == 0){
                move_uploaded_file($fileTmpName, "uploads/" . $fileName);
                echo "File uploaded successfully";
            }else{
                echo "Error uploading file";
            }
        }
    ?>
</body>
</html>