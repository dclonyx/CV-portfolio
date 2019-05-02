<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <title>Table de multiplication</title>
</head>
<body>
    <header>
        <h1>Table de multiplication</h1>
    </header>
    <form id="cadreListe" action="index.php" method="GET">
        <div id="first">
            <select id="table" name="table" size="1">
                <option value="1" selected>Table de 1</option>
                <option value="2">Table de 2</option>
                <option value="3">Table de 3</option>
                <option value="4">Table de 4</option>
                <option value="5">Table de 5</option>
                <option value="6">Table de 6</option>
                <option value="7">Table de 7</option>
                <option value="8">Table de 8</option>
                <option value="9">Table de 9</option>
                <option value="10">Table de 10</option>
            </select>
        </div>
        <div id="result"></div>
    </form>
    <script src="./script.js"></script>
</body>