<?php

$body = print_r($_POST, true);
$array = array();
foreach ($_POST as $key => $value) {
    global $array;
    if (!empty($value)) {
        $array["$key"] = "$value";
        // array_push($array1["$key"], );
    }
}

// madrid result
$madrid = array("name" => "Real madrid", "points" => 0, "match" => 0, "wins" => 0, "draws" => 0, "loses" => 0, "goals" => 0, "goals_in" => 0, "+/-" => 0);
// barcelona result
$barcelona = array("name" => "FC barcelona", "points" => 0, "match" => 0, "wins" => 0, "draws" => 0, "loses" => 0, "goals" => 0, "goals_in" => 0, "+/-" => 0);
// chelsea result
$chelsea = array("name" => "chelsea FC", "points" => 0, "match" => 0, "wins" => 0, "draws" => 0, "loses" => 0, "goals" => 0, "goals_in" => 0, "+/-" => 0);
// liverpool result
$liverpool = array("name" => "Liverpool FC", "points" => 0, "match" => 0, "wins" => 0, "draws" => 0, "loses" => 0, "goals" => 0, "goals_in" => 0, "+/-" => 0);

function standing($team_1, $team_2, $array_1, $array_2)
{
    // match 1 => madrid vs barcelona
    if ($team_1 > $team_2) {
        $array_1["points"] += 3;
        $array_1["wins"] += 1;
        $array_1["goals"] += $team_1;
        $array_1["goals_in"] += $team_2;
        $array_2["loses"] += 1;
        $array_2["goals"] += $team_2;
        $array_2["goals_in"] += $team_1;
    } elseif ($team_1 < $team_2) {
        $array_2["points"] += 3;
        $array_2["wins"] += 1;
        $array_2["goals"] += $team_2;
        $array_2["goals_in"] += $team_1;
        $array_1["loses"] += 1;
        $array_1["goals"] += $team_1;
        $array_1["goals_in"] += $team_2;
    } else {
        $array_1["points"] += 1;
        $array_1["draws"] += 1;
        $array_1["goals_in"] += $team_2;
        $array_1["goals"] += $team_1;
        $array_2["points"] += 1;
        $array_2["draws"] += 1;
        $array_2["goals"] += $team_2;
        $array_2["goals_in"] += $team_1;
    }
    return [$array_1,$array_2];
}

?>