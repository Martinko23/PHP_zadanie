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
    <div style="position: relative; background-color: black;">
        <img src="\img\1.jpg" class="img-fluid" alt="Responsive image" style="opacity: 0.6;">
        <h1 style="position: absolute; bottom: 15px; left: 5vw; color: white; font-size: 52px; font-weight: 800;">Internát C-Blok</h1>
    </div>
    

    
    <nav class="nav nav-pills nav-fill" style="padding-bottom: 3em;">
        <a class="nav-item nav-link<?=$aktivna==="domov" ? " active" : ""?>" href="\index.php">Domov</a>
        <a class="nav-item nav-link<?=$aktivna==="ziadost" ? " active" : ""?>" href="\ziadost.php">Žiadosť o ubytovanie</a>
        <a class="nav-item nav-link<?=$aktivna==="novinky" ? " active" : ""?>" href="\novinky.php">Výsledky</a>
        <a class="nav-item nav-link<?=$aktivna==="kontakt" ? " active" : ""?>" href="\kontakt.php">Kontakt</a>
    </nav>
    
    <main class="container">
