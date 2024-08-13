<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Tìm người dùng</h1>
    <form id="form-response">
        <input type="text" id="name" name="name">
        <input type="submit" value="Submit">
    </form>
    <div id="response"></div>
    <script>
        document.getElementById('form-response').addEventListener('submit', function(e) {
            e.preventDefault();
            var formResponse = new FormData(this);
            var xhr = new XMLHttpRequest();
            xhr.open('POST', 'data.php', true);
            xhr.onload = function() {
                if (xhr.status == 200) {
                    document.getElementById('response').innerHTML = xhr.responseText;
                } else {
                    alert('Request failed. Returned status of ' + xhr.status);
                }
            }
            xhr.send(formResponse);
        });
    </script>
</body>

</html>