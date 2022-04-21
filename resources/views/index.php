<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content=<?php $token = csrf_token();
                                    echo $token; ?>>
    <title>KN</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    <script src="../ajax.js"></script>
    <script src="../szakdogaClass.js"></script>
    <script src="../szakdogak.js"></script>
    <script src="../js.js"></script>
</head>

<body>
    <main class="container" style="padding-top: 20px;">
        <header style="text-align:center; font-size: 20px;">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Számalk-Szalézi technikum és Szakgimnázium 2020-2022 évfolyam szoftverfejlesztőinek szakdolgozatai
            </h2>
        </header>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <div class="szakdolgozatoklistazasa">
                            Admin oldal
                            <table class="table table-striped table-responsive">
                                <thead>
                                    <tr class="fejlec">
                                        <th class="szakdogacime">Szakdolgozat címe</th>
                                        <th class="tagok">Készítők neve</th>
                                        <th class="githublink">GitHub link</td>
                                        <th class="oldallink">Szakdolgozat elérhetősége</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody id="adatok"></tbody>
                                <tbody id="adatokSablon">
                                    <tr class="adat">
                                        <td class="szakdogaNev"></td>
                                        <td class="tagok"></td>
                                        <td class="githubLink"></td>
                                        <td class="oldalLink"></td>
                                        <td class="modosit">
                                            <button class="btn btn-light" id="modositadat" type="button" data-toggle="modal" data-target="#exampleModalLong">
                                                <i class='fa fa-check'></i>
                                            </button>
                                        </td>
                                        <td class="torol">
                                            <button class="btn btn-light" id="toroladat" type="button" data-toggle="modal" data-target="#exampleModalCenter">
                                                <i class="fa fa-close"></i>
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="ujadat">
                            <form class="">
                                <div style="display:none"><input type="text" id="id"></div>
                                <div class="form-group sor"><label for="szakdoga_nev">Szakdolgozat címe</label><input class="form-control" type="text" id="szakdoga_nev"></div>
                                <div class="form-group sor"><label for="tagokneve">Készítők neve</label><input class="form-control" type="text" id="tagokneve"></div>
                                <div class="form-group sor"><label for="oldallink">Az oldal elérhetősége </label><input class="form-control" type="text" id="oldallink"></div>
                                <div class="form-group sor"><label for="githublink"> GitHub elérhetőség</label><input class="form-control" type="text" id="githublink"></div>
                                <div class="gomb"><button type="button" class="btn btn-light" id="uj">Új</button>
                                <button type="button" class="btn btn-light" id="adatMentes">Módosít</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>