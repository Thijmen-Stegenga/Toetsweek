<?php
    include('dbconnect.php');
?>
<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Toets CRUD Blok 3 - IKEA Catalogus</title>
</head>
<body>

<?php
    include('header.html');
?>
<div class='mb-5 mt-2'>
    <h1>Nieuw Meubel</h1>
        <form>
            <p>Naam</p>
            <input type='text' name = '' placeholder="vul naam in">

            <p>Afbeelding</p>
            <input type='text' name = '' placeholder="vul afbeelding in">

            <p>Prijs</p>
            <input type='text' name = '' placeholder="vul prijs in (alleen getallen)">

            <p>Omschrijving</p>
            <input type='text' name = '' >

            <p>Categorie</p>
            <input type='text' name = '' placeholder="Maak een keuze">
        </form>
</div>

    <a class="btn-lg btn-primary text-white align-self-center" href="index.php">Submit!</a>

<?php
    include('footer.html');
?>

</body>
</html>