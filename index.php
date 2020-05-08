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
        <h1>Bekijk hier alle catogorieën</h1><br><br><br><br><br><br>
        <a class="btn-lg btn-primary text-white align-self-center" href="createFurniture.php">Nieuw meubel [+]</a>
    </div>

<div class="row  text-center">
    <div class="meubels1">
        <h1>Meubels</h1>
    <a class="btn-lg btn-primary text-white align-self-center" href="categories.php">Bekijk Meubels </a>
    </div>

    <div class="tafels1 ">
        <h1>Tafels</h1>
    <a class="btn-lg btn-primary text-white align-self-center" href="categories.php">Bekijk Meubels </a>
    </div>

    <div class="bedden1 ">
        <h1>Bedden</h1>
    <a class="btn-lg btn-primary text-white align-self-center" href="categories.php">Bekijk Meubels </a>
    </div>
</div>


    <div class="mt-2 w-75 row mx-auto d-flex justify-content-between">
        <?php foreach($result as $row){?>
            <div class="p-0 card col-lg-3">
                <img class="card-img-top img-fluid" src="images/<?php echo $row['image']?>" alt="card image">
                <div class="card-body">
                    <h3 class="card title"><?php echo $row['$result'] ?></h3>
                    <p class="card-text"><?php echo $row['furniture'] ?></p>
                    <a href="#" class="btn btn-primary">Meer details</a>
                </div>
            </div>
        <?php } ?>
    </div>

<?php
    include('footer.html');
?>

</body>
</html>