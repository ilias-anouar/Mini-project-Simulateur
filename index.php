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
    <title>Simulator</title>
</head>

<body>
    <main class="row font-monospace w-100">
        h
        <form class="col p-5 text-center" method="get">
            <h2 class="mb-5">Group stage</h2>
            <table class="table table-primary table-striped-columns">
                <tbody>
                    <tr>
                        <td><img src="IMG/REAL-MADRID.png" alt="teamlogo" width="50px" height="60px"></td>
                        <td class="w-50">
                            <div class="input-group">
                                <input type="number" name="REAL-MADRID-S-M1" aria-label="REAL-MADRID-S"
                                    class="form-control">
                                <input type="number" name="FC-BARCELONA-S-M1" aria-label="FC-BARCELONA-S"
                                    class="form-control">
                            </div>
                        </td>
                        <td><img src="IMG/FC-BARCELONA.png" alt="teamlogo" width="50px" height="50px"></td>
                    </tr>
                    <tr>
                        <td><img src="IMG/LIVERPOOL-FC.svg" alt="teamlogo" width="50px" height="60px"></td>
                        <td>
                            <div class="input-group">
                                <input type="number" name="LIVERPOOL-FC-S-M1" aria-label="LIVERPOOL-FC-S-M1"
                                    class="form-control">
                                <input type="number" name="CHELSEA-FC-S-M1" aria-label="CHELSEA-FC-S-M1"
                                    class="form-control">
                            </div>
                        </td>
                        <td> <img src="IMG/CHELSEA-FC.png" alt="teamlogo" width="50px" height="50px"></td>
                    </tr>
                    <tr>
                        <td><img src="IMG/FC-BARCELONA.png" alt="teamlogo" width="50px" height="60px"></td>
                        <td>
                            <div class="input-group">
                                <input type="number" name="FC-BARCELONA-S-M2" aria-label="FC-BARCELONA-S-M2"
                                    class="form-control">
                                <input type="number" name="LIVERPOOL-FC-S-M2" aria-label="LIVERPOOL-FC-S-M2"
                                    class="form-control">
                            </div>
                        </td>
                        <td> <img src="IMG/LIVERPOOL-FC.svg" alt="teamlogo" width="50px" height="50px"></td>
                    </tr>
                    <tr>
                        <td><img src="IMG/REAL-MADRID.png" alt="teamlogo" width="50px" height="60px"></td>
                        <td>
                            <div class="input-group">
                                <input type="number" name="REAL-MADRID-S-M2" aria-label="REAL-MADRID-S-M2"
                                    class="form-control">
                                <input type="number" name="CHELSEA-FC-S-M2" aria-label="CHELSEA-FC-S-M2"
                                    class="form-control">
                            </div>
                        </td>
                        <td> <img src="IMG/CHELSEA-FC.png" alt="teamlogo" width="50px" height="50px"></td>
                    </tr>
                    <tr>
                        <td><img src="IMG/LIVERPOOL-FC.svg" alt="teamlogo" width="50px" height="60px"></td>
                        <td>
                            <div class="input-group">
                                <input type="number" name="LIVERPOOL-FC-S-M3" aria-label="LIVERPOOL-FC-S-M3"
                                    class="form-control">
                                <input type="number" name="REAL-MADRID-S-M3" aria-label="REAL-MADRID-S-M3"
                                    class="form-control">
                            </div>
                        </td>
                        <td> <img src="IMG/REAL-MADRID.png" alt="teamlogo" width="50px" height="50px"></td>
                    </tr>
                    <tr>
                        <td><img src="IMG/CHELSEA-FC.png" alt="teamlogo" width="50px" height="60px"></td>
                        <td>
                            <div class="input-group">
                                <input type="number" name="CHELSEA-FC-S-M3" aria-label="CHELSEA-FC-S-M3"
                                    class="form-control">
                                <input type="number" name="FC-BARCELONA-S-M3" aria-label="FC-BARCELONA-S-M3"
                                    class="form-control">
                            </div>
                        </td>
                        <td> <img src="IMG/FC-BARCELONA.png" alt="teamlogo" width="50px" height="50px"></td>
                    </tr>
                </tbody>
            </table>
            <input type="submit" value="Simulate" class="btn btn-outline-primary btn-lg mt-2">
        </form>
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
                <tbody>
                    <tr>
                        <td scope="row">1</td>
                        <td><img src="IMG/REAL-MADRID.png" alt="teamlogo" width="50px" height="60px"></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td scope="row">2</td>
                        <td><img src="IMG/FC-BARCELONA.png" alt="teamlogo" width="50px" height="50px"></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td scope="row">3</td>
                        <td><img src="IMG/CHELSEA-FC.png" alt="teamlogo" width="50px" height="50px"></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td scope="row">4</td>
                        <td><img src="IMG/LIVERPOOL-FC.svg" alt="teamlogo" width="50px" height="50px"></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </section>
    </main>
</body>