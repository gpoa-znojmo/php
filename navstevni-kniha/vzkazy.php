<?php
 
$pocet_vzkazu = mysqli_query($spojeni, "SELECT COUNT(*) as pocet FROM kniha;"); 
//přečte počet vzkazů v databázi
$cislo = mysqli_fetch_array($pocet_vzkazu);
//sql příkaz na počet řádků
$celkem_vzkazu = $cislo["pocet"];
 
 echo "<b>Celkový počet vzkazů: ".$celkem_vzkazu."</b><hr>";
$vzkazy = mysqli_query($spojeni, "SELECT * FROM kniha;");
 
 // pokud nebyly načteny žádné vzkazy, vypiš chybu
 if(!$vzkazy){
 echo "Chyba při načtení vzkazů !!";
 }
 // jinak ulož vzkazy do pole a postupně je vypiš
 else{
 // cyklus while projde všechny vzkazy,
 // pomoci pole $vzkaz[""] vypíše všechny informace jednotlivých vzkazů
 while ($vzkaz = mysqli_fetch_array($vzkazy))
 {
 echo $vzkaz["ID"]."<br />";
 echo $vzkaz["NICK"]."<br />";
 echo $vzkaz["EMAIL"]."<br />";
 echo $vzkaz["WEB"]."<br />";
 echo $vzkaz["VZKAZ"]."<br />";
 echo $vzkaz["DATUM"]."<br />";
 }
 } 
?>
