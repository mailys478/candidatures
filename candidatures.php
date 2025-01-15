<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $dir = DIR."/candidatures";
    $dossier = new DirectoryIterator($dir);
    foreach ($dossier as $item) {
    if (!$item->isDot() && $item->getFilename() !== '.gitkeep') {
    if ($item->isFile()) {
    echo "Fichier : ";
    }
    echo "<a href='candidatures/".$item->getFileName()."'>".$item->getFileName()."</a> <br>";
    }
    }
    ?>
</body>
</html>
