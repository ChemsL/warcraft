<?php require_once 'character.php' ?>
<?php require_once 'hero.php' ?>
<?php require_once 'orc.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <div class="infosHero">
        <p>
            <?php $hero = new Hero(1000, 0, 'JO', 'Epée ', 400, 'Shield', 450);
            echo 'Vie du Héros:' . $hero->getHP();
            echo 'Rage du Héro: ' . $hero->getRage();
            echo 'Nom du héros: ' . $hero->getName();
            echo 'Arme du héros: ' . $hero->getWeaponName();
            echo 'Dégâts de l\'arme: ' . $hero->getWeaponDamage();
            echo 'Nom du bouclier: ' . $hero->getShieldName();
            echo 'Valeur du bouclier: ' . $hero->getShieldValue();

            ?>
        </p>
    </div>
    <div class="infosOrc">
        <p><?php $orc = new orc(2000, 0, 'Feu');
            echo 'Vie de l\'orc: ' . $orc->getHP();
            echo 'Rage de l\'orc: ' . $orc->getRage();
            echo 'Type de l\'orc:' . $orc->getOrcType();
            ?>
        </p>
    </div>

    <h1>FIGHT</h1>
    <p><?php


        echo $hero->getName() . ' attaque' . ' l\'orc' . ' de ' . $hero->getWeaponDamage() . ' points.';
        $orc->setHP($orc->getHP() - $hero->getWeaponDamage());
        echo 'vie restante de l\'orc : ' . $orc->getHP() . ' // ';

echo'<br>';

        $orc->attackOrc();
        echo ' Orc attaque ' . $hero->getName() . ' de ' . $orc->getOrcDamages() . 'points.' ;
$hero->beAttacked($orc->getOrcDamages());
        echo 'vie restante de ' . $hero->getName() . ': vie ' . $hero->getHP() ;
        


        ?>
    </p>

</body>

</html>