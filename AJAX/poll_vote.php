<?php
$vote = $_REQUEST['vote'];

$filename = "poll_result.txt";
$content = file($filename);

$array = explode("||", $content[0]);
$yes = $array[0];
$no = $array[1];


$yes = $vote == 0 ? $yes + 1 : $yes;
$no = $vote == 1 ? $no + 1 : $no;

$insertvote = $yes . "||" . $no;
$fp = fopen($filename, "w");
fputs($fp, $insertvote);
fclose($fp);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <h2>Result:</h2>
        <table class="table ">
            <tr>
                <td>Yes:</td>
                <td>
                    <div style="background-color: #ff0000; width: <?php echo(100 * $yes / ($no + $yes)); ?>%;"><?php echo(100 * $yes / ($no + $yes)); ?>%</div>
                </td>
            </tr>
            <tr>
                <td>No:</td>
                <td>
                    <div style="background-color: #ff0000; width: <?php echo(100 * $no / ($no + $yes)); ?>%;"><?php echo(100 * $no / ($no + $yes)); ?>%</div>
                </td>
            </tr>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-1BmE4kSBQ01Jzj7x4U8s5v5G2b8fKTK9PIWmI1nU2mUZYY3zZVZ4z3f5V9zvNk7" crossorigin="anonymous"></script>
</body>

</html>