<?php
// Napojení souboru se spojením k databázi
require 'pripojeni.php';
// SQL příkaz k vytvoření tabulky Clanky v databázi
$vytvor_knihu = "
CREATE TABLE kniha
(
ID INT NOT NULL AUTO_INCREMENT ,
NICK VARCHAR(255) CHARACTER SET utf8 COLLATE utf8_czech_ci NOT NULL ,
EMAIL VARCHAR(255) CHARACTER SET utf8 COLLATE utf8_czech_ci NULL ,
WEB VARCHAR(255) CHARACTER SET utf8 COLLATE utf8_czech_ci NULL ,
VZKAZ VARCHAR(255) CHARACTER SET utf8 COLLATE utf8_czech_ci NOT NULL ,
DATUM VARCHAR(255) CHARACTER SET utf8 COLLATE utf8_czech_ci NOT NULL ,
PRIMARY KEY (ID)
)";
if (mysqli_query($spojeni, $vytvor_knihu)) {
    echo "Tabulka Clanky byla vytvořena";
} else {
    echo "Chyba, tabulka nebyla vytvořena: " . mysqli_error($spojeni);
}
mysqli_close($spojeni);
?>
