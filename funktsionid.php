<?php
//valuse leidmine funktsioon
function getKooliVaheajani(){
    $today=date('d.m.Y');
    $talv=date('20.12.2021');
    $dif=date_diff(date_create($today), date_create($talv));
    echo '<br>';
    echo 'Talve Koolivaheaajani on '.$dif->format('%d').' päeva';
}

function get_vanus(){
    echo '<form method="post" action="">';
    echo 'palun sinu sünnipäev:';
    echo '<input type="date" name="age">';
    echo '<input type="submit" name="arvuta" value="arvuda vanus">';
    echo '</form>';
    if (isset($_POST['arvuta'])){
        $synd=$_POST['age'];
        $diff=date_diff(date_create($synd), date_create('16.11.21'));
        echo '<br>';
        echo $diff->format('%y').'aastat vana';
    }
}
?>


