<!-- PHP CODE -->
<?php

// RICEVE I VALORI DEL FORM E LI ASSEGNA A DELLE VARIABILI
$paragraph = $_POST["paragraph"];

$paragraph_length = strlen($paragraph);

$badword = $_POST["badword"];

// var_dump("Lunghezza del paraghrafo $paragraph_length");

// SOSTITUISCE IL VALORE DI $badword CON *** NELLA VARIABILE $paragraph E LO ASSEGNA ALLA VARIABILE $censured_par
$censured_par = str_replace($badword, '***', $paragraph);

// OLD CODE FOR REFERENCE - CREA UN MARKUP BASILARE E STAMPA I VALORI DESIDERATI IN PAGINA
// echo "<h1>Original text:</h1>";
// echo "<p>$paragraph</p>";
// echo "<h4>The submitted text contains $paragraph_length characters.</h4>";
// echo "<h1>Censored text:</h1>";
// echo "<p>$censured_par</p>";

?>

<!-- HTML MARKUP -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>

    <!-- BS5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>

    <div class="container">
        <div class="row">

            <div class="col my-3">

                <!-- STAMPA I VALORI DESIDERATI IN PAGINA -->
                <h1 class="text-center">Original text:</h1>
                <p><?php echo $paragraph ?></p>
                <h6><?php echo "The submitted text contains $paragraph_length characters." ?></h6>

                <h1 class="text-center">Censored text:</h1>
                <p><?php echo $censured_par ?></p>

                <!-- BACK TO FORM BUTTON -->
                <a href="index.php" class="btn btn-success" style="width: fit-content">Back</a>

            </div>

        </div>
    </div>

</body>

<!-- BS 5 -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

</html>