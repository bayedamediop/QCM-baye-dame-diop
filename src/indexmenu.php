<?php
session_start();
// session_destroy();
        $p=isset($_GET['p'])?$_GET['p']:'index'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="inde.css">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="admine.css">
    <link rel="stylesheet" href="menu.css">
<?php if($p=="jouere" || $p=="app1" || $p=="app2"):?>
    <link rel="stylesheet" href="jouere.css">
<?php endif;?>
<?php if($p=="jouere1" || $p=="jouere1"):?>
    <link rel="stylesheet" href="jouere1.css">   
<?php endif;?>
</head>
<body>
<div id="general">
        <nav class="nav">
            <ul>
                <li>
                    <a href="?p=exo1">EXO1</a>
                    <a href="?p=exo2">EXO2</a>
                    <a href="?p=exo3">EXO3</a>
                    <a href="?p=exo4">EXO4</a>
                    <a href="?p=exo5">EXO5</a>
                    <a href="?p=app1">APPLI 1</a>
                    <a href="?p=app2">APPLI 2</a>
                    <a href="jeux.php">JOUERE</a>
                    <a href="indexadmi.php">ADMINE</a>
                    
                </li>
            </ul>
        </nav>
</div>
<br>
<br>
<br>
<br>
<br>
<?php
    require_once("$p.php");
    
?>
</body>
</html>