<?php
    require_once __DIR__ . '/functions.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Password Generator</title>
    <!-- Boostrap CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    <main>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-10 mt-5">
                    <h1 class="text-center text-secondary">Strong Password Generator</h1>
                    <h2 class="text-center text-white mb-3">Genera una password sicura</h2>

                    <div class="alert alert-primary d-flex justify-content-center" role="alert">
                        <span class="psw"><?php echo !empty($_GET["length"]) ? random_psw($_GET["length"]) : 'Nessun parametro valido inserito'?></span>
                        <img src="https://media.istockphoto.com/id/1147497160/photo/coffee-cup.jpg?s=612x612&w=0&k=20&c=lom6u9OmXPQOWLsewLkNk35MRolDY8Xl31DVw-VFwP8=" class="<?php echo !empty($_GET["length"]) ? 'd-block' : 'd-none';?>">
                    </div>

                    <form action="index.php" method="GET">
                        <div class="row mb-3">
                            <label for="length" class="col-form-label col-6">Lunghezza password:</label>
                            <div class="col-6">
                                <input type="number" class="form-control w-50" name="length" id="length">
                            </div>
                        </div>
                        <fieldset class="row mb-3">
                            <legend class="col-form-label col-6 pt-0">Consenti ripetizioni di uno o piu' caratteri:</legend>
                            <div class="col-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="repeat" id="repeat1" value="1" checked>
                                    <label class="form-check-label" for="repeat1">
                                    Si
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="repeat" id="repeat2" value="0">
                                    <label class="form-check-label" for="repeat2">
                                    No
                                    </label>
                                </div>
                            </div>
                        </fieldset>
                        <div class="row mb-3">
                            <div class="offset-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="letters" id="letters">
                                    <label class="form-check-label" for="letters">
                                    Lettere
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="numbers" id="numbers">
                                    <label class="form-check-label" for="numbers">
                                    Numeri
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="symbols" id="symbols">
                                    <label class="form-check-label" for="symbols">
                                    Simboli
                                    </label>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Invia</button>
                        <button type="reset" class="btn btn-warning">Reset</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
</body>
</html>