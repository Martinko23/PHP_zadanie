<?php 
    include 'connect.php';

?>

<!doctype html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="my.css">
    <title><?=$nadpis?></title>


</head>
<body>

    <h1>Internát C-Blok</h1>

    <nav class="nav nav-pills nav-fill">
        <a class="nav-item nav-link<?=$aktivna==="domov" ? " active" : ""?>" href="\index.php">Domov</a>
        <a class="nav-item nav-link<?=$aktivna==="ziadost" ? " active" : ""?>" href="\ziadost.php">Žiadosť o ubytovanie</a>
        <a class="nav-item nav-link<?=$aktivna==="novinky" ? " active" : ""?>" href="\novinky.php">Výsledky</a>
        <a class="nav-item nav-link<?=$aktivna==="kontakt" ? " active" : ""?>" href="\kontakt.php">Kontakt</a>
    </nav>
    <main>
