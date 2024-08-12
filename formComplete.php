<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php 
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $name = $_POST["name"];
            $err = "";
            if(empty($name)){
                $err = "Name is required";
            }
            else{
               if(!preg_match("/^[a-zA-Z-' ]*$/", $name)){
                    $err = "Only letters and white space allowed";
                }else{
                    echo "Welcome " . $name;
                }
            }
        

        }
        ?>
        <form action="" method="post">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" value="">
        <span style="color: red;"><?php echo $err ?></span>
        <br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>