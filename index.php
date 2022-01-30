<!-- Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare uno shop online;
ad esempio, ci saranno sicuramente dei prodotti da acquistare e degli utenti che fanno shopping.
Strutturare le classi gestendo l'ereditarietà dove necessario; ad esempio ci potrebbero essere degli utenti premium
che hanno diritto a degli sconti esclusivi, oppure diverse tipologie di prodotti.
Provate a stampare in pagina come visto questa mattina i prodotti scelti dall'utente. -->

<?php
require_once __DIR__ . '/Games.php';
require_once __DIR__ . '/PC.php';
require_once __DIR__ . '/Console.php';
require_once __DIR__ . '/Nintendo.php';
require_once __DIR__ . '/User.php';

$league_of_legends = new PC('League Of Legends', 'PC', 12, true, 0, 'CPU = Intel: Core i3-530/AMD: A6-3650, GPU = NVidia: GeForce 9600GT/AMD: HD 6570/Intel: Intel HD 4600 integrated graphics card');

$call_of_duty = new Console('Call Of Duty: Vanguard', 'PS4/Xbox X/S', 18, true, 60);

$super_mario_3D_World = new Nintendo('Super Mario 3D World', 'Nintendo Switch', 7, false, 50);

$andrew_wilson_EA = new User('Andrew', 'Wilson', 'andrew.wilson@electronicArts.com','AndrewWilsonEA', 'PC, Console');
$andrew_wilson_EA->addGame($league_of_legends);
$andrew_wilson_EA->addGame($call_of_duty);
$andrew_wilson_EA->addGame($super_mario_3D_World);
$andrew_wilson_EA_basket = $andrew_wilson_EA->getBasket();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Games Store</title>
</head>
<body>

    <h1>Welcome Mr. <?php echo $andrew_wilson_EA->getFullName(); ?> this is your basket</h1>
    
    <?php foreach($andrew_wilson_EA_basket as $game) { ?>
        <div>
            <h2><?php echo $game->title; ?> - <?php echo $game->platform; ?></h2>
            <div>PEGI: <?php echo $game->PEGI; ?></div>
            <div>Multiplayer: <?php echo $game->multiplayer; ?> Euro</div>
            <div>Price: <?php echo $game->price; ?> Euro</div>

            <?php if(isset($game->system_requirements)) { ?>
                <div>System Requiments: <?php echo $game->system_requirements; ?></div>
            <?php } ?>
        </div>
    <?php } ?>
</body>
</html>