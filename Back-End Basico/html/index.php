<?php

$lista = ["Genoaro", "Soares", "junior"];

echo "<ul>";
foreach($lista as $nome){
    echo "<li>";
    echo "Usuário: $nome";
    echo "</li>";
}
echo "</ul>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?= "<div>"?>
    <?= "<p>"."Ola Mundo!"."</p>" ?>
    <?= "</div>"?>
</body>
</html>