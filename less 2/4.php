


<html>

<form action ="" method="post">
    <label> <input type="radio" name="language" value="Ru" /> Русский </label> <br />
    <label> <input type="radio" name="language" value="En" />Английский</label><br />
    <button> Выбрать </button> </br>

</form>

</html>


<?php
$daysRu = ['пн', 'вт', 'ср', 'чт', 'пт', 'сб', 'вс'];
$daysEn = ['mn', 'ts', 'wd', 'th', 'fr', 'st', 'sn'];


if (!empty($_POST)) {
   $language =  $_POST["language"];
   if ($language == "Ru"){
       var_dump($daysRu);
   }
    else{
        var_dump($daysEn);
    }
}



?>