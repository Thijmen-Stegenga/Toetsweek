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
        <h1>Bekijk hier alle meubels gelinkt aan -CategorieNaam-</h1>
    </div>

    <div class="mt-2">
        <div class="card">
            <img class="card-img-top img-fluid" src="" alt="Card image cap">
            <div class="card-body">
                <h4 class="card-title">Meubel</h4>
                <a href="#" class="btn btn-primary">Meer details</a>
            </div>
        </div>
    </div>

</div>

<?php
    include('footer.html');
?>

</body>
</html>