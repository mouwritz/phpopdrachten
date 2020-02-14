<?php
/**
 * User: Maurits Bakker
 * Date: 7-2-2020
 * Time: 13:25
 * File: opdracht_2-2.php
 */
?>

<?php
$text1 = "Hallo";
$text2 = "een makkelijke taal";
$text3 = "toch z'n makkelijke taal";
$text4 = "wat is";
$text5 = "PHP ";
$text6 = "Nooit gedacht dat";
$text7 = "De instalatie is best ingewikkeld";
$text8 = "Fijn";
$text9 = "? ";
$text10 = ". ";
$text11 = ", ";
$text12 = "<br>";
$text13 = "is ";
$text14 = "Vind je niet";
$text15 = "toch";
$space = " "
?>

<!---->

<?php
/**
 * User: Maurits Bakker
 * Date: Date
 * Time: **:** AM/PM
 * File: opdracht_2-1.php
 */
?>

<!DOCTYPE html>

<html>
    <head>
        <meta name="description" content=" ">
        <meta name="keywords" content=" ">
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="CSS\style.css">
        <title>
            index
        </title>
    </head>
    <body>

    <header>
        <h1><?php echo "Uitwerking van PHP-opdrachten"; ?></h1>
    </header>

    <aside>
        <h2>Menu</h2>
        <ul>
            <li>Hoofdstuk 2
                <ul>
                    <li>
                        <a href="..\hoofdstuk2\opdracht_2-1.php">Opdracht 2.1</a>
                    </li>
                    <li>
                        <a href="..\hoofdstuk2\opdracht_2-2.php">Opdracht 2.2</a>
                    </li>
                </ul>
            </li>
            <li>Hoofdstuk 3
                <ul>
                    <li>
                        <a href="hoofdstuk3/opdracht_3-1.php">Opdracht 3.1</a>
                    </li>
                    <li>
                        <a href="hoofdstuk3/opdracht_3-2.php">Opdracht 3.2</a>
                    </li>
                </ul>
            </li>
            <li>Hoofdstuk 4
                <ul>
                    <li>
                        <a href="hoofdstuk4/opdracht_4-1.php">Opdracht 4.1</a>
                    </li>
                    <li>
                        <a href="hoofdstuk4/opdracht_4-2.php">Opdracht 4.2</a>
                    </li>
                </ul>
            </li>
            <li>Hoofdstuk 5
                <ul>
                    <li>
                        <a href="hoofdstuk5/opdracht_5-1.php">Opdracht 5.1</a>
                    </li>
                    <li>
                        <a href="hoofdstuk5/opdracht_5-2.php">Opdracht 5.2</a>
                    </li>
                </ul>
            </li>
        </ul>
    </aside>
    <main id="wrapper">
        <h2>Uitwerkingen</h2>
        <h1>Taak 2</h1>
        <p>
            <?php
            echo
                //Hallo, wat is PHP een makkelijke taal
            $text1, $text11, $text4 . $space . $text5, $text2, $text10, $text12,
                //De instalatie is best ingewikkeld. Fijn toch?
            $text7, $text10, $text8, $space . $text15 . $text9, $text12,
                //Nooit gedacht dat PHP toch z'n makkelijke taal is.
                $text6 . $space . $text5, $text3, $space . substr($text4, 4, 2) . $text10;
            ?>
        </p>
        <h1>
            Taak 3
        </h1>
        <?php
        echo "<p>" .
            //Hallo,
            $text1 . $text11 . $text12 .
            //Fijn toch dat PHP toch z'n makkelijke taal.
            $text8 . $space . $text15 . $space . substr($text6, 14, 3) . $space . $text5 . $text3 . $text10 . $text12 .
            //De instalatie is best ingewikkeld. Vind je niet?
            $text7 . $text10 . $text14 . $text9 .
            "</p>";
        ?>
    </main>
    </body>
</html>
                                                                           