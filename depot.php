<?php
#var_dump($_SERVER['REQUEST_METHOD']);
if ($_SERVER['REQUEST_METHOD']=='POST'){
var_dump($_FILES);
move_uploaded_file($_FILES["candidatures"]["tmp_name"],"candidatures/".$_FILES["candidatures"]["name"]);
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <h1>candidature</h1>

  <form method="post" enctype="multipart/form-data">
    <input type="file" name="candidatures"/>
    <button type="submit">Envoyer</button>
</form>

</body>
</html>