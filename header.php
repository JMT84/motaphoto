<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body class="body">
    <header class="header">
        <div class="logo">
            <a href="http://localhost:8888/motaphoto/"> 
                <img src="/motaphoto/wp-content/themes/motaphoto/images/Logos/Logo.png" alt="logo motaphoto">
            </a>
        </div>
        <div class="burgerMenu">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </div>
        <?php wp_nav_menu(['theme_location' => 'main-menu',]); ?>
        <?php include 'templates_part/popup-contact.php' ?>
    </header>


   