<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AJAX XML</title>
</head>
<body>
    <form>
        Select Album
        <select name="album" id="album">
            <option value="">Select Album</option>
        </select>
    </form>
    <div id="response"></div>

    <script>
        var xhr = new XMLHttpRequest();
        xhr.open('GET','album.xml',true);
        xhr.send();        
        xhr.onreadystatechange = function(){
            if(xhr.readyState == 4 && xhr.status == 200){
                var xml = xhr.responseXML;
                var albums = xml.getElementsByTagName('album');
                var select = document.querySelector('select');
                for(var i = 0; i < albums.length; i++){
                    var option = document.createElement('option');
                    option.textContent = albums[i].getElementsByTagName('title')[0].textContent;
                    option.value = albums[i].getElementsByTagName('title')[0].textContent;
                    select.appendChild(option);
                }
                select.onchange = function(){
                    var title = this.value;
                    var album = xml.getElementsByTagName('album');
                    for(var i = 0; i < album.length; i++){
                        if(album[i].getElementsByTagName('title')[0].textContent == title){
                            var response = document.getElementById('response');
                            response.innerHTML = 'Title: ' + album[i].getElementsByTagName('title')[0].textContent + '<br>';
                            response.innerHTML += 'Artist: ' + album[i].getElementsByTagName('artist')[0].textContent + '<br>';
                        }
                    }
                }
            }  
        }

    </script>
    
</body>
</html>