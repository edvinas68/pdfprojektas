<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dokumentu generatorius</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <form action="generate.php" method="POST">
        <h1>Sugeneruokite dokumenta</h1>
        <p>Uzpildykite visus teksto langelius</p>
        <div class="form-group row">
            <div class="col-lg-6">
                <input type="text" name="fname" class="form-control" placeholder="Vardas">
            </div>
            <div class="col-lg-6">
                <input type="text" name="lname" class="form-control" placeholder="Pavarde" required>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-lg-6">
                <input type="email" name="email" class="form-control" placeholder="El.Pastas" required>
            </div>
            <div class="col-lg-6">
                <input type="tel" name="phone" class="form-control" placeholder="Tel.Nr." required>
            </div>
        </div>
        <div class="form-group">
            <textarea name="enquiry" cols="30" rows="10" class="form-control" placeholder="Jusu tekstas" required></textarea>
        </div>
        <button type="submit" class="btn btn-block btn-success">Generuoti PDF faila</button>

    </form>
</div>


</body>
</html>
