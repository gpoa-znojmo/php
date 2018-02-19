<?php
 header("Content-Type: text/html; charset=utf-8");
//řádek kvůli správnému kódování
 include('pripojeni.php');
//vložení externího souboru s připojením
?>
<form action="" method="post">
<input type="text" name="nick" /> nick <br />
<input type="text" name="email" /> email<br />
<input type="text" name="web" /> Váš WEB<br />
Vzkaz:<br />
<textarea name="vzkaz"></textarea>
<input type="submit" value="odeslat" />
</form>
<!-- všimněte si, že formulář není součástí php kódu -->
<?php
if (!empty ($_POST))
// empty - prázdný a jeho negace nebo-li
// pokud bylo cokoliv zadáno do formuláře, začne se vykonávat následující podmínka
{
 // přijme všechny zadané informace do formuláře
 $nick = $_REQUEST["nick"];
 $email = $_REQUEST["email"];
 $web = $_REQUEST["web"];
 $vzkaz = $_REQUEST["vzkaz"];
 $datum = StrFTime("%d.%m.%Y", Time());
 
 // pokud byly vyplněn alespoň nick a vzkaz, může se nový příspěvek uložit do databáze
 if($nick!="" && $vzkaz!="")
 {
 // uloží se nový vzkaz do databáze a vrátí 1
 $zapis = mysqli_query($spojeni, "INSERT INTO kniha (NICK, EMAIL, WEB, VZKAZ, DATUM) 
 VALUES ('$nick','$email','$web','$vzkaz','$datum');");
 // Hláška o zdárném zápisu
 echo ("vzkaz přidán<br>");
 }
// pokud nebyl doplňěn nick a vzkaz, zahlasí výzvu
else {
  echo ("Doplňte alespoň Nick a Vzkaz!<br>");
} 
} 
 // vloží externí soubor s výpisem všech vzkazů, které jsou uloženy v databázi
 include('vzkazy.php');
?>
