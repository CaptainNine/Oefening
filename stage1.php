<?php
// 11 = boer, 12 = koningin, 13 = koning, 14 = aas
//$a = rand(0 ,3);
$soorten = array('klaveren', 'ruiten', 'harten', 'schoppen');
//$soort = $soorten[$a];
//$b = rand(0 ,12);
$waarden = array(2, 3, 4, 5, 6, 7, 8, 9, 10, 'boer' => 11, 'koningin' => 12, 'koning' => 13, 'aas' => 14);
//$waarde = $waarden[$b];
//echo "Je trok een " . $soort . " " . $waarde;

$deck = array();
foreach ($soorten as $soort){
    foreach ($waarden as $waarde) {
        $deck[] = array('waarde'=>$waarde, 'soort'=>$soort);
    }
}

shuffle($deck);
$kaart = array_shift($deck);
$kaart2 = array_shift($deck);
$kaart3 = array_shift($deck);
$kaart4 = array_shift($deck);

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Stage1</title>
        <link rel= "stylesheet" typ="text/css" href="css/style.css">
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script src="script.js"></script>
    </head>
    <body>
        <div class="buttonholder">
            <h1><?php echo '<img src="images/' .$kaart['soort'].$kaart['waarde'].'.png" alt="kaart" width="10%" height="10%">';?></h1>
            <br>
            <input type='button' onClick="unhideDiv();increase()" id="keuze1" class="button" value="De volgende kaart is lager"/>
            <div style='display: none;' id="kaartzien">
                <?php if($kaart2['soort'] == $kaart['soort'] && $kaart2['waarde'] == $kaart['waarde']){
    return;
}?>
                <h1><?php echo  '<img src="images/' .$kaart2['soort'].$kaart2['waarde'].'.png" alt="kaart" width="10%" height="10%">';?></h1>
                <?php if($kaart2['waarde']>=$kaart['waarde']){
    echo '<h1> Neem een slok drinken!</h1>';
}?>
                <input type="text" id="text">
            </div>
            <input type='button' onClick='unhideDiv2()' id="keuze11" class="button" value="De volgende kaart is hoger"/>
            <div style='display: none;' id="kaartzien2">
                <h1><?php echo  '<img src="images/' .$kaart2['soort'].$kaart2['waarde'].'.png" alt="kaart" width="10%" height="10%">';?></h1>
                <?php if($kaart2['waarde']<=$kaart['waarde']){
    echo '<h1> Neem een slok drinken! </h1>';
}?>
            </div>
            <br><br>
            <input type='button' onClick='unhideDiv3()' id="keuze2" class="button" value="De volgende kaart valt tussen deze twee" style='visibility: hidden;'/>
            <div style='display: none;' id="kaartzien3">
                <h1><?php echo  '<img src="images/' .$kaart3['soort'].$kaart3['waarde'].'.png" alt="kaart" width="10%" height="10%">';?></h1>
                <?php if($kaart3['waarde']<=$kaart['waarde'] && $kaart3['waarde']<=$kaart2['waarde'] || $kaart3['waarde']>=$kaart['waarde'] && $kaart3['waarde']>=$kaart2['waarde']) {
    echo '<h1> Neem een slok drinken! </h1>';
}?>
            </div>
            <br>
            <input type='button' onClick='unhideDiv4()' id="keuze22" class="button" value="De volgende kaart valt buiten deze twee" style='visibility: hidden;'/>
            <div style='display: none;' id="kaartzien4">
                <h1><?php echo  '<img src="images/' .$kaart3['soort'].$kaart3['waarde'].'.png" alt="kaart" width="10%" height="10%">';?></h1>
                <?php if($kaart3['waarde']>=$kaart['waarde'] && $kaart3['waarde']<=$kaart2['waarde'] || $kaart3['waarde']<=$kaart['waarde'] && $kaart3['waarde']>=$kaart2['waarde']) {
    echo '<h1> Neem een slok drinken! </h1>';
}?>
            </div>
            <br>
            <input type='button' onClick='unhideDiv5()' id="keuze3" class="button" value="De soort van de volgende kaart is klaveren" style='visibility: hidden;'/>
            <div style='display: none;' id="kaartzien5">
                <h1><?php echo  '<img src="images/' .$kaart4['soort'].$kaart4['waarde'].'.png" alt="kaart" width="10%" height="10%">';?></h1>
                <?php if($kaart4['soort']!='klaveren'){
    echo '<h1> Neem een slok drinken! </h1>';
}?>
            </div>
            <br>
            <input type='button' onClick='unhideDiv6()' id="keuze31" class="button" value="De soort van de volgende kaart is ruiten" style='visibility: hidden;'/>
            <div style='display: none;' id="kaartzien6">
                <h1><?php echo  '<img src="images/' .$kaart4['soort'].$kaart4['waarde'].'.png" alt="kaart" width="10%" height="10%">';?></h1>
                <?php if($kaart4['soort']!='ruiten'){
    echo '<h1> Neem een slok drinken! </h1>';
}?>
            </div>
            <br>
            <input type='button' onClick='unhideDiv7()' id="keuze32" class="button" value="De soort van de volgende kaart is harten" style='visibility: hidden;'/>
            <div style='display: none;' id="kaartzien7">
                <h1><?php echo  '<img src="images/' .$kaart4['soort'].$kaart4['waarde'].'.png" alt="kaart" width="10%" height="10%">';?></h1>
                <?php if($kaart4['soort']!='harten'){
    echo '<h1> Neem een slok drinken! </h1>';
}?>
            </div>
            <br>
            <input type='button' onClick='unhideDiv8()' id="keuze33" class="button" value="De soort van de volgende kaart is schoppen" style='visibility: hidden;'/>
            <div style='display: none;' id="kaartzien8">
                <h1><?php echo  '<img src="images/' .$kaart4['soort'].$kaart4['waarde'].'.png" alt="kaart" width="10%" height="10%">';?></h1>
                <?php if($kaart4['soort']!='schoppen'){
    echo '<h1> Neem een slok drinken! </h1>';
}?>
            </div>
            <div class="buttonholder" id="nextstage" style='visibility: hidden;'>
                <form style="display: inline" action="stage1.php" method="get">
                    <button class="button">Op naar het volgende gedeelte!</button>
                </form>
            </div>
        </div>
        <div id="columnchart_material" style="width: 1200px; height: 500px;"></div>
    </body>
</html>