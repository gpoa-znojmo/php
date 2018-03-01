<?php
$dbhost = 'server.xy'; // server, kde se nachází databáze
$dbname = 'databaze'; // jméno databáze
$dbuser = 'uzivatel'; // uživatelské jméno
$dbpass = 'heslo'; // heslo
 
$spojeni = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
//vytvoření proměnné $connect, která provede připojení na server a databázi
// Následuje kontrola spojení
if (!$spojeni){
 // vykřičník vyjadřuje negaci nebo-li není-li spojení, pak...
 echo("Chyba: Nepodařilo se připojit k serveru!");
 exit;
}
mysqli_set_charset($spojeni, 'utf8');
// správné nastavení kódování databáze
?>
