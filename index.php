<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
    <script src="script.js" defer></script>
    <link rel="stylesheet" href="style.css">
    <title>Simulator</title>
</head>

<body>
    <main class="row font-monospace w-100">
        <form class="col p-5 text-center" method="post">
            <h2 class="mb-5">Group stage</h2>
            <table class="table table-primary table-striped-columns">
                <tbody>
                    <tr>
                        <td><img src="IMG/REAL-MADRID.png" alt="logo" width="50px" height="60px"></td>
                        <td class="w-50">
                            <div class="input-group">
                                <input type="number" value="<?php if (isset($_POST['REAL-MADRID-S-M1-C']))
                                    echo $_POST['REAL-MADRID-S-M1-C']; ?>" name="REAL-MADRID-S-M1-C"
                                    aria-label="REAL-MADRID-S" class="form-control">
                                <input type="number" value="<?php if (isset($_POST['FC-BARCELONA-S-M1-C']))
                                    echo $_POST['FC-BARCELONA-S-M1-C']; ?>" name="FC-BARCELONA-S-M1-C"
                                    aria-label="FC-BARCELONA-S" class="form-control">
                            </div>
                        </td>
                        <td><img src="IMG/FC-BARCELONA.png" alt="logo" width="50px" height="50px"></td>
                    </tr>
                    <tr>
                        <td><img src="IMG/LIVERPOOL-FC.svg" alt="logo" width="50px" height="60px"></td>
                        <td>
                            <div class="input-group">
                                <input type="number" name="LIVERPOOL-FC-S-M1-Ch" value="<?php if (isset($_POST['LIVERPOOL-FC-S-M1-Ch']))
                                    echo $_POST['LIVERPOOL-FC-S-M1-Ch']; ?>" aria-label="LIVERPOOL-FC-S-M1"
                                    class="form-control">
                                <input type="number" name="CHELSEA-FC-S-M1-Lv" value="<?php if (isset($_POST['CHELSEA-FC-S-M1-Lv']))
                                    echo $_POST['CHELSEA-FC-S-M1-Lv']; ?>" aria-label="CHELSEA-FC-S-M1"
                                    class="form-control">
                            </div>
                        </td>
                        <td> <img src="IMG/CHELSEA-FC.png" alt="logo" width="50px" height="50px"></td>
                    </tr>
                    <tr>
                        <td><img src="IMG/FC-BARCELONA.png" alt="logo" width="50px" height="50px"></td>
                        <td>
                            <div class="input-group">
                                <input type="number" name="FC-BARCELONA-S-M2-Lv" value="<?php if (isset($_POST['FC-BARCELONA-S-M2-Lv']))
                                    echo $_POST['FC-BARCELONA-S-M2-Lv']; ?>" aria-label="FC-BARCELONA-S-M2"
                                    class="form-control">
                                <input type="number" name="LIVERPOOL-FC-S-M2-Br" value="<?php if (isset($_POST['LIVERPOOL-FC-S-M2-Br']))
                                    echo $_POST['LIVERPOOL-FC-S-M2-Br']; ?>" aria-label="LIVERPOOL-FC-S-M2"
                                    class="form-control">
                            </div>
                        </td>
                        <td> <img src="IMG/LIVERPOOL-FC.svg" alt="logo" width="50px" height="60px"></td>
                    </tr>
                    <tr>
                        <td><img src="IMG/REAL-MADRID.png" alt="logo" width="50px" height="60px"></td>
                        <td>
                            <div class="input-group">
                                <input type="number" name="REAL-MADRID-S-M2-Ch" value="<?php if (isset($_POST['REAL-MADRID-S-M2-Ch']))
                                    echo $_POST['REAL-MADRID-S-M2-Ch']; ?>" aria-label="REAL-MADRID-S-M2"
                                    class="form-control">
                                <input type="number" name="CHELSEA-FC-S-M2-Rm" value="<?php if (isset($_POST['CHELSEA-FC-S-M2-Rm']))
                                    echo $_POST['CHELSEA-FC-S-M2-Rm']; ?>" aria-label="CHELSEA-FC-S-M2"
                                    class="form-control">
                            </div>
                        </td>
                        <td> <img src="IMG/CHELSEA-FC.png" alt="logo" width="50px" height="50px"></td>
                    </tr>
                    <tr>
                        <td><img src="IMG/LIVERPOOL-FC.svg" alt="logo" width="50px" height="60px"></td>
                        <td>
                            <div class="input-group">
                                <input type="number" name="LIVERPOOL-FC-S-M3-Rm" value="<?php if (isset($_POST['LIVERPOOL-FC-S-M3-Rm']))
                                    echo $_POST['LIVERPOOL-FC-S-M3-Rm']; ?>" aria-label="LIVERPOOL-FC-S-M3"
                                    class="form-control">
                                <input type="number" name="REAL-MADRID-S-M3-Lv" value="<?php if (isset($_POST['REAL-MADRID-S-M3-Lv']))
                                    echo $_POST['REAL-MADRID-S-M3-Lv']; ?>" aria-label="REAL-MADRID-S-M3"
                                    class="form-control">
                            </div>
                        </td>
                        <td> <img src="IMG/REAL-MADRID.png" alt="logo" width="50px" height="50px"></td>
                    </tr>
                    <tr>
                        <td><img src="IMG/CHELSEA-FC.png" alt="logo" width="50px" height="50px"></td>
                        <td>
                            <div class="input-group">
                                <input type="number" name="CHELSEA-FC-S-M3-Fb" value="<?php if (isset($_POST['CHELSEA-FC-S-M3-Fb']))
                                    echo $_POST['CHELSEA-FC-S-M3-Fb']; ?>" aria-label="CHELSEA-FC-S-M3"
                                    class="form-control">
                                <input type="number" name="FC-BARCELONA-S-M3-Ch" value="<?php if (isset($_POST['FC-BARCELONA-S-M3-Ch']))
                                    echo $_POST['FC-BARCELONA-S-M3-Ch']; ?>" aria-label="FC-BARCELONA-S-M3"
                                    class="form-control">
                            </div>
                        </td>
                        <td> <img src="IMG/FC-BARCELONA.png" alt="logo" width="50px" height="50px"></td>
                    </tr>
                </tbody>
            </table>
            <input type="submit" value="Simulate" name="submit" class="btn btn-outline-primary btn-lg mt-2">
        </form>
        <?php

        /*
        To Simulate result and standing :
        * using post method to get the value from input.
        * calculate point and goals => using functions
        * stor the values in array in specific order for standing table
        * create row for each team with the correct order => sort by points or goals => conditions
        */

        // madrid result
        $madrid = array("name" => "Real madrid", "points" => 0, "match" => 0, "wins" => 0, "draws" => 0, "loses" => 0, "goals" => 0, "goals_in" => 0, "+/-" => 0);
        // barcelona result
        $barcelona = array("name" => "FC barcelona", "points" => 0, "match" => 0, "wins" => 0, "draws" => 0, "loses" => 0, "goals" => 0, "goals_in" => 0, "+/-" => 0);
        // chelsea result
        $chelsea = array("name" => "chelsea FC", "points" => 0, "match" => 0, "wins" => 0, "draws" => 0, "loses" => 0, "goals" => 0, "goals_in" => 0, "+/-" => 0);
        // liverpool result
        $liverpool = array("name" => "Liverpool FC", "points" => 0, "match" => 0, "wins" => 0, "draws" => 0, "loses" => 0, "goals" => 0, "goals_in" => 0, "+/-" => 0);

        function standing($team_1, $team_2, &$array_1, &$array_2)
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
            $match = [$array_1, $array_2];
            return $match;
        }

        if (isset($_POST['submit'])) {
            $body = print_r($_POST, true);
            $matches = array();
            foreach ($_POST as $key => $value) {
                if ($value != null) {
                    $matches["$key"] = $value;
                }
            }
            $matchtags = array();
            $matchscoure = array();
            foreach ($matches as $key => $value) {
                array_push($matchtags, $key);
                array_push($matchscoure, $value);
            }
            $result;
            // for ($i = 0; $i < count($match) - round((count($match) / 2)); $i++) {
            //     $result = standing($match[$i], $match[$i + 1], $madrid, $barcelona);
            // }
            if (isset($result)) {
                usort($result, function ($a, $b) {
                    if ($a['points'] === $b['points']) {
                        if ($a['+/-'] === $b['+/-']) {
                            if ($a['goals'] === $b['goals']) {
                                return 0;
                            }
                            return ($a['goals'] > $b['goals']) ? -1 : 1;
                        }
                        return ($a['+/-'] > $b['+/-']) ? -1 : 1;
                    }
                    return ($a['points'] > $b['points']) ? -1 : 1;
                });
            }
            function buildTable($array)
            {
                echo "<tbody>";
                $count = 0;
                foreach ($array as $key => $value) {
                    $count += 1;
                    echo "<tr><th scope='row'>" . $count . "</th>";
                    foreach ($value as $key => $value) {
                        echo "<td>" . $value . "</td>";
                    }
                    echo "</tr>";
                }
                echo "</tbody>";
            }
        }

        ?>
        <section class="col p-5 text-center">
            <h2 class="mb-5">Standings</h2>
            <table class="table table-info table-striped-columns">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">TEAMS</th>
                        <th scope="col">Pts</th>
                        <th scope="col">MP</th>
                        <th scope="col">W</th>
                        <th scope="col">D</th>
                        <th scope="col">L</th>
                        <th scope="col">GF</th>
                        <th scope="col">GA</th>
                        <th scope="col">+/-</th>
                    </tr>
                </thead>
                <?php
                if (isset($result)) {
                    buildTable($result);
                }
                ?>
            </table>
        </section>
    </main>
</body>