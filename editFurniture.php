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

<div class="selectmeubel">
            <h2><?php echo $game['name'] ?></h2>
        </div>
        <div class="edit">
            <form id="gameinput" action="" method="POST">
                    <input name="id" type="hidden" id="myFile" value="<?php echo $game['id'] ?>">   
                <div class="selectGame">
                    <label for="iduitleg">selecteer de meubel: </label>
                    <select name="iduitleg">
                    <?php
                        foreach ($spelers as $row) {    ?>
                            <option type="checkbox" value="<?php echo $row['name'] ?>"><?php echo $row['name'] ?></option>
                        
                    <?php } ?>
                    </select>
                </div>


<div class="mb-5 mt-2">
    <h1>Bewerk hier -NaamMeubel-</h1>
    <form>

    </form>
</div>

<?php
    include('footer.html');
?>

</body>
</html>