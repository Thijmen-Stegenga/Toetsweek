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

<div class="mb-5 mt-2">

    <div class="d-lg-flex flex-lg-row flex-sm-column justify-content-between">
        <h1>Bekijk  -Meubel-</h1>
       
    </div>

    <div class="content mt-2">
        <div>
            <div>
                <div class="text-center border">
                    <img class="img-fluid p-1" src="https://via.placeholder.com/150"/>

                    <div class="border-bottom">
                        <strong>Naam: naam</strong>
                    </div>
                   
                    <div class="border-bottom">
                        <strong>Prijs: Prijs</strong>
                    </div>
                   
                </div>

                <p>Omschrijving</p>
            </div>
      
        </div>
    </div>
    <hr>
</div>

<?php
    include('footer.html');
?>

</body>
</html>