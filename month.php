<?php
function pr($s){
    echo '<pre>';
    print_r($s);
    echo '</pre>';

}
function SetMonth($days, $dayName)
{
    if ($days >= 28 && $days <= 31) {
        $arrDays = array('Esmaspaev', 'Teisipaev', 'Kolmapaev', 'Neljapaev', 'Reede', 'Lauapaev', 'Puhapaev');

        for ($j = 0; $j < count($arrDays); $j++) {
            if ($dayName == $arrDays[$j]) {
                $start = $j;
            }
        }

        if (isset($start)) {
            for ($i = $start; $i < $days + $start; $i++) {
                $day = $i % 7;
                $arMonth[] = $arrDays[$day];
            }
            return $arMonth;
        } else {
            $error = "value nimetus";
            return $error;
        }
    } else {
        $error = "value number";
        return $error;
    }
}
