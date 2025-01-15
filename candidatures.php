<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$dir = __DIR__."/candidatures";
$dossier = new DirectoryIterator($dir);
foreach ($dossier as $item) {
if ($item->isFile()) { echo "Fichier : "; }
if ($item->isDir()) { echo "Dossier : "; }
echo $item->getFilename() . "<br>";
}


?>
</body>
</html>